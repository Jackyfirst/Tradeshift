<?php

class Meta_Box_Field_Base
{
	private $default_attributes = array(
		'id', 'name', 'desc',
		
		'force_delete' => array( 'wide', 'checkbox', 'Force Delete?', 'Foo'),

		'key_value1' => array( 'wide', 'get_attribute_content' ),

		'advanced' => array(
			'class', 
			'key_value' => array( 'wide', 'get_attribute_content', 'attrs' )
		)
	);

	private $advanced_attributes = array(
		'key_value',
		'advanced' => array( 'custom', 'class' )
	);
	
	private $attributes = array();

	public function __construct( array $attributes )
	{
		$this->attributes = array_merge( $attributes, $this->default_attributes );
	}

	public function make()
	{
		foreach ( $this->default_attributes as $attribute )
		{
			echo $this->html( $attribute );
		}

		echo '<div class="field-advanced">';

		echo '</div>';
	}

	public function html( $attribute )
	{
		$attribute_name = key( $attribute );

		if ( strpos( $attribute_name, 'key_value' ) !== false )
			$attribute_name = 'key_value';

		$size = 'wide';
		$type = 'text';

		if ( isset( $attributes[$attribute_name] ) )
		{
			$attribute_props = $attribute[$attribute_name];
			
			if ( ! is_array( $attribute_props ) )
				$attribute_props = explode( '.', $attribute_props );

			$size = $attribute_props[0];

			$type = isset( $attribute_props[1] ) ? $attribute_props[1] : 'text';

			$label = isset( $attribute_props[2] ) ? $attribute_props[2] : null;

			$attrs = isset( $attribute_props[3] ) ? $attribute_props[3] : array();
		}
		
		$html = '<p class="description description-'. $size .'">';

		$html .= Meta_Box_Attribute::$type( $attribute_name, $label, $attrs );

		$html .= '</p>';
	}
}

// Usage:
// $attrs = new Meta_Box_Field_Base($args);
// $attrs->make();