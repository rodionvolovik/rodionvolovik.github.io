$(document).ready(function () {
	$(".toggle-box-title").click(function () {
		if ($(this).hasClass("active")) {
			$(this).toggleClass("active");
			$(".toggle-box-content.in").fadeTo("fast", 0, function () {
				$(".toggle-box-content.in").toggleClass("in");
			});
			$(".toggle-box-content.in").slideUp("fast");
		}
		else
		{
			$(".toggle-box-title.active").toggleClass("active");
			$(this).toggleClass("active");
			$(".toggle-box-content.in").fadeTo("fast", 0);
			$(".toggle-box-content.in").slideUp("fast");
			idBox = $(this).attr("toggle-target");
			boxTarget = $(".toggle-box-content#"+idBox);
			boxTarget.slideDown("fast", function () {
				$(".toggle-box-content.in").toggleClass("in");
				$(boxTarget).fadeTo("fast", 1, function () {
					$(boxTarget).toggleClass("in");
				})
			})
		}
	})
});