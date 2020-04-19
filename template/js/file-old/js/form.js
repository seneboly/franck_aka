/**
 * Submitting Form
 */
jQuery(document).ready(function ($) {
    var debug = false; //show system errors
    var sendingMessage = 'Sending...';

    $('.ajax-form').submit(function () {
        var $f = $(this);
        var $submit = $f.find('input[type="submit"]');

        //prevent double click
        if ($submit.hasClass('disabled')) {
            return false;
        }

        $submit.attr('data-value', $submit.val()).val(sendingMessage).addClass('disabled');

        $('[name="field_[]"]').each(function (key,e) {
            var $e = $(e);
            var p = $e.attr('placeholder');
            if (p) {
                $e.attr('name', $e.attr('name').replace('[]', '[' + p + ']'));
            }
        });

        $.ajax({
            url: $f.attr('action'),
            method: 'post',
            data: $f.serialize(),
            dataType: 'json',
            success: function (data) {

                if (data.errors) {
                    // error
                    var $errorMsg = jQuery($f).find(".alert-error");
                    jQuery($f).find("fieldset").fadeOut(300, function () {
                        $errorMsg.fadeIn();
                    });

                } else {
                    // success
                    var $successMsg = jQuery($f).find(".alert-success");
                    jQuery($f).find("fieldset").fadeOut(300, function () {
                        $successMsg.fadeIn();
                    });
                }

                $submit.val($submit.attr('data-value')).removeClass('disabled');
            },
            error: function (data) {
                if (debug) {
                    alert(data.responseText);
                }
                $submit.val($submit.attr('data-value')).removeClass('disabled');
            }
        });

        return false;
    });
});