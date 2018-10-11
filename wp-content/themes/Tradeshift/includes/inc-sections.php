<?php
/*------------------------------------*\
	Widgets: 
	1. Navigation (head, footer, etc)
	2. Sidebars
\*------------------------------------*/


// 1.
// Tradeshift navigation
//

class _Walker_Nav_Menu extends Walker_Nav_Menu {
  public function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dl-submenu\">\n";
  }
}

add_action('init', 'register_tradeshift_menu'); // Add Tradeshift menu
function tradeshift_nav(){
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '', 
        'container'       => 'div', 
        'container_class' => 'menu-{menu slug}-container', 
        'container_id'    => '',
        'menu_class'      => 'menu', 
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => new My_Walker_Nav_Menu
        )
    );

    wp_nav_menu(
		array(
		'theme_location'  => 'footer-menu',
		'menu'            => 'footer-menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu SL_swap',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => false,
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	));

    wp_nav_menu(
    array(
        'menu'            => 'footer-camp-menu',
        'theme_location'  => 'social-menu', 
        'container'       => 'div', 
        'container_class' => 'footer-camp-container',
        'fallback_cb'     => false
        )
    );

    wp_nav_menu(
    array(
        'theme_location'  => 'social-menu',
        'menu'            => 'social-menu', 
        'container'       => 'div', 
        'container_class' => 'social-nav-container',
        'fallback_cb'     => false
        )
    );
}

// Register Navigation
function register_tradeshift_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'tradeshift'), // Main Navigation
        'footer-menu' => __('Footer Menu', 'tradeshift'), // Main Footer navigatino
        'footer-camp-menu' => __('Campaign Footer Menu', 'tradeshift'), // Extra Navigation for Cmapaign Footer
        'social-menu' => __('Social Sharing Nav', 'tradeshift') // Main Footer navigatino
    ));
}


// 2.
// Tradeshift Wdgets
// 
if (function_exists('register_sidebar')){
	// Campaign footer widget area.
	register_sidebar(array(
		'name' => __('Campaign Footer Widget Area', 'tradeshift'),
		'description' => __('This will appear in certain campaign templates as footer widget area.', 'tradeshift'),
		'id' => 'campaign-footer',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	// Define Sidebar Widget Area 2
	register_sidebar(array(
		'name' => __('Footer', 'tradeshift'),
		'description' => __('Main footer widget area. (4 columns layout)', 'tradeshift'),
		'id' => 'footer-widgets',
		'before_widget' => '<div class="col-xs-12 col-sm-2 col-md-2 footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}
