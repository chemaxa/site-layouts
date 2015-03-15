$(document).ready(function () {

	//Resize Bg
	function wResize() {
		$(".main_head").css("height", $(window).height());
	}
	wResize();
	$(window).resize(function () {
		wResize();
	});

	// Portfolio section filtering items
	$('.portfolio_table').mixItUp();

	// Sandwich Menu
	$(".toggle_menu, .top_menu a").click(function () {
		$(".sandwich").toggleClass("active");
		$(".top_menu").fadeToggle(750);
	});


	// Magnific POPUP About Section
	$('.popup').magnificPopup({
		type: 'image'
	});

	// Magnific POPUP Portfolio Section
	$('.popup_item').magnificPopup({
		type: 'inline'
			//closeMarkup: '<div class="mfp-close" style="top: 0px; right: 0px; height: 30px; width:30px;border: 1px solid black;border-radius: 50%;">x</div>'
	});

	// Portfolio Section setting li active class
	$(".s_portfolio li").click(function () {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});


	// Portfolio section Set ID's
	$(".portfolio_table").each(function () {});
});

//Preloader
$(window).load(function () {
	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
	// ANIMATION Header
	$(".top_text h1").animated("fadeInDown", "fadeInUp");
	$(".top_text p, .section_header, .top_menu ul").animated("fadeInUp", "fadeInDown");

	// ANIMATION SEction About
	$(".animation_2, .left .resume_item").animated("fadeInLeft", "fadeOutLeft");
	$(".animation_1").animated("flipInY", "flipOutY");
	$(".animation_3, .right .resume_item").animated("fadeInRight", "fadeOutRight");



});