$(document).ready(function(){
	$(".pick").on("click", function(){
		idShow = $(this).attr("data-img");
		$(".constructor__image").each(function() {
			$(this).removeClass("active");
		});
		$(".pick").each(function() {
			$(this).removeClass("active");
		});
		$(this).addClass("active");
		$("#" + idShow).addClass("active");
	});
});