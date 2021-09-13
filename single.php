<?php get_header('single');?>
<!-- end navbar -->
<?php //get_template_part('template-parts/breadcrumbdsgn');?>
<!-- end page-header -->
<section class="content-section single-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php while(have_posts()):the_post();?>
				<div class="blog-box">
					<figure class="single-img">
						<?php if ( has_post_thumbnail() ) { 
							the_post_thumbnail( '' ); 
						}?>
					</figure>
					<div class="content"> <small><?php the_date(); ?></small>
						<h3><a href="blog-single.html"><?php the_title();?></a></h3>
						<div class="author"> 
							<?php $author_id = get_the_author_meta('ID'); ?>
							<?php echo get_avatar($author_id);?>
							<span><?php _e('by','quanca');?> <b><?php echo get_the_author_meta('display_name');?></b></span>
						</div>
					<!-- end author --> 
					<?php the_content(); ?>
					</div>
				<!-- end content -->
				</div>
				<?php endwhile;?>
				<?php if ( comments_open() || get_comments_number()) :
						comments_template();
					endif; ?>
			</div>
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