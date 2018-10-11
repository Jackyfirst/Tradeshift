jQuery(document).ready(function($){
		
	var $container = $('.isotope'),
			$doc = $(document),
			$win = $(window),
			filters = {};

	$win.on('load', function(){
		$container.isotope({
			itemSelector : '.resource-block'
		});

		setTimeout(function(){
			$('#res-contents').removeClass('loading');
		}, 1000);

		
	});

	// filter buttons
		$('select').change(function(){
			var $this = $(this);
			
			// store filter value in object
			// i.e. filters.color = 'red'
			var group = $this.attr('data-filter-group');
			
			filters[ group ] = $this.find(':selected').attr('data-filter-value');
			// console.log( $this.find(':selected') )
			// convert object into array
			var isoFilters = [];
			for ( var prop in filters ) {
				isoFilters.push( filters[ prop ] )
			}
			console.log(filters);
			var selector = isoFilters.join('');
			$container.isotope({ filter: selector });
			return false;
		});

});