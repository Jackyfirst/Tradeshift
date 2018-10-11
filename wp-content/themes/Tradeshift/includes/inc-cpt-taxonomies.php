<?php
/*
*
* Custom post types, taxonomies, tags
*
*/

// Custom Post Types
add_action('init','create_post_type');
function create_post_type(){
	register_post_type( 'campaign',
		array(
			'labels' => array(
				'name' => _x( 'Campaigns', 'campaign' ),
				'singular_name' => _x( 'Campaign', 'campaign' ),
				'add_new' => _x( 'Add New', 'campaign' ),
				'add_new_item' => _x( 'Add New Campaign', 'campaign' ),
				'edit_item' => _x( 'Edit Campaign', 'campaign' ),
				'new_item' => _x( 'New Campaign', 'campaign' ),
				'view_item' => _x( 'View Campaign', 'campaign' ),
				'search_items' => _x( 'Search Campaigns', 'campaign' ),
				'not_found' => _x( 'No campaigns found', 'campaign' ),
				'not_found_in_trash' => _x( 'No campaigns found in Trash', 'campaign' ),
				'parent_item_colon' => _x( 'Parent Campaign:', 'campaign' ),
				'menu_name' => _x( 'Campaigns', 'campaign' ),
			),
			'hierarchical' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => false,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug' => 'start'),
			'menu_icon' => '',
			'capability_type' => 'page'
		)
	);

	register_post_type( 'campaigngo',
		array(
			'labels' => array(
				'name' => _x( 'Campaigns - Go', 'campaigngo' ),
				'singular_name' => _x( 'Campaign Go', 'campaigngo' ),
				'add_new' => _x( 'Add New', 'campaigngo' ),
				'add_new_item' => _x( 'Add New Campaign - Go', 'campaigngo' ),
				'edit_item' => _x( 'Edit Campaign - Go', 'campaigngo' ),
				'new_item' => _x( 'New Campaign - Go', 'campaigngo' ),
				'view_item' => _x( 'View Campaign - Go', 'campaigngo' ),
				'search_items' => _x( 'Search Campaigns - Go', 'campaigngo' ),
				'not_found' => _x( 'No go campaigns found', 'campaigngo' ),
				'not_found_in_trash' => _x( 'No go campaigns found in Trash', 'campaigngo' ),
				'parent_item_colon' => _x( 'Parent Campaign - Go:', 'campaigngo' ),
				'menu_name' => _x( 'Campaigns - Go', 'campaigngo' ),
			),
			'hierarchical' => true,
			'supports' => array( 'title', 'thumbnail' ),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => false,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug' => 'getgo'),
			'menu_icon' => '',
			'capability_type' => 'page'
		)
	);

	register_post_type( 'event-webinar',
		array(
			'labels' => array(
				'name' => ( 'Events/Webinars' ),
				'singular_name' => ( 'Event/Webinar' ),
				'add_new_item' => ('Add New Event/Webinar'),
				'new_item' => __('New Event/Webinar'),
				'view_item' => __('View Event/Webinar'),
				'search_items' => __('Search Events/Webinars'),
				'not_found' =>  __('No events/webinars found'),
				'edit_item' => ('Edit Event/Webinar')
			),
			'public' => true,
			'_builtin' => false,
			'menu_icon' => '',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array('slug' => 'events-webinars','with_front'=>false)
		)
	);

	register_post_type( 'resource',
		array(
			'labels' => array(
				'name' => ( 'Resources' ),
				'singular_name' => ( 'Resource' ),
				'add_new_item' => ('Add New Resource'),
				'new_item' => __('New Resource'),
				'view_item' => __('View Resource'),
				'search_items' => __('Search Resource'),
				'not_found' =>  __('No Resource found'),
				'edit_item' => ('Edit Resource')
			),
			'public' => true,
			'_builtin' => false,
			'menu_icon' => '',
			'has_archive' => 'true',
			'taxonomies' => array('post_tag'),
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array('slug' => 'resources','with_front'=>false)
		)
	);
	register_post_type( 'supplier',
		array(
			'labels' => array(
				'name' => ( 'Supplier' ),
				'singular_name' => ( 'Supplier' ),
				'add_new_item' => ('Add New Supplier'),
				'new_item' => __('New Supplier'),
				'view_item' => __('View Supplier'),
				'search_items' => __('Search Supplier'),
				'not_found' =>  __('No Supplier found'),
				'edit_item' => ('Edit Supplier')
			),

			'public' => true,
			'builtin' => false,
			'hierarchical' => true,
			'edit_link' => 'post.php?post=%d',
			'capability_type' => 'post',
			'menu_icon' => '',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array('slug' => 'supplier','with_front'=>false)
		)
	);
	register_post_type( 'partner',
		array(
			'labels' => array( 
				'name' => ('Partners'),
				'singular_name' => ('Partner'),
				'add_new' => ('Add New'),
				'add_new_item' => ('Add New Partner'),
				'edit_item' => ('Edit Partner'),
				'new_item' => ('New Partner'),
				'view_item' => ('View Partner Page'),
				'search_items' => ('Search Partners'),
				'not_found' => ('No Partners found'),
				'not_found_in_trash' => ('No Partners found in Trash'),
				'parent_item_colon' => ('Parent Partners:'),
				'menu_name' => ('Partners'),
			),
			'hierarchical' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => false,
			'query_var' => true,
			'can_export' => true,
			'menu_icon' => '',
			'capability_type' => 'page',
			'rewrite' => array('slug' => 'partners','with_front'=>false)
		)
	);
	register_post_type( 'app',
		array(
			'labels' => array( 
				'name' => ('Apps'),
				'singular_name' => ('App'),
				'add_new' => ('Add New'),
				'add_new_item' => ('Add New App'),
				'edit_item' => ('Edit App'),
				'new_item' => ('New App'),
				'view_item' => ('View App Page'),
				'search_items' => ('Search Apps'),
				'not_found' => ('No apps found'),
				'not_found_in_trash' => ('No apps found in Trash'),
				'parent_item_colon' => ('Parent Apps:'),
				'menu_name' => ('Apps'),
			),
			'hierarchical' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => false,
			'query_var' => true,
			'can_export' => true,
			'menu_icon' => '',
			'capability_type' => 'post',
			'rewrite' => array('slug' => 'apps','with_front'=>false)
		)
	);
	register_post_type( 'press',
		array(
			'labels' => array(
				'name' => ( 'Press' ),
				'singular_name' => ( 'Press' ),
				'add_new_item' => ('Add New Press Page Item')
			),
			'public' => true,
			'_builtin' => false,
			'menu_icon' => '',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array('slug' => 'press','with_front'=>false)
		)
	);
	register_post_type( 'homepagepromo',
		array(
			'labels' => array(
				'name' => ( 'Home Page Promos' ),
				'singular_name' => ( 'Home Page Promo' ),
				'add_new_item' => ('Add New Home Page Promo'),
				'new_item' => __('New Home Page Promo'),
				'view_item' => __('View Home Page Promo'),
				'search_items' => __('Search Home Page Promos'),
				'not_found' =>  __('No home page promos found'),
				'edit_item' => ('Edit Home Page Promo')
			),
			'public' => true,
			'_builtin' => false,
			'menu_icon' => '',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array('slug' => 'homepagepromo','with_front'=>false)
		)
	);
	register_post_type( 'Confirmation',
		array(
			'labels' => array(
				'name' => ( 'Confirmation' ),
				'singular_name' => ( 'Confirmation' ),
				'add_new_item' => ('Add New Confirmation Item')
			),
			'public' => true,
			'_builtin' => false,
			'menu_icon' => '',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array('slug' => 'confirmation','with_front'=>false),
			'capability_type' => 'page'
		)
	);

	flush_rewrite_rules();
}


// WP Admin Dashboard Icons
function add_menu_icons_styles(){
	?>
		<style>
			#adminmenu .menu-icon-event div.wp-menu-image:before {
				content: "\f508";
			}
			#adminmenu .menu-icon-event-webinar div.wp-menu-image:before {
				content: "\f508";
			}
			#adminmenu .menu-icon-resource div.wp-menu-image:before {
				content: "\f118";
			}
			#adminmenu .menu-icon-supplier div.wp-menu-image:before {
				content: "\f307";
			}
			#adminmenu .menu-icon-campaign div.wp-menu-image:before {
				content: "\f238";
			}
			#adminmenu .menu-icon-campaigngo div.wp-menu-image:before {
				content: "\f473";
			}
			#adminmenu .menu-icon-homepagepromo div.wp-menu-image:before {
				content: "\f116";
			}
			#adminmenu .menu-icon-partner div.wp-menu-image:before {
				content: "\f313";
			}
			#adminmenu .menu-icon-app div.wp-menu-image:before {
				content: "\f332";
			}
			#adminmenu .menu-icon-press div.wp-menu-image:before {
				content: "\f488";
			}
			#adminmenu .menu-icon-confirmation div.wp-menu-image:before {
				content: "\f328";
			}

		</style>
	<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );

// Custom Post Type Taxonomies
add_action( 'init', 'register_taxonomies' );
function register_taxonomies() {
	$labels = array( 
		'name' => _x( 'Roles', 'resource-roles' ),
		'singular_name' => _x( 'Role', 'resource-roles' ),
		'search_items' => _x( 'Search Roles', 'resource-roles' ),
		'popular_items' => _x( 'Popular Roles', 'resource-roles' ),
		'all_items' => _x( 'All Roles', 'resource-roles' ),
		'parent_item' => _x( 'Parent Role', 'resource-roles' ),
		'parent_item_colon' => _x( 'Parent Role:', 'resource-roles' ),
		'edit_item' => _x( 'Edit Role', 'resource-roles' ),
		'update_item' => _x( 'Update Role', 'resource-roles' ),
		'add_new_item' => _x( 'Add New Role', 'resource-roles' ),
		'new_item_name' => _x( 'New Role', 'resource-roles' ),
		'separate_items_with_commas' => _x( 'Separate role with commas', 'resource-roles' ),
		'add_or_remove_items' => _x( 'Add or remove roles', 'resource-roles' ),
		'choose_from_most_used' => _x( 'Choose from the most used roles', 'resource-roles' ),
		'menu_name' => _x( 'Role Types', 'resource-roles' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'resource_roles', array('resource'), $args );

	$labels = array( 
		'name' => _x( 'Media Types', 'resource-media' ),
		'singular_name' => _x( 'Media Type', 'resource-media' ),
		'search_items' => _x( 'Search Media Types', 'resource-media' ),
		'popular_items' => _x( 'Popular Media Types', 'resource-media' ),
		'all_items' => _x( 'All Media Types', 'resource-media' ),
		'parent_item' => _x( 'Parent Media Type', 'resource-media' ),
		'parent_item_colon' => _x( 'Parent Media Type:', 'resource-media' ),
		'edit_item' => _x( 'Edit Media Type', 'resource-media' ),
		'update_item' => _x( 'Update Media Type', 'resource-media' ),
		'add_new_item' => _x( 'Add New Media Type', 'resource-media' ),
		'new_item_name' => _x( 'New Media Type', 'resource-media' ),
		'separate_items_with_commas' => _x( 'Separate media types with commas', 'resource-media' ),
		'add_or_remove_items' => _x( 'Add or remove media types', 'resource-media' ),
		'choose_from_most_used' => _x( 'Choose from the most used media type', 'resource-media' ),
		'menu_name' => _x( 'Media Types', 'resource-media' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'resource_media', array('resource'), $args );

	$labels = array( 
		'name' => _x( 'Types', 'even-types' ),
		'singular_name' => _x( 'Type', 'even-types' ),
		'search_items' => _x( 'Search Types', 'even-types' ),
		'popular_items' => _x( 'Popular Types', 'even-types' ),
		'all_items' => _x( 'All Types', 'even-types' ),
		'parent_item' => _x( 'Parent Type', 'even-types' ),
		'parent_item_colon' => _x( 'Parent Type:', 'even-types' ),
		'edit_item' => _x( 'Edit Type', 'even-types' ),
		'update_item' => _x( 'Update Type', 'even-types' ),
		'add_new_item' => _x( 'Add New Type', 'even-types' ),
		'new_item_name' => _x( 'New Type', 'even-types' ),
		'separate_items_with_commas' => _x( 'Separate types with commas', 'even-types' ),
		'add_or_remove_items' => _x( 'Add or remove types', 'even-types' ),
		'choose_from_most_used' => _x( 'Choose from the most used types', 'even-types' ),
		'menu_name' => _x( 'Types', 'even-types' ),
	);

	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,
		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'even_types', array('event'), $args );

	$labels = array( 
		'name' => _x( 'Location', 'events-webinars-location' ),
		'singular_name' => _x( 'Location', 'events-webinars-location' ),
		'search_items' => _x( 'Search Locations', 'events-webinars-location' ),
		'popular_items' => _x( 'Popular Locations', 'events-webinars-location' ),
		'all_items' => _x( 'All Locations', 'events-webinars-location' ),
		'parent_item' => _x( 'Parent Location', 'events-webinars-location' ),
		'parent_item_colon' => _x( 'Parent Location:', 'events-webinars-location' ),
		'edit_item' => _x( 'Edit Location', 'events-webinars-location' ),
		'update_item' => _x( 'Update Location', 'events-webinars-location' ),
		'add_new_item' => _x( 'Add New Location', 'events-webinars-location' ),
		'new_item_name' => _x( 'New Location', 'events-webinars-location' ),
		'separate_items_with_commas' => _x( 'Separate locations with commas', 'events-webinars-location' ),
		'add_or_remove_items' => _x( 'Add or remove locations', 'events-webinars-location' ),
		'choose_from_most_used' => _x( 'Choose from the most used location', 'events-webinars-location' ),
		'menu_name' => _x( 'Locations', 'events-webinars-location' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'events-webinars-location', array('event-webinar'), $args );

	$labels = array( 
		'name' => _x( 'Event Type', 'events-webinars-type' ),
		'singular_name' => _x( 'Event Type', 'events-webinars-type' ),
		'search_items' => _x( 'Search Event Types', 'events-webinars-type' ),
		'popular_items' => _x( 'Popular Event Types', 'events-webinars-type' ),
		'all_items' => _x( 'All Event Types', 'events-webinars-type' ),
		'parent_item' => _x( 'Parent Event Type', 'events-webinars-type' ),
		'parent_item_colon' => _x( 'Parent Event Type:', 'events-webinars-type' ),
		'edit_item' => _x( 'Edit Event Type', 'events-webinars-type' ),
		'update_item' => _x( 'Update Event Type', 'events-webinars-type' ),
		'add_new_item' => _x( 'Add New Event Type', 'events-webinars-type' ),
		'new_item_name' => _x( 'New Event Type', 'events-webinars-type' ),
		'separate_items_with_commas' => _x( 'Separate event types with commas', 'events-webinars-type' ),
		'add_or_remove_items' => _x( 'Add or remove event types', 'events-webinars-type' ),
		'choose_from_most_used' => _x( 'Choose from the most used event type', 'events-webinars-type' ),
		'menu_name' => _x( 'Event Types', 'events-webinars-type' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'events-webinars-type', array('event-webinar'), $args );

	$labels = array( 
		'name' => _x( 'Press Type', 'press_type' ),
		'singular_name' => _x( 'Press Type', 'press_type' ),
		'search_items' => _x( 'Search Press Type', 'press_type' ),
		'popular_items' => _x( 'Popular Press Type', 'press_type' ),
		'all_items' => _x( 'All Press Type', 'press_type' ),
		'parent_item' => _x( 'Parent Press Type', 'press_type' ),
		'parent_item_colon' => _x( 'Parent Press Type:', 'press_type' ),
		'edit_item' => _x( 'Edit Press Type', 'press_type' ),
		'update_item' => _x( 'Update Press Type', 'press_type' ),
		'add_new_item' => _x( 'Add New Press Type', 'press_type' ),
		'new_item_name' => _x( 'New Press Type', 'press_type' ),
		'separate_items_with_commas' => _x( 'Separate press type with commas', 'press_type' ),
		'add_or_remove_items' => _x( 'Add or remove press type', 'press_type' ),
		'choose_from_most_used' => _x( 'Choose from the most used press types', 'press_type' ),
		'menu_name' => _x( 'Press Types', 'press_type' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'press_type', array('press'), $args );

	$labels = array( 
		'name' => _x( 'Promo Type', 'promo-type' ),
		'singular_name' => _x( 'Promo Type', 'promo-type' ),
		'search_items' => _x( 'Search Promo Types', 'promo-type' ),
		'popular_items' => _x( 'Popular Promo Types', 'promo-type' ),
		'all_items' => _x( 'All Promo Types', 'promo-type' ),
		'parent_item' => _x( 'Parent Promo Type', 'promo-type' ),
		'parent_item_colon' => _x( 'Parent Promo Type:', 'promo-type' ),
		'edit_item' => _x( 'Edit Promo Type', 'promo-type' ),
		'update_item' => _x( 'Update Promo Type', 'promo-type' ),
		'add_new_item' => _x( 'Add New Promo Type', 'promo-type' ),
		'new_item_name' => _x( 'New Promo Type', 'promo-type' ),
		'separate_items_with_commas' => _x( 'Separate promo types with commas', 'promo-type' ),
		'add_or_remove_items' => _x( 'Add or remove promo types', 'promo-type' ),
		'choose_from_most_used' => _x( 'Choose from the most used promo type', 'promo-type' ),
		'menu_name' => _x( 'Promo Types', 'promo-type' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'promo-type', array('homepagepromo'), $args );

	$labels = array( 
		'name' => _x( 'Location', 'promo-location' ),
		'singular_name' => _x( 'Location', 'promo-location' ),
		'search_items' => _x( 'Search Locations', 'promo-location' ),
		'popular_items' => _x( 'Popular Locations', 'promo-location' ),
		'all_items' => _x( 'All Locations', 'promo-location' ),
		'parent_item' => _x( 'Parent Location', 'promo-location' ),
		'parent_item_colon' => _x( 'Parent Location:', 'promo-location' ),
		'edit_item' => _x( 'Edit Location', 'promo-location' ),
		'update_item' => _x( 'Update Location', 'promo-location' ),
		'add_new_item' => _x( 'Add New Location', 'promo-location' ),
		'new_item_name' => _x( 'New Location', 'promo-location' ),
		'separate_items_with_commas' => _x( 'Separate locations with commas', 'promo-location' ),
		'add_or_remove_items' => _x( 'Add or remove locations', 'promo-location' ),
		'choose_from_most_used' => _x( 'Choose from the most used location', 'promo-location' ),
		'menu_name' => _x( 'Locations', 'promo-location' ),
	);
	$args = array( 
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => false,
		'hierarchical' => true,

		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'promo-location', array('homepagepromo'), $args );
}
