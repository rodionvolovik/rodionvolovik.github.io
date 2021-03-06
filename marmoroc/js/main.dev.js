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

	function showModal()
	{
		$("#modal").fadeIn(500);
	}

	function closeModal()
	{
		$("#modal").fadeOut(500);
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

		$("#aPriceItem").text(aOutItemPrice.toLocaleString('ru-RU') + aPriceUnit);
		$("#bPriceItem").text(bOutItemPrice.toLocaleString('ru-RU') + bPriceUnit);
		$("#cPriceItem").text(cOutItemPrice.toLocaleString('ru-RU') + cPriceUnit);
		$("#dPriceItem").text(dOutItemPrice.toLocaleString('ru-RU') + dPriceUnit);

		$("#aItemCount").text(aOutCount.toLocaleString('ru-RU') + aItemUnit);
		$("#bItemCount").text(bOutCount.toLocaleString('ru-RU') + bItemUnit);
		$("#cItemCount").text(cOutCount.toLocaleString('ru-RU') + cItemUnit);
		$("#dItemCount").text(dOutCount.toLocaleString('ru-RU') + dItemUnit);

		$("#aTotalPrice").text(aOutPrice.toLocaleString('ru-RU') + totalUnit);
		$("#bTotalPrice").text(bOutPrice.toLocaleString('ru-RU') + totalUnit);
		$("#cTotalPrice").text(cOutPrice.toLocaleString('ru-RU') + totalUnit);
		$("#dTotalPrice").text(dOutPrice.toLocaleString('ru-RU') + totalUnit);

		$("#total").text(total.toLocaleString('ru-RU') + totalUnit)

		$("#value").val(value);

		return {"value": value, "total": total.toLocaleString('ru-RU')}
	}

	$("#calc__form").submit(function(e) {
		e.preventDefault();
		var info = calculatePrice($("#calc__value").val());
		var lang = $("#lang").attr('lang');
		setTimeout(function() {
			if (lang == 'ru-UA')
			{
				$("#user__request").val("Предварительный расчет стоимости материалов для проекта площадью " + info["value"] + " м.кв. составил " + info["total"] + " грн. Хочу запросить более детальный подсчет.");
			}
			else if (lang =='uk-UA')
			{
				$("#user__request").val("Попередній розрахунок вартості матеріалів для проекту площею " + info["value"] + " м.кв. склав " + info["total"] + " грн. Хочу зробити запит на більш детальний розрахунок.");
			}
			showModal();
		 }, 10000);	});

	calculatePrice(1);

	$("#close").on('click', closeMenu);

	$("#show").on('click', showMenu);

	$(".menu__link").on('click', closeMenu);

	$("#modal__close").on('click', closeModal);

	$(".modal__open").on('click', showModal);

	$("#navbar").toggleClass('navbar__scrolled', $(this).scrollTop() > 10);
});

$(document).scroll(function () {
	var $nav = $("#navbar");
	$nav.toggleClass('navbar__scrolled', $(this).scrollTop() > 10);
});