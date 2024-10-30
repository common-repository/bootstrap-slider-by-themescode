<?php
// Custom Post Type Setup
add_action( 'init', 'tcode_post_type' );
function tcode_post_type() {
	$labels = array(
		'name' => __('Sliders', 'tcode-bootstrap-slider'),
		'singular_name' => __('Slider Image', 'tcode-bootstrap-slider'),
		'add_new' => __('Add New Slider', 'tcode-bootstrap-slider'),
		'add_new_item' => __('Add New Slider Image', 'tcode-bootstrap-slider'),
		'edit_item' => __('Edit Slider Image', 'tcode-bootstrap-slider'),
		'new_item' => __('New Slider Image', 'tcode-bootstrap-slider'),
		'view_item' => __('View Slider Image', 'tcode-bootstrap-slider'),
		'search_items' => __('Search Slider Images', 'tcode-bootstrap-slider'),
		'not_found' => __('No Slider Image', 'tcode-bootstrap-slider'),
		'not_found_in_trash' => __('No Slider Images found in Trash', 'tcode-bootstrap-slider'),
		'parent_item_colon' => '',
		'menu_name' => __('TC Sliders', 'tcode-bootstrap-slider') // this name will be shown on the menu
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'page',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 21,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title','excerpt','thumbnail', 'page-attributes')
	);
	register_post_type('tocode-slider', $args);
}
 add_action( 'init', 'tcode_post_type' );


// Adding a taxonomy for the carousel post type
function tocode_slider_taxonomy() {
		$args = array('hierarchical' => true);
		register_taxonomy( 'slider_category', 'tocode-slider', $args );
	}
 add_action( 'init', 'tocode_slider_taxonomy', 0 );
