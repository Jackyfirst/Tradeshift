<?php
/*------------------------------------*\
    Campaign post type related functions: meta-boxes, custom stuff
\*------------------------------------*/


// Show the list of available custom templates templates in the Custom Post Type admin section
define( 'campaign', 'cases' );
/**
 * Load the page template for any post object
 * having the appropriate meta key set.
 */
add_action( 'template_redirect', 'mytheme_template_redirect' );
function mytheme_template_redirect() {
    global $wp_query;
    $id = (int) $wp_query->get_queried_object_id();
    $template = get_post_meta( $id, '_wp_page_template', true );
    if ( $template && 'default' !== $template ) {
        $file = STYLESHEETPATH . '/' . $template;
        if( is_file( $file ) ) {
            require_once $file;
            exit;
        }
    }
}
/**
 * Process the Meta Box
 * @todo Permissions check.
 * @todo Filter input.
 * @todo Nonces.
 */

// --------Add actions
add_action('add_meta_boxes', 'custom_template_add_custom_box');

/* Do something with the data entered */
add_action('save_post', 'custom_template_save_postdata');


// --------Add functions
/* Adds a box to the main column on the Post and Page edit screens */
function custom_template_add_custom_box() {
    add_meta_box( 'custom-post-type-choice', 'Choose custom template', 'custom_template_inner_box', 'campaign', 'side' );
}

/* Prints the box content */
function custom_template_inner_box( $post ) {

    // Use nonce for verification
    wp_nonce_field( plugin_basename(__FILE__), 'custom_template_noncename' );

    if ( 0 != count( get_page_templates() ) ) {
        $page_template = get_post_meta($post->ID, '_wp_page_template', TRUE); ?>
    <p><strong><?php _e('Template') ?></strong></p>
    <label class="screen-reader-text" for="page_template"><?php _e('Page Template') ?></label>
    <select name="page_template" id="page_template">
        <option value='default'><?php _e('Default Template'); ?></option>
        <?php page_template_dropdown($page_template); ?>
    </select>
<?php }
}

/* When the post is saved, saves our custom data */
function custom_template_save_postdata( $post_id ) {

    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times

    if ( !isset( $_POST['custom_template_noncename'] ) || !wp_verify_nonce( $_POST['custom_template_noncename'], plugin_basename(__FILE__) ) )
        return $post_id;

    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
        return $post_id;


    // Check permissions
    if ( 'page' == $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) )
            return $post_id;
        }
    else {
        if ( !current_user_can( 'edit_post', $post_id ) )
            return $post_id;
    }

    // OK, we're authenticated: we need to find and save the data

    $page_template = $_POST['page_template'];

    // Use this block for the Campaign custom post type

    if ( !empty($page_template) && 'campaign' == get_post_type($post_id) ) {
        $page_templates = get_page_templates();
        if ( 'default' != $page_template && !in_array($page_template, $page_templates) ) {
            if ( $wp_error ) {
                return new WP_Error('invalid_page_template', __('The page template is invalid.'));
            }
            else{
                return 0;
            }
        }
        update_post_meta($post_id, '_wp_page_template',  $page_template);
    }

}