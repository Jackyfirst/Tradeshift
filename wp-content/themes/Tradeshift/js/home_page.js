// Home page JS only
// --------------------------------------------------------------------


//  Home Page: Supplier Platform - Text rotation Powered by Typed.js
//  ------------------------------------------------------------------

$(document).ready(function($){
  if ($('body').hasClass('smartling-de')){
    $('.text-carousel').typed({
      strings: ["kaufen.^2000", "bezahlen.^2000", "anfordern.^2000", "zusammenarbeiten.^2000", "verbinden.^5000"],
      loop: true
    })
  } else if ($('body').hasClass('smartling-ja')){
    $('.text-carousel').typed({
      strings: ["購買。^2000", "支払い。^2000", "要求。^2000", "売買。^4000"],
      loop: true
    })
  } else if ($('body').hasClass('smartling-zh')){
    $('.text-carousel').typed({
      strings: ["采购.^2000", "支付.^2000", "交易.^4000"],
      loop: true
    })
  } else if ($('body').hasClass('smartling-fr')){
    $('.text-carousel').typed({
      strings: ["acheter.^2000", "pay.^2000", "demande.^2000", "collaborer.^2000", "relier.^4000"],
      loop: true
    })
  } else {
    $('.text-carousel').typed({
      strings: ["buy.^2000", "pay.^2000", "request.^2000", "collaborate.^2000", "connect.^4000"],
      loop: true
    });
  }
});

// Home Page: Rethink the way you do business
// -------------------------------------------

$(document).ready(function($){
  var $circPlatform = $('.cloud-platform-list'),
      $circSlides = $circPlatform.find('.cp-list'),
      $circLinks = $circPlatform.find('.trigger'),
      showSlide = function(num) {
        var $circSlide = $circSlides.eq(num);
        $circSlides.not($circSlide).removeClass('is-active');
        $circSlide.addClass('is-active');
      };

  // Auto reveal of platform features
  var slideIndex = 1,
      endPoint = $circSlides.length - 1,
      slideAnimation = setInterval(function(){
        if(slideIndex <= endPoint) {
          showSlide( slideIndex );
          slideIndex++;
        } else {
          slideIndex = 0;
          showSlide( slideIndex );
          slideIndex++;
        }
      },3000);

  $circLinks.on('mouseenter', function(e){
    showSlide( $(this).parent().index() );
    clearInterval(slideAnimation);
    e.preventDefault();
  });
});

// Home Page: Your success story starts here
// ------------------------------------------

$(document).ready(function($){
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

// Render promo after window has loaded
// Internationalize the promo banner |  location taxonomy
// ----------------------------------------

$(window).load(function() {
  $( '#promo' ).show( 'slide', {
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

// Promo Banner appears after hitting the tagline | uses waypointJS
// -------------------------------------------------

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

// Rethink D3 Force Directed Graph - iPad and above viewport
// Draw only when the title of the section "Rethink" is reached
// -------------------------------------------------------------

$('#rethink').waypoint(function(direction) {
  tsPlatform();
  this.destroy();
});


// Internationalize the promo banner to show only CPT based on location taxonomy
// --------------------------------------------------------------------------------

// $( document ).ready(function($){
//   if($('.promo-banner').length){
//       var continent = geoplugin_continentCode();  // This code is from the geoplugin.net web service | js is on header.php
//       var country = geoplugin_countryCode();
//       var $phoneWrapper = $('.phone-wrapper');
//       if (continent == "EU") {
//           if (country == "FR") { // Show France
//               $phoneWrapper.removeClass('inactive');
//           } else if (country == "DE") {  // Show Germany
//               $phoneWrapper.removeClass('inactive');
//           } else {  // Show TS UK Number if not France nor Germany
//               $phoneWrapper.removeClass('inactive');
//           }
//       } else {  // Show US for everything else
//           $phoneWrapper.removeClass('inactive');
//       };
//   }
// });
