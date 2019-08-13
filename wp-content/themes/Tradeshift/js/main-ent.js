// JS file for Tradeshift.com/Enterprise
// Hook this into libraries and see magic
// Hello Denica!

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
    $('#slide-seller-trigger').on('click', function(event){
        event.preventDefault();
        $(this).parent().find('.subnav').slideToggle("slow");
        $(this).parent().toggleClass('expand');
    });
    $('#slide-partner-trigger').on('click', function(event){
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


// This is the jQuery scroll when "Request a Demo" is clicked
// Assign the target
// ------------------------------------------------------------
jQuery(document).ready(function($){
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
jQuery(document).ready(function($) {
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

// Let's take out [title] on elements on hover | Then put it back on mouseout
// --------------------------------------------------------------------------

jQuery(document).ready(function($) {
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
jQuery(document).ready(function($) {
    var changePhone = (function() {
        var onSuccess = function(geoipResponse) {
            var countryCode = geoipResponse.registered_country.iso_code;
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

// A hacky fix of affix.js in bootstrap changing width on scroll
// -----------------------------------------------------------------

jQuery(document).ready(function($) {
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
      var vals = form.vals();

      if(vals.Email){
        var email = vals.Email.toLowerCase();

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

// About Page
// ----------------------------------------------------------
$(function() {

	if (!$('main').hasClass('about-page')) return;

	$('#year2005').popover({
		placement: 'top',
		trigger: 'hover',
		viewport: '.timeline-wrapper',
		title: t9n['Meet the Founders'],
		viewport: '.timeline-contents',
		content: t9n["Christian Lanng, Mikkel Hippe Brun and Gert Sylvest came from different backgrounds, but they’re all entrepreneurs at heart. Lanng sold his first company for $1m at the tender age of 19; At first year of University Mikkel co-founded one of the first Product Information Management and publishing companies leveraging XML-technologies; and Gert consulted for Accenture before joining the 7-man team kicking off Avanade in Denmark, a joint venture between Accenture and Microsoft. The dotcom bubble burst and then they meet each other in Danish Government."],
		template: '<div class="popover blue"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#year2005').popover('show');

	$('#year2007').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['The EasyTrade Days'],
		content: t9n['Initially contracting for the Danish National IT and Telecom Agency on e-invoicing implementation, Lanng, Brun & Sylvest envision, develop and launch EasyTrade, a next generation e-invoicing platform that was adopted by 95% of Danish businesses and is still used today.'],
		template: '<div class="popover blue"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#year2009').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['PEPPOL'],
		content: t9n['Lanng, Brun & Sylvest were key in founding the visionary project PEPPOL (Pan-European Public Procurement Online) which was launched to address procurement barriers across European countries within the EU. It offers all European businesses the ability to conduct business electronically when selling goods and services across the EU.'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear62009').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['A Tweet That Launches 1,000 Ideas'],
		content: t9n['Responding to a tweet sent out by early Skype investor Morten Lund, Lanng, Brun & Sylvest and Lund start collaborating. Lund becomes a key advisor, investor and, for a time, Tradeshift’s chairman.'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear92009').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['From a Copenhagen Garage to Wired'],
		content: t9n['Working out of a garage by night, the founders start developing a business collaboration platform tailored for the private sector, earning an encouraging nod from Wired Magazine. We win the award for best business startup in Techcrunch Europas.'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear32010').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Tradeshift Launches'],
		content: t9n['After 6 months in 24-hour crunch mode with teams on 3 different continents, the first version of Tradeshift is released. Built from the start as a highly scalable platform with a global market in mind. We get our first real office in the heart of Copenhagen.'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear62010').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Paypal invests in Tradeshift'],
		content: t9n['Paypal sees the potential in Tradeshift after a keynote by Christian Lanng titled “Why banks will fail (With electronic invoicing)”. The investment allows the team to move out of the garage at Morten Lunds house and into a real office in central Copenhagen.'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear112010').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Europa Award: Best Business Startup'],
		content: t9n['Tradeshift is honored to win The Europas award for “Best Business or Enterprise Startup” across all of Europe. Guerilla marketing techniques and provoking keynotes attract more attention.'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#year2011').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Big Dreams, Big Growth'],
		content: t9n['Tradeshift secures first-round funding and continues to grow quickly, with active users in 190 countries. March 2011 also marks the first release of the Tradeshift app marketplace that includes 3rd party apps, and our first financial services.'],
		template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear102011').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Kicking Butt, Taking Names'],
		content: t9n['TechCrunch recognizes Tradeshift'],
		template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear112011').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Bound for the Bay'],
		content: t9n['Tradeshift relocates'],
		template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#year2012').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Big Launches'],
		content: t9n['Tradeshift launches new products'],
		template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear52013').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Heading East and West'],
		content: t9n['Suzhou, China'],
		template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear72013').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['A Royal Welcome'],
		content: t9n['Continues to grow'],
		template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear82013').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Portal, Shmortal'],
		content: t9n['Collaborative Workflow'],
		template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear112014').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Standardizing the Eurozone'],
		content: t9n['Tradeshift’s UBL data format'],
		template: '<div class="popover gold"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#year2014').popover({
		placement: 'bottom',
		trigger: 'hover',
		title: t9n['Offices in France, Germany and Japan'],
		content: t9n['With a broader customer base'],
		template: '<div class="popover gold"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear12015').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Disruption Recognition'],
		content: t9n['Tradeshift is honored'],
		template: '<div class="popover gold"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear12016').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Tradeshift Heats Up Davos'],
		template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear12016_2').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Secures $75m'],
		content: t9n['Tradeshift’s $75 Million'],
		template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear12017').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Acquisition #3'],
		template: '<div class="popover black"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear12017_2').popover({
		placement: 'bottom',
		trigger: 'hover',
		template: '<div class="popover black"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear12018').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['Tradeshift Raises $250 Million'],
		template: '<div class="popover blue 2018"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

  $('#monthyear12018_2').popover({
		placement: 'bottom',
		trigger: 'hover',
		template: '<div class="popover blue 2018"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

  $('#monthyear12019').popover({
		placement: 'top',
		trigger: 'hover',
		template: '<div class="popover blue 2018"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$('#monthyear122010').popover({
		placement: 'top',
		trigger: 'hover',
		title: t9n['From Europe to Six Continents'],
		content: t9n['By the end of 2010'],
		template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
	});

	$("#quote-carousel").owlCarousel({
		items : 3,
		autoPlay : 4000,
		stopOnHover: true,
		itemsDesktop : [4000,1],
		itemsDesktopSmall : [1199,1],
		itemsTablet: [768,1],
		itemsTabletSmall: false,
		itemsMobile : [479,1],
		lazyLoad : false,
		lazyFollow : true,
		lazyEffect : "fade",
	});

	$('[data-toggle="popover"]').popover();

	$('.btn-timeline').on('mouseover', function (e) {
		$('[data-toggle="popover"]').each(function () {
			//the 'is' for buttons that trigger popups
			//the 'has' for icons within a button that triggers a popup
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				$(this).popover('hide');
			}
		});
	});

});

// Attempt to translate important elements of a form. For use with Contact-Form-7 Forms and Marketo
// Call this function after the form has been added to the DOM such as in the MktoForms2.loadForm() callback param
// @param selector is string that represents a css selector. It should be the root of the form
function translateForm(selector) {

	// Check to see if the inner html is a match to be translated. If not, try each of the child text nodes to see if any
	// of them are a match. Unfortunately there are situations with both Marketo and Contact-Form-7 that force us to need
	// this
	var textReplace = function () {
		var $this = $(this);

		// Attempt to replace the html string for children first so we can handle situations where links appear in
		// translatable text, i.e., `Please accept the <a href="/pp">Privacy Policy</a>`
		var replacement = t9n[$this.html()];

		if (replacement) {
			$this.html(replacement);
			return;
		}

		// Our inner html did not show up in the map so now we attempt to translate individual children if they are text
		// nodes
		for (var i = 0; i < this.childNodes.length; i++) {
			var node = this.childNodes[i];

			if (node.nodeName == '#text') {
				replacement = t9n[node.nodeValue];

				if (replacement) {
					node.nodeValue = replacement;
				}
			}
		}
	};

	// Check to see if the given attribute exists and is available for translation
	// @param attr is the name of the attribute as a string
	var makeAttrReplace = function (attr) {
		return function () {
			var $this = $(this);
			var val = t9n[$this.attr(attr)];

			if (val) {
				$this.attr(attr, val);
			}
		};
	};

	// Regular label elements that all forms have
	$(selector + ' label').each(textReplace);

	// Toolbar buttons used on the contact page to switch between the different contact-form-7 forms
	$(selector + ' .wpcf7-list-item-label').each(textReplace);

	// Placeholder attribute of the input elements that all forms have
	$(selector + ' input').each(makeAttrReplace('placeholder'));

	// Placeholder attribute of the textarea element
	$(selector + ' textarea').each(makeAttrReplace('placeholder'));

	// The value attribute of the input[type="submit"] element functions as the button's label
	// I really hope this doesn't mess up the submission of any forms 🤞
	$(selector + ' input[type="submit"]').each(makeAttrReplace('value'));

	// Another variation of the input[type="submit"] with the child text node serving as the label this time
	$(selector + ' button[type="submit"]').each(textReplace);

	// All the option elements
	$(selector + ' option').each(textReplace);

	// An explicit attribute that can be added for general purpose text replacement
	$(selector + ' [data-should-translate]').each(textReplace);

	// Set up a MutationObserver to watch for Marketo error messages
	if (window.MutationObserver) {
		var forms = document.querySelectorAll('[data-should-watch-and-translate]');
		var config = {
			attributes: false,
			childList: true,
			subtree: true,
		};

		forms.forEach(function (form) {
			var observer = new MutationObserver(function() {
				$(selector + ' .mktoErrorMsg').each(textReplace);
			});

			observer.observe(form, config);
		});
	}
}

// Translate any contact-form-7 forms. Marketo forms need to have this function called in a callback passed to the
// MktoForms2.whenReady call
$(translateForm('.wpcf7-form'));
