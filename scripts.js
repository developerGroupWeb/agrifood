$(function () {

	$(document).on('mouseover', '#navbar-nav .nav-item', function (e) {
		$(this).addClass('active').siblings().removeClass('active');

	});

	var error_name = false, error_email = false, error_message = false, error_phone = false;

	function alertMessage(id, errorClass, text){

		return $(id).next(errorClass).html(text).show();
	}

	$(document).on('submit', '#submit', function () {

		var name    = $(this).find('#name').val();
		var email   = $(this).find('#email').val();
		var phone   = $(this).find('#phone').val();
		var message = $(this).find('#message').val();
		if(error_name === false || error_email === false || error_message === false || error_phone === false){

			if(name === ''){

				$('.error-name').html('Ce champs est obligatoire').show();
			}

			if(email === ''){
				$('.error-email').html('Ce champs est obligatoire').show();
			}
			if(phone === ''){
				$('.error-phone').html('Ce champs est obligatoire').show();
			}
			if(message === ''){
				$('.error-message').css('border-color', 'red').show();
			}

			return false;
		}
	});

});