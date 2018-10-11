// Solutions section JS
// --------------------------------------------------------------------

// Solutions - Buy - Text rotation Powered by Typed.js
// ---------------------------------------------------

$(document).ready(function($){
  if ($('body').hasClass('smartling-de')){
    $('.text-carousel').typed({
      strings: ["um Mitarbeitern zu helfen. ^4000", "machen Sie Ihren Job. ^4000", "von all Ihren Lieferante. ^4000", "aus allen online Applikationen. ^4000", "und gewinnen Sie volle Einsicht. ^4000", "an einer Stelle. ^4000"],
      loop: true
    })
  } else if ($('body').hasClass('smartling-fr')){
    $('.text-carousel').typed({
      strings: ["et responsabilisez vos employés. ^2000", "auprès de l'ensemble de vos fournisseurs. ^2000", "à partir de toutes les sources enregistrées. ^2000", "réunis en un seul endroit. ^2000", "pour aider vos clients. ^2000", "pour délivrer efficacement. ^2000"],
      loop: true
    })
  } else if ($('body').hasClass('smartling-ja')){
    $('.text-carousel').typed({
      strings: ["社員の仕事を効率化するために。 ^4000", "本当の仕事にフォーカスするために。 ^4000", "すべての取引先と。 ^4000", "どんなオンラインショップからでも。 ^4000", "そしてすべてを可視化する。 ^4000", "１つの場所から。 ^4000"],
      loop: true
    })
  } else {
      $('.text-carousel').typed({
      strings: ["to get the job done. ^2000", "from contracted and qualified suppliers. ^2000", "to empower your employees. ^2000", "to support your customers. ^2000", "from approved online sources. ^2000", "in one place. ^2000"],
      loop: true
    });
  }
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





