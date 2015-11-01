'use strict';
$(function() {
    // Smooth scroll
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    // Parallax
    /*$('.top_parallax_wrapper').stellar({
        horizontalOffset: 40,
        verticalOffset: 150
    });*/

    //Fancybox
    $(".fancybox").fancybox();

    // Slider
    $("#slider").bxSlider({
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 515,
        slideMargin: 30,
        pager: false

    });
});
