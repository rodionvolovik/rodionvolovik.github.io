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

		aOutItemPrice = aItemPrice + aPriceUnit
		bOutItemPrice = bItemPrice + bPriceUnit
		cOutItemPrice = cItemPrice + cPriceUnit
		dOutItemPrice = dItemPrice + dPriceUnit

		aOutCount = aItemCount * value + aItemUnit
		bOutCount = bItemCount * value + bItemUnit
		cOutCount = cItemCount * value + cItemUnit
		dOutCount = dItemCount * value + dItemUnit

		aOutPrice = (aItemPrice * aItemCount * value).toFixed(2) + totalUnit
		bOutPrice = (bItemPrice * bItemCount * value).toFixed(2) + totalUnit
		cOutPrice = (cItemPrice * cItemCount * value).toFixed(2) + totalUnit
		dOutPrice = (dItemPrice * dItemCount * value).toFixed(2) + totalUnit

		console.log(aOutPrice);

		$("#aPriceItem").text(aOutItemPrice);
		$("#aItemCount").text(aOutCount);
		$("#aTotalPrice").text(aOutPrice);
		$("#bPriceItem").text(bOutItemPrice);
		$("#bItemCount").text(bOutCount);
		$("#bTotalPrice").text(bOutPrice);
		$("#cPriceItem").text(cOutItemPrice);
		$("#cItemCount").text(cOutCount);
		$("#cTotalPrice").text(cOutPrice);
		$("#dPriceItem").text(dOutItemPrice);
		$("#dItemCount").text(dOutCount);
		$("#dTotalPrice").text(dOutPrice);

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