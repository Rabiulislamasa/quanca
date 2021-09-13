<?php /* Template Name: About Page Template */ ?>

<?php get_header();?>
<?php 
    $current_post_id = get_the_ID();;
    $my_page = get_post_meta( $current_post_id,'my_page_options', true);
    $my_get_page_bg = $my_page['opt-pag-bg'];
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
<?php if(get_theme_mod('about_desc_stting', true ) == true): ?>
<section class="content-section">
  <div class="container">
    <div class="row align-items-center no-gutters about_descr">
      <div class="col-12">
        <div class="section-title wow fade animated" style="visibility: visible;">
          <?php if(has_site_icon()):?>
            <figure><img src="<?php echo esc_url(site_icon_url());?>" alt="Image"></figure>
          <?php endif;?>
          <h6 id="aboutdessmalltitle"><?php echo get_theme_mod('about_des_small_title') ?></h6>
          <h2 id="about_des_big_title">
            <?php echo get_theme_mod('about_des_big_title') ?>
          </h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-lg-6">
        <div class="side-content left">
        <p id="aboutdes">
          <?php echo get_theme_mod('about_des') ?>
        </p>
          
         
        </div>
        <!-- end side-content --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
        <figure class="side-image full-right wow reveal-effect"> 
          <img src="<?php echo esc_url(get_theme_mod('about_img')) ?>" alt="Image" id="about_img"> 
          </figure>
        <!-- end side-image --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endif; ?>
<!-- end content-section -->
<?php if(get_theme_mod('about_workhistory_stting', true ) == true): ?>
<section class="content-section no-top-spacing">
  <div class="container work_his">
    <div class="row justify-content-center ">
      <?php
      $settings = get_theme_mod( 'my_work_repeater'); 

      ?>

    <?php if($settings):?>
    <?php foreach($settings as $setting): 
      
      if ( ! wp_attachment_is_image( $setting['work_icon'] ) ){

      $img_url = esc_url_raw($setting['work_icon']);

      } else {

      $img_url = wp_get_attachment_url($setting['work_icon']);
      }
  ?>
      <div class="col-lg-4 col-md-6" >
        <div class="counter-box wow fade">

          <figure>
          <img src="<?php  echo esc_url($img_url) ?>" alt="Image">
          
          </figure>
          <span class="odometer" data-count="<?php  echo esc_attr($setting['work_number']); ?>" data-status="yes">0</span>
          <h6><?php echo esc_html($setting['work_title']); ?></h6>
        </div>
        <!-- end counter-box --> 
      </div>
    <?php endforeach;?>
    <?php endif;?>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endif; ?>
<!-- end content-section -->
<?php if(get_theme_mod('about_training_desc_stting', true ) == true): ?>
<section class="content-section" data-background="#fafafa">
  <div class="container">
    <div class="row">
      <div class="col-12 training_desc">
        <div class="section-title wow fade">
        <?php if(has_site_icon()):?>
            <figure><img src="<?php echo esc_url(site_icon_url());?>" alt="Image"></figure>
          <?php endif;?>
          <h6 id="about_training_small_title">
            <?php echo get_theme_mod('about_training_small_title')?>
          </h6>
          <h2 id="about_training_big_title">
            <?php echo get_theme_mod('about_training_big_title')?>
          </h2>
          
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <?php
     
      $tre_settings = get_theme_mod( 'my_work_his_repeater'); 

      ?>

    <?php if($tre_settings):?>
      <?php foreach($tre_settings as $tre_setting):
        if ( ! wp_attachment_is_image( $tre_setting['training_img'] ) ){

          $tre_img_url = esc_url_raw($tre_setting['training_img']);
    
          } else {
    
            $tre_img_url = wp_get_attachment_url($tre_setting['training_img']);
          }
        ?>
      <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <div class="wow reveal-effect"><img src="<?php  echo esc_url($tre_img_url) ?>" alt="Image"></div>
          <figcaption>
            <h6><?php  echo esc_html($tre_setting['trainig_title']); ?></h6>
            <p><?php  echo esc_html($tre_setting['training_dec']);?></p>
            <a href="<?php echo esc_url($tre_setting['training_link']); ?>"><?php _e('LEARN MORE','quanca') ;?></a></figcaption>
        </div>
        <!-- end service-box --> 
      </div>
      <?php endforeach;?>
    <?php endif;?>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endif; ?> <!-- end content-section -->


<?php if(get_theme_mod('about_qu_desc_stting', true ) == true): ?>
<section class="content-section">
  <div class="container about_qu_ans">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="section-title text-left">
          <h2 id="about_qu_stting"><?php echo get_theme_mod('about_qu_stting')?></h2>
          <p id="about_ans_stting"> 
            <?php echo get_theme_mod('about_ans_stting')?>
           </p>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-5 offset-lg-1">
        <div class="text-box">
          <h5 id="about_sr_title_stting"><?php echo get_theme_mod('about_sr_title_stting')?></h5>
          <p id="about_sr_sb_title_stting"><?php echo get_theme_mod('about_sr_sb_title_stting')?> </p>
        </div>
        <!-- end text-box -->
        <ul class="custom-list">
          <?php
            $service_lists = get_theme_mod('my_service_repeater');
            if($service_lists):
              foreach($service_lists as $service_list):
          ?>
          <li><?php  echo esc_html($service_list['ser_title']);?></li>
          <?php endforeach;?>
          <?php endif;?>
        </ul>
      </div>
      <!-- end col-5 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

<?php endif;?>
<!-- end content-section -->

<?php if(get_theme_mod('about_vid_desc_stting', true ) == true): 
  $video = get_theme_mod('about_vid_stting')?>
<section class="content-section no-top-spacing left-white-spacing" data-background="#f42828">
  <div class="container about_vid">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="video wow reveal-effect">
          <video width="100%" height="500px" controls>
            <source src="<?php  echo esc_url($video) ?>" type="video/mp4"><a href="<?php  echo esc_url($video)?>" data-fancybox class="play-btn"><i class="lni lni-play"></i></a> 
          </video>
        </div>
        <!-- end video --> 
      </div>
      <!-- end col-5 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endif;?>
<!-- end content-section -->
<?php if(get_theme_mod('team_stting', true ) == true): ?>
<section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 team_member">
        <div class="section-title wow fade">
          <?php if(has_site_icon()):?>
            <figure><img src="<?php echo esc_url(site_icon_url());?>" alt="Image"></figure>
          <?php endif;?>
          <h6 id="team_sr_title_stting"><?php echo get_theme_mod('team_sr_title_stting') ?></h6>
          <h2 id="team_title_stting"><?php echo get_theme_mod('team_title_stting') ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <?php 
        $member_details = get_theme_mod('team_repeater');
        if($member_details):
          foreach( $member_details as $member_detail):
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="member-box wow reveal-effect">
          <figure> <img src="<?php echo wp_get_attachment_url($member_detail['member_image'])?>" alt="Image">
            <figcaption>
              <h6><?php  echo esc_html($member_detail['member_name'])?></h6>
              <small><?php  echo esc_html($member_detail['member_position'])?></small>
              <p><?php  echo esc_html($member_detail['member_description'])?></p>
              <ul>
                <li><a href="<?php  echo esc_url($member_detail['fb_link'])?>"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="<?php  echo esc_url($member_detail['twitter_link'])?>"><i class="lni lni-twitter-original"></i></a></li>
                <li><a href="<?php  echo esc_url($member_detail['instagram_link'])?>"><i class="lni lni-instagram"></i></a></li>
              </ul>
            </figcaption>
          </figure>
        </div>
        <!-- end member-box --> 
      </div>
      <?php 
        endforeach;
      endif;
      ?>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endif;?>
<!-- end content-section -->



<?php if(get_theme_mod('about_smbanner_desc_stting', true ) == true): ?>
  <?php $image = get_theme_mod( 'about_banner_img'); ?>
<section class="content-section" id="about_sec_bg" style="background-image: url('<?php echo esc_url( $image ); ?>')">
  <div class="container"  >
    <div class="row">
      <div class="col-12 text-center banner-cust">
        <div class="cta-box wow fade"  id="about_div_bg" >
          <h2 id="about_banner_title"><?php echo get_theme_mod('about_banner_title')?></h2>
          <p id="about_banner_des"><?php echo get_theme_mod('about_banner_des')?></p>
          <a href="<?php echo get_theme_mod('about_btn_link');?>" class="custom-button" id="about_btn_title"><?php echo get_theme_mod('about_btn_title') ?></a> </div>
      
        <!-- end cta-box --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endif;?>



<!-- end content-section -->
<section class="content-section no-bottom-spacing" id="padding">
  <div class="container" id="padding">
    <div class="row" id="padding">
      <div class="col-12" id="padding">
        <div class="slider" id="padding">
          <div class="main-slider" id="padding">
            <div class="swiper-wrapper" id="padding">
            <?php 
              $testimonial_args = array( 'post_type' => 'testimonial', 'posts_per_page' => 5 );
              $testimonials = new WP_Query( $testimonial_args ); 
              if($testimonials->have_posts()) :
                while($testimonials->have_posts()):
                  $testimonials->the_post();
                  $my_testimonial = get_post_meta( $post->ID,'my_testimonial_options', true);
                  $testimonial_bg = $my_testimonial['test-img'];
                  $testimonial_img = wp_get_attachment_url($testimonial_bg,'full');
                  $testimonial_name = $my_testimonial['test-name'];
                  $testimonial_desc = $my_testimonial['test-desc'];
                  $testimonial_rating = $my_testimonial['test-rating'];
                  
              ?>
              <div class="swiper-slide" id="test-background padding">
                <div class="testimonial wow fade" id="padding">
                  <blockquote>“<?php echo esc_html($testimonial_desc) ?>”</blockquote>
                  <!-- <p><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></p>
                   -->
                    <?php
                  $testimonial_rating = $my_testimonial['test-rating'];
                      if( $testimonial_rating == 5 ):?>
                      <p><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></p>
                    <?php elseif( $testimonial_rating == 4 ):?>
                      <p><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></p>
                    
                    <?php elseif( $testimonial_rating == 3 ):?>
                      <p><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></p>
                    
                    <?php elseif( $testimonial_rating == 2 ):?>
                      <p><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></p>
                    
                    <?php elseif( $testimonial_rating == 1 ):?>
                      <p><i class="lni lni-star-filled"></i></p>
                    
                    <?php endif; ?>
                   
                   <h6><?php echo esc_html($testimonial_name); ?></h6>
                   
                   <h6><?php echo $testimonial_img; ?></h6>
                  <figure> <img src="<?php echo $testimonial_bg ?>" id="test_image"> </figure>
                </div>

                </div>
                <?php endwhile;?>
            <?php wp_reset_postdata(); ?>
            <?php endif;?>
              </div>
        <!-- end testimonial --> 
            <!-- end swiper-wrapper -->
              <div class="button-prev"><i class="lni lni-chevron-left"></i></div>
              <!-- end button-prev -->
              <div class="button-next"><i class="lni lni-chevron-right"></i></div>
              <!-- end button-next -->
              <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<?php get_footer();?>