<?php
/*------------------------------------*\
	Enqueue: styles, scripts, other
\*------------------------------------*/
// Load scripts globally
// Signature: wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )

require_once('js-t9n/about.php');
require_once('js-t9n/forms.php');

add_action('wp_enqueue_scripts', 'ts_scripts');
function ts_scripts(){

	wp_register_script('jQuery', get_template_directory_uri() . '/js/jquery-2.1.1.js' , array(), false, false);
	wp_enqueue_script('jQuery'); // jQuery 2.1.1

	wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js' , array(), false, false);
	wp_enqueue_script('bootstrapJS'); // Bootstrap

	wp_register_script('modernizrJS', get_template_directory_uri() . '/js/modernizr-custom.js' , array(), false, false);
	wp_enqueue_script('modernizrJS'); // Modernizr - Shiv + SVG

	wp_register_script('mediumCookie', get_template_directory_uri() . '/js/tracking/mediumCookie.js' , array(), false, true);
	wp_enqueue_script('mediumCookie'); // Medium

	wp_register_script('facebook', get_template_directory_uri() . '/js/tracking/facebook.js' , array(), false, true);
	wp_enqueue_script('facebook'); // Facebook

	wp_register_script('ie9-placeholder', get_template_directory_uri() . '/js/jquery.placeholder.min.js' , array(), false, false);
	wp_enqueue_script('ie9-placeholder'); // IE9 Placeholder for Forms

	$main_ent = '/js/main-ent.js';
	wp_register_script(
		'main',
		get_template_directory_uri() . $main_ent,
		array(),
		filemtime(get_template_directory() . $main_ent),
		true
	);

	wp_localize_script('main', 't9n', append_about_t9n(append_forms_t9n([])));

	wp_enqueue_script('main'); // JS used for page UI other than landing pages

	wp_register_script('legacyScript', get_template_directory_uri() . '/js/legacy/scripts.js' , array(), false, true);
	wp_enqueue_script('legacyScript'); // JS used for legacy pages - Sunset when legacy pages are ALL gone | For now just deregister
};


// Load Conditionals: vendor/vanilla JS and CSS specific to templates/pages
// Signature: wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )

add_action('wp_enqueue_scripts', 'ts_conditional_scripts');
function ts_conditional_scripts(){

	if ( is_page_template( 'templates/home-main.php' ) ) {

		wp_register_script('mainpageJs', get_template_directory_uri() . '/js/main-home.js?v=20160824.2', array(), false, true);
		wp_enqueue_script('mainpageJs'); // custom JS for Main Page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/home-main-v2.php' ) || is_page_template( 'templates/home-main-v3.php') || is_page_template( 'templates/home-main-v4.php') || is_page_template( 'templates/home-main-v4-solutions.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, false);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_style('fullpageCSS', get_template_directory_uri() . '/vendor/fullpage/jquery.fullPage.css' , array(), false, false);
		wp_enqueue_style('fullpageCSS'); // http://alvarotrigo.com/fullPage/

		wp_register_script('mainpageJs', get_template_directory_uri() . '/js/main-home-v2.js', array(), false, true);
		wp_enqueue_script('mainpageJs'); // custom JS for Main Page v2

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};
	if ( is_page_template( 'templates/home-main-slide-out.php' ) || is_page_template( 'templates/goV3.php' )) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, false);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_style('fullpageCSS', get_template_directory_uri() . '/vendor/fullpage/jquery.fullPage.css' , array(), false, false);
		wp_enqueue_style('fullpageCSS'); // http://alvarotrigo.com/fullPage/

		wp_register_script('mainpageJs', get_template_directory_uri() . '/js/main-home-slide-out.js', array(), false, true);
		wp_enqueue_script('mainpageJs'); // custom JS for Main Page v2

		wp_register_style('owlCSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		// wp_register_script('owlJs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js' , array(), false, false);
		wp_register_script('owlJs', get_template_directory_uri() . '/js/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/lp-p2p.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, true);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('lpp2pJs', get_template_directory_uri() . '/js/lp-p2p.js', array(), 20170718, true);
		wp_enqueue_script('lpp2pJs'); // custom JS for LP - P2P Page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/enterprise-p2p-solution.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, true);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('lpp2pJs', get_template_directory_uri() . '/js/lp-p2p.js', array(), 20170718, true);
		wp_enqueue_script('lpp2pJs'); // custom JS for LP - P2P Page

		wp_register_script('p2p-Ent', get_template_directory_uri() . '/js/p2p-ent.js', array(), 1, true);
		wp_enqueue_script('p2p-Ent'); // custom JS for LP - P2P Page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/lp-dayinalife.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, true);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/home-ent.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('d3Js', get_template_directory_uri() . '/vendor/d3/d3.min.js', array(), false, false);
		wp_enqueue_script('d3Js'); // D3JS  http://d3js.org/

		wp_register_script('jQueryUI', get_template_directory_uri() . '/js/jquery-ui.min.js' , array(), false, false);
		wp_enqueue_script('jQueryUI'); // jQuery UI 1.11 - Use jQuery UI for interactions http://api.jqueryui.com/category/effects/

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), false, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('homeentpageJs', get_template_directory_uri() . '/js/home-ent.js', array(), false, true);
		wp_enqueue_script('homeentpageJs'); // custom JS for homepage

		$bundle = '/js/build/bundle-app.js';
		wp_register_script(
			'bundle',
			get_template_directory_uri() . $bundle,
			array(),
			filemtime(get_template_directory() . $bundle),
			true
		);
		wp_enqueue_script('bundle');

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/contact.php' ) ) {

		wp_register_script('resourceJs', get_template_directory_uri() . '/js/contact.js' , array(), false, true);
		wp_enqueue_script('resourceJs'); // Resources Page JS

	};

	if ( is_page_template( 'templates/resources.php' ) ) {
		wp_register_script('isotopeJs', get_template_directory_uri() . '/js/isotope/isotope.pkgd.min.js' , array(), false, true);
		wp_enqueue_script('isotopeJs'); // isotopeJS Library http://isotope.metafizzy.co/

		wp_register_script('ligaJs', get_template_directory_uri() . '/js/liga.js' , array(), false, true);
		wp_enqueue_script('ligaJs'); // Browser porlyfill for ligatures support - comes with linearicons font

		wp_register_script('resourceJs', get_template_directory_uri() . '/js/resources.js' , array(), false, true);
		wp_enqueue_script('resourceJs'); // Resources Page JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/event-webinar.php' ) ) {
		wp_register_script('isotopeJs', get_template_directory_uri() . '/js/isotope/isotope.pkgd.min.js' , array(), false, true);
		wp_enqueue_script('isotopeJs'); // isotopeJS Library http://isotope.metafizzy.co/

		wp_register_script('ligaJs', get_template_directory_uri() . '/js/liga.js' , array(), false, true);
		wp_enqueue_script('ligaJs'); // Browser porlyfill for ligatures support - comes with linearicons font

		wp_register_script('resourceJs', get_template_directory_uri() . '/js/event-webinar.js' , array(), false, true);
		wp_enqueue_script('resourceJs'); // Resources Page JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/about.php' ) ) {
		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/jobs.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('jobsJs', get_template_directory_uri() . '/js/jobs.js' , array(), false, true);
		wp_enqueue_script('jobsJs'); // Section specific JS


		$bundle = '/js/build/bundle-app.js';
		wp_register_script(
			'bundle',
			get_template_directory_uri() . $bundle,
			array(),
			filemtime(get_template_directory() . $bundle),
			true
		);
		wp_enqueue_script('bundle');

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/press.php' ) ) {
		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/smb.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/smbv1.php' ) || is_page_template( 'templates/smb-marketplace-buyer-ppc.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/smbv2.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/smbv3.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/smbv4.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/smbv5.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/smb-r.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/smb-sandbox.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('mainSMBJS', get_template_directory_uri() . '/js/main-smb.js' , array(), 20170731, true);
		wp_enqueue_script('mainSMBJS'); // JS used for SMB Pages - deregistered when not needed

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/ts-pro.php' ) ) {

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'single-event-webinar.php' ) ) {

		wp_register_script('facebookJS', get_template_directory_uri() . '/js/tracking/fbEventsWebinars.js' , array(), false, false);
		wp_enqueue_script('facebookJS'); // Facebook for Events and Webinars

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/general-nonav.php' ) ) {

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
	};

	if ( is_page_template( 'templates/solutions-overview.php' ) || is_page_template( 'templates/main-front-page.php' ) ) {

		wp_register_script('wow', get_template_directory_uri() . '/vendor/wow/wow.min.js' , array(), 12072017, true);
		wp_enqueue_script('wow');

		wp_register_script('axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js', array(), false, true);
		wp_enqueue_script('axios');

		$bundle = '/js/build/bundle-app.js';
		wp_register_script(
			'bundle',
			get_template_directory_uri() . $bundle,
			array(),
			filemtime(get_template_directory() . $bundle),
			true
		);

		wp_enqueue_script('bundle');

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), true, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/

		//wp_deregister_script('jQuery'); // jQuery 2.1.1

		//wp_deregister_script('bootstrapJS'); // Bootstrap

		wp_deregister_script('modernizrJS'); // Modernizr - Shiv + SVG

		wp_deregister_script('mediumCookie'); // Medium

		wp_deregister_script('facebook'); // Facebook

		wp_deregister_script('ie9-placeholder'); // IE9 Placeholder for Forms

		wp_deregister_script('legacyScript');
		wp_deregister_script('legacyScript');


		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/solutions-risk.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_script('scrollMagicJs', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), false, true);
		wp_enqueue_script('scrollMagicJs'); // ScrollMagic http://scrollmagic.io

		wp_register_script('solutionsJs', get_template_directory_uri() . '/js/solutions-risk.js' , array(), false, true);
		wp_enqueue_script('solutionsJs'); // Section specific JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/solutions-risk-scroll.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_script('scrollMagicJs', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), false, true);
		wp_enqueue_script('scrollMagicJs'); // ScrollMagic http://scrollmagic.io

		wp_register_script('scrollMagicJsDebug', get_template_directory_uri() . '/vendor/scrollmagic/minified/plugins/debug.addIndicators.min.js', array(), false, true);
		wp_enqueue_script('scrollMagicJsDebug'); // ScrollMagic AddIndicator Debugger - Comment out in prod push http://scrollmagic.io

		wp_register_script('solutionsJs', get_template_directory_uri() . '/js/solutions-risk.js?v=20151102.1' , array(), false, true);
		wp_enqueue_script('solutionsJs'); // Section specific JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/solutions-buy.php' ) ) {
		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, false);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('solutionsJs', get_template_directory_uri() . '/js/solutions-buy.js' , array(), '4.6.2', true);
		wp_enqueue_script('solutionsJs'); // Section specific JS

		wp_register_script('solutionsJs', get_template_directory_uri() . '/js/solutions-buy.js' , array(), false, true);
		wp_enqueue_script('solutionsJs'); // Section specific JS


		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/solutions-appsv2.php' ) ) {
		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('solutionsJs', get_template_directory_uri() . '/js/solutions-appsv2.js' , array(), false, true);
		wp_enqueue_script('solutionsJs'); // Section specific JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/supplier-onboarding.php' ) ) {
		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/eprocurement.php' ) ) {

		wp_register_script('twfetcherJs', get_template_directory_uri() . '/js/twFetcher-eprocure.js' , array(), false, true);
		wp_enqueue_script('twfetcherJs'); // eProcure blend with Original twFetcherJS file | Ref JS here:  https://github.com/jasonmayes/Twitter-Post-Fetcher

		wp_register_script('customscrollJs', get_template_directory_uri() . '/vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js' , array(), false, true);
		wp_enqueue_script('customscrollJs'); // Custom Scrollbar JS

		wp_register_style('customscrollCSS', get_template_directory_uri() . '/vendor/custom-scrollbar/jquery.mCustomScrollbar.min.css' , array(), false, false);
		wp_enqueue_style('customscrollCSS'); // Custom Scrollbar CSS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/delivery.php' ) ) {

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('jQueryUI', get_template_directory_uri() . '/js/jquery-ui.min.js' , array(), false, true);
		wp_enqueue_script('jQueryUI'); // jQuery UI 1.11 - Use jQuery UI for interactions http://api.jqueryui.com/category/effects/

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), false, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/

		wp_register_script('deliveryJs', get_template_directory_uri() . '/js/delivery.js', array(), false, true);
		wp_enqueue_script('deliveryJs'); // custom JS for Delivery Page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/holiday-2015.php' ) ) {

		wp_register_script('jQueryUI', get_template_directory_uri() . '/js/jquery-ui.min.js' , array(), false, true);
		wp_enqueue_script('jQueryUI'); // jQuery UI 1.11 - Use jQuery UI for interactions http://api.jqueryui.com/category/effects/

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), false, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/

		wp_register_script('snowfallJs', get_template_directory_uri() . '/vendor/snowfall-jquery/dist/snowfall.jquery.min.js', array(), false, false);
		wp_enqueue_script('snowfallJs'); // https://github.com/loktar00/JQuery-Snowfall

		wp_register_script('turnJs', get_template_directory_uri() . '/vendor/turnjs4/lib/turn.min.js', array(), false, false);
		wp_enqueue_script('turnJs'); // http://www.turnjs.com/

		wp_register_script('zoomJs', get_template_directory_uri() . '/vendor/turnjs4/lib/zoom.min.js', array(), false, false);
		wp_enqueue_script('zoomJs'); // http://www.turnjs.com/ Zoom Plugin / Needed for swipeRight/swipeLeft methods

		wp_register_script('holidayJs', get_template_directory_uri() . '/js/holiday2015.js', array(), false, true);
		wp_enqueue_script('holidayJs'); // custom JS for Holiday 2015 Page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/wec2016-davos.php' ) ) {

		wp_register_script('twfetcherJs', get_template_directory_uri() . '/js/twFetcher-davos.js' , array(), 20180122.1, true);
		wp_enqueue_script('twfetcherJs'); // Fork from original twFetcherJS file | Ref JS here:  https://github.com/jasonmayes/Twitter-Post-Fetcher

		wp_register_script('customscrollJs', get_template_directory_uri() . '/vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js' , array(), false, true);
		wp_enqueue_script('customscrollJs'); // Custom Scrollbar JS

		wp_register_style('customscrollCSS', get_template_directory_uri() . '/vendor/custom-scrollbar/jquery.mCustomScrollbar.min.css' , array(), false, false);
		wp_enqueue_style('customscrollCSS'); // Custom Scrollbar CSS

	};

	if ( is_page_template( 'templates-legacy/page_invited-tradeshift.php' ) ) {

		wp_register_script('easyautocompleteJs', get_template_directory_uri() . '/vendor/easyautocomplete/jquery.easy-autocomplete.min.js' , array(), false, true);
		wp_enqueue_script('easyautocompleteJs'); // Easy Auto Complete JS

		wp_register_style('easyautocompleteCSS', get_template_directory_uri() . '/vendor/easyautocomplete/easy-autocomplete.min.css' , array(), false, false);
		wp_enqueue_style('easyautocompleteCSS'); // Easy Auto Complete CSS

		wp_register_style('easyautocompleteThemeCSS', get_template_directory_uri() . '/vendor/easyautocomplete/easy-autocomplete.themes.min.css' , array(), false, false);
		wp_enqueue_style('easyautocompleteThemeCSS'); // Easy Auto Complete Theme CSS

	};

	if ( is_page_template( 'templates/partners.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('jQueryUI', get_template_directory_uri() . '/js/jquery-ui.min.js' , array(), false, true);
		wp_enqueue_script('jQueryUI'); // jQuery UI 1.11 - Use jQuery UI for interactions http://api.jqueryui.com/category/effects/

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), false, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/

		wp_register_script('partnersJs', get_template_directory_uri() . '/js/partners.js', array(), false, true);
		wp_enqueue_script('partnersJs'); // custom JS for Partners page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/campaigns-smb.php' ) ) {
		wp_register_style('formValidatorCSS', get_template_directory_uri() . '/vendor/formvalidation/dist/css/formValidation.min.css' , array(), false, false);
		wp_enqueue_style('formValidatorCSS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/formValidation.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorJS'); // FormValidation for Bootstrap http://formvalidation.io

		wp_register_script('formValidatorBootstrapJS', get_template_directory_uri() . '/vendor/formvalidation/dist/js/framework/bootstrap.min.js' , array(), false, false);
		wp_enqueue_script('formValidatorBootstrapJS'); // FormValidation for Bootstrap | This is FV Bootstrap specific | Not BootstrapJS | http://formvalidation.io

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/roles-cao.php' ) ) {
		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/gov2.php' ) || is_page_template( 'templates/goV3.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, false);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_style('fullpageCSS', get_template_directory_uri() . '/vendor/fullpage/jquery.fullPage.css' , array(), false, false);
		wp_enqueue_style('fullpageCSS'); // http://alvarotrigo.com/fullPage/

		wp_register_script('mainpageJs', get_template_directory_uri() . '/js/main-home-slide-out.js', array(), false, true);
		wp_enqueue_script('mainpageJs'); // custom JS for Main Page v2

		wp_register_style('fakeLoaderCSS', get_template_directory_uri() . '/vendor/fakeloader/fakeLoader.css' , array(), false, false);
		wp_enqueue_style('fakeLoaderCSS'); // FakeLoader CSS - https://raw.githubusercontent.com/joaopereirawd/fakeLoader.js/master/fakeLoader.css

		wp_register_style('fakeLoaderCSS', get_template_directory_uri() . '/vendor/fakeloader/fakeLoader.css' , array(), false, false);
		wp_enqueue_style('fakeLoaderCSS'); // FakeLoader CSS - https://raw.githubusercontent.com/joaopereirawd/fakeLoader.js/master/fakeLoader.css

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script('facebook');
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/go-rtp.php' ) ) {

		wp_register_style('fullpageCSS', get_template_directory_uri() . '/vendor/fullpage/jquery.fullPage.css' , array(), false, false);
		wp_enqueue_style('fullpageCSS'); // http://alvarotrigo.com/fullPage/

		wp_register_style('fakeLoaderCSS', get_template_directory_uri() . '/vendor/fakeloader/fakeLoader.css' , array(), false, false);
		wp_enqueue_style('fakeLoaderCSS'); // FakeLoader CSS - https://raw.githubusercontent.com/joaopereirawd/fakeLoader.js/master/fakeLoader.css

		wp_register_style('fakeLoaderCSS', get_template_directory_uri() . '/vendor/fakeloader/fakeLoader.css' , array(), false, false);
		wp_enqueue_style('fakeLoaderCSS'); // FakeLoader CSS - https://raw.githubusercontent.com/joaopereirawd/fakeLoader.js/master/fakeLoader.css

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/go-thanks.php' ) ) {
		wp_register_script('gopageJsLibs', get_template_directory_uri() . '/js/go/libs.min.js', array(), false, true);
		wp_enqueue_script('gopageJsLibs'); // JS Libs for Go

		wp_register_script('gopageJs', get_template_directory_uri() . '/js/go/go-thanks.js', array("jQuery", "gopageJsLibs"), false, true);
		wp_enqueue_script('gopageJs'); // custom JS for Go

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/go-thanks-phone.php' ) ) {
		wp_register_script('gopageJsLibs', get_template_directory_uri() . '/js/go/libs.min.js', array(), false, true);
		wp_enqueue_script('gopageJsLibs'); // JS Libs for Go

		wp_register_script('gopageJs', get_template_directory_uri() . '/js/go/go-thanks.js', array("jQuery", "gopageJsLibs"), false, true);
		wp_enqueue_script('gopageJs'); // custom JS for Go

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/rfi.php' ) || is_page_template( 'templates/rfi-coop.php' ) || is_page_template( 'templates/rfi-assa-abloy.php' ) || is_page_template( 'templates/rfi-osram.php' ) || is_page_template( 'templates/landing-page-difi.php' ) || is_page_template( 'templates/rfi-volvo.php' ) || is_page_template( 'templates/rfi-axa.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('rfiJs', get_template_directory_uri() . '/js/rfi.js' , array(), false, true);
		wp_enqueue_script('rfiJs'); // Section specific JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/rfi-ikea.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('rfiJs', get_template_directory_uri() . '/js/rfi.js' , array(), false, true);
		wp_enqueue_script('rfiJs'); // Section specific JS
	};

	if ( is_page_template( 'templates/rfi-pg.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('rfiJs', get_template_directory_uri() . '/js/rfi.js' , array(), false, true);
		wp_enqueue_script('rfiJs'); // Section specific JS

	};

	if ( is_page_template( 'templates/rfi-unilever.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsJsSticky', get_template_directory_uri() . '/js/waypoints.sticky.min.js', array(), false, true);
		wp_enqueue_script('waypointsJsSticky'); // WaypointsJS Sticky

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('rfiJs', get_template_directory_uri() . '/js/rfi.js' , array(), false, true);
		wp_enqueue_script('rfiJs'); // Section specific JS

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};
	if ( is_page_template( 'templates/sem-ent.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, true);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/


		wp_register_script('p2p-Ent', get_template_directory_uri() . '/js/p2p-ent.js', array(), 5, true);
		wp_enqueue_script('p2p-Ent'); // custom JS for LP - P2P Page


		wp_register_script('jQueryUI', get_template_directory_uri() . '/js/jquery-ui.min.js' , array(), false, false);
		wp_enqueue_script('jQueryUI'); // jQuery UI 1.11 - Use jQuery UI for interactions http://api.jqueryui.com/category/effects/

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), false, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/




		wp_register_script('ScrollToFixed', get_template_directory_uri() . '/js/ScrollToFixed.js', array(), 1, true);
		wp_enqueue_script('ScrollToFixed');

		wp_register_style('owlCSS', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' , array(), false, false);
		wp_enqueue_style('owlCSS'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_style('owlCSSTheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' , array(), false, false);
		wp_enqueue_style('owlCSSTheme'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		wp_register_script('owlJs', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js' , array(), false, false);
		wp_enqueue_script('owlJs'); // Own Carousel JS Library http://owlgraphic.com/owlcarousel/

		//Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/ada.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, true);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('lpp2pJs', get_template_directory_uri() . '/js/lp-p2p.js', array(), 20170718, true);
		wp_enqueue_script('lpp2pJs'); // custom JS for LP - P2P Page

		wp_register_script('Ada', get_template_directory_uri() . '/js/ada.js', array(), false, false);
		wp_enqueue_script('Ada'); // custom JS for Ada Landing page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/ibx-tradeshift.php' ) ) {

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, true);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('Ada', get_template_directory_uri() . '/js/ada.js', array(), false, false);
		wp_enqueue_script('Ada'); // custom JS for Ada Landing page

		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'main' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/connect.php' ) ) {
		wp_register_script('typedJs', get_template_directory_uri() . '/vendor/typed/typed.min.js', array(), false, true);
		wp_enqueue_script('typedJs'); // typedJS  http://www.mattboldt.com/demos/typed-js/

		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, false);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('connectJs', get_template_directory_uri() . '/js/connect.js' , array(), '4.6.2', true);
		wp_enqueue_script('connectJs'); // Section specific JS

		wp_register_script('solutionsJs', get_template_directory_uri() . '/js/connect.js' , array(), false, true);
		wp_enqueue_script('solutionsJs'); // Section specific JS


		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};
	if ( is_page_template( 'templates/peppol-access-point.php' ) ) {
		wp_register_script('waypointsJs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, false);
		wp_enqueue_script('waypointsJs'); // WaypointsJS - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_script('waypointsInviewJs', get_template_directory_uri() . '/js/waypoints.inview.min.js', array(), false, false);
		wp_enqueue_script('waypointsInviewJs'); // WaypointsJS Inview - Trigger actions when elements are detected http://imakewebthings.com/waypoints/

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), false, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/

		// wp_register_script('mainpageJs', get_template_directory_uri() . '/js/main-home-slide-out.js', array(), 20170718, true);
		// wp_enqueue_script('mainpageJs'); // custom JS for Main Page v2


		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );

	};

	if ( is_page_template( 'templates/frontiers.php' ) ) {

		$bundle = '/js/build/bundle-app.js';
		wp_register_script(
			'bundle',
			get_template_directory_uri() . $bundle,
			array(),
			filemtime(get_template_directory() . $bundle),
			true
		);

		wp_enqueue_script('bundle');

		wp_register_style('animateCSS', get_template_directory_uri() . '/css/animate.css' , array(), true, false);
		wp_enqueue_style('animateCSS'); // AnimateCSS - Mainly used for promo banner on home page http://daneden.github.io/animate.css/


		wp_deregister_script('modernizrJS'); // Modernizr - Shiv + SVG

		wp_deregister_script('mediumCookie'); // Medium

		wp_deregister_script('facebook'); // Facebook

		wp_deregister_script('ie9-placeholder'); // IE9 Placeholder for Forms

		wp_deregister_script('legacyScript');
		wp_deregister_script('legacyScript');


		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

	if ( is_page_template( 'templates/seller-club.php' ) ) {

		wp_register_script('Vue', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js' , array(), 20180509, false);
		wp_enqueue_script('Vue');

		wp_deregister_script('modernizrJS'); // Modernizr - Shiv + SVG

		wp_deregister_script('mediumCookie'); // Medium

		wp_deregister_script('facebook'); // Facebook

		wp_deregister_script('legacyScript');
		wp_deregister_script('legacyScript');


		// Deregister globally loaded plugin scripts/styles not needed on this page
		wp_deregister_script( 'contact-form-7' );
		wp_deregister_script( 'legacyScript' );
		wp_deregister_style( 'contact-form-7' );
	};

}

add_action('wp_enqueue_scripts', 'ts_styles');
function ts_styles() {
	$style_ent = '/css/style-ent.css';
	wp_register_style(
		'style-ent',
		get_template_directory_uri() . $style_ent,
		array(),
		filemtime(get_template_directory() . $style_ent)
	);
	wp_enqueue_style('style-ent');
}
