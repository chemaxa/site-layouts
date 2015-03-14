$(document).ready(function () {

	//Resize Bg
	function wResize() {
		$(".main_head").css("height", $(window).height());
	}
	wResize();
	$(window).resize(function () {
		wResize();
	});

	// Sandwich Menu
	$(".toggle_menu, .top_menu a").click(function () {
		$(".sandwich").toggleClass("active");
		$(".top_menu").fadeToggle(750);
	});


	// Magnific POPUP
	$('.popup').magnificPopup({
		type: 'image'
	});

});

//Preloader
$(window).load(function () {
	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
	// ANIMATION Header
	$(".top_text h1").animated("fadeInDown", "fadeInUp");
	$(".top_text p, .section_header, .top_menu ul").animated("fadeInUp", "fadeInDown");

	// ANIMATION SEction About
	$(".animation_2").animated("fadeInLeft", "fadeOutLeft");
	$(".animation_1").animated("flipInY", "flipOutY");
	$(".animation_3").animated("fadeInRight", "fadeOutRight");



});