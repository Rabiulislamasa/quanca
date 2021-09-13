<?php 
require_once ('inc/codestar-framework/codestar-framework.php');
require_once ('inc/tgm/class-tgm-plugin-activation.php');
require_once ('inc/class-metabox.php');
require_once ('inc/page-metabox.php');
require_once ('inc/schedule-metabox.php');
require_once ('inc/slider-metabox.php');
require_once ('inc/schedule-metabox.php');
require_once ('inc/testimonial-metabox.php');
require_once ('inc/plugin-installer.php');
require_once ('inc/quanca-customizer.php');
require_once ('inc/demoimport.php');
if ( site_url() == "http://localhost//shop" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}
function theme_setup(){
    load_theme_textdomain('quanca');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-logo' );
    add_image_size('custom-size', 1000, 500);
    register_nav_menu('primary',__('Main Menu','quanca'));
}

add_action('after_setup_theme','theme_setup');
function my_theme_style_enqueue(){
    wp_enqueue_style( 'lineicons', get_template_directory_uri() . '/assets/css/lineicons.css', null,VERSION);
    wp_enqueue_style( 'odometr', get_template_directory_uri() . '/assets/css/odometer.min.css', null,VERSION);
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css', null,VERSION);
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', null,VERSION);
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null,VERSION);
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . 'use.fontawesome.com/fc3642b838.js');
    wp_enqueue_style( 'fontstyle', get_template_directory_uri() . 'fonts.googleapis.com/css2?family=Barlow&display=swap');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null,VERSION);
    wp_enqueue_style( 'design', get_template_directory_uri() . '/assets/css/style.css', null,'1.1.4');
    wp_enqueue_style( 'mainstyle', get_stylesheet_uri(),null,'1.1.1');

    wp_enqueue_script(  'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),VERSION,true);
    wp_enqueue_script(  'fancyjs', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'),VERSION,true);
    wp_enqueue_script(  'swiperjs', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'),VERSION,true);
    wp_enqueue_script(  'odometerjs', get_template_directory_uri() . '/assets/js/odometer.min.js', array('jquery'),VERSION,true);
    wp_enqueue_script(  'wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'),VERSION,true);
    wp_enqueue_script(  'scriptjs', get_template_directory_uri() . '/assets/js/scripts.js',null,VERSION,true);
}
add_action('wp_enqueue_scripts','my_theme_style_enqueue');
function theme_sidebar() {
    register_sidebar( array(
        'name'          => __( 'SideBar', 'quanca' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add Categories,Tag etc.', 'quanca' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Left Top', 'quanca' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add Text.', 'quanca' ),
        'before_widget' => '<div class="footer-info">',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Left Bottom', 'quanca' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add Social Profile Link.', 'quanca' ),
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Middle Left', 'quanca' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add Text.', 'quanca' ),
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Middle Right', 'quanca' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add Categories,Tag etc.', 'quanca' ),
        'before_widget' => '<span class="footer-menu" id="footer-menu-id">',
        'after_widget'  => '</span>',
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Right', 'quanca' ),
        'id'            => 'footer-5',
        'description'   => __( 'Add Categories,Tag etc.', 'quanca' ),
        'before_widget' => '<span class="footer-menu" id="footer-menu-id">',
        'after_widget'  => '</span>',
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
    ) );
}
add_action( 'widgets_init', 'theme_sidebar' );
// function customizer_refresh(){
//     wp_enqueue_script('customizerjs', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery','customize-preview'),'1.1.1',true);

// }
// add_action('customize_preview_init','customizer_refresh');
function mytheme_customizer_live_preview()
{
    wp_enqueue_script( 
          'mytheme-themecustomizer',            //Give the script an ID
          get_theme_file_uri().'/assets/js/customizer.js',//Point to file
          array( 'jquery','customize-preview' ),    //Define dependencies
          '1.02.14',                       //Define a version (optional) 
          true                      //Put script in footer?
    );
}
add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );
function customer_rating(){
    $my_testimonial = get_post_meta( $post->ID,'my_testimonial_options', true);
    $testimonial_rating = $my_testimonial['test-rating'];
}

function my_excerpt_length($length) {
    return 20;
    }
    
    add_filter('excerpt_length', 'my_excerpt_length');
function excerpt_readmore($more) {
    if ('post' == get_post_type() ){
return '... <a  href="' . get_permalink(get_the_ID()) . 
'" class="readmore">' . 'More' . '</a>';
}}

add_filter('excerpt_more', 'excerpt_readmore');