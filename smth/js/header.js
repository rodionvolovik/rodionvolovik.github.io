$(document).scroll(function() {
	element = $(".nav-wrapper");
	if ($(document).scrollTop() >= 50) {
		$(element).addClass("shadow");
	} else {
		$(element).removeClass("shadow");
	}
 });