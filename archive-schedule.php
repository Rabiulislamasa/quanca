<?php ?>
<?php get_header();?>
<header class="page-header" id="schedule_header" style="background:<?php echo get_theme_mod('schedule_background_setting');?>">
	<span class=" m-5 schedule-page-header"></span>
	<?php if( get_theme_mod('schedule_des_setting') == true): ?>
	  <div class="container">
      <h2 id="schedule_title"><?php echo esc_html(get_theme_mod('schedule_page_title'));?></h2>
      <p id="schedule_desc"><?php echo esc_html(get_theme_mod('schedule_page_desc'));?></p>
    </div>
	<?php endif;?>
	<!-- end container -->
</header>
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="tab-wrapper">

        <ul class="tab-nav">
          <li class="active"><a href="#tab01"><?php _e('MONDAY', 'quanca') ?></a></li>
          <li><a href="#tab02"><?php _e('TUESDAY', 'quanca') ?></a></li>
          <li><a href="#tab03"><?php _e('WEDNESDAY', 'quanca') ?></a></li>
          <li><a href="#tab04"><?php _e('THURSDAY', 'quanca') ?></a></li>
          <li><a href="#tab05"><?php _e('FRIDAY', 'quanca') ?></a></li>
          <li><a href="#tab06"><?php _e('SATURDAY', 'quanca') ?></a></li>
          <li><a href="#tab07"><?php _e('SUNDAY', 'quanca') ?></a></li>
        </ul>
    
        <div id="tab01" class="tab-item active-item">
          <div class="tab-inner">
          <?php
           $monday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"monday"',
            'meta_compare'=> 'LIKE',
            );
            $monday_post = new WP_Query($monday_arg);
          ?>
            <ul>
            <?php 
            if($monday_post->have_posts()) :
			        while($monday_post->have_posts()):
				        $monday_post->the_post();
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
          <figure id="monday"><img src="<?php echo get_theme_mod('schedule_monday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
        
        <div id="tab02" class="tab-item">
          <div class="tab-inner">
          <?php
           $tuesday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"tuesday"',
            'meta_compare'=> 'LIKE',
            );
            $tuesday_post = new WP_Query($tuesday_arg);
          ?>
            <ul>
            <?php 
            if($tuesday_post->have_posts()) :
			        while($tuesday_post->have_posts()):
				        $tuesday_post->the_post();  
               
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
          <figure id="tuesday"><img src="<?php echo get_theme_mod('schedule_tuesday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
        <div id="tab03" class="tab-item ">
          <div class="tab-inner">
          <?php
           $wednesday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"wednesday"',
            'meta_compare'=> 'LIKE',
            );
            $wednesday_post = new WP_Query($wednesday_arg);
          ?>
            <ul>
            <?php 
            if($wednesday_post->have_posts()) :
			        while($wednesday_post->have_posts()):
				        $wednesday_post->the_post(); 
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
          <figure id="wednesday"><img src="<?php echo get_theme_mod('schedule_wednesday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
        
        <div id="tab04" class="tab-item ">
          <div class="tab-inner">
          <?php
           $thursday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"thursday"',
            'meta_compare'=> 'LIKE',
            );
            $thursday_post = new WP_Query($thursday_arg);
          ?>
            <ul>
            <?php 
            if($thursday_post->have_posts()) :
			        while($thursday_post->have_posts()):
				        $thursday_post->the_post();
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
          <figure  id="thursday"><img src="<?php echo get_theme_mod('schedule_thursday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
        
        <div id="tab05" class="tab-item ">
          <div class="tab-inner">
          <?php
           $friday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"friday"',
            'meta_compare'=> 'LIKE',
            );
            $friday_post = new WP_Query($friday_arg);
          ?>
            <ul>
            <?php 
            if($friday_post->have_posts()) :
			        while($friday_post->have_posts()):
				        $friday_post->the_post(); 
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
          <figure id="friday"><img src="<?php echo get_theme_mod('schedule_friday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
        
        <div id="tab06" class="tab-item ">
          <div class="tab-inner">
          <?php
           $saturday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"saturday"',
            'meta_compare'=> 'LIKE',
            );
            $saturday_post = new WP_Query($saturday_arg);
          ?>
            <ul>
            <?php 
            if($saturday_post->have_posts()) :
			        while($saturday_post->have_posts()):
				        $saturday_post->the_post();
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
          <figure id="saturday"><img src="<?php echo get_theme_mod('schedule_saturday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
        <div id="tab07" class="tab-item ">
          <div class="tab-inner">
          <?php
           $sunday_arg = array(
            'post_type' => 'schedule',
            'posts_per_page'=> -1,
            'meta_key'=> 'my_schedule_options',
            'meta_value'=> ':"sunday"',
            'meta_compare'=> 'LIKE',
            );
            $sunday_post = new WP_Query($sunday_arg);
          ?>
            <ul>
            <?php 
            if($sunday_post->have_posts()) :
			        while($sunday_post->have_posts()):
				        $sunday_post->the_post();  
            ?>
              <?php get_template_part('template-parts/schedule/schedule-temp');?>
              <?php wp_reset_postdata(); endwhile;endif;?>
          </ul>
            <figure id="sunday"><img src="<?php echo get_theme_mod('schedule_sunday_img');?>" alt="Image"></figure>
          </div>
          <!-- end tab-inner --> 
        </div>
        
      </div>
      <!-- end tab-wrapper --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php get_footer();?>