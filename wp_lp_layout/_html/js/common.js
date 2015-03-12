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
	$(".sandwich, .menu_item").click(function () {
		$(".sandwich").toggleClass("active");
	});

	//data-parallax="scroll" data-image-src="img/bg.jpg" data-z-index="1"

	//Preloader
	$(window).load(function () {
		$(".loader_inner").fadeOut();
		$(".loader").delay(400).fadeOut("slow");
	});
});
