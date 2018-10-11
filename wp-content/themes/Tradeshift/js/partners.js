// Partners JS only
// --------------------------------------------------------------------

// Scroll down to the form onclick of hero CTA
// --------------------------------------------

$(document).ready(function(){
    $('a[href^="#join-us"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-55
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});