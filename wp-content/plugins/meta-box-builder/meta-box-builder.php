<?php
/*
Plugin Name: Meta Box Builder
Plugin URI: http://www.metabox.io
Description: Builder Extension for Meta Box plugin
Version: 1.0
Author: Rilwis & Tan Nguyen
Author URI: http://www.fitwp.com
License: GPL2+
*/

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

// ----------------------------------------------------------
// Define plugin URL for loading static files or doing AJAX
// ------------------------------------------------------------
if ( ! defined( 'MBB_URL' ) )
	define( 'MBB_URL', plugin_dir_url( __FILE__ ) );

define( 'MBB_INC_URL', trailingslashit( MBB_URL . 'inc' ) );
define( 'MBB_JS_URL', trailingslashit( MBB_URL . 'assets/js' ) );
define( 'MBB_CSS_URL', trailingslashit( MBB_URL . 'assets/css' ) );

// ------------------------------------------------------------
// Plugin paths, for including files
// ------------------------------------------------------------
if ( ! defined( 'MBB_DIR' ) )
	define( 'MBB_DIR', plugin_dir_path( __FILE__ ) );

define( 'MBB_INC_DIR', trailingslashit( MBB_DIR . 'inc' ) );
define( 'MBB_FIELDS_DIR', trailingslashit( MBB_INC_DIR . 'fields' ) );

require_once MBB_INC_DIR . '/helper.php';
require_once MBB_INC_DIR . '/class-meta-box-attribute.php';
require_once MBB_INC_DIR . '/class-meta-box-processor.php';
require_once MBB_INC_DIR . '/class-meta-box-builder.php';
new Meta_Box_Builder;