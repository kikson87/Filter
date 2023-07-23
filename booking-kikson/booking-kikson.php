<?php
/*
 * Plugin Name: Booking Kikson
 * Plugin URI:  #
 * Description: #
 * Version: 1.0
 * Author: Oleg kicha
 * Author URI: #
 * License: #
 * License URI: #
 *
 * Text Domain: #
 * Domain Path: #
 *
 * Network: #
 */

require plugin_dir_path( __FILE__ ) . 'inc/inc.php';
require plugin_dir_path( __FILE__ ) . 'post-type.php';
require plugin_dir_path( __FILE__ ) . 'functions.php';

 add_action( 'wp_head', 'kikson_head_action' );

 function kikson_head_action(){
 
    #require plugin_dir_path( __FILE__ ) . 'inc/class-visual.php';

    require plugin_dir_path( __FILE__ ) . 'templates/filter.php';
    require plugin_dir_path( __FILE__ ) . 'templates/results.php';

    #test::tester(); ?>

 <?php }

 /* Добавити календар, зпрогнозувати загрузку ы вивыд зображень, зробити Webpack компыляції JS / CSS, Elementor не редагує сторінку. */








