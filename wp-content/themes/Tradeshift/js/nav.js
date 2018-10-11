// This file contains custom, vanilla JS used to make the Tradeshift.com sitewide nav come alive
// Hook this into libraries and see magic
// Hello Denica!

// Main Sitewide Navigaation
// -------------------------------------------------------

$(document).ready(function($){
	var $mainNav = $('.main-nav');
	var $headerSitewide = $('header.sitewide-nav');
	var $footerSitewide = $('footer.sitewide');
	var $mainContent = $('.main-content');
	var $promoBanner = $('.promo-banner');
	var $whatIsTradeshiftSubNav = $('.what-is-tradeshift-subnav');
	var $solutionsSubnav = $('.solutions-subnav');
	var $rolesSubnav = $('.roles-subnav');
	var $learnSubnav = $('.learn-subnav');

	// move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	// mobile version - open/close navigation
	$('#nav-trigger').on('click', function(event){
		event.preventDefault();
		if($headerSitewide.hasClass('nav-is-visible'))
			$('.moves-out').removeClass('moves-out');
		$headerSitewide.toggleClass('nav-is-visible');
		$footerSitewide.toggleClass('nav-is-visible');
		$mainNav.toggleClass('nav-is-visible');
		$mainContent.toggleClass('nav-is-visible');
		$promoBanner.toggleClass('nav-is-visible');
		$whatIsTradeshiftSubNav.removeClass('nav-is-visible');
		$solutionsSubnav.removeClass('nav-is-visible');
		$rolesSubnav.removeClass('nav-is-visible');
		$learnSubnav.removeClass('nav-is-visible');
	});

	// open sub-navigation
	$('#what-is-tradeshift-trigger').on('click', function(event){
		event.preventDefault();
		$mainNav.toggleClass('moves-out');
		$whatIsTradeshiftSubNav.toggleClass('nav-is-visible');
	});
	$('#solutions-trigger').on('click', function(event){
		event.preventDefault();
		$mainNav.toggleClass('moves-out');
		$solutionsSubnav.toggleClass('nav-is-visible');
	});
	$('#roles-trigger').on('click', function(event){
		event.preventDefault();
		$mainNav.toggleClass('moves-out');
		$rolesSubnav.toggleClass('nav-is-visible');
	});
	$('#learn-trigger').on('click', function(event){
		event.preventDefault();
		$mainNav.toggleClass('moves-out');
		$learnSubnav.toggleClass('nav-is-visible');
	});

	// mobile version - go back to main navigation
	$('.go-back').on('click', function(event){
		event.preventDefault();
		$mainNav.removeClass('moves-out');
		$whatIsTradeshiftSubNav.removeClass('nav-is-visible');
		$solutionsSubnav.removeClass('nav-is-visible');
		$rolesSubnav.removeClass('nav-is-visible');
		$learnSubnav.removeClass('nav-is-visible');
	});

	var currentScreenSizeIsDesktop = true;
	function moveNavigation(){
		var navigation = $('.main-nav-wrapper');
		var screenSize = checkWindowWidth();
		if (screenSize == currentScreenSizeIsDesktop) {
			return;
		}
		currentScreenSizeIsDesktop = screenSize;

	  if ( screenSize ) {
	    //desktop screen - insert navigation inside header element
			navigation.detach();
			navigation.insertAfter('.navbar-brand');
			$('li#nav-list').addClass('dropdown');
	    	$('.nav-list').addClass('dropdown');
			$mainNav.addClass('nav navbar');
			$mainNav.removeClass('main-nav');
			$('.subnav-trigger').removeClass('subnav-trigger');
			$whatIsTradeshiftSubNav.addClass('dropdown-menu row');
			$whatIsTradeshiftSubNav.removeClass('what-is-tradeshift-subnav');
			$solutionsSubnav.addClass('dropdown-menu row');
			$solutionsSubnav.removeClass('solutions-subnav');
			$rolesSubnav.addClass('dropdown-menu row');
			$rolesSubnav.removeClass('roles-subnav');
			$learnSubnav.addClass('dropdown-menu row');
			$learnSubnav.removeClass('learn-subnav');
		} else {
			//mobile screen - insert navigation after footer element
			navigation.detach();
			navigation.insertAfter('.main-content');
			$mainNav.removeClass('nav navbar');
			$mainNav.addClass('main-nav');
		}
	}
	function checkWindowWidth() {
		var mq = window.getComputedStyle(document.querySelector('header.sitewide-nav'), '::before').getPropertyValue('content').replace(/"|'/g, '');
		return ( mq == 'mobile' ) ? false : true;
	}
})






