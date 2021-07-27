<?php
/*
Plugin Name: Event Posts
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/

if ( ! function_exists('wccr_events') ) {

// Register Custom Post Type
function wccr_events() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'wccr_events' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'wccr_events' ),
		'menu_name'             => __( 'Events', 'wccr_events' ),
		'name_admin_bar'        => __( 'Event', 'wccr_events' ),
		'archives'              => __( 'Event Archives', 'wccr_events' ),
		'attributes'            => __( 'Event Attributes', 'wccr_events' ),
		'parent_item_colon'     => __( 'Parent Event:', 'wccr_events' ),
		'all_items'             => __( 'All Events', 'wccr_events' ),
		'add_new_item'          => __( 'Add New Event', 'wccr_events' ),
		'add_new'               => __( 'Add New', 'wccr_events' ),
		'new_item'              => __( 'New Event', 'wccr_events' ),
		'edit_item'             => __( 'Edit Event', 'wccr_events' ),
		'update_item'           => __( 'Update Event', 'wccr_events' ),
		'view_item'             => __( 'View Event', 'wccr_events' ),
		'view_items'            => __( 'View Events', 'wccr_events' ),
		'search_items'          => __( 'Search Event', 'wccr_events' ),
		'not_found'             => __( 'Not found', 'wccr_events' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wccr_events' ),
		'featured_image'        => __( 'Featured Image', 'wccr_events' ),
		'set_featured_image'    => __( 'Set featured image', 'wccr_events' ),
		'remove_featured_image' => __( 'Remove featured image', 'wccr_events' ),
		'use_featured_image'    => __( 'Use as featured image', 'wccr_events' ),
		'insert_into_item'      => __( 'Insert into event', 'wccr_events' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'wccr_events' ),
		'items_list'            => __( 'Events list', 'wccr_events' ),
		'items_list_navigation' => __( 'Events list navigation', 'wccr_events' ),
		'filter_items_list'     => __( 'Filter events list', 'wccr_events' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'wccr_events' ),
		'description'           => __( 'WCCR Events', 'wccr_events' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'wccr_events', $args );

}
add_action( 'init', 'wccr_events', 0 );

}