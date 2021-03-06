$(document).ready(function () {

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
	$("#form").submit(function () {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function () {
			alert("Спасибо за заявку!");
			setTimeout(function () {

			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if ($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch (err) {

	};

	// Menu set active
	$('.nav li > a').click(function () {
		$('li').removeClass();
		$(this).parent().addClass('active');
	});

	// TABS SIDEBAR
	$(".tabs-group .tab").click(function () {
		$(".tabs-group .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".tabs-group .tab-item").hide().eq($(this).index()).fadeIn();
	}).eq(0).addClass("active");


});