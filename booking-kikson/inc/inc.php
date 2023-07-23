<?php add_action( 'wp_enqueue_scripts', 'add_css_booking', 25 );
 
 function add_css_booking() {
    wp_enqueue_style( 'css_booking', plugins_url() . '/booking-kikson/inc/css/owl.carousel.min.css' );
    wp_enqueue_style( 'css_owl_carousel', plugins_url() . '/booking-kikson/inc/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'css_owl_theme', plugins_url() . '/booking-kikson/inc/css/app.css' );
 }
 
 //add_action( 'admin_enqueue_scripts', 'my_scripts_method' );
 //add_action( 'login_enqueue_scripts', 'my_scripts_method' );
 add_action( 'wp_enqueue_scripts', 'add_js_booking' );
 function add_js_booking(){
    wp_enqueue_script( 'js_booking', plugins_url() . '/booking-kikson/inc/js/jquery.js' );
    wp_enqueue_script( 'js_owl', plugins_url() . '/booking-kikson/inc/js/owl.carousel.min.js' );
    wp_enqueue_script( 'js_jquery', plugins_url() . '/booking-kikson/inc/js/app.js' );
 } ?>

 <!-- ADMIN PANEL -->

 <?php function my_admin_style() {

wp_enqueue_style( 'css_admin', plugins_url() . '/booking-kikson/inc/css/admin.css' );

}

add_action('admin_enqueue_scripts', 'my_admin_style'); ?>

<!-- ADMIN PANEL -->