<?php
/*
Plugin Name: Money Free portfolio
Plugin URI: https://wordpress-developer.com.au
Description: Declares a plugin that will create a custom post type displaying portfolio.
Version: 1.0.2
Author: Shaun MacDougall
Author URI: http://shaunmacdougall.com
License: GPLv2
*/

add_action( 'init', 'create_party_policy' );

function create_party_policy() {
    register_post_type( 'party-policies', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => 'portfolio', 'moneyfreepartytheme', /* This is the Title of the Group */
			'singular_name' => 'Party Policy', 'moneyfreepartytheme', /* This is the individual type */
			'all_items' => 'All portfolio', 'moneyfreepartytheme', /* the all items menu item */
			'add_new' => 'Add New Policy', 'moneyfreepartytheme', /* The add new menu item */
			'add_new_item' => 'Add New Policy', 'moneyfreepartytheme', /* Add New Display Title */
			'edit' => 'Edit', 'moneyfreepartytheme', /* Edit Dialog */
			'edit_item' => 'Edit Policies', 'moneyfreepartytheme', /* Edit Display Title */
			'new_item' => 'New Policy', 'moneyfreepartytheme', /* New Display Title */
			'view_item' => 'View Policy', 'moneyfreepartytheme', /* View Display Title */
			'search_items' => 'Search Policy', 'moneyfreepartytheme', /* Search Custom Type Title */
			'not_found' =>  'Nothing found in the Database.', 'moneyfreepartytheme', /* This displays if there are no entries yet */
			'not_found_in_trash' => 'Nothing found in Trash', 'moneyfreepartytheme', /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
		), /* end of arrays */
			'description' => 'This is the example custom post type', /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'party-policies','with_front' => true ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
		) /* end of options */
	); /* end of register post type */
}
?>