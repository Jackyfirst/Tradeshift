<?php
/**
 * Meta Box Builder is the heart of Meta Box Builder plugin. It contains all core methods
 * for creating / modifying meta box.
 *
 * @author FitWP <fitwp@fitwp.com>
 * @version 1.0
 * @package meta-box
 */
class Meta_Box_Builder
{
	/**
	 * Initial scripts
	 */
	public function __construct()
	{
		// Register 'meta-box' post type to store all meta boxes
		add_action( 'init', array( $this, 'register_post_type' ) );

		// Use all 'meta-box' post type to register meta box
		add_filter( 'rwmb_meta_boxes', array( $this, 'register_meta_box' ) );

		// Load 'meta-box' builder scripts on add and edit post page.
		add_action( 'load-post-new.php', array( $this, 'enqueue' ) );
		add_action( 'load-post.php', array( $this, 'enqueue' ) );
		add_action( 'load-edit.php', array( $this, 'enqueue' ) );

		// Setup the script when WP admin is fully loaded
		add_action( 'admin_init', array( $this, 'setup' ) );
		
		// Change the output of updated messages
		add_filter( 'post_updated_messages', array( $this, 'meta_box_updated_message' ), 10, 1 );

		add_filter( 'wp_insert_post_data', array( $this, 'update_meta_box' ), 10, 2 );

		add_action( 'admin_notices', array( $this, 'admin_notice' ) );
	}

	/**
	 * Setup when plugin fully loaded
	 * 
	 * @return void
	 */
	public function setup()
	{
		// We don't need any meta box on meta box post type
		remove_meta_box( 'submitdiv', 'meta-box', 'side' );

		// Add a GUI for editing meta box
		add_action( 'edit_form_after_title', array( $this, 'setup_gui' ) );
	}

	/**
	 * Action when user save post. We have to manual store post_content field.
	 * Which takes value from post_excerpt and serialize
	 * 
	 * @param  mixed $data raw posted data
	 * @param  \WP_Post $post current post to save
	 * 
	 * @return mixed $data after formatted
	 */
	public function update_meta_box( $data, $post )
	{
		if ( $post['post_type'] === 'meta-box' && ! empty( $data['post_excerpt'] ) )
		{
			$meta_box_array = Meta_Box_Processor::to_array( $data['post_excerpt'] );
			
			$meta_box_array['id'] = $data['post_name'];

			// Only allow Trash or Publish status
			$data['post_status'] = ( $data['post_status'] == 'trash' ) ? $data['post_status'] : 'publish';

			$data['post_content'] = @serialize( $meta_box_array );
		}
		
		return $data;
	}

	/**
	 * Notice when Meta Box plugin is not installed
	 * 
	 * @return string
	 */
	public function admin_notice()
	{
		if ( ! class_exists( 'RW_Meta_Box' ) )
		{
			echo '<div class="error">';
			_e ( 'Meta Box Builder requires Meta Box plugin to work. Please install it.' );
			echo '</div>';
		}
	}

	/**
	 * Modify the output message of meta-box post type
	 * 
	 * @param  mixed $messages Message array
	 * 
	 * @return mixed $messages Message after modified
	 */
	public function meta_box_updated_message( $messages ) 
	{
		$messages['meta-box'] = array(
			0  => '', // Unused. Messages start at index 1.
			1  => __( 'Meta Box updated.', 'meta-box' ),
			2  => __( 'Custom field updated.', 'meta-box' ),
			3  => __( 'Custom field deleted.', 'meta-box' ),
			4  => __( 'Meta Box updated.', 'meta-box' ),
			/* translators: %s: date and time of the revision */
			5  => isset( $_GET['revision'] ) ? sprintf( __( 'Meta Box restored to revision from %s', 'meta-box' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6  => __( 'Meta Box updated.', 'meta-box' ),
			7  => __( 'Meta Box updated.', 'meta-box' ),
			8  => __( 'Meta Box submitted.', 'meta-box' )
		);

		return $messages;
	}

	/**
	 * Load the GUI for Builder only when in meta-box post type
	 * 
	 * @return void
	 */
	public function setup_gui()
	{
		if ( ! $this->is_meta_box_post_type() )
			return;
		
		require_once MBB_INC_DIR . 'buider-gui.php';
	}

	/**
	 * Check if current link is meta box post type or not
	 * 
	 * @return boolean Is meta box post type or not
	 */
	public function is_meta_box_post_type()
	{
		if ( isset( $_GET['post'] ) )
		{
			$post = get_post( $_GET['post'] );

			return $post->post_type === 'meta-box';
		}

		return ( isset( $_GET['post_type'] ) && $_GET['post_type'] === 'meta-box' ); 
	}

	/**
	 * Only enqueue media on edit post page
	 * 
	 * @return void
	 */
	public function enqueue()
	{
		if ( ! $this->is_meta_box_post_type() )
			return;

		wp_register_style( 'custom', MBB_CSS_URL . 'style.css', array(), '1.0.0' );
		wp_register_script( 'angular', '//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js', array(), '1.3.2', true );
		wp_register_script( 'angular-animate', 'https://code.angularjs.org/1.3.2/angular-animate.min.js', array(), '1.3.2', true );
		wp_register_script( 'builder-directives', MBB_JS_URL . 'directives.js', array(), '1.0.0', true );
		wp_register_script( 'builder', MBB_JS_URL . 'builder.js', array( 'angular', 'builder-directives', 'accordion' ), '1.0.0', true );

		wp_enqueue_style( 'custom' );
		// Just enqueue the builder and it will load all dependencies
		wp_enqueue_script( 'builder' );
	}

	/**
	 * Register post type named 'meta-box'
	 *
	 * Meta box name - Post Title
	 * Meta box id - Post Name
	 * Meta box array - Post Content
	 * Meta box json - Post Excerpt
	 * 
	 * @return void
	 */
	public function register_post_type()
	{
		$post_type = 'meta-box';

		$labels = array(
			'name'               => _x( 'Meta Boxes', 'post type general name', 'meta-box' ),
			'singular_name'      => _x( 'Meta Box', 'post type singular name', 'meta-box' ),
			'menu_name'          => _x( 'Meta Boxes', 'admin menu', 'meta-box' ),
			'name_admin_bar'     => _x( 'Meta Box', 'add new on admin bar', 'meta-box' ),
			'add_new'            => _x( 'Add New', 'meta-box', 'meta-box' ),
			'add_new_item'       => __( 'Add New Meta Box', 'meta-box' ),
			'new_item'           => __( 'New Meta Meta Box', 'meta-box' ),
			'edit_item'          => __( 'Edit Meta Box', 'meta-box' ),
			'view_item'          => __( 'View Meta Box', 'meta-box' ),
			'all_items'          => __( 'All Meta Boxes', 'meta-box' ),
			'search_items'       => __( 'Search Meta Boxes', 'meta-box' ),
			'parent_item_colon'  => __( 'Parent Meta Boxes:', 'meta-box' ),
			'not_found'          => __( 'No Meta Boxes found.', 'meta-box' ),
			'not_found_in_trash' => __( 'No Meta Boxes found in Trash.', 'meta-box' )
		);

		$args = array(
			'labels'             => $labels,
			'descriptions'	     => 'Meta Box GUI',
			'public'             => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'metabox' ),
			'capability_type'    => 'post',
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => false,
			'menu_icon'			 => 'dashicons-nametag'
		);

		register_post_type( $post_type, $args );
	}

	/**
	 * Get all metabox attached to post
	 * 
	 * @return array array of metabox
	 */
	public function register_meta_box()
	{
		$loop = new WP_Query( array( 
			'post_type' 	=> 'meta-box', 
			'post_status' 	=> 'publish',
			'no_paging'		=> true
		) );

		$meta_boxes = array();

		if ( $loop->have_posts() ):
			while ( $loop->have_posts() ): $loop->the_post();
				// Each post content is a meta box
				$meta_boxes[] = @unserialize( get_the_content() );
			endwhile;
		endif;

		//p( $meta_boxes );
	    
	    return $meta_boxes;
	}
}