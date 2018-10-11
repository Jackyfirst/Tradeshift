/*global $,document*/
$(document).ready(function () {
	var $earlyPaymentsForm = $('.js-form'),
		$wordpressForm = $('.wpcf7'),
		earlyPayments = {
			$suppliername: $earlyPaymentsForm.find('input[name="suppliername"]'),
			$name: $earlyPaymentsForm.find('input[name="name"]'),
			$method: $earlyPaymentsForm.find('input[name="method"]'),
			$time: $earlyPaymentsForm.find('input[name="time"]'),
			$phone: $earlyPaymentsForm.find('input[name="phone"]'),
			$email: $earlyPaymentsForm.find('input[name="email"]'),
			$comments: $earlyPaymentsForm.find('input[name="comments"]'),
			$onboardingmanageremail: $earlyPaymentsForm.find('input[name="onboardingmanageremail"]'),
			$programnames: $earlyPaymentsForm.find('input[name="programnames"]'),
			$button: $earlyPaymentsForm.find('button')
		},
		wordpress = {
			$suppliername: $wordpressForm.find('input[name="suppliername"]'),
			$name: $wordpressForm.find('input[name="name"]'),
			$method: $wordpressForm.find('input[name="method"]'),
			$time: $wordpressForm.find('input[name="time"]'),
			$phone: $wordpressForm.find('input[name="phone"]'),
			$email: $wordpressForm.find('input[name="email"]'),
			$comments: $wordpressForm.find('input[name="comments"]'),
			$onboardingmanageremail: $wordpressForm.find('input[name="onboardingmanageremail"]'),
			$programnames: $wordpressForm.find('input[name="programnames"]')
		};

	// simulate focus class on label elements
	$earlyPaymentsForm.find('input[type="text"]').on('focus', function () {
		$(this).closest('label').addClass('_focus');
	});
	$earlyPaymentsForm.find('input[type="text"]').on('focusout', function () {
		$(this).closest('label').removeClass('_focus');
	});

	// display phone or email field based on selected contact method
	earlyPayments.$email.parent().hide();
	earlyPayments.$method.on('click', function () {
		if ($(this).attr('value') === 'phone') {
			earlyPayments.$time.parents('.uniform').show();
			earlyPayments.$phone.parent().show();
			earlyPayments.$email.parent().hide();
		} else {
			earlyPayments.$time.parents('.uniform').hide();
			earlyPayments.$phone.parent().hide();
			earlyPayments.$email.parent().show();
		}
	});

	// requre contact name and either phone or email
	function validateForm () {
		$('.error').removeClass('error');
		if (earlyPayments.$name.val().length === 0) {
			earlyPayments.$name.focus().parent().addClass('error');
			return false;
		}
		if ($earlyPaymentsForm.find('input[name="method"]:checked').val() === 'phone') {
			if (earlyPayments.$phone.val().length === 0) {
				earlyPayments.$phone.focus().parent().addClass('error');
				return false;
			}
		} else {
			if (earlyPayments.$email.val().length === 0) {
				earlyPayments.$email.focus().parent().addClass('error');
				return false;
			}
		}
		return true;
	}

	// handle submitting the form
	earlyPayments.$button.on('click', function (event) {
		var selectedMethod = $earlyPaymentsForm.find('input[name="method"]:checked').val(),
			selectedTime = $earlyPaymentsForm.find('input[name="time"]:checked').val();

		if (validateForm()) {
			wordpress.$suppliername.val(earlyPayments.$suppliername.val());
			wordpress.$name.val(earlyPayments.$name.val());
			wordpress.$method.val(selectedMethod);
			wordpress.$time.val(selectedMethod === 'email' ? 'anytime' : selectedTime);
			wordpress.$phone.val(earlyPayments.$phone.val());
			wordpress.$email.val(earlyPayments.$email.val());
			wordpress.$comments.val(earlyPayments.$comments.val());
			wordpress.$onboardingmanageremail.val(earlyPayments.$onboardingmanageremail.val());
			wordpress.$programnames.val(earlyPayments.$programnames.val());

			$(this).attr('disabled', 'disabled').text('Sending...');
			$wordpressForm.find('form').submit();
		}
	});
});
