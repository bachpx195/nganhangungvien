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
        if (validator.validate()) {
            $("#candidate-form").submit();
        }
    });
});