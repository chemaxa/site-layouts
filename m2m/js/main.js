$(function() {
    jcf.replaceAll();
    $('.button_search-toggler').click(function() {
        $('.form_header').show('slow');
        this.style.opacity = "0";
    });
    $(document).click(function(event) {
        var isIcon = ~event.target.className.indexOf('icon_search');
        if ($(event.target).closest('.form_header').length || isIcon) return;
        $('.form_header').hide('slow');
        $('.button_search-toggler').css('opacity', '1');
    });
    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            $('.form_header').hide('slow');
            $('.button_search-toggler').css('opacity', '1');
        }
    });
});
