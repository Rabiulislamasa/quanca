
<?php get_header();?>
<!-- end navbar -->
<header class="page-header" id="class_header" style="background:<?php echo get_theme_mod('class_background_setting');?>">
	<span class=" m-5 class-page-header"></span>
	<?php if( get_theme_mod('class_des_setting') == true ): ?>
		<div class="container">
			<h2 id="class_title"><?php echo esc_html(get_theme_mod('class_page_title'));?></h2>
			<p id="class_desc"><?php echo esc_html( get_theme_mod('class_page_desc'));?></p>
		</div>
	<?php endif;?>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="content-section">
	<div class="container">
		<ul class="all-classes">
		<?php 
			$args = array( 'post_type' => 'class', 'posts_per_page' => 6 );
			$the_query = new WP_Query( $args ); 
		?>
		<?php
			if($the_query->have_posts()) :
			while($the_query->have_posts()):
				$the_query->the_post();?>
			<li>
				<div class="class-box">
					<figure class="wow reveal-effect">
					<a href="<?php the_permalink(); ?>" id="class-thumbnail">
					<?php if ( has_post_thumbnail() ) { 
							the_post_thumbnail( ); 
						}?>
					</a>
					</figure>
					<h6><?php the_title(); ?></h6>
					<small><?php the_excerpt(); ?></small>
				</div>
			</li>
        <?php endwhile;?>
		<?php wp_reset_postdata(); ?>
        <?php endif;?>
		</ul>
	</div>
<!-- end container --> 
</section>
<?php get_footer();?>