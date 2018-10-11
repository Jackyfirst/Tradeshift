;( function( $, angular )
{
	'use strict';

	// Define module and dependencies
	// All directives store in `directives.js`
	var app = angular.module( 'builder', ['builderDirectives'] );

	/**
	 * Create array from range. Useful for loop. 
	 * For example, range | 9 will return array[1..9]
	 * 
	 * @param  int total Range
	 * @return array array from range.
	 */
	app.filter('range', function() 
	{
	  	return function( input, total ) 
	  	{
		    total = parseInt( total );
		    for ( var i = 0; i < total; i++ )
		      	input.push( i );

		    return input;
	  	};
	} );
	
	/**
	 * Add focus=callback() directive
	 * 
	 * @param  callback Callback function
	 * @return callback
	 */
	app.factory( 'focus', function ( $rootScope, $timeout ) 
	{
	  	return function( name ) 
	  	{
		    $timeout( function()
		    {
		      	$rootScope.$broadcast( 'focusOn', name );
		    } );
	  	}
	});

	/**
	 * Builder Controller. Which contains all method for builder
	 * @see https://docs.angularjs.org/guide/controller
	 */
	app.controller('BuilderController', function( $scope, $http, $window, $log, focus )
	{
		// Store jQuery Sortable object
		var fieldSort;

		// Default meta box values
		$scope.meta =
		{
			id 		: 'untitled',
			title 	: 'Untitled Metabox',
			pages 	: [ 'post', 'page' ],
			context : 'normal',
			priority: 'high',
			autosave: false,
			fields 	: [

			]
		};

		// Store current editing item
		$scope.active = {};

		// Store all default field value
		$scope.attrs = {};

		// When remove item from object. For example. Remove option from select,
		// the current editing field will lost focus. So we have to use this variable
		// to force the builder keep editing field
		$scope.shouldContinue = true;

		// Check if other addons were installed.
		$scope.addons = [];

		/**
		 * Initial method. Run when the page loaded
		 * 
		 * @return void
		 */
		$scope.init = function()
		{
			// When load a saved meta box. Use old collection.
			if ( typeof $window.meta != 'undefined' )
				$scope.meta = $window.meta;

			$scope.attrs 	= $window.attrs;
			$scope.addons 	= $window.addons;
		};

		/**
		 * Action when use click on each field on sidebar,
		 * add default field value to `meta` collection
		 * 
		 * @param string $type Field Type
		 * 
		 * @return void
		 */
		$scope.addField = function( $type )
		{
			// Must copy to angular object before process
			var field = angular.copy( $scope.attrs[$type] );
			
			$scope.meta.fields.push( field );

			if ( typeof field.id !== 'undefined' )
				field.id = $type + '_' + $scope.meta.fields.length;
		};

		/**
		 * Action when user click on clone button
		 * 
		 * @param  Builder Field $field Field that got clicked
		 * 
		 * @return void
		 */
		$scope.cloneField = function( $field )
		{
			var field = angular.copy( $field );
			field.id += "_copy_" + meta.fields.length;

			$scope.meta.fields.push( field );
		};

		/**
		 * Action when user click on trash button.
		 * Remove field from Metabox
		 * 
		 * @param  int $index Index of the field
		 * 
		 * @return void
		 */
		$scope.removeField = function( $index )
		{
			$scope.meta.fields.splice( $index, 1 );
		};

		/**
		 * Set active field for edit
		 * @param  Object $field Field object
		 * @param  Event $event Event to check
		 */
		$scope.editField = function( $field, $event )
		{
			$scope.active = $field;
		};

		/**
		 * Return to view mode
		 * @return void
		 */
		$scope.unEdit = function( $event )
		{
			if ( $scope.shouldContinue )
				$scope.active = {};
			else
				$scope.shouldContinue = true;
		};

		/**
		 * Toggle Edit Field
		 * 
		 * @param  object $field Meta Box Field
		 * @param  Event $event JS Event
		 * 
		 * @return void
		 */
		$scope.toggleEdit = function( $field, $event )
		{
			if ( $scope.active == $field )
				$scope.unEdit();
			else
				$scope.editField( $field, $event );
		};
		
		/**
		 * Clear all other checked values but current checkbox if is not multiple select or checkboxlist
		 * 
		 * @param  int $index Index of array options
		 * @return void
		 */
		$scope.toggleSelect = function( $index )
		{
			if ( ! ( $scope.active.multiple || $scope.active.type === 'checkbox_list' ) )
			{
				angular.forEach( $scope.active.options, function( option, index )
				{
					if ( $index !== index )
						$scope.active.options[index].selected = false;
				} );
			}
		};

		/**
		 * Clear all checked values when switching from multiple select to single select
		 * 
		 * @return void
		 */
		$scope.toggleMultiple = function()
		{
			if ( ! $scope.active.multiple 
				&& typeof $scope.active.multiple !== 'undefined' 
				&& $scope.active.options.length > 0 
			)
			$scope.toggleSelect( -1 ); // little trick ;)
		};

		/**
		 * When user typing value, auto fill to key if it not set
		 * 
		 * @param  int $index Index of item in options
		 * @return void
		 */
		$scope.autoFillValue = function( $index )
		{
			var option = $scope.active.options[$index];
			
			if ( option.value === option.key.substr( 0, option.key.length - 1 ) )
				$scope.active.options[$index].value = option.key;
		};

		/**
		 * Add empty item to the end of datalist array then focus to it
		 */
		$scope.addDatalistItem = function()
		{
			if ( typeof $scope.active.datalist.options == 'undefined' )
				$scope.active.datalist.options = [];

			$scope.active.datalist.options.push('');

			var length = $scope.active.datalist.options.length - 1;
			
			focus( $scope.active.id + '_datalist_' + length );
		};

		/**
		 * Remove datalist item
		 * @param  int $index Index of datalist item in array
		 * @return void
		 */
		$scope.removeDatalistItem = function( $index )
		{	
			$scope.active.datalist.options.splice($index, 1);

			// By default, after remove item, it continue go to $scope.unEdit method. 
			// use this to avoid that
			$scope.shouldContinue = false;
		};

		/**
		 * Action when start sorting a field
		 * 
		 * @return void
		 */
		$scope.dragStart = function( e, ui )
		{
        	ui.item.data( 'start', ui.item.index() );
	    };

	    /**
	     * Action when stop sorting a field
	     * 
	     * @return void
	     */
	    $scope.dragEnd = function(e, ui) 
	    {
	        var start = ui.item.data( 'start' ),
	            end = ui.item.index();
	        
	        $scope.meta.fields.splice( end, 0, 
	            $scope.meta.fields.splice( start, 1 )[0] );
	        
	        $scope.$apply();
	    };

	    /**
	     * Clear unused data from fields
	     * @param  object $field Meta box field
	     * @return void
	     */
	    $scope.sanitize = function($field)
	    {

	    };
	       
		/**
		 * Add key:value object
		 * 
		 * @param string prop The collection property to add
		 */
		$scope.addObject = function( prop )
		{
			if ( typeof $scope.active[prop] === 'undefined' )
				$scope.active[prop] = [];

			var object = {
				key  : '',
				value: ''
			};

			var focusOn = '_key_';

			if ( prop === 'options' )
			{
				object.selected = false;
				//focusOn 		= '_value_';
			}

			$scope.active[prop].push( object );

			var length = $scope.active[prop].length - 1;

			focus( $scope.active.id + focusOn + length );
		};
		
		/**
		 * Remove object from collection
		 * 
		 * @param  string prop   Collection property
		 * @param  int $index Index of property to remove
		 * 
		 * @return void
		 */
		$scope.removeObject = function( prop, $index )
		{
			if ( typeof $scope.active[prop] !== 'undefined' && $scope.active[prop].length > 0 )
			{
				$scope.active[prop].splice( $index, 1 );
				$scope.shouldContinue = false;	
			}
		};

		/**
		 * Init JS sortable script
		 */
		fieldSort = jQuery( '#menu-to-edit' ).sortable(
		{
	    	placeholder: "ui-state-highlight",
	        start: $scope.dragStart,
	        update: $scope.dragEnd
	    } );

		/**
		 * Mostly important. When the form is submitting, push the serialized JSON to 'excerpt' field
		 * WordPress will store it on the 'post_excerpt'
		 */
	    jQuery( '#post' ).submit( function( e )
	    {
	    	// Sanitize each field id before process
	    	angular.forEach( $scope.meta.fields, function( field )
	    	{
	    		field.id = field.id.toLowerCase().replace(/ /g,'_').replace(/[^\w-]+/g,'');
			} );

	    	$('#bind_excerpt').val( JSON.stringify( $scope.meta ) );
	    } );

	    // Todo: Remove jQuery code below and use AngularJS
	   	jQuery( '.field-edit-content .show-advanced' ).live( 'click', function()
	   	{
	   		$( this ).hide();
	   		$( this ).parent().find('.field-advanced').slideDown( 200 );
	   	} );

	   	jQuery( '.field-edit-content .hide-advanced' ).live( 'click', function()
	   	{
	   		$( this ).parent().slideUp( 200 );
	   		$( '.show-advanced' ).show();
	   	} );
	} );

})( jQuery, angular );