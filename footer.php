<!-- end content-section --> 
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4">
				<?php if ( true == get_theme_mod( 'footer_logo_stting', true ) ) : ?>
					<div class="logo" id="footer_logo">
					<a href="<?php echo esc_url(home_url());?>">
						<?php if( has_custom_logo()){
						echo get_custom_logo();
						}else{ echo bloginfo('name');} ?>
					</a>
					</div>
					<!-- end logo -->
					<?php endif;?>
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php endif; ?>
				<!-- end footer-info -->
				<?php if ( true == get_theme_mod( 'footer_social_stting', true ) ) : ?>
					<ul class="footer-social">
						<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
							<?php dynamic_sidebar( 'footer-2' ); ?>
						<?php endif; ?>
					</ul>
				<?php endif;?>
		</div>
      <!-- end col-3 --> 
		<div class="col-lg-4">
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php endif; ?>
		</div>
      <!-- end col-4 --> 
			<div class="col-lg-2 offset-xl-1 col-sm-6">
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<?php dynamic_sidebar( 'footer-4' ); ?>
					<?php endif; ?>
		</div>
      <!-- end col-2 -->
			<div class="col-lg-2 col-sm-6">
			<?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
						<?php dynamic_sidebar( 'footer-5' ); ?>
					<?php endif; ?>
		</div>
      <!-- end col-2 -->
			<div class="col-12">
				<p class="copyright"><?php _e('© 2021 Quanca | ','quanca') ?>
					<a class="author_name" href="<?php
					$my_theme = wp_get_theme();
						echo esc_url( $my_theme->get( 'AuthorURI' ) );
						?> " > 
						<?php
						$my_theme = wp_get_theme();
						echo esc_html( $my_theme->get( 'Author' ) );
						?>
					</a>
				</p>
			</div>
			<!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
  <?php wp_footer();?>
	</footer>
	<!-- end footer -->

</body>
</html>