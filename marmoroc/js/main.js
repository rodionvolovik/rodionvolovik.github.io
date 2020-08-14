$(document).ready(function(){
	function closeMenu()
	{
		$("#menu").removeClass("active").delay(5000).ready(function() {
			$("body").removeClass("modal__open").ready();
		});
	}

	function showMenu()
	{
		$("#menu").addClass("active").delay(5000).ready(function() {
			$("body").addClass("modal__open").ready();
		});
	}

	$("#close").on('click', closeMenu);

	$("#show").on('click', showMenu);

	$(".menu__link").on('click', closeMenu);
});