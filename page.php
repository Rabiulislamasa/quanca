
<?php get_header();?>
<!-- end navbar -->
<?php 
    $current_post_id = get_the_ID();;
    $my_page = get_post_meta( $current_post_id,'my_page_options', true);
    if($my_page){$my_get_page_bg = $my_page['opt-pag-bg'];}
    
	$page_banner_image = get_template_directory_uri() . '/assets/images/page-header01.jpg';
    if($my_get_page_bg){
        $page_banner_image = wp_get_attachment_image_src( $my_get_page_bg, 'full' );}
?>
<header class="page-header" style="background-image: url(<?php echo esc_url( $my_get_page_bg); ?>);">
	<div class="container">
	    <h2><?php the_title();?></h2>
		<p><?php the_content();?></p>
	</div>
	<!-- end container -->
</header>

<!-- end page-header -->
<section class="content-section">
  <div class="container">
    <div class="row">
	    <div class="col-lg-8">
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