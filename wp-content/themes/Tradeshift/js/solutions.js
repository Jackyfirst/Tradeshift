// Solutions section JS
// --------------------------------------------------------------------

// Supplier Management - How it works animation
// --------------------------------------------

$(document).ready(function($){
  var $stepsWrapper = $('#how-it-works-wrapper'),
      $stepsList = $stepsWrapper.find('.step'),
      $stepTrigger = $stepsWrapper.find('.step-number'),
      showSteps = function(num) {
        var $stepsLoop = $stepsList.eq(num);
        $stepsList.not($stepsLoop).removeClass('active');
        $stepsLoop.addClass('active');
      };

  // Auto reveal of steps
  var stepIndex = 1,
      endPoint = $stepsList.length - 1,
      stepAnimation = setInterval(function(){
        if(stepIndex <= endPoint) {
          showSteps( stepIndex );
          stepIndex++;
        } else {
          stepIndex = 0;
          showSteps( stepIndex );
          stepIndex++;
        }
      },3000);

  // When icon is clicked
  // $stepTrigger.on('click', function(e){
  //   showSteps( $(this).parent().index() );
  //   clearInterval(stepAnimation);
  //   e.preventDefault();
  // });

  $stepTrigger.on('mouseenter', function(e){
    showSteps( $(this).parent().index() );
    clearInterval(stepAnimation);
    e.preventDefault();
  });
});

// Solutions - Buy - Text rotation Powered by Typed.js
// ---------------------------------------------------

$(document).ready(function($){
    $('.text-carousel').typed({
    strings: ["to help employees. ^4000", "to do your job. ^4000", "from all your suppliers. ^4000", "from any online source. ^4000", "and get full visibility. ^4000", "in one place. ^4000"],
    loop: true
  });
});

// Solutions - Buy - Waypoint Triggers
// ---------------------------------------------------

var waypoint = new Waypoint({
  element: document.getElementById('start-kill-the-catalog-vid'),
  handler: function() {
    $('#killCatalog')[0].play(); 
  }
});

var waypoint = new Waypoint({
  element: document.getElementById('start-ts-buy-vid'),
  handler: function() {
    $('#ts-buy-demo')[0].play(); 
  }
});

// Solutions - Buy - Make Play Icon Darker,
// Only Subtle Though, Because it Will Convert Better
// --------------------------------------------------------

$('.video-img').on('mouseover', function(){
    var parentWrapper = $(this).parents('.video-wrapper');
    $(parentWrapper).toggleClass('active');
});
$('.video-img').on('mouseout', function(){
    var parentWrapper = $(this).parents('.video-wrapper');
    $(parentWrapper).toggleClass('active');
});

// Solutions - Buy - TSBuy Demo Video,
// Because we want it to go back to start
// --------------------------------------------------------
// var videoBuy = $('#ts-buy-demo')[0];
// var videoJ= $('#ts-buy-demo');
// videoJ.on('ended',function(){
//     videoBuy.load();
// });





