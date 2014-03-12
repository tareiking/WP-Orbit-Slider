<?php
/*
Plugin Name: Sennza Slider
Version: 0.1-NSFW
Description: A test slider built from Orbit to be dropped into any supporting theme (hint: you will need Foundation 5+)
Author: @TareiKing	
Author URI: http://sennza.com.au
Plugin URI: http://sennza.com.au
Text Domain: sz_slider
Domain Path: /languages
*/

// TODO:
// Add support for changing the orbit class name
// Add support to limit number of slides
// Only publish if they are 'published' slides
// Add thumbnail sizes somehow
// Add support for altering order of slides

/**
 * sz_slider
 *
 * Register Custom Post Type for Slider
 * @return void
 * @author @tareiking
 **/
if ( ! function_exists('sz_slider') ) {

// Register Custom Post Type
function sz_slider() {

	$labels = array(
		'name'                => 'Slides',
		'singular_name'       => 'Slide',
		'menu_name'           => 'Slides',
		'parent_item_colon'   => 'Parent Slider:',
		'all_items'           => 'All slide',
		'view_item'           => 'View Slide',
		'add_new_item'        => 'Add new Slide',
		'add_new'             => 'Add New Slide',
		'edit_item'           => 'Edit Slide',
		'update_item'         => 'Update Slide',
		'search_items'        => 'Search Slide',
		'not_found'           => 'Slide Not found',
		'not_found_in_trash'  => 'Slide Not found in Trash',
	);
	$args = array(
		'label'               => 'slider',
		'description'         => 'A slider for testing with Sennza projects',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'sz_slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sz_slider', 0 );
}

/* Include shortcode */
require_once( 'sz_slider_shortcode.php' );

/* Include custom CSS styles */
function sz_slider_scripts(){
	wp_register_style( 'sz_slider', plugins_url('styles.css', __FILE__) );
	wp_enqueue_style( 'sz_slider' );
}

add_action( 'wp_enqueue_scripts', 'sz_slider_scripts' );

/* Add thumbnail size + support */
// add_image_size( 'sz_slide', 1000, 190, true );


