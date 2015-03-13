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


	//Preloader
	$(window).load(function () {
		$(".loader_inner").fadeOut();
		$(".loader").delay(400).fadeOut("slow");
	});
});