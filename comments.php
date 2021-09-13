<?php if ( post_password_required() ) {
	return;
}
?>
<div class="be-comment-block ">
	<h1 class="comments-title"><?php printf('Comments (%s)',get_comments_number()) ?></h1>
	<?php
		//Get only the approved comments
	$args = array(
		'status' => 'approve',
		'post_id' => get_the_ID()
	);
	
	// The comment Query
	$comments_query = new WP_Comment_Query;
	$comments = $comments_query->query( $args );
	
	// Comment Loop
	if ( $comments ) {
	foreach ( $comments as $comment ) {?>
		<div class="be-comment">
			<div class="be-img-comment">	
				<a href="<?php comment_author_url($comment) ?>">
					<?php echo get_avatar($comment, 60, null, null, array('class'=>'be-ava-comment',))?>
				</a>
			</div>
			<div class="be-comment-content">
				<span class="be-comment-name">
					<a href="<?php comment_author_url($comment) ?>"> <?php comment_author($comment)?></a>
				</span>
				<span class="be-comment-time">
					<?php
						$coment_date = get_comment_date();
						$comment_time = comment_time();
					printf('%s,%s',$comment_time,$coment_date);?>
				</span>
				
				<span class="be-comment-text col-12">
					<?php comment_text($comment);?> 
				</span>
			</div>
		</div>
	<?php
	}
	}
	 
	?>
	
	<form class="form-block">
			<?php
				$comments_args = array(
					// redefine your own textarea (the comment body)
					
					'label_submit'         => esc_html__( 'Submit', 'quanca' ),
					'class_submit'         => 'btn submit-button col-12 ',
					'title_reply'          => esc_html__( 'ADD COMMENT', 'quanca' ),
					'title_reply_before'   => '<h3 class="mt-4">',
					'title_reply_after'    => '</h3>',
					'cancel_reply_before'  => '',
					'cancel_reply_after'   => '',
					'cancel_reply_link'    => '',
					
					'comment_notes_before' => '',
					
					'fields' => apply_filters( 'comment_form_default_fields', array(
								
						'name'  => '<div class="col-12">
								<div class="form-group fl_icon">
									<div class="icon"><img src="https://img.icons8.com/material-outlined/24/000000/user.png"/></div>
									<input class="form-input" type="text" placeholder="Your name">
								</div>
							</div>',
							
						'email'    => '<div class="col-12 fl_icon">
								<div class="form-group fl_icon">
									<div class="icon"><img src="https://img.icons8.com/material-outlined/24/000000/email.png"/></div>
									<input class="form-input" type="text" placeholder="Your email">
								</div>
							</div>',
						)
					),
					'comment_field' => '<div class="col-12">									
							<div class="form-group">
								<textarea class="form-input" required="" placeholder="Your text"></textarea>
							</div>
						</div>',
					);
				comment_form($comments_args); 
			?>
	</form>
</div>