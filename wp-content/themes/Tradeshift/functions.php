<?php
// Theme Support
// -----------------------------------------------------------

if (!isset($content_width))
{
	$content_width = 900;
}

if (function_exists('add_theme_support'))
{
	// Add Menu Support
	add_theme_support('menus');

	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');

	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('mobile', '768', '', false); // Small Thumbnail

	// Enables post and comment RSS feed links to head
	add_theme_support('automatic-feed-links');

	// Localisation Support
	load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
	global $wp_query;
	$big = 999999999;
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages
	));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
	return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
	return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
	global $post;
	if (function_exists($length_callback)) {
		add_filter('excerpt_length', $length_callback);
	}
	if (function_exists($more_callback)) {
		add_filter('excerpt_more', $more_callback);
	}
	$output = get_the_excerpt();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = '<p>' . $output . '</p>';
	echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
	global $post;
	return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
	return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
	return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
	$myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
	$avatar_defaults[$myavatar] = "Custom Gravatar";
	return $avatar_defaults;
}

// Actions Filters
// -----------------------------------------------------------

// Add Actionshtml5blank_styles
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
// add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// // add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
// add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
// add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Add columns to the Pages Admin view

add_filter('manage_page_posts_columns', 'my_custom_column', 10);
add_action('manage_page_posts_custom_column', 'add_my_custom_column', 10, 2);

function my_custom_column($defaults) {
	$defaults['url'] = 'URL';
	return $defaults;
}

function add_my_custom_column($column_name, $post_id) {
	if ($column_name == 'url') {
		echo str_replace(home_url(), '', get_permalink($post_id)); //relative url
	}
}

// Remove Filters

remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


// Register Legacy Nav, Footer, etc.
// -----------------------------------------------------------

require_once('includes/inc-sections.php'); // Legacy

// Register Shortcodes
// -----------------------------------------------------------

require_once('includes/inc-shortcode.php');

// Register Custom Post Types, Taxonomies, Meta Boxes fields
// -----------------------------------------------------------

require_once('includes/inc-cpt-taxonomies.php');
require_once('includes/inc-meta.php');
require_once('includes/inc-meta-campaign.php');

// Register Styles and Scripts enqueued
// -----------------------------------------------------------

require_once('includes/inc-enqueue.php');

// Register Miscellaneous Items
// -----------------------------------------------------------

require_once('includes/inc-misc.php');


// Register Custom Navigation Walker - New Site Navigation
// -----------------------------------------------------------
require_once('wp_bootstrap_navwalker.php');

// Find the search-* custom post type template
// -----------------------------------------------------------
function ts_custom_search_template($default) {
	$post_type = get_query_var('post_type', null);
	if (!$post_type) {
		return $default;
	}

	$template = locate_template(array(
		'search-' . $post_type . '.php',
		$default,
	));
	return $template;
}
add_filter('search_template', 'ts_custom_search_template');

// Let's get rid of the pesky autogenerated p tags around images from WP Editor
// ------------------------------------------------------------------------------

// function filter_ptags_on_images($content){
//    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
// }

// add_filter('the_content', 'filter_ptags_on_images');

// Disable canonical URLs via Yoast SEO
// -------------------------------------------

add_filter( 'wpseo_canonical', '__return_false' );

// Patch for Brute force attack vulnerability on xmlrpc.php
// https://blog.sucuri.net/2015/10/brute-force-amplification-attacks-against-wordpress-xmlrpc.html
// ------------------------------------------------------------------------------------------------

function mmx_remove_xmlrpc_methods( $methods ) {
	unset( $methods['system.multicall'] );
	return $methods;
}
add_filter( 'xmlrpc_methods', 'mmx_remove_xmlrpc_methods');

/**
	* Hooks the WP cpt_post_types filter
	* Place a Post Template into Custom Post Types
	* This function is related to the Custom Post Templates plugin
	* Disable if the plugin has security vulnerability or if it is no longer in use
	*
	* @param array $post_types An array of post type names that the templates be used by
	* @return array The array of post type names that the templates be used by
	**/

function my_cpt_post_types( $post_types ) {
	$post_types[] = 'partner';
	$post_types[] = 'app';
	$post_types[] = 'campaigngo';
	return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

/**
	* @param $id The marketo form id
	* @return string The HTML id attribute you need a data-action for, i.e., <button
	*/
function marketo_form( $id ) {
	set_query_var('marketo_form_id', $id);
	get_template_part('components/marketo', 'form');
	return 'mktoForm-' . $id;
}

// By default WPML only gives administrators permissions to do these things. Effectively they can only
// translate posts. Let's give it all to editors too.
function add_wpml_caps() {
	$wpml_caps = [
		'wpml_manage_translation_management',
		'wpml_manage_languages',
		'wpml_manage_translation_options',
		'wpml_manage_troubleshooting',
		'wpml_manage_taxonomy_translation',
		'wpml_manage_wp_menus_sync',
		'wpml_manage_translation_analytics',
		'wpml_manage_string_translation',
		'wpml_manage_sticky_links',
		'wpml_manage_navigation',
		'wpml_manage_theme_and_plugin_localization',
		'wpml_manage_media_translation',
		'wpml_manage_support',
	];

	$role = get_role( 'editor' );

	foreach ($wpml_caps as $cap) {
		$role->add_cap( $cap );
	}
}

add_action( 'admin_init', 'add_wpml_caps' );

add_filter( 'rest_endpoints', function ( $endpoints ){
	if ( isset( $endpoints['/wp/v2/users'] ) )

	{ unset( $endpoints['/wp/v2/users'] ); }
	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) )

	{ unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ); }
	return $endpoints;
});
