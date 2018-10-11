// JS file for Tradeshift.com/SMB
// Hello Kate!

// Main Sitewide Navigation - Mobile, Tablet, Small Desktop <992px
// Inspired: Cody House: https://codyhouse.co/gem/secondary-sliding-navigation/
// -------------------------------------------------------
jQuery(document).ready(function($){


    var $mainNav = $('.slide-out-nav .main-nav');
    var $mainNav_2 = $('.main-nav-solutions');
    var $headerSitewide = $('header.sitewide-nav');
    var $headerSitewideSolutions = $('header.sitewide-nav-solutions');
    var $footerSitewide = $('footer.sitewide-menu');
    var $mainContent = $('.main-content');
    var $entSubnav = $('.ent-subnav');
    var $tsSubnav = $('.ts-subnav');
    var $appSubnav = $('.app-subnav');

    // move nav element position according to window width
    moveNavigation();
    $(window).on('resize', function(){
        (!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
    });

    // mobile version - open/close navigation SLIDE-OUT
    $('.slide-out-nav #nav-trigger').on('click', function(event){
        event.preventDefault();
        if($headerSitewide.hasClass('nav-is-visible'))
            $('.moves-out').removeClass('moves-out');
        $headerSitewide.toggleClass('nav-is-visible');
        $footerSitewide.toggleClass('nav-is-visible');
        $mainNav.toggleClass('nav-is-visible');
        $mainNav_2.removeClass('nav-is-visible');
        $mainContent.toggleClass('nav-is-visible');
        $entSubnav.removeClass('nav-is-visible');
        $tsSubnav.removeClass('nav-is-visible');
        $appSubnav.removeClass('nav-is-visible');
    });
    // open SLIDE-OUT sub-navigation
    $('.subnav-level-2 .header-link').click(function() {
        $( this ).find('.subnav-level-3').addClass( "open" );
    });

    $('#slide-ent-trigger').on('click', function(event){
        event.preventDefault();
        $(this).parent().find('.subnav').slideToggle("slow");
        $(this).parent().toggleClass('expand');
    });
    $('#slide-ts-trigger').on('click', function(event){
        event.preventDefault();
        $('.main-nav').toggleClass('open');
        $(this).parent().find('.subnav').slideToggle("slow");
        $(this).parent().toggleClass('expand');
    });
    $('#slide-app-trigger').on('click', function(event){
        event.preventDefault();
        $(this).parent().find('.subnav').slideToggle("slow");
        $(this).parent().toggleClass('expand');
    });
    $('#slide-resources-trigger').on('click', function(event){
        event.preventDefault();
        $(this).parent().find('.subnav').slideToggle("slow");
        $(this).parent().toggleClass('expand');
    });
    $('.subnav-level-2 .header-link').click(function() {
        event.preventDefault();
        $('.subnav-level-2').toggleClass('open')
        $('.subnav-level-3').slideToggle('slow');
    });



    // mobile version - open/close navigation SOLUTIONS
    $('.solutions-nav #nav-trigger').on('click', function(event){
        event.preventDefault();
        if($headerSitewideSolutions.hasClass('nav-is-visible'))
            $('.moves-out').removeClass('moves-out');
        $headerSitewideSolutions.toggleClass('nav-is-visible');
        $footerSitewide.toggleClass('nav-is-visible');
        $mainNav_2.toggleClass('nav-is-visible');
        $mainNav.removeClass('nav-is-visible');
        $mainContent.toggleClass('nav-is-visible');
        $entSubnav.removeClass('nav-is-visible');
        $tsSubnav.removeClass('nav-is-visible');
        $appSubnav.removeClass('nav-is-visible');
    });
    // // open sub-navigation
    $('#ent-trigger-solutions').on('click', function(event){
        event.preventDefault();
        $mainNav_2.toggleClass('moves-out');
        $entSubnav.toggleClass('nav-is-visible');
    });
    $('#ts-trigger-solutions').on('click', function(event){
        event.preventDefault();
        $mainNav_2.toggleClass('moves-out');
        $tsSubnav.toggleClass('nav-is-visible');
    });
    $('#app-trigger-solutions').on('click', function(event){
        event.preventDefault();
        $mainNav_2.toggleClass('moves-out');
        $appSubnav.toggleClass('nav-is-visible');
    });

    // mobile version - go back to main navigation
    $('.go-back').on('click', function(event){
        event.preventDefault();
        $mainNav_2.removeClass('moves-out');
        $entSubnav.removeClass('nav-is-visible');
        $tsSubnav.removeClass('nav-is-visible');
        $appSubnav.removeClass('nav-is-visible');
    });

    var currentScreenSizeIsDesktop = true;
    function moveNavigation(){
        var navigation = $('.main-nav-wrapper');
        var modalSignUp = $('#SignUpModal');
        var screenSize = checkWindowWidth();
        if (screenSize == currentScreenSizeIsDesktop) {
            return;
        }
        currentScreenSizeIsDesktop = screenSize;

      if ( screenSize ) {
        //desktop screen - insert navigation inside header element
            //navigation.detach();
            // navigation.insertAfter('.navbar-brand');
            // $('li#nav-list').addClass('dropdown');
            // $('.nav-list').addClass('dropdown');
            // $mainNav.addClass('nav navbar');
            // $mainNav.removeClass('main-nav');
            // $('.subnav-trigger').removeClass('subnav-trigger');
        } else {
            //mobile screen - insert navigation after footer element
            navigation.detach();
            modalSignUp.detach();
            navigation.insertAfter('.main-content');
            modalSignUp.insertAfter('.main-content');
            $mainNav.removeClass('nav navbar');
            $mainNav.addClass('main-nav');
        }
    };
    function checkWindowWidth() {
        var mq = window.getComputedStyle(document.querySelector('header.sitewide-nav-solutions, header.sitewide-nav'), '::before').getPropertyValue('content').replace(/"|'/g, '');
        return ( mq == 'mobile' ) ? false : true;
    }
});

// Desktop Navigation for sub menus
// ------------------------------------------------------

$(document).ready(function($){
    var $subNavMainWrapper = $('.sub-nav-main-wrapper')
    var $rolesSubNavWrapper = $('.sub-nav-wrapper-roles');
    var $solutionsSubNavWrapper = $('.sub-nav-wrapper-solutions');
    var $resourcesSubNavWrapper = $('.sub-nav-wrapper-resources');
    var $subNavFirstOfType = $('.sub-nav-main-wrapper');

    $('#main-nav-link-roles').click(function(event) {
        event.preventDefault();
        $rolesSubNavWrapper.detach();
        $subNavFirstOfType.prepend($rolesSubNavWrapper);
        $('#subNavSolutions').slideUp(function(){$('#main-nav-link-solutions').removeClass('is-active')});
        $('#subNavResources').slideUp(function(){$('#main-nav-link-resources').removeClass('is-active')});
        $rolesSubNavWrapper.slideToggle(function(){$('#main-nav-link-roles').toggleClass('is-active')});
        event.stopPropagation();
    });
    $('#main-nav-link-solutions').click(function(event) {
        event.preventDefault();
        $solutionsSubNavWrapper.detach();
        $subNavFirstOfType.prepend($solutionsSubNavWrapper);
        $('#subNavRoles').slideUp(function(){$('#main-nav-link-roles').removeClass('is-active')});
        $('#subNavResources').slideUp(function(){$('#main-nav-link-resources').removeClass('is-active')});
        $solutionsSubNavWrapper.slideToggle(function(){$('#main-nav-link-solutions').toggleClass('is-active')});
        event.stopPropagation();
    });
    $('#main-nav-link-resources').click(function(event) {
        event.preventDefault();
        $resourcesSubNavWrapper.detach();
        $subNavFirstOfType.prepend($resourcesSubNavWrapper);
        $('#subNavRoles').slideUp(function(){$('#main-nav-link-roles').removeClass('is-active')});
        $('#subNavSolutions').slideUp(function(){$('#main-nav-link-solutions').removeClass('is-active')});
        $resourcesSubNavWrapper.slideToggle(function(){$('#main-nav-link-resources').toggleClass('is-active')});
        event.stopPropagation();
    });

    // Close SubNav if open on click of trigger close icon
    $('#sub-nav-trigger-desktop-roles').on('click', function(){
        $rolesSubNavWrapper.slideToggle(function(){$('#main-nav-link-roles').toggleClass('is-active')});
    });
    $('#sub-nav-trigger-desktop-solutions').on('click', function(){
        $solutionsSubNavWrapper.slideToggle(function(){$('#main-nav-link-solutions').toggleClass('is-active')});
    });
    $('#sub-nav-trigger-desktop-resources').on('click', function(){
        $resourcesSubNavWrapper.slideToggle(function(){$('#main-nav-link-resources').toggleClass('is-active')});
    });

});



// Let's internationalize phone numbers
// -------------------------------------

var changePhone = (function() {
    var onSuccess = function(geoipResponse) {
        var countryCode = geoipResponse.country.iso_code.toUpperCase();
        if (countryCode === "FR") { // Show TS France Number
            $('.phone_default').addClass('non-active');
            $('.phone_france').removeClass('non-active');
        } else if (countryCode === "DE") {  // Show TS Germany Number
            $('.phone_default').addClass('non-active');
            $('.phone_germany').removeClass('non-active');
        } else if (countryCode === "GB") {
            // UK number is now 🅱️LOCKED because they were getting too many support calls
            // See elliott.barton@tradeshift.com for questions
            $('.sales-phone').addClass('hidden');
        } else {  // Show US for everything else
            $('.phone_default').addClass('non-active');
            $('.phone_us').removeClass('non-active');
        };
    };
    var onError = function(){
        // console.log('Hello Error');
    };
    return function() {
        geoip2.country( onSuccess, onError );
    };
}());
changePhone();


// Change the Smartling default 'ENGLISH' text with 'English'
// ----------------------------------------------------------

$(function(){
    var currentLang = $('.smt-lang').text();
    if (currentLang === 'ENGLISH') {
     $('.smt-lang').replaceWith('<div class="smt-lang">English</div>');
    }
});


