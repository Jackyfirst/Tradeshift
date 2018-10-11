// Tradeshift Go version 2
// Author: Victor Ramayrat
// Animation sequence using Velocity JS UI
// Use in conjuction with FullPage.JS library
// Move the Marketo Form in each section based on the FullPageJS index (page number)
// Used only for tablets and desktop 
// Use WaypointJS to move Mkto Form around on smartphone - JS on the page via a server-side sniff

var headerGo = $('#headerGo');
$.Velocity(headerGo, { opacity: 1}, { duration: 800 });

var copyForm = $('#copyFormHeader');
$.Velocity(copyForm, { opacity: 1}, { duration: 800 });

$('#fullpage').fullpage({
    css3: true,
    scrollingSpeed: 1200,
    touchSensitivity: 10,
    
    afterRender: function(){
      var pluginContainer = $(this);

      // Sequence running of chat (VelocityJS UI)
      // Assign variables to DOM Targets
      var $s1 = $('#s1');
      var $s2 = $('#s2');
      var $s3 = $('#s3');
      var $s4 = $('#s4');
      var $s5 = $('#s5');
      var $s6 = $('#s6');
      var $f0 = $('#chatLoader1');
      var $f1 = $('#chatLoader2');
      var $f2 = $('#chatLoader3');
      var $iconDown = $(".fa-angle-down");
      // var $downScroll = $("#go-down");

      // Array of VelocityJS UI sequence calls | http://velocityjs.org/#uiPack
      var sectionOneSequence = [
        { e: $s1, p: 'transition.bounceIn', o: { delay: 1200, duration: 400} },
        { e: $f0, p: 'transition.fadeIn', o: { duration: 20} },
        { e: $f0, p: 'transition.fadeOut', o: { delay: 800, duration: 600} },
        { e: $s2, p: 'transition.slideRightIn', o: { duration: 700 } },
        { e: $s3, p: 'transition.bounceIn', o: { delay: 200, duration: 600 } },
        { e: $f1, p: 'transition.fadeIn', o: { duration: 20} },
        { e: $f1, p: 'transition.fadeOut', o: { delay: 800, duration: 600} },
        { e: $s4, p: 'transition.slideLeftIn', o: { duration: 700 } },
        { e: $s5, p: 'transition.bounceIn', o: { delay: 200, duration: 600 } },
        { e: $f2, p: 'transition.fadeIn', o: { duration: 20} },
        { e: $f2, p: 'transition.fadeOut', o: { delay: 800, duration: 600} },
        { e: $s6, p: 'transition.slideRightIn', o: { duration: 700 } },
        { e: $iconDown, p: {opacity: [1,0]}, o: { duration: 600 } }
      ];

      $.Velocity.RunSequence(sectionOneSequence);
    },

    // Trigger Animation Sequence using VelocityJS UI
    afterLoad: function(anchorLink, index){
      var loadedSection = $(this);
      var $formBlock = $('#formWrapper');

      // If section two, detach form and insert into place
      if(index == 1){
        $formBlock.detach()
        $formBlock.appendTo('#mktoFormSectionOne');
        var mktoOne = $('#mktoFormSectionOne');
        $.Velocity(mktoOne, { opacity: 1}, { duration: 600 });
      };
      // If section two, detach form and insert into place
      if(index == 2){
        $formBlock.detach()
        $formBlock.appendTo('#mktoFormSectionTwo');
        var mktoTwo = $('#mktoFormSectionTwo');
        $.Velocity(mktoTwo, { opacity: 1}, { duration: 600 });
      };
      // If section three, animate
      if(index == 3){
          // Fade In copy and form
          var copyForm3 = $('#copyForm3');
          $.Velocity(copyForm3, { opacity: 1}, { delay: 200, duration: 400 });

          var s3Animations = $('#s31, #s32, #s33, #s34, #s35, #s36');
          $.Velocity(s3Animations, { opacity: 0 }, { duration: 100 });

          // Sequence running of chat (VelocityJS UI)
          // Assign variables to DOM Targets
          var $s31 = $('#s31');
          var $s32 = $('#s32');
          var $s33 = $('#s33');
          var $s34 = $('#s34');
          var $s35 = $('#s35');
          var $s36 = $('#s36');
          var $f3 = $('#chatLoader4');
          var $f4 = $('#chatLoader5');
          var $f5 = $('#chatLoader6');

          // Array of VelocityJS UI sequence calls | http://velocityjs.org/#uiPack
         var sectionThreeSequence = [
              { e: $s31, p: 'transition.bounceIn', o: { delay: 1000, duration: 600} },
              { e: $f3, p: 'transition.fadeIn', o: { duration: 20} },
              { e: $f3, p: 'transition.fadeOut', o: { delay: 800, duration: 600} },
              { e: $s32, p: 'transition.slideLeftIn', o: { duration: 700 } },
              { e: $s33, p: 'transition.bounceIn', o: { delay: 200, duration: 600 } },
              { e: $f4, p: 'transition.fadeIn', o: { duration: 20} },
              { e: $f4, p: 'transition.fadeOut', o: { delay: 800, duration: 600} },
              { e: $s34, p: 'transition.slideRightIn', o: { duration: 700 } },
              { e: $s35, p: 'transition.bounceIn', o: { delay: 200, duration: 600 } },
              { e: $f5, p: 'transition.fadeIn', o: { duration: 20} },
              { e: $f5, p: 'transition.fadeOut', o: { delay: 800, duration: 600} },
              { e: $s36, p: 'transition.slideLeftIn', o: { duration: 700 } },
          ];
          $.Velocity.RunSequence(sectionThreeSequence);
      };
      if(index == 5){
        $formBlock.detach()
        $formBlock.appendTo('#mktoFormSectionFive');
        var mktoFive = $('#mktoFormSectionFive');
        $.Velocity(mktoFive, { opacity: 1}, { duration: 800 });
      };
      if(index == 6){
        $formBlock.detach()
        $formBlock.appendTo('#mktoFormSectionSix');
        var mktoSix = $('#mktoFormSectionSix');
        $.Velocity(mktoSix, { opacity: 1}, { duration: 600 });
      };
    },
    onLeave: function(index, nextIndex, direction){
      var leavingSection = $(this);

      //after leaving section 3, stop animation
      if(index == 4 && direction == 'up'){
          var s3Animations = $('#s31, #s32, #s33, #s34, #s35, #s36');
          $(s3Animations).velocity('stop', true)
      };
      if(index == 4 && direction == 'down'){
          // Fade In copy and form
          var copyForm5 = $('#copyForm5');
          $.Velocity(copyForm5, { opacity: 1}, { delay: 600, duration: 1600 });

          var goCards = $('#goCards');
          $.Velocity(goCards, { opacity: 1}, { delay: 600, duration: 1600 });

          // Sequence running of chat (VelocityJS UI)
          // Assign variables to DOM Targets
          var $s51 = $('#s51');
          var $s52 = $('#s52');
          var $s53 = $('#s53');
          var $s54 = $('#s54');
          var $s55 = $('#s55');
          var $s56 = $('#s56');
          var $s57 = $('#s57');
          var $s58 = $('#s58');
          var $s59 = $('#s59');
          var $s510 = $('#s510');
          var $s511 = $('#s511');

          // Array of VelocityJS UI sequence calls | http://velocityjs.org/#uiPack
         var sectionFiveSequence = [
              { e: $s51, p: { translateY: -60 }, o: { duration: 600, stagger: 100, delay: 1000 } },
              { e: $s53, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s52, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s54, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s57, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s56, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s58, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s59, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s55, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s510, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
              { e: $s511, p: { translateY: -60 }, o: { duration: 600, stagger: 100 } },
          ];
         $.Velocity.RunSequence(sectionFiveSequence);
      };
    }
});

// FullPageJS section scroll with scroll down icon
// Trigger Section animation below Section One when the section is on the viewport

$(document).ready(function() {
  $('.icon-down-arrow').on('click', function() {
     $.fn.fullpage.moveSectionDown();
  });
});
