<?php // functions.php


 //**************
// THEME SUPPORT

add_theme_support('post-thumbnails');
add_theme_support('menus');


 //****************
// THUMBNAIL SIZES

add_image_size('project-medium', 405, 99999, FALSE);


 //*******************
// $CUSTOM_POST_TYPES

function _register_post_type($slug, $label_singular, $label_plural, $args = array()) {
	
	$default_args = array(
		'labels'				=> array(
			'name'					=> _x($label_plural, 'page type general name'),
			'singular_name'			=> _x($label_singular, 'page type singular name'),
			'add_new'				=> _x('Add ' . $label_singular, 'workstream'),
			'add_new_item'			=> __('Add New ' . $$label_singular),
			'edit_item'				=> __('Edit ' . $label_singular),
			'new_item'				=> __('New ' . $label_singular),
			'view_item'				=> __('View ' . $label_singular),
			'search_items'			=> __('Search ' . $label_plural),
			'not_found'				=> __('No ' . strtolower($label_plural) . ' found'),
			'not_found_in_trash'	=> __('No ' . strtolower($label_plural) . ' found in Trash'), 
			'parent_item_colon'		=> ''
		),
		'public'				=> TRUE,
		'publicly_queryable'	=> TRUE,
		'show_ui'				=> TRUE, 
		'query_var'				=> TRUE,
		'rewrite'				=> array('slug' => $slug, 'with_front' => FALSE),
		'capability_type'		=> 'post',
		'hierarchical'			=> FALSE,
		'menu_position'			=> NULL,
		'taxonomies'			=> array(),
		'supports'				=> array('title', 'editor', 'thumbnail', 'page-attributes', 'page-formats', 'thumbnail'),
		'has_archive'			=> FALSE
	);

	$args = array_merge($default_args, $args);
	register_post_type($slug, $args);
		
}

_register_post_type(
	'project',
	'Project',
	'Projects',
	array(
		'has_archive'	=> TRUE
	)
);