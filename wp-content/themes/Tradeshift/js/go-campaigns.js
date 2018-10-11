// Tradeshift Campaigns - Go JS file
// Hook this into libraries and see magic
// Hello Denica!

// Marketo Email Field Moving Around (uses Waypoint & Inview)
// -----------------------------------------------------------

// jQuery(document).ready(function($){
  // Waypoint: when Header comes out of view, grab Marketo Form and show CTA Bar
  // function onExitHeaderCta() {
  //   var $formBlock = $('#formBlock');
  //       $formBlock.detach();
  //       $formBlock.appendTo('#ctaBottomBar');
  // }
  // function onEnterHeaderCta() {
  //   var $formBlock = $('#formBlock');
  //       $formBlock.detach();
  //       $formBlock.appendTo('#heroFormBlock');
  // }
  // new Waypoint({
  //   element: document.getElementById('valueProp'),
  //   handler: function() {
  //     $('#ctaBar').toggle('slide', {
  //       direction: 'down',
  //       duration: 1200,
  //       easing: 'easeOutCubic'
  //     });
  //     onExitHeaderCta();
  //   },
  //   offset: 99
  // })

  // new Waypoint({
  //   element: document.getElementById('heroTrigger'),
  //   handler: function() {
  //     onEnterHeaderCta();
  //   }
  // })

  // Waypoint Inview: when Footer CTA comes to view, then put CTA Bar into place
//   function onEnterFooterCta() {
//     var $barBlock = $('#ctaBar');
//       $barBlock.detach();
//       $barBlock.insertBefore('#footerCta');
//       $barBlock.css('position', 'relative');
//   }
//   function onExitFooterCta() {
//     var $barBlock = $('#ctaBar');
//       $barBlock.detach();
//       $barBlock.insertAfter('main');
//       $barBlock.css('position', 'fixed');
//   }

//   new Waypoint.Inview({
//     element: $('#footerCta')[0],
//     enter: function(direction) {
//       onEnterFooterCta();
//     },
//     exited: function(direction) {
//       onExitFooterCta();
//     }
//   })
// });



jQuery(document).ready(function($){

  var $formBlock = $('#formBlock');

  var inview = new Waypoint.Inview({
    element: document.getElementById('heroTrigger'),
    exited: function(down) {
      $formBlock.detach();
      $formBlock.appendTo('#footerFormBlock');
    }
  });
  var inview = new Waypoint.Inview({
    element: document.getElementById('footerCta'),
    exited: function(up) {
      var $myForm = $("#footerFormBlock #formBlock").detach();
      $myForm.appendTo("#formContainer");
    }
  });

  // Detach/Append when entering Section One
  // new Waypoint({
  //     element: document.getElementById('heroTrigger'),
  //     exit: function(down) {
  //       $formBlock.detach()
  //       $formBlock.appendTo('#heroForm');
  //     },
  //     //offset: -800
  //  });
  // new Waypoint.Inview({
  //     element: document.getElementById('footerCta'),
  //     enter: function(down) {
  //       $formBlock.detach()
  //       $formBlock.appendTo('#footerFormBlock');
  //     }
  //   });
});