$(document).ready(function() {
    // wow.js
    new WOW().init();
    wow = new WOW(
    {
      //boxClass:     'hasAnimation',
      animateClass: 'animated',
      animateClass: 'transition',
      offset:       0,
      mobile:       true,
      live:         true,
      callback:     function(box) {
          //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    });
    // used to control offset of wow animation
    $( ".wow" ).each(function() {
      if ($(this).attr('data-wow-center-offset')) {
        offset = $(window).height() / 100 * $(this).attr('data-wow-center-offset');
      }
      else {
        offset = $(window).height() * 0.25;
      }
      offset = offset + $(this).height() / 2;
      $(this).attr( "data-wow-offset", parseInt(offset) );
    });
});