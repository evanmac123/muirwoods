jQuery(document);

// Form Validation
// 1. Form tag must have class="validate-me"
// 2. Required fields must be wrapped in a div with class="required"

$('.validate-me').on('submit', function() {
  var form = $(this);
  var missingFields = false;
  var invalidDates = false;
  var missingCaptcha = false;

  try {
    form.find('.required').each(function() {
      var fieldWrap = $(this);

      fieldWrap.find('input, textarea, select').each(function() {
        var field = $(this);

        if (field.val() === '') {
          fieldWrap.addClass('error');
          missingFields = true;
        } else if (field.hasClass('dateField')) { 
          var valid = isValidDate(field.val());
          if (!valid) {
            fieldWrap.addClass('error');
            invalidDates = true;
          } else {
            fieldWrap.removeClass('error');
          }
        } else {
          fieldWrap.removeClass('error');
        }
      });

    });

    // Check for recaptcha response
    if ($('.g-recaptcha-response').val() === '') {
      missingCaptcha = true;
    }

    if (missingFields || invalidDates || missingCaptcha) {
      var messages = [];

      if (missingFields) {
        messages.push('Please enter all required fields');
      }
      if (invalidDates) {
        messages.push('Please enter valid dates: MM/DD/YYYY');
      }
      if (missingCaptcha) {
        messages.push('Please enter the captcha');
      }

      form.find('.validate-message').html(messages.join('<br/>')).show();

      // scroll to top of form
      $('html, body').animate({scrollTop: form.offset().top - 150}, 0);
      return false;
    }

  } catch (error) {
    console.log(error);
    return false;
  }
});

function isValidDate(dateString) {
  var regEx = /^\d{2}\/\d{2}\/\d{4}$/;
  if(!dateString.match(regEx)) return false;  // Invalid format
  var d = new Date(dateString);
  if(!d.getTime() && d.getTime() !== 0) return false; // Invalid date
  return true;
}

