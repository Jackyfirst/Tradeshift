// Solutions - Tradeshift Risk JS
// --------------------------------------------------------------------


// Waypoint Triggers - Tradeshift Profiles
// ---------------------------------------------------

var waypoint = new Waypoint({
  element: document.getElementById('playSurveyDemo'),
  handler: function() {
    $('#surveyDemo')[0].play(); 
  }
});

var waypoint = new Waypoint({
  element: document.getElementById('loadProfileGIF'),
  handler: function() {
    $('#profileGIF').attr('src',$('#profileGIF').attr('src'));
  }
});

// ScrollMagic Triggers on Tradeshift Profiles
// ----------------------------------------------------

  // init controller
  var controller = new ScrollMagic.Controller();

  // build scenes
  var sceneStep123Pin = new ScrollMagic.Scene({
    triggerElement: "#triggerPinOne",
    duration: 2400,
    triggerHook: 0, // don't trigger until #triggerPin hits the top of the viewport
    reverse: true // allows the effect to trigger when scrolled in the reverse direction
  })
    .setPin("#stepOnetoSix")
    // .addIndicators({name: "Step1to6 (d: 2400)"});
  
  var sceneStep123Show = new ScrollMagic.Scene({
    triggerElement: "#startOfProfiles",
    duration: 1300,
  })
    .setClassToggle("#step123", "active")
    // .addIndicators({name: "ShowStep123 (d: 1300)"});

  var sceneCallout1 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 490,
    duration: 190
  })
    .setClassToggle("#co1", "active")
    // .addIndicators({name: "calloutOne (o:490, d:190)"});

  var sceneCallout2 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 690,
    duration: 250,
  })
    .setClassToggle("#co2", "active")
    // .addIndicators({name: "calloutTwo (o:690, d:250)"});

  var sceneCallout3 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 940,
    duration: 220,
  })
    .setClassToggle("#co3", "active")
    // .addIndicators({name: "calloutThree (o:940, d:220)"});

  var sceneStep4 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 1100,
    duration: 500,
  })
    .setClassToggle("#step4", "active")
    // .addIndicators({name: "Step4 (o:1100, d:500)"});

  var sceneCallout4 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 1200,
    duration: 300,
  })
    .setClassToggle("#co4", "active")
    // .addIndicators({name: "calloutFour (o:1200, d:300)"});

  var sceneStep5 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 1400,
    duration: 500,
  })
    .setClassToggle("#step5", "active")
    // .addIndicators({name: "Step5 (o: 1500, d:500)"});

  var sceneCallout5 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 1700,
    duration: 200,
  })
    .setClassToggle("#co5", "active")
    // .addIndicators({name: "calloutFive (o:1700, d:200)"});

  var sceneStep6 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 1800,
    duration: 900,
  })
    .setClassToggle("#step6", "active")
    // .addIndicators({name: "Step6 (o: 1800, d:900)"});

  var sceneCallout6 = new ScrollMagic.Scene({
    triggerElement: "#stepOnetoSix",
    offset: 1800,
    duration: 900,
  })
    .setPin("#stepSix")
    .setClassToggle("#co6", "active")
    // .addIndicators({name: "calloutSix (o:1800, d:900)"});

  controller.addScene([
    sceneStep123Pin,
    sceneStep123Show,
    sceneCallout1,
    sceneCallout2,
    sceneCallout3,
    sceneStep4,
    sceneCallout4,
    sceneStep5,
    sceneCallout5,
    sceneStep6,
    sceneCallout6
  ]);
