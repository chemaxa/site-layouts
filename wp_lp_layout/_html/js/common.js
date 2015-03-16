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
	});

	// Portfolio Section setting li active class
	$(".s_portfolio li").click(function () {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});


	// Portfolio section Set ID's

	$(".mix").each(function (i) {
		$(this).find(".item_descr").attr("id", "work_" + i);
		$(this).find("a").attr("href", "#work_" + i);
		console.log(i);
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
	//$(".animation_2,.animation_3").animated("fadeInUp", "");
	//$(".animation_1").animated("flipInY", "flipOutY");
	//$(".animation_3,  .right .resume_item").animated("slideInRight", "");



});