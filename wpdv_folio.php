<?php
/*
Plugin Name: WPDV Folio
Plugin URI: https://wordpress-developer.com.au
Description: Declares a plugin that will create a custom post type displaying portfolio.
Version: 1.0.4
Author: Shaun MacDougall
Author URI: http://shaunmacdougall.com
License: GPLv2
*/

add_action( 'init', 'create_wpdv_folios' );

function create_wpdv_folios() {
    register_post_type( 'wpdv-folio', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => 'portfolio', 'wpdv-folio', /* This is the Title of the Group */
			'singular_name' => 'folio', 'wpdv-folio', /* This is the individual type */
			'all_items' => 'All portfolios', 'wpdv-folio', /* the all items menu item */
			'add_new' => 'Add New Folio', 'wpdv-folio', /* The add new menu item */
			'add_new_item' => 'Add New Folio', 'wpdv-folio', /* Add New Display Title */
			'edit' => 'Edit', 'wpdv-folio', /* Edit Dialog */
			'edit_item' => 'Edit Folio', 'wpdv-folio', /* Edit Display Title */
			'new_item' => 'New Folio', 'wpdv-folio', /* New Display Title */
			'view_item' => 'View Folio', 'wpdv-folio', /* View Display Title */
			'search_items' => 'Search Folio', 'wpdv-folio', /* Search Custom Type Title */
			'not_found' =>  'Nothing found in the Database.', 'wpdv-folio', /* This displays if there are no entries yet */
			'not_found_in_trash' => 'Nothing found in Trash', 'wpdv-folio', /* This displays if there is nothing in the trash */
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
			'rewrite'	=> array( 'slug' => 'folio','with_front' => true ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail' )
		) /* end of options */
	); /* end of register post type */
}
?>