<?php

class Meta_Box_Processor
{
	/**
	 * Convert JSON which stored from post_excerpt to array to store on post_content
	 * 
	 * @param  string/json $json_object Json Object
	 * 
	 * @return mixed array
	 */
	public static function to_array( $json_object )
	{
		// By default, when get json form raw post data. It will have backslashes.
		// so remember to add stripslahses before decode
		$array_output = json_decode( stripslashes( $json_object ), true );
		
		// Remove empty values from array to make Meta Box works properly
		$array_output['pages'] = array_filter( $array_output['pages'] );

		// Sanitize all fields, because some extra fields or different structure
		foreach ( $array_output['fields'] as $index => $field )
		{
			$field['id'] = str_snake( $field['id'] );

		  	foreach ( $field as $key => $value )
		  	{
			  	// Allows user set true/false value by its string
			  	if ( $value == 'true' || $value == 'false' )
			  		$field[$key] = filter_var( $value, FILTER_VALIDATE_BOOLEAN );

			  	if ( empty( $field['datalist']['id'] ) )
			  		unset( $field['datalist'] );

			    // We allows user add custom attributes with 
			    // attrs : { key : value }
			    if ( ! empty( $field['attrs'] ) )
			    {
			      	foreach ( $field['attrs'] as $attr )
			      	{
			      		if ( $attr['value'] == 'true' || $attr['value'] == 'false' )
			  				$attr['value'] = filter_var( $attr['value'], FILTER_VALIDATE_BOOLEAN );
			      		
			      		if ( ! isset( $field[$attr['key']] ) )
			        		$field[$attr['key']] = $attr['value'];
			      	}
			    }

			    unset( $field['attrs'] ); // Remove because we won't use this param

			    // Handle some key / value pairs
			    if ( ( $key === 'options' || $key === 'js_options' || $key === 'query_args' ) && is_array( $value ) )
			    {
			    	// Options aren't affected with taxonomies
			    	if ( $field['type'] === 'taxonomy' || $field['type'] === 'taxonomy_advanced' ) 
			    		continue;
			      	
			      	$tmp_array = array();
			      	$tmp_std   = array();

			      	foreach ( $value as $arr )
			      	{
			      		if ( $arr['value'] == 'true' || $arr['value'] == 'false' )
			  				$arr['value'] = filter_var( $arr['value'], FILTER_VALIDATE_BOOLEAN );

			        	$tmp_array[$arr['key']] = $arr['value'];
			        	if ( isset( $arr['selected'] ) && ( $arr['selected'] == true || $arr['selected'] == 1 ) )
			          		$tmp_std[] = $arr['key'];

			          	// Push default value to std on Text List
			          	if ( isset( $arr['default'] ) && ! empty( $arr['default'] ) )
			          	{
							if ( $field['type'] === 'fieldset_text' )
			          			$tmp_std[$arr['value']] = $arr['default'];
			          		else
			          			$tmp_std[] = $arr['default'];
			          	}
			      	}

			      	$field[$key] = $tmp_array;

			      	if ( isset( $field['std'] ) && empty( $field['std'] ) )
			      	{
			      		if ( is_array( $field['std'] ) )
			      		{
			        		$field['std'] = $tmp_std;
			      		}
			        	else
			        	{
			        		if ( count( $tmp_std ) > 0 )
			        			$field['std'] = $tmp_std[0];
			        	}
			      	}
			    }
			     // Of course, we won't store empty value
			    if ( ! is_array( $value ) && empty( $value ) && $key != 'std' )
			    	unset( $field[$key] );
		  	}

		  	$array_output['fields'][$index] = $field;
		}
		//p( $array_output );
		return $array_output;
	}

	public static function to_json( array $object )
	{

	}
}