$(function () {    
	$("#modal__form").submit(function (e) {
		e.preventDefault();
		var form_data = $(this).serialize(); 
		$.ajax({
		type: "POST", 
		url: "../mailer/mail.php",
		dataType: "json", // Add datatype
		data: form_data
		}).done(function (data) {
			console.log(data);
			console.log(data.hasOwnProperty('redirect'));
			window.location.href = data.redirect;
		}).fail(function (data) {
			console.log("fail");
		});
	}); 
});
