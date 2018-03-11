$(document).ready(function () {
	$(document).scroll(function() {
		element = $(".nav-wrapper");
		if ($(document).scrollTop() >= 50) {
			$(".navbar-logo img").animate({
				'width': "100px",
			}, 50, "linear", function () {
				$(element).addClass("shadow");
			});
		} else {
			$(".navbar-logo img").animate({
				'width': "100px",
			}, 50, "linear", function () {
				$(element).removeClass("shadow");
			});
		}
	});
});
