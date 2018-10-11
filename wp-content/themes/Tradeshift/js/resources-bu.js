// JS file for the resources page

// Activate chosenJS
jQuery(document).ready(function($) {
	$(".by-roles").chosen({
		inherit_select_classes: true,
		placeholder_text_multiple: "Select Role"
	});
	$(".by-media-type").chosen({
		inherit_select_classes: true,
		placeholder_text_multiple: "Select Media Type"
	});

});

// Activate isotopeJS
jQuery(document).ready(function($) {
    var $container = $('#list-container');
    $container.isotope({
        filter: '*',
        itemSelector: '.resource-list',
        layoutMode: 'fitRows',
        animationOptions: {
            duration: 1000,
            easing: 'linear',
            transformsEnabled: false
        }
    });

// This allows us to select both inputs as filter
function cartesianSelector(filter1,filter2){
    var map = [];

    if (filter2.length == 0 || filter2.indexOf('*')>-1) return filter1;
    if (filter1.length == 0 || filter1.indexOf('*')>-1) return filter2;

    for (var x=0;x<filter1.length;x++){
        for (var y=0;y<filter2.length;y++){
           map.push(filter1[x]+filter2[y]);
        }
    }
    return map;
}

var filters = $('#filter-roles,#filter-media-types').change(function(){
	var selectorA = $('option:selected', filters[0]).map(function(){
	       return $(this).attr('data-filter');
	   }).get(),
	  selectorB = $('option:selected', filters[1]).map(function(){
	       return $(this).attr('data-filter');
	  }).get(),
	  selector = cartesianSelector(selectorA, selectorB).join();

	$container.isotope({ 
	   filter: selector,
	   animationOptions: {
	       	duration: 1000,
	        easing: 'linear',
	        transformsEnabled: false
	  }
	});
	$(".isotope-reset").click(function(){
	    $container.isotope({
	        filter: '*'
	    });
	});
	return false; 
	});
});

// Attempt to get infinite scroll working

// $container.infinitescroll({

//       var $container = $('#resource-container');

//       $container.isotope({
//         itemSelector : '.resource-list'
//       });

//       $container.infinitescroll({
//         navSelector  : '#page_nav',    // selector for the paged navigation 
//         nextSelector : '#page_nav a',  // selector for the NEXT link (to page 2)
//         itemSelector : '.resource-list',     // selector for all items you'll retrieve
//         loading: {
//             finishedMsg: 'No more pages to load.',
//             img: 'http://i.imgur.com/qkKy8.gif'
//           }
//         },
//         // call Isotope as a callback
//         function( newElements ) {
//           $container.isotope( 'appended', $( newElements ) ); 
//         }
//      );
// });

