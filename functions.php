<?php // functions.php


 //**************
// THEME SUPPORT

add_theme_support('post-thumbnails');
add_theme_support('menus');


 //****************
// THUMBNAIL SIZES

add_image_size('project-thumbnail', 678, 99999, FALSE);
add_image_size('project-medium', 405, 99999, FALSE);


 //*************
// $TIDY_HEADER

remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
#remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
#remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
#remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version


 //********
// EXCERPT

$excerpt_length = 35;

function _the_excerpt($length = 30) {

	global $excerpt_length;

	$excerpt_length = $length;

	the_excerpt();

}

add_filter('excerpt_length', function($length) {
	global $excerpt_length;
	return $excerpt_length;
}, 999);


add_filter('wp_trim_excerpt', function($excerpt) {
	return str_replace('[...]', '...', $excerpt);
});


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
	'projects',
	'Project',
	'Projects',
	array(
		'has_archive'	=> TRUE
	)
);