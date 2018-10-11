
$(document).ready(function(){

	// Slider
	// Accordion for extra small screens or devices (phones)
	// this section is hidden on large and small scrrens or devices
	$('.item-solution .panel-heading').click(function() {
		//remove active class
		$('.panel-heading').removeClass('active');
			// add class if it's in expanded state
			if(  $( this ).attr('aria-expanded') === "false" || typeof $( this ).attr('aria-expanded') == 'undefined'  ) {
				$( this ).addClass('active');
				$( this ).find('span.toggle').text('X Close');
			} else {
				$( this ).find('span.toggle').text('Press to explore');
			}
			// else do nothing
		//}
	});


	// Tabbed carousel for large and small screens or devices (desktop - ipad)
	// this section is hidden on extra small scrrens or devices

	// default state is pause
	$('.carousel').carousel('pause');

	// start carousel only when in viewport
	// and pause again if not in viewport anymore
	var inview = new Waypoint.Inview({
    	element: document.getElementById('carousel'),
    	enter: function(down) {
        	$('.carousel').carousel({
        		interval: 3000
        	})
      	},
      	exited: function(down) {
        	$('.carousel').carousel('pause');
      	}
    });

	// Check carousel position
	// add active class to current item
	// start over if end of carousel is reached
	var clickEvent = false;
	$('#carousel').on('click', '.nav a', function() {
		clickEvent = true;
		$('#carousel .nav li').removeClass('active');
		$(this).parent().addClass('active');    
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('#carousel .nav').children().length -1;
			var current = $('#carousel .nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			console.log('id: '+id);
			console.log('count '+count);
			if(count == id) {
		    	$('#carousel .nav li').first().addClass('active');  
		  	}
		}
		clickEvent = false;
	});

	
	 $('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 1000);
	      return false;
	    }
	  }
	});

});