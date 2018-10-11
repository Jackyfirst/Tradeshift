// JS file for Tradeshift.com Main Home Page
// Hook this into libraries and see magic
// Hello Denica!


// Main Sitewide Navigation
// Inspired: Cody House: https://codyhouse.co/gem/secondary-sliding-navigation (mobile)
// -------------------------------------------------------

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

jQuery(document).ready(function($){
    var $subNavMainWrapper = $('#subNavMainWrapper');
    var $entSubNavWrapper = $('.sub-nav-wrapper-ent');
    var $appsSubNavWrapper = $('.sub-nav-wrapper-apps');
    var $resourcesSubNavWrapper = $('.sub-nav-wrapper-resources');

    $('#main-nav-link-ent').click(function(event) {
        event.preventDefault();
        $entSubNavWrapper.detach();
        $subNavMainWrapper.prepend($entSubNavWrapper);
        $('#subNavApps').slideUp(function(){$('#main-nav-link-apps').removeClass('is-active')});
        $('#subNavResources').slideUp(function(){$('#main-nav-link-resources').removeClass('is-active')});
        $entSubNavWrapper.slideToggle(function(){$('#main-nav-link-ent').toggleClass('is-active')});
        event.stopPropagation();
    });
    $('#main-nav-link-apps').click(function(event) {
        event.preventDefault();
        $appsSubNavWrapper.detach();
        $subNavMainWrapper.prepend($appsSubNavWrapper);
        $('#subNavEnt').slideUp(function(){$('#main-nav-link-ent').removeClass('is-active')});
        $('#subNavResources').slideUp(function(){$('#main-nav-link-resources').removeClass('is-active')});
        $appsSubNavWrapper.slideToggle(function(){$('#main-nav-link-apps').toggleClass('is-active')});
        event.stopPropagation();
    });
    $('#main-nav-link-resources').click(function(event) {
        event.preventDefault();
        $resourcesSubNavWrapper.detach();
        $subNavMainWrapper.prepend($resourcesSubNavWrapper);
        $('#subNavApps').slideUp(function(){$('#main-nav-link-apps').removeClass('is-active')});
        $('#subNavEnt').slideUp(function(){$('#main-nav-link-ent').removeClass('is-active')});
        $resourcesSubNavWrapper.slideToggle(function(){$('#main-nav-link-resources').toggleClass('is-active')});
        event.stopPropagation();
    });

    // Close SubNav if open on click of trigger close icon
    $('#sub-nav-trigger-desktop-ent').on('click', function(){
        $entSubNavWrapper.slideToggle(function(){$('#main-nav-link-ent').toggleClass('is-active')});
    });
    $('#sub-nav-trigger-desktop-apps').on('click', function(){
        $appsSubNavWrapper.slideToggle(function(){$('#main-nav-link-apps').toggleClass('is-active')});
    });
    $('#sub-nav-trigger-desktop-resources').on('click', function(){
        $resourcesSubNavWrapper.slideToggle(function(){$('#main-nav-link-resources').toggleClass('is-active')});
    });
});


// Let's internationalize phone numbers
// -------------------------------------
jQuery(document).ready(function($){
    var changePhone = (function() {
        var onSuccess = function(geoipResponse) {
            var countryCode = geoipResponse.country.iso_code.toUpperCase();
            if (countryCode === "FR") { // Show TS France Number
                $('.phone_default').addClass('non-active');
                $('.phone_france').removeClass('non-active');
            } else if (countryCode === "DE") {  // Show TS Germany Number
                $('.phone_default').addClass('non-active');
                $('.phone_germany').removeClass('non-active');
            } else if (countryCode === "GB") {  // Show TS UK Number if not France nor Germany
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
});

// Modal view of Sign Up Modal from bottom
// ---------------------------------------------
jQuery(document).ready(function($){
    $('#menuSignupPhoneTablet').click(function() {
        $('#SignUpModal')
            // .prop('class', 'modal modal-sign-up fade') // revert to default
            .addClass( $(this).data('direction') );
        $('#SignUpModal').modal('show');
    });
});

// Disable button unless one of the input is clicked
// --------------------------------------------------

jQuery(document).ready(function($){
    $('input[type="checkbox"]').on('click', function(e) {
        $('#btn-sign-up').removeClass('disabled');
    });
});

// Sign up form checkbox value to URL
// ----------------------------------------
jQuery(document).ready(function($){
    $('#form-sign-up').submit(function(e) {
        e.preventDefault();
        window.location = $('input[type="checkbox"]:checked').val();
        var radioURL = $('input[type="checkbox"]:checked').val();
        if (radioURL === 'https://go.tradeshift.com/register') {
            var signUpDest = "SMB";
        } else {
            var signUpDest = "Go";
        };
        ga('send', 'event', 'Navigation Menu', 'Sign Up - Modal View', 'Sign Up ' + signUpDest + ' - ' +radioURL);
    });
});

// Disable other checkboxes when one is checked
// ----------------------------------------------
jQuery(document).ready(function($){
    $('.sign-up-list input:checkbox').click(function() {
        $('.sign-up-list input:checkbox').not(this).prop('checked', false);
    });
});

// Change the Smartling default 'ENGLISH' text with 'English'
// ----------------------------------------------------------

jQuery(document).ready(function($){
    var currentLang = $('.smt-lang').text();
    if (currentLang === 'ENGLISH') {
     $('.smt-lang').replaceWith('<div class="smt-lang">English</div>');
    }
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

// SameEmail for Footer into Marketo Form
// -------------------------------------------

function sameEmail() {
    var gsEmail = document.getElementById('e-mail').value;
    document.getElementById('Email').value = gsEmail;
};

// Inject the Chinese website into Smartling Dropdown
// ----------------------------------------------------------

jQuery(document).ready(function($){
    var $lastLang = $('li.smt-trigger > ul');
        $lastLang.append('<li class="smt-item"><a class="smt-link" href="http://cn.tradeshift.com/" style="display: block;">中文</a></li>');
});


// Push messaging if Adblockers are present
// ----------------------------------------------------------

jQuery(document).ready(function($){
    if(typeof MktoForms2 === 'undefined') {
        // console.log('Ad Block active');
        var $blockMessage = $('div.modal-body');
        // var $blockMessage = '';
        $blockMessage.append('<p>Hello there.<br /><br />Something\'s amiss and our web form is not showing up (most likely caused by an ad blocker). Please call us at 1-800-381-3585 or e-mail us at <a href="sales@tradeshift.com">sales@tradeshift.com</a> to request a demo.<br /><br />Cheers.</p>');
    }
});





