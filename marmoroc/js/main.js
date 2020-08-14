$(document).ready(function(){
	function closeMenu()
	{
		$("#menu").removeClass("active").delay(5000).ready(function() {
			$("body").removeClass("modal__open").ready();
		});
	}

	$("#close").on('click', closeMenu);

	$(".menu__link").on('click', closeMenu);
});