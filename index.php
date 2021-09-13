<?php get_header('single');?>
<!-- end navbar -->
<!-- end page-header -->
<section class="content-section  single-section">
  <div class="container">
    <div class="row">
	    <div class="col-lg-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			if(have_posts()) :
			while(have_posts()):
			the_post();?>
		    <div class="blog-box">
				<figure id="archive_img">
					<?php if ( has_post_thumbnail() ) { 
						the_post_thumbnail(  ); 
					}?>
				</figure>
				<div class="content"> <small><?php the_date(); ?></small>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<div class="author"> 
					<?php $author_id = get_the_author_meta('ID'); ?>
						<?php echo get_avatar($author_id);?>
						<span><?php _e('by','quanca');?> <b><?php echo get_the_author_meta('display_name');?></b></span>
					</div>
				<!-- end author --> 
				</div>
			<!-- end content -->
        	</div>
        <?php endwhile;?>
        <?php endif;?>
			
			<!-- end blog-box --> 
			<ul class="pagination">
				<?php
					if($link = get_previous_posts_link()) :?>
						<li class="page-item page-link"><?php previous_posts_link( 'Previous' ); ?></li>
				<?php endif ?>
				<?php
					if($link = get_next_posts_link()) :?>
						<li class="page-item page-link"><?php next_posts_link( 'Next' ); ?></li>
				<?php endif ?>
			</ul>
        <!-- end pagination --> 
		</div>
		<!-- end col-8 -->
		<div class="col-lg-4">
			<aside class="sidebar">
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
							<?php dynamic_sidebar('sidebar-1'); ?>
					<?php } ?>
					
				<?php  ?>
			</aside>
			<!-- end sidebar -->
		</div>
		<!-- end col-4 -->
	  </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<?php get_footer();?>