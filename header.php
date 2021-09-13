<!doctype html>
<html <?php language_attributes();?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#f42828"/>
<title><?php wp_title();?></title>
<meta name="author" content="Themezinho">
<meta name="description" content="Gym & Sports website for all kind of physical activities">
<meta name="keywords" content="gym, sport, trainer, personal, couch, fullbody, training, program, diet, body, building, healty, life, style, bench, press">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Quanca | Premium Gym Club">
<meta property="og:image" content="http://www.themezinho.net/quanca/preview.png">
<meta property="og:site_name" content="Quanca">
<meta property="og:title" content="Quanca">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/quanca">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Quanca">
<meta name="twitter:creator" content="@Quanca">
<meta name="twitter:title" content="Quanca">
<meta name="twitter:description" content="Quanca | Premium Gym Club">
<meta name="twitter:image" content="http://www.themezinho.net/quanca/preview.png">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">
<?php wp_head();?>
</head>
<body <?php body_class();?> >
    <div class="preloader">  
          <?php if(get_theme_mod('loder_logo')):?>
            <figure><img src="<?php echo esc_url(get_theme_mod('loder_logo'));?>" alt="Image"></figure>
          <?php else : echo bloginfo('name');
         endif;?>
		</div>
<!-- end preloader -->
<div class="page-transition"></div>
<!-- end page-transition -->	
<aside class="side-widget">
  <div class="inner">
    <div class="logo" > 
      <a href="<?php echo esc_url(home_url());?>">
        <?php if( has_custom_logo()){
          echo get_custom_logo();
        }else{ echo bloginfo('name');} ?>
      </a>
    </div>
    <!-- end logo -->
    <div class="hide-mobile">
      <p  class="sidebar_cont" id="head_words"><?php echo get_theme_mod('head_words');?></p>
      <figure class="gallery">
      <?php 
      $side_imgs = get_theme_mod('header_sidebar_img');
      if($side_imgs):
        foreach($side_imgs as $side_img):?>
        <a href="<?php echo wp_get_attachment_url($side_img['side_img']);?>" data-fancybox>
          <img class="sidebar_img" src="<?php echo wp_get_attachment_url($side_img['side_img']); ?>" alt="Image">
        </a>
      <?php endforeach;endif;?>
      </figure>
      <h6 class="widget-title"><?php _e('CONTACT INFO','quanca') ?></h6>
      <address class="address">
      <p><span id="head_phn"><?php echo get_theme_mod('head_phn') ?></span><br>
      <a href="#" id="head_mail"><?php echo get_theme_mod('head_mail'); ?></a></p>
      </address>
      <h6 class="widget-title"><?php _e('FOLLOW US','quanca') ?></h6>
      <ul class="social-media">
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php endif; ?>
      </ul>
    </div>
    <!-- end hide-mobile -->
    <div class="show-mobile">
      <div class="site-menu">
        <?php
          wp_nav_menu(array(
            'theme_location'=> 'primary',
            'container' => 'ul',
          ));
        ?>
      </div>
      <!-- end site-menu --> 
    </div>
    <!-- end show-mobile --> 
    <small> <?php _e('© 2021 Quanca | ','quanca') ?>
    <a class="author_name" href="<?php
      $my_theme = wp_get_theme();
        echo esc_url( $my_theme->get( 'AuthorURI' ) );
        ?> " > 
        <?php
        $my_theme = wp_get_theme();
        echo esc_html( $my_theme->get( 'Author' ) );
        ?>
    </a>
    </small> </div>
  <!-- end inner --> 
</aside>
<!-- end side-widget -->
<nav class="navbar">
  <?php if ( true == get_theme_mod( 'header_top_setting', true ) ) : ?>
  <div class="topbar">
    <div class="container header-top">
	  <div><b><?php _e("E-mail","quanca") ?></b><a href="#" id="head_mail"><?php echo get_theme_mod('head_mail'); ?></a></div>
	  <div><b><?php _e("Phone","quanca") ?></b><span id="head_phn"><?php echo get_theme_mod('head_phn') ?></span></div>
	  <div><b><i class="lni lni-map-marker"></i> <?php _e("Location","quanca") ?></b><a href="<?php echo get_theme_mod('head_loc_link') ?>" id="head_loc"><?php echo get_theme_mod('head_loc') ?></a> </div>
	  </div>
  <?php endif;?>
    <!-- end container --> 
  </div>
  <!-- end topbar -->
  <div class="container">
    <div class="logo" id="header-logo">
      <a href="<?php echo esc_url(home_url());?>">
        <?php if( has_custom_logo()){
          echo get_custom_logo();
        }else{ echo bloginfo('name');} ?>
      </a>
      </div>
    <!-- end logo -->
    <div class="site-menu">
      <?php
        wp_nav_menu(array(
          'theme_location'=> 'primary',
          'container' => 'ul',
          ))
      ?>
    </div>
    <!-- end site-menu -->
    <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
    <!-- end hamburher-menu -->
    <?php if ( true == get_theme_mod( 'header_button_setting', true ) ) : ?>
    <div class="navbar-button header-button"> 
      <a id="header-button-id" href="<?php echo esc_url(get_theme_mod( 'button_link')); ?>"><?php echo esc_html(get_theme_mod( 'button_title' )); ?></a> 
    </div>
    <?php endif;?>
    <!-- end navbar-button --> 
  </div>
  <!-- end container --> 
</nav>
<!-- end navbar -->