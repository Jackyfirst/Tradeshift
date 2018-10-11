<?php

/**
 * Get field edit content
 * 
 * @param  string $type Input Type
 * 
 * @return string html
 */
function mbb_get_field_edit_content( $type )
{
    $type = str_replace( '_', '-', $type );

	if ( file_exists( MBB_INC_DIR . "fields/{$type}.php" ) )
		require MBB_INC_DIR . "fields/{$type}.php";
}

/**
 * Get content from 'attribute/$attribute.html'
 * 
 * @param  string $attribute Attribute name
 * 
 * @return string html
 */
function mbb_get_attribute_content( $attribute, $replace = '' )
{
    $attribute = str_replace( '_', '-', $attribute );

	$url = MBB_INC_URL . "attributes/{$attribute}.html";

	$content = @file_get_contents( $url );

    $content = str_replace( '##key_value##', $replace, $content );
    
    $labels = Meta_Box_Attribute::$labels;

    $label = ( array_key_exists( $replace, $labels ) ) ? $labels[$replace] : str_title( $replace );

    $content = str_replace( '##key_value_label##', $label, $content );

    $content = str_replace( '<label>Attributes</label>', '<label>Custom Attributes. 
        See <a href="http://www.metabox.io/docs/meta-box-builder#custom-attributes">here</a> for more detail.
    </label>', $content );

    return $content;
}

/**
 * Get post type for displaying on Meta Box Settings
 *
 * @return array Post types
 */
function mbb_get_post_types()
{
    $post_types = get_post_types();

    $unsupported = array( 'revision', 'nav_menu_item', 'meta-box' );

    foreach ( $unsupported as $post_type )
        unset( $post_types[$post_type] );

    return array_values( $post_types );
}

/**
 * Get taxonomies for displaying dropdown for taxonomy and taxonomy_advanced fields
 * @return array Taxonomies
 */
function mbb_get_taxonomies()
{
    $taxonomies = get_taxonomies();

    return $taxonomies;
}

/**
 * Array of Menu item on builder GUI
 * 
 * Todo: Remove it and use default field type and field value
 * @return array Menu structure
 */
function mbb_get_builder_menu()
{
 	$menu = array(

      'Text' => array(
        'text'        => 'Text',
        'textarea'    => 'Textarea',
        'email'       => 'Email',
        'wysiwyg'     => 'WYSIWYG',
        'number'      => 'Number',
        'password'    => 'Password',
        'url'         => 'URL',
        'fieldset_text' => 'Fieldset Text',
        'autocomplete'  => 'Auto Complete',
        'text_list'     => 'Text List'
      ),

      'Basic' => array(
        'select'        => 'Select',
        'select_advanced'  => 'Select Advanced',
        'checkbox'      => 'Checkbox',
        'radio'         => 'Radio',
        'range'         => 'Range',
        'checkbox_list'  => 'Checkbox List',
        'hidden'        => 'Hidden'
      ),

      'Advanced' => array(
        'heading'   => 'Heading',
        'color'     => 'Color',
        'date'      => 'Date',
        'datetime'  => 'Date Time',
        'time'      => 'Time',
        'divider'   => 'Divider',
        'user'      => 'User',
        'oembed'    => 'OEmbed',
        'button'    => 'Button',
        'file'      => 'File',
        'file_advanced'   => 'File Advanced',
        'file_input'      => 'File Input',
        'image'           => 'Image',
        'image_advanced'  => 'Image Advanced',
        'image_select'    => 'Image Select',
        'plupload_image'  => 'Plupload Image',
        'post'      	=> 'Post',
        'slider'    	=> 'Slider',
        'taxonomy'  	=> 'Taxonomy',
        'taxonomy_advanced'=> 'Taxonomy Adv.',
        'thickbox_image'   => 'Thickbox Image',
        'map'              => 'Map'
      )
    );

	return $menu;
}

if ( ! function_exists( 'str_title' ) )
{
    /**
     * Convert snake case or normal case to title case
     *
     * @param  String $str String to be convert
     *
     * @return String As Title
     */
    function str_title( $str )
    {
        $str = str_replace( '_', ' ', $str );

        return ucwords( $str );
    }
}

if ( ! function_exists( 'str_snake' ) )
{
    function str_snake( $str )
    {
        $str = sanitize_title( $str );
        
        return str_replace( '-', '_', $str );
    }
}

// Debugging function
if ( ! function_exists( 'p' ) )
{
    function p( $object )
    {
        echo '<pre>';
        print_r( $object );
        exit;
    }
}