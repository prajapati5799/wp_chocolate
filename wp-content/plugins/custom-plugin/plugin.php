<?php 

/*
Plugin Name: Custom Plugin for Teams
Plugin URI: 
Description: Plugin for Teams
Version: 1.0
Author: Het
*/

// Register Custom Post Type Team
function create_team_cpt() {

	$labels = array(
		'name' => _x( 'Teams', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Team', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Teams', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Team Archives', 'textdomain' ),
		'attributes' => __( 'Team Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Team:', 'textdomain' ),
		'all_items' => __( 'All Teams', 'textdomain' ),
		'add_new_item' => __( 'Add New Team', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Team', 'textdomain' ),
		'edit_item' => __( 'Edit Team', 'textdomain' ),
		'update_item' => __( 'Update Team', 'textdomain' ),
		'view_item' => __( 'View Team', 'textdomain' ),
		'view_items' => __( 'View Teams', 'textdomain' ),
		'search_items' => __( 'Search Team', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Team', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'textdomain' ),
		'items_list' => __( 'Teams list', 'textdomain' ),
		'items_list_navigation' => __( 'Teams list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Teams list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Team', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-customchar',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats'),
		'taxonomies' => array('team_categories'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'create_team_cpt', 0 );

function register_team_categories(){

    $labels = array(
		'name' => 'Team Categories',
		'singular_name' => 'Team Category' 
	);

    $options = array(
        'labels' => $labels,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'team_categories'),
        'show_in_rest' => true
    );
    register_taxonomy('team_categories', array('team'), $options);
}
add_action( 'init', 'register_team_categories', 0 );