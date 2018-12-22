$(function () {


	$(document).on('mouseover', '#navbar-nav .nav-item', function (e) {
		$(this).addClass('active').siblings().removeClass('active');

	});

	var error_name = false, error_email = false, error_message = false, error_phone = false;

	var email = $(this).find('#email').val();
	var phone = $(this).find('#phone').val();
	var message = $(this).find('#message').val();

	function alertMessage(id, errorClass, text) {

		return $(id).next(errorClass).html(text).show();
	}

	$(document).on('keyup', '#name', function () {

		var name = $(this).val();
		var filter = /[aA-zZ -]+$/

		if(name === ''){

			alertMessage(this, '.error-name', 'Taper votre nom et prénom');
			error_name = false;

		}else if(!filter.test(name)){

			alertMessage(this, '.error-name', 'Caractères non autorisé');
			error_name = false;

		}else if(name.length < 6){

			alertMessage(this, '.error-name', 'Taper 6 caractères au moins');
			error_name = false;

		}else{

			$('.error-name').hide();
			error_name = true;
		}
	});

	$(document).on('keyup', '#phone', function () {

		var phone = $(this).val();
		var filter = /[0-9+]+$/;

		if(phone === ''){

			alertMessage(this, '.error-phone', 'Entrer votre numéro avec indicatif');
			error_phone = false;
		}else if(!filter.test(phone)){

			alertMessage(this, '.error-phone', 'Votre numéro est incorrect');
			error_phone = false;
		}else{

			$('.error-phone').hide();
			error_phone = true;
		}
	});

	$(document).on('keyup', '#email', function () {

		var email = $(this).val();
		var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

		if(email === ''){

			alertMessage(this, '.error-email', 'Entrer votre e-mail');
			error_email = false;
		}else if(!filter.test(email)){

			alertMessage(this, '.error-email', 'Votre e-mail est incorrect');
			error_email = false;
		}else{

			$('.error-email').hide();
			error_email = true;
		}
	});

	$(document).on('keyup', '#message', function () {

		var message = $(this).val();
		if(message === ''){

			alertMessage(this, '.error-message', 'Taper quelque phrase');
			error_message = false;
		}else if( message.length < 20){

			alertMessage(this, '.error-message', 'Taper 20 caractères au moins');
			error_message = false;
		}else{

			$('.error-message').hide();
			error_message = true;
		}
	});


	$(document).on('submit', '#submit', function () {

		var name = $(this).find('#name').val();
		var email = $(this).find('#email').val();
		var phone = $(this).find('#phone').val();
		var message = $(this).find('#message').val();

		if (error_name === false || error_email === false || error_message === false || error_phone === false) {

			if (name === '') {

				$('.error-name').html('Ce champs est obligatoire').show();
			}

			if (email === '') {
				$('.error-email').html('Ce champs est obligatoire').show();
			}
			if (phone === '') {
				$('.error-phone').html('Ce champs est obligatoire').show();
			}
			if (message === '') {
				$('.error-message').html('Ce champs est obligatoire').show();
			}

			return false;
		}else{

			$.ajax({
				url: 'class/sendEmail.php',
				type: 'POST',
				dataType: 'json',
				data:$(this).serialize(),
				success: function (data) {

					if(data.message){

						$('.alert').html(data.message).show();
					}
				}
			});
			return false;
		}
	});
});



