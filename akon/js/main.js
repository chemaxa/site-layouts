$(function() {
    // Tabs
    tabIt('.news_top');
    tabIt('.news_main');


    // OWL Slider News AKON
    var sliderAkon = $('#slider_news_akon');
    sliderAkon.owlCarousel({
        items: 2,
        itemsDesktop: [1366, 1],
        navigation: true,
        navigationText: false
    });
    // OWL Slider News RON
    var sliderRon = $('#slider_news_ron');
    sliderRon.owlCarousel({
        items: 2,
        itemsDesktop: [1366, 1],
        navigation: true,
        navigationText: false
    });

    sliderRon.on('resized.owl.carousel', function(event) {
        console.log(event);
    });

    function tabIt(selector) {
        $(selector + " .tab").click(function() {
            $(selector + " .tab").removeClass("active").eq($(this).index()).addClass("active");
            $(selector + " .tab_item").hide().eq($(this).index()).fadeIn();
            sliderRon.trigger('initialize.owl.carousel');
            console.log('YAYA');
        }).eq(0).addClass("active");
    }


    // Toggle search icon in top line
    var search_form = $("#top_line_searchform");

    $("span.search_icon").click(function() {
        if (search_form.css('display') == 'none') {
            $(search_form).show();
        } else {
            $(search_form).hide();
        }
        return false;
    });

    $(window).click(function(e) {
        var target = jQuery(e.target);
        if (target.closest("#top_line_searchform").length > 0) {
            return;
        }
        $(search_form).hide();
    });
});
