$(document).ready(function () {

	//Resize Bg
	function wResize() {
		$(".main_head").css("height", $(window).height())
	};
	wResize();
	$(window).resize(function () {
		wResize();
	})

	// Sandwich Menu
	$(".toggle_menu, .menu_item").click(function () {
		$(".sandwich").toggleClass("active");
	});

	$(".toggle_menu").click(function () {
		$(".top_menu").fadeToggle(700);
	});



	//Preloader
	$(window).load(function () {
		$(".loader_inner").fadeOut();
		$(".loader").delay(400).fadeOut("slow");
	});
});