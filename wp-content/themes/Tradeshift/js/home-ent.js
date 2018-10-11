// Home page Enterprise JS only
// --------------------------------------------------------------------

// Rethink D3 Force Directed Graph - iPad and above viewport
// ? Draw only when the title of the section "Rethink" is reached
// -------------------------------------------------------------

$('#rethink').waypoint(function(direction) {
  tsPlatform();
  this.destroy();
});

// We understand your needs - Roles Overview section
// ? Have whole div clickable as well as send click event to GA
// ------------------------------------------------------------------

$('#executives').click(function() {
  window.location.href = '/enterprise/roles/executives';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Executives');
});
$('#procurement').click(function() {
  window.location.href = '/enterprise/roles/procurement';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Procurement');
});
$('#p2p').click(function() {
    window.location.href = '/enterprise/roles/procure-to-pay-process/';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Procure-to-Pay');
});
$('#finance').click(function() {
  window.location.href = '/enterprise/roles/finance';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Finance');
});
$('#ap').click(function() {
  window.location.href = '/enterprise/roles/accounts-payable';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Accounts Payable');
});
$('#it').click(function() {
  window.location.href = '/enterprise/roles/it';
    ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'IT');
});

// Home Page: Your success story starts here
// ? Facilitate UI animation of timeline loop and stop on hover
// -------------------------------------------------------------

jQuery(document).ready(function($){
  var $arc = $('.success-steps'),
      $arcSlides = $arc.find('.success-steps-list'),
      $arcLinks = $arc.find('.success-trigger'),
      showSlide = function(num) {
        var $arcSlide = $arcSlides.eq(num);
        $arcSlides.not($arcSlide).removeClass('is-active');
        $arcSlide.addClass('is-active');
      };

  // Auto reveal of steps
  var slideIndex = 1,
      endPoint = $arcSlides.length - 1,
      slideAnimation = setInterval(function(){
        if(slideIndex <= endPoint) {
          showSlide( slideIndex );
          slideIndex++;
        } else {
          slideIndex = 0;
          showSlide( slideIndex );
          slideIndex++;
        }
      },4000);

  // When icon is clicked
  $arcLinks.on('click', function(e){
    showSlide( $(this).parent().index() );
    clearInterval(slideAnimation);
    e.preventDefault();
  });

  $arcLinks.on('mouseenter', function(e){
    showSlide( $(this).parent().index() );
    clearInterval(slideAnimation);
    e.preventDefault;
  });
});

// Promo banner fixed at bottom of viewport
// -------------------------------------------------

// ? Internationalize the promo banner |  location taxonomy

jQuery(document).ready(function($) {
  $('#promo').show( 'slide', {
    direction: 'down',
    duration: 1200,
    easing: 'easeOutCubic'
  });
  if($('.promo-banner').length){
      var countryTranslations = {
        'US': 'us',
        'FR': 'france',
        'DE': 'germany',
        'UK': 'uk'
      };
      // var continent = geoipResponse.continent.code;  // Calls function from the GeoIP MaxMind web service | js is on header.php
      var currentCountryCode = geoip2.country(); // Calls function from the GeoIP MaxMind web service | js is on header.php
      var currentCountry = countryTranslations[currentCountryCode];
      if (typeof countryTranslations[currentCountryCode] == 'undefined') {
        var currentCountry = 'us';
      } else {
        var currentCountry = countryTranslations[currentCountryCode];
      }
      $('.promo-location-posts[data-country="' + currentCountry + '"]').removeClass('inactive');
      // console.log(continent);
  };
});

// ? Promo Banner appears after hitting the tagline | uses waypointJS
// -----------------------------------------

jQuery(document).ready(function($){
  $('#tagline').waypoint(function(direction) {
    $('#promo').toggle('slide', {
        direction: 'down',
        duration: 1200,
        easing: 'easeOutCubic'
        });
  },{
    offset:'-10%'
  });

  $('#tagline-video').waypoint(function(direction) {
    $('#promoBanner').toggle('slide', {
        direction: 'down',
        duration: 1200,
        easing: 'easeOutCubic'
        });
  },{
    offset:'-10%'
  });
});

