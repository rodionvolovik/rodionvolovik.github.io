$(document).ready(function(){
	$(".pick").on("click", function(){
		idShow = $(this).attr("data-img");
		$(".constructor__image").each(function() {
			$(this).removeClass("active");
		});
		$("#" + idShow).addClass("active");
	});
});