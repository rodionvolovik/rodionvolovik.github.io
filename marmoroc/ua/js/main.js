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

	function calculatePrice(value)
	{
		const aItemPrice = 506.40;
		const bItemPrice = 41.10;
		const cItemPrice = 76.80;
		const dItemPrice = 24.00;

		const aItemCount = 1;
		const bItemCount = 4;
		const cItemCount = 2;
		const dItemCount = 4;

		const aItemUnit = " м2"
		const bItemUnit = " м.пог."
		const cItemUnit = " м.пог."
		const dItemUnit = " шт."
		const totalUnit = " грн."

		const aPriceUnit = " грн./м2"
		const bPriceUnit = " грн./м.пог."
		const cPriceUnit = " грн./м.пог."
		const dPriceUnit = " грн./шт."

		aOutItemPrice = aItemPrice
		bOutItemPrice = bItemPrice
		cOutItemPrice = cItemPrice
		dOutItemPrice = dItemPrice

		aOutCount = aItemCount * value
		bOutCount = bItemCount * value
		cOutCount = cItemCount * value
		dOutCount = dItemCount * value

		aOutPrice = aItemPrice * aItemCount * value
		bOutPrice = bItemPrice * bItemCount * value
		cOutPrice = cItemPrice * cItemCount * value
		dOutPrice = dItemPrice * dItemCount * value

		total = aOutPrice + bOutPrice + cOutPrice + dOutPrice

		console.log(aOutPrice);

		$("#aPriceItem").text(aOutItemPrice + aPriceUnit);
		$("#bPriceItem").text(bOutItemPrice + bPriceUnit);
		$("#cPriceItem").text(cOutItemPrice + cPriceUnit);
		$("#dPriceItem").text(dOutItemPrice + dPriceUnit);

		$("#aItemCount").text(aOutCount + aItemUnit);
		$("#bItemCount").text(bOutCount + bItemUnit);
		$("#cItemCount").text(cOutCount + cItemUnit);
		$("#dItemCount").text(dOutCount + dItemUnit);

		$("#aTotalPrice").text(aOutPrice.toFixed(2) + totalUnit);
		$("#bTotalPrice").text(bOutPrice.toFixed(2) + totalUnit);
		$("#cTotalPrice").text(cOutPrice.toFixed(2) + totalUnit);
		$("#dTotalPrice").text(dOutPrice.toFixed(2) + totalUnit);

		$("#total").text("Итоговая сумма: " + total.toFixed(2) + totalUnit)

		$("#value").val(value);
	}

	$("#close").on('click', closeMenu);

	$("#show").on('click', showMenu);

	$(".menu__link").on('click', closeMenu);

	$("#calc__form").submit(function(e) {
		e.preventDefault();
		calculatePrice($("#calc__value").val());
	});

	calculatePrice(1);
});

$(document).scroll(function () {
	var $nav = $("#navbar");
	$nav.toggleClass('navbar__scrolled', $(this).scrollTop() > 10);
});