<?php /* Template Name: Contact Page Template */ ?>
<?php get_header();?>

<!-- end page-header-->
<?php 
    $current_post_id = get_the_ID();;
    $my_page = get_post_meta( $current_post_id,'my_page_options', true);
    $my_get_page_bg = $my_page['opt-pag-bg'];
    $page_banner_image = get_template_directory_uri() . '/assets/images/page-header01.jpg';
    if($my_get_page_bg){
        $page_banner_image = wp_get_attachment_image_src( $my_get_page_bg, 'full' );}

?>    
<header class="page-header" data-background="<?php echo esc_url( $my_get_page_bg); ?>">
	 <div class="container">
	<h2><?php the_title();?></h2>
		 <p><?php the_content();?></p>
	</div>
	<!-- end container -->
</header>
<section class="content-section left-white-spacing" data-background="#fafafa">
	<div class="container">
    <div class="row align-items-center ">
      <div class="col-lg-6 contact_edit">
         <div class="section-title text-left">
		  <h2 id="contact_title"><?php echo get_theme_mod('contact_title');?></h2>
			<p id="contact_desc"><?php echo get_theme_mod('contact_desc');?></p>
		  </div>
		  <!-- end section-title -->
		  <ul class="contact-box">
		  <?php 
		  $contact_ways = get_theme_mod('contact_repeater');
		   if($contact_ways):
			foreach($contact_ways as $contact_way):
		  ?>
		  <li>
		  	<h6><?php echo esc_html($contact_way['contact_name'])?><?php _e(":","qunca")?></h6><span><?php echo esc_html($contact_way['contact_desc'])?></span>
		  </li>
		<?php endforeach; endif; ?>
		  </ul>
      </div>
      <!-- end col-6 -->
		<div class="col-lg-6">
         <div class="contact-form">
			<form>
			<?php echo do_shortcode('[contact-form-7 id="212" title="Contact form 1"]');?>
			 </form>
			</div>
			<!-- end contact-form -->
		</div>
      <!-- end col-6 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<div class="google-maps">
	<iframe src="<?php echo get_theme_mod('map_link'); ?>" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<?php if(get_theme_mod('contact_time_setting', true ) == true): ?>
	<ul class="timetable">
	<?php
	
		$time_days = get_theme_mod('time_repeater');
		
		if($time_days):
			foreach( $time_days as $time_day):
	?>
			<li><span><?php echo strtoupper($time_day['contact_day']);?></span><b><?php echo strtoupper($time_day['contact_from']);?> <?php _e('-','quanca');?> <?php echo strtoupper($time_day['contact_to']);?></b></li>
		<?php endforeach;endif; ?>
			</ul>
	<?php endif;?>
</div>
	<!-- end google-maps -->
	<?php get_footer();?>