<?php
/**
 * Plugin Name:		   Bootstrap Slider by Themescode
 * Plugin URI:		   http://themescode.com/bootstrap-slider-by-themescode
 * Description:		   Twitter Bootstrap based  professional WordPress  carousel slider plugin.
 * Version: 		   1.1
 * Author: 			   Imran Emu < imran@themescode.com >
 * Author URI: 		   http://imranemu.me
 * Text Domain:        tcode-bootstrap-slider
 * License:            GPL-2.0+
 * License URI:        http://www.gnu.org/licenses/gpl-2.0.txt
 * License: GPL2
 */
 // Pull in WP Stack plugin library

 include(plugin_dir_path( __FILE__ ).'/libs/cpt.php' );
 include(plugin_dir_path( __FILE__ ).'/public/tcode-slider-view.php' );
 include(plugin_dir_path( __FILE__ ).'/admin/tcode-slider-setting.php' );

 function tcode_slider_enqueue_scripts() {
 		//Plugin Main CSS File.
      wp_enqueue_style( 'tcode-slider-main', plugins_url('assets/css/tcode-slider-main.css', __FILE__ ) );
  }
 //This hook ensures our scripts and styles are only loaded in the admin.
 add_action( 'wp_enqueue_scripts', 'tcode_slider_enqueue_scripts' );
 if ( function_exists( 'add_theme_support' ) ) {
     add_theme_support( 'post-thumbnails' );
 }
// slider demo
