// Delivery Services JS only
// --------------------------------------------------------------------


// Your success story starts here
// ------------------------------------------

$(document).ready(function($){
  var $arc = $('.success-steps'),
      $arcSlides = $arc.find('.success-steps-list'),
      $arcLinks = $arc.find('.success-trigger'),
      showSlide = function(num) {
        var $arcSlide = $arcSlides.eq(num);
        var $arcLink = $arcLinks.eq(num);
        $arcSlides.not($arcSlide).removeClass('is-active');
        $arcSlide.addClass('is-active');
        $arcLinks.not($arcLink).removeClass('pulse');
        $arcLink.addClass('pulse');
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

