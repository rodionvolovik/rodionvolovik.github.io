$(document).ready(function () {
	$(document).scroll(function() {
		element = $(".nav-wrapper");
		if ($(document).scrollTop() >= 50) {
			$(".navbar-logo img").animate({
				width: "50px",
			}, 10, "linear", function () {
				$(element).addClass("shadow");
			});
		} else {
			$(".navbar-logo img").animate({
				width: "75px",
			}, 10, "linear", function () {
				$(element).removeClass("shadow");
			});
		}
	});
});
