$(document).ready(function () {

    // Parallax
    $.stellar({
        responsive: true,
        horizontalOffset: 60
    });

    // Carousel slider
    $(".carousel").owlCarousel({
        loop: true,
        responsive: {
            0: {
                nav: true,
                items: 1
            }
        },
        navText: ""
    });

    // Popup for images in review
    $('.popup').magnificPopup({
        type: 'image'
    });
    // Popup for buttons
    $('.popup_c').magnificPopup({});

    (function wResize() {
        $("header").css("min-height", $(window).height())
    })();

    $(document).resize(function () {
        wResize();
    })



    //Цели для Яндекс.Метрики и Google Analytics
    $(".count_element").on("click", (function () {
        ga("send", "event", "goal", "goal");
        yaCounterXXXXXXXX.reachGoal("goal");
        return true;
    }));

    //SVG Fallback
    if (!Modernizr.svg) {
        $("img[src*='svg']").attr("src", function () {
            return $(this).attr("src").replace(".svg", ".png");
        });
    };

    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $("form").submit(function (e) {
        var self = $(this);
        e.preventDefault;

        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function () {
            alert("Спасибо за заявку!");
            setTimeout(function () {
                var magnificPopup = $.magnificPopup.instance;
                magnificPopup.close();
                self.trigger("reset");
            }, 1000);
        });

    });

    // Топ фон табы 
    $(".top_phone .wrapper .tab").click(function () {
        $(".top_phone .wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".top_phone .tab_item").hide().eq($(this).index()).fadeIn();
    }).eq(0).addClass("active");

    // Топ хедер табы 
    $(".tabs_header .wrapper .tab").click(function () {
        $(".tabs_header .wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".tabs_header .tab_item").hide().eq($(this).index()).fadeIn();
    }).eq(0).addClass("active");

    // Контакт табы 
    $(".contacts_top .tab").click(function () {
        $(".contacts_top .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".s_contacts .tab_item").hide().eq($(this).index()).fadeIn();
    }).eq(0).addClass("active");

    // Боттом фон табы 
    $(".bottom_phone .wrapper .tab").click(function () {
        $(".bottom_phone .wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".bottom_phone .tab_item").hide().eq($(this).index()).fadeIn();
    }).eq(0).addClass("active");
});

$(window).load(function () {

    $(".top_header").animated("fadeInDown", "fadeOut");
    $(".tabs_header .wrapper").animated("flipInY", "fadeOut");
    $(".profi_item").animated("fadeInRight", "fadeOutRight");
    $(".s_profi form").animated("zoomInRight", "fadeOut");
    $(".s_back h3").animated("fadeInUp  ", "fadeOut");

});