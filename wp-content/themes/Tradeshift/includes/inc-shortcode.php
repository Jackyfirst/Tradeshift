<?php
/*------------------------------------*\
	Shortcodes: code snippets shortened for use in text-editor
\*------------------------------------*/

// Clearfix to sort elements -> [clearfix]
function clearfix() {
	// Code
	return '<div class="clearfix"></div>';
}
add_shortcode( 'clearfix', 'clearfix' );

//Column block with icons
// Add Shortcode
function grid( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'col' => '12',
			'icon' => 'none',
		), $atts )
	);
	// check what type user entered
    return '<div class="col-md-' . esc_attr($col) . ' content-top text-icon-box"><div class="icon icon-' . esc_attr($icon) . '"></div>' . $content . '</div>';
}
add_shortcode( 'column', 'grid' );

// Check