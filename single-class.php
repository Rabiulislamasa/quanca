<?php get_header('single');?>
<!-- end navbar -->
<?php get_template_part('template-parts/breadcrumbdsgn');?>
<!-- end page-header -->
<section class="content-section  single-section">
  <div class="container">
    <div class="row">
		<?php
		if(have_posts()) :
		 while(have_posts()):
			the_post();
		?>
      <div class="col-lg-5">
        <div class="text-box">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content();?></p>
          
        </div>
        <!-- end text-box --> 
      </div>
      <!-- end col-5 -->
      <div class="col-lg-6 offset-lg-1">
        <?php 
        $current_post_id = $post->ID;
        $my_post = get_post_meta( $current_post_id,'my_post_options', true);
        $myposts = $my_post['opt-group-1'];

        foreach($myposts as $mypost):
          $get_title = $mypost['opt-text'];
          $get_des = $mypost['opt-text2'];
        ?>
        <div class="text-box">
			
          <h5><?php echo esc_html(($get_title));?></h5>
          <p><?php echo esc_html(($get_des));?></p>
        </div>
        <?php endforeach;?>
        <!-- end text-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-12">
        <figure class="image no-spacing wow reveal-effect" >
          <?php if ( has_post_thumbnail() ) { 
                the_post_thumbnail(); 
              }?>
			</figure>
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="text-box">
          
        </div>
        <!-- end text-box --> 
      </div>
        <?php endwhile;?>
        <?php endif;?>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php 
        $current_post_id = $post->ID;
        $my_post = get_post_meta( $current_post_id,'my_post_options', true);
        $my_second_posts = $my_post['opt-group-2'];
      if($my_second_posts):
        foreach($my_second_posts as $my_second_post):
          $get_second_title = $my_second_post['opt-text3'];
          $get_second_des = $my_second_post['opt-text4'];
          $second_img = $my_second_post['opt-upload-1'];
        ?>
<section class="content-section spacing" data-background="#f42828">
  <div class="container">
    <div class="row align-items-center no-gutters">
      <?php
      if($second_img):
        if($get_second_des or $get_second_title):?>
          <div class="col-lg-6">
            <figure class="side-image full-left wow reveal-effect"> 
              <img src="<?php echo esc_url($second_img);?>" alt="Image"> </figure>
            </figure>
            <!-- end side-image --> 
          </div>
      <?php else:?>
        <div class="col-12">
          <figure class=" wow reveal-effect"> 
            <img src="<?php echo esc_url($second_img);?>" alt="Image"> </figure>
          </figure>
          <!-- end side-image --> 
        </div>
      <?php endif; 
        endif;?>
      <!-- end col-6 -->
      
      <?php
      if($get_second_des or $get_second_title):
        if($second_img): 
          ?>
        <div class="col-lg-6">
          <div class="side-content light right wow fade">
            <h3 class="my-4"><?php echo esc_html(($get_second_title)); ?></h3>
            <p class="mt-4"><?php echo esc_html(($get_second_des)); ?></p>
          </div>
        </div>
        <?php else:?>
        <div class="col-12">
          <div class=" white-color light wow fade">
            <h3 class="my-4"><?php echo esc_html(($get_second_title)); ?></h3>
            <p class="mt-4"><?php echo esc_html(($get_second_des)); ?></p>
          </div>
        </div>
      <!-- end col-6 --> 
        <?php endif;?>
      <?php endif;?>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php endforeach; ?>
<?php endif; ?>
<?php get_footer();?>