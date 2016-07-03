$( document ).ready(function() {
    var validator = $("#candidate-form").kendoValidator({
        rules: {
            matches: function (input) {
                var matches = input.data('matches');
                // if the `data-matches attribute was found`
                if (matches) {
                    // get the input to match
                    var match = $(matches);

                    // trim the values and check them
                    if ($.trim(input.val()) === $.trim(match.val())) {
                        // the fields match
                        return true;
                    } else {
                        // the fields don't match - validation fails
                        return false;
                    }
                }

                // don't perform any match validation on the input
                return true;
            }
        },
        messages: {
            email: "Vui lòng nhập email đúng định dạng",
            matches: function (input) {
                return input.data("matchesMsg");
            }
        }
    }).data("kendoValidator");

    $("#register-candidate-btn").click(function () {
        var errorStatus = validateExpectJobsAdnExpectAddresses();

        if (validator.validate() && !errorStatus) {
            $("#candidate-form").submit();
        }else{
            $invalidItem = $('.k-invalid:first');

            if ($invalidItem.hasClass('select-style')) {
                $invalidItem.select2('focus');
            } else {
                $invalidItem.focus();
            }

            $('html, body').animate({
                scrollTop: $invalidItem.offset().top - 100
            }, 1000);
        }
    });

    $('.select-style').on('change', function(){
        var val = $(this).val();
        if (val) {
            $(this).closest('div').find('.k-invalid-msg').hide();
        }
    });

    var validateExpectJobsAdnExpectAddresses = function()   // Only visible inside Restaurant()
    {
        var errorStatus = false;

        //Custom validate expect jobs and expect addresses
        var jobCount = $('.job-list').find('.breaking-news').length;
        if (jobCount == 0) {
            errorStatus = true;
            $('#error_nganhnghe').html('Vui lòng chọn ngành nghề mong muốn!').removeClass('display_none');
        } else {
            $('#error_nganhnghe').not('.display_none').html('').addClass('display_none');
        }

        var addressCount = $('.address-list').find('.breaking-news').length;
        if (addressCount == 0) {
            errorStatus = true;
            $('#address-error').html('Vui lòng chọn tỉnh thành mong muốn!').removeClass('display_none');
        } else {
            $('#address-error').not('.display_none').html('').addClass('display_none');
        }

        return errorStatus;
    }
});