// Solutions - Jobs Page JS
// --------------------------------------------------------------------


// Waypoint Triggers - Sticky Section Menu
// ---------------------------------------------------

var sticky = new Waypoint.Sticky({
  element: $('.section-menu')[0],
  offset: 55
})

// Dropdown animation on section menu
// ------------------------------------------
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });

  // Use this for Jobs page secondary navigation
// -----------------------------------------------------------
$(document).ready(function($) {
    $('a[name^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate( {
            'scrollTop': $target.offset().top-88
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
    } );
});

// Localization of Job Perks and Benefits
// ---------------------------------------

var changePerks = (function() {
    var onSuccess = function(geoipResponse) {
        var countryCode = geoipResponse.country.iso_code.toUpperCase();
        var continentCode = geoipResponse.continent.code.toUpperCase();
        if (countryCode === "CN") { // Show China's Perks and Benefits
          $('#cn-xs').addClass('active');
          $('#cn-sm').addClass('active');
        } else if (countryCode === "HK") { // HongKong shows China too
          $('#cn-xs').addClass('active');
          $('#cn-sm').addClass('active');
        } else if (continentCode === "EU") {  // Show EU Perks and Benefits
          $('#eu-xs').addClass('active');
          $('#eu-sm').addClass('active');
        } else {  // Show US for everything else/default
          $('#us-xs').addClass('active');
          $('#us-sm').addClass('active');;
        };
    };
    var onError = function(){
        console.log('Hello Error');
    };
    return function() {
        geoip2.country( onSuccess, onError );
    };
}());
changePerks();

// Culture Thing carousel
// -------------------------------------------
$(document).ready(function() {
  $("#culture-carousel").owlCarousel({
    items : 1,
    autoPlay : 4000,
    stopOnHover: true,
    itemsDesktop : [2540,1],
    itemsDesktopSmall : [1199,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
  });
});

// A day in the life - image carousel
$(document).ready(function() {
  $("#dayinthelife-carousel").owlCarousel({
    items : 1,
    autoPlay : 4000,
    stopOnHover: true,
    itemsDesktop : [2540,1],
    itemsDesktopSmall : [1199,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
  });
});

// Lever.co Jobs API Filter via Location and Team (TODO: Optimize JS)
//------------------------------------------------

// Print default job listings as Location-based list
if($('.jobs_team_link').length){
    $('.jobs_location_link').addClass('jobs_active');
    // $('.jobs_container').addClass('in');
    $('.jobs_team_link').removeClass('jobs_active');
    $.getJSON("https://api.lever.co/v0/postings/tradeshift?mode=json&group=location",function(location){
          $.each(location, function(i, location){
          //    $(field.text + " " + field.categories.location + " ").appendTo( ".jobs_team" );
            $(".jobs_container").append('<h4 class="location-header">'+ location.title + '</h4>');
                $.each(location.postings, function(j, posting){
                    $(".jobs_container").append('<div class="jobs-listing"><a href="'+posting.hostedUrl+'" class="jobs-link" target="_blank"><span class="jobs-pos">'+posting.text+ "</span>"+'<span class="jobs-dep">'+posting.categories.team+ "</span></a></div>");
                }); 
          });
        });

};

// Use Location as a filter
$('.jobs_location_link').click(function (e) {
      $('.jobs_location_link').addClass('jobs_active');
      // $('.jobs_container').addClass('in');
      $('.jobs_team_link').removeClass('jobs_active');
      $( ".jobs_container" ).empty();
        $.getJSON("https://api.lever.co/v0/postings/tradeshift?mode=json&group=location",function(location){
              $.each(location, function(i, location){
              //    $(field.text + " " + field.categories.location + " ").appendTo( ".jobs_team" );
                $(".jobs_container").append('<h4 class="location-header">'+ location.title + '</h4>');
                    $.each(location.postings, function(j, posting){
                        $(".jobs_container").append('<div class="jobs-listing"><a href="'+posting.hostedUrl+'" class="jobs-link" target="_blank"><span class="jobs-pos">'+posting.text+ "</span>"+'<span class="jobs-dep">'+posting.categories.team+ "</span></a></div>");
                    }); 
              });
            });
      e.preventDefault();
  });

  // Use Team as a filter
  $('.jobs_team_link').click(function (e) {
      $('.jobs_location_link').removeClass('jobs_active');
      // $('.jobs_container').addClass('in');
      $('.jobs_team_link').addClass('jobs_active');
      $( ".jobs_container" ).empty();
       $.getJSON("https://api.lever.co/v0/postings/tradeshift?mode=json&group=team",function(team){
              $.each(team, function(i, team){
              //    $(field.text + " " + field.categories.location + " ").appendTo( ".jobs_team" );
                $(".jobs_container").append('<h4 class="location-header">' + team.title + '</h4>');
                    $.each(team.postings, function(j, posting){
                        $(".jobs_container").append('<div class="jobs-listing"><a href="'+posting.hostedUrl+'" class="jobs-link" target="_blank"><span class="jobs-pos">'+posting.text+ "</span>"+'<span class="jobs-dep">'+posting.categories.location+ "</span></a></div>");
                    }); 
              });
            });
      e.preventDefault();
  });


