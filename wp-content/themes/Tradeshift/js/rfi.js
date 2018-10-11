// RFI Pages
// --------------------------------------------------------------------

// Waypoint Triggers - Sticky Section Menu
// ---------------------------------------------------

var sticky = new Waypoint.Sticky({
  element: $('.section-menu')[0],
  offset: 0
});

// Dropdown animation on section menu
// ------------------------------------------
$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

// Use this for secondary navigation
// -----------------------------------------------------------
$(document).ready(function($) {
    $('a[name^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate( {
            'scrollTop': $target.offset().top-44
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
    } );
    $('a[name^="#executive-summary"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate( {
            'scrollTop': $target.offset().top-55
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
    } );
});
