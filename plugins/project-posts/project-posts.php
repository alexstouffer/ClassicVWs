<?php
/*
Plugin Name: Project Posts
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/

if ( ! function_exists('projects') ) {

// Register Custom Post Type
function projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'projects' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'projects' ),
		'menu_name'             => __( 'Projects', 'projects' ),
		'name_admin_bar'        => __( 'Projects', 'projects' ),
		'archives'              => __( 'Project Archives', 'projects' ),
		'attributes'            => __( 'Project Attributes', 'projects' ),
		'parent_item_colon'     => __( 'Parent Project:', 'projects' ),
		'all_items'             => __( 'All Projects', 'projects' ),
		'add_new_item'          => __( 'Add New Project', 'projects' ),
		'add_new'               => __( 'Add New', 'projects' ),
		'new_item'              => __( 'New Project', 'projects' ),
		'edit_item'             => __( 'Edit Project', 'projects' ),
		'update_item'           => __( 'Update Project', 'projects' ),
		'view_item'             => __( 'View Project', 'projects' ),
		'view_items'            => __( 'View Projects', 'projects' ),
		'search_items'          => __( 'Search Project', 'projects' ),
		'not_found'             => __( 'Not found', 'projects' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'projects' ),
		'featured_image'        => __( 'Featured Image', 'projects' ),
		'set_featured_image'    => __( 'Set featured image', 'projects' ),
		'remove_featured_image' => __( 'Remove featured image', 'projects' ),
		'use_featured_image'    => __( 'Use as featured image', 'projects' ),
		'insert_into_item'      => __( 'Insert into Project', 'projects' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'projects' ),
		'items_list'            => __( 'Projects list', 'projects' ),
		'items_list_navigation' => __( 'Projects list navigation', 'projects' ),
		'filter_items_list'     => __( 'Filter Projects list', 'projects' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'projects' ),
		'description'           => __( 'cars we\'ve restored', 'projects' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects', 0 );

}