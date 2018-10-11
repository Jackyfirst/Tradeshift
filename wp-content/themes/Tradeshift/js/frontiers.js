import jQuery from './jquery-2.1.1.js';
let $ = jQuery;

$(window).load(function() {

	if ($(window).width() > 992) {

		// let's make the container of each icon the same size
		// first things first...let's declare the array
		let featuredArticles = [];

		// now time to create the array with our height of
		// the icon containers
		$.each($('.icon-container'), function() {
			featuredArticles.push($(this).height());
		});

		// now let's simply use the spread operator (I LOVE ES6)
		// to get the max value out of the heights the array holds
		let max = Math.max(...featuredArticles);

		// now that we have the max value
		// let's make all icon containers be that height
		$('.icon-container').height(max);

		/* ######################################### */


		$('.mCustomScrollBox').hover(function() {
			$('.mCSB_scrollTools .mCSB_draggerContainer').fadeIn();
		}, function() { $('.mCSB_scrollTools .mCSB_draggerContainer').fadeOut(); });

	}

	/* ######################################### */

	// ok not let's create the featured collapsing article panels for mobile
	// first let's limit the amount of words displayed
	if ($(window).width() < 992) {
    //small screen, load other JS files
	    let string = "";
		let len = 140;

		if( $('.article.featured').attr('aria-expanded') === 'false' ) {
			$('.article.featured p + p').addClass('truncated');
		}

		$.each($('.article.featured p:first-of-type'), function() {
			var P_string = $(this).text();
			var trimmedString = P_string.substring(0, len) + "<span class='ellipses show'>...</span>" + "<span class='truncated'>"+P_string.substring(len)+"</span>";

			$(this).html(trimmedString);
		});

		$('.collapsePanel').click(function() {
			$(this).find('.down-arrow').toggleClass('rotate180deg');
			var controls = $(this).attr('aria-controls');
			
			if(document.getElementById(controls).getAttribute('aria-expanded') == 'false') {
				document.getElementById(controls).setAttribute('aria-expanded', 'true');
			}
			else {
				document.getElementById(controls).setAttribute('aria-expanded', 'false');
			}

			$('#' + controls + ' span:not(.ellipses), #' + controls + ' p + p').slideToggle('slow').toggleClass('truncated');
			$('#' + controls + ' .ellipses').slideToggle('slow').toggleClass('show');
		});
	}

});