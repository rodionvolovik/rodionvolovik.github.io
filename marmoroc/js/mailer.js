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
			if (data.redirect) {
				// data.redirect contains the string URL to redirect to
				console.log(data.redirect);
				console.log(data.status);
				window.location.href = data.redirect;
			}
			else
			{
				console.log(data.status);
			}
		}).fail(function (data) {
			console.log(data.status);
		});
	}); 
});
