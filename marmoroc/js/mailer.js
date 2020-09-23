$(document).ready(function () {    
	$("#modal__form").submit(function (e) {
		e.preventDefault();
		var form_data = $(this).serialize(); 
		$.ajax({
            type: "POST", 
            url: "../mailer/mail.php",
            dataType: "json",
            data: form_data,
            success: function(response) {
                window.location.href = response.redirect;
            }
        });
	}); 
});
