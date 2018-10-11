// Sitewide JS file for Enterprise Website /enterprise (except for Main Tradeshift.com Home Page)
// Hook this into libraries and see magic
// Hello Denica!

// Main Sitewide Navigation
// Inspired: Cody House: https://codyhouse.co/gem/secondary-sliding-navigation/
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
    var $smbSubnav = $('.smb-subnav');

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
});

// This is the jQuery scroll when "Request a Demo" is clicked
// Assign the target
// ------------------------------------------------------------
$(document).ready(function(){
    $('a[href^="#request-demo"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

// Use this for Landing Pages back to top
// -----------------------------------------------------------
$(document).ready(function($) {
    $('a[href^="#fillForm"]').on('click',function (e) {
        e.preventDefault();
        var target = this.hash;
        $target = $(target);

        $('html, body').stop().animate( {
            'scrollTop': $target.offset().top-75
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
        $('input[type!="hidden"]:first').focus();
        $('input[type!="hidden"]:first').css('border', '2px solid green !important');
    } );
});

// Enterprise Home Page - Roles Overview page on click event for imagery
// ------------------------------------------------------------------

$('#executives').click(function() {
	window.location.href = '/roles/executives';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Executives');
});
$('#procurement').click(function() {
	window.location.href = '/roles/procurement';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Procurement');
});
$('#p2p').click(function() {
    window.location.href = '/roles/procure-to-pay-process/';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Procure-to-Pay');
});
$('#finance').click(function() {
	window.location.href = '/roles/finance';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Finance');
});
$('#ap').click(function() {
	window.location.href = '/roles/accounts-payable';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Accounts Payable');
});
$('#it').click(function() {
	window.location.href = '/roles/it';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'IT');
});

// Let's take out [title] on elements on hover | Then put it back on mouseout
// --------------------------------------------------------------------------

$(document).ready(function() {
    $('#solutions-menu > li > a[title]').mouseover(function () {
        $this = $(this);
        $this.data('title', $this.attr('title'));
        // Using null here wouldn't work in IE, but empty string will work just fine.
        $this.attr('title', '');
    }).mouseout(function () {
        $this = $(this);
        $this.attr('title', $this.data('title'));
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
        } else if (countryCode === "UK") {  // Show TS UK Number if not France nor Germany
            $('.phone_default').addClass('non-active');
            $('.phone_uk').removeClass('non-active');
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


// IE9 Placeholder: https://github.com/mathiasbynens/jquery-placeholder
// ----------------------------------------------------------------------
// $(document).ready(function() {
//     $('input').placeholder();
// });


// A hacky fix of affix.js in bootstrap changing width on scroll
// -----------------------------------------------------------------

$(function() {
    var $affixElement = $('div[data-spy="affix"]');
    $affixElement.width($affixElement.parent().width());
});

// Prevents Marketo Form to submit a non-business e-mail
// ------------------------------------------------------

(function (){
  // Please include the email domains you would like to block in this list
  var invalidDomains = ["@gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook.","@msn."];

  MktoForms2.whenReady(function (form){
    form.onValidate(function(){
      var email = form.vals().Email.toLowerCase();
      if(email){
        if(!isEmailGood(email)) {
          form.submitable(false);
          var emailElem = form.getFormElem().find("#Email");
          form.showErrorMessage("Must be business email", emailElem);
        }else{
          form.submitable(true);
        }
      }
    });
  });
  
  function isEmailGood(email) {
    for(var i=0; i < invalidDomains.length; i++) {
      var domain = invalidDomains[i];
      if (email.indexOf(domain) != -1) {
        return false;
      }
    }
    return true;
  }

})();
