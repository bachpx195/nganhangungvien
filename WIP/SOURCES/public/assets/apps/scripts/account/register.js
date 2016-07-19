/**
 * Created by cuong on 29/05/2016.
 */
$(document).ready(function () {
    var validator = $("#form_register").kendoValidator({
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

    $("#btnRegister").click(function () {
        if (validator.validate()) {
            if ($( "#policy-checkbox" ).length) {
                if ($('#policy-checkbox').prop('checked')) {
                    $("#form_register").submit();
                } else {
                    swal("Thông báo!", "Vui lòng chọn đồng ý với điều khoản sử dụng");
                }    
            } else {
                $("#form_register").submit();
            }
        }else{
            $('input.k-invalid:first').focus();
        }
    });

    /*var numberOfPhones = 1;
     $('#addPhone').click(function () {
     var div = $(this).parent().parent().parent();
     var html = div.find('.input-phone').last().clone(true, true);
     html.find('.k-invalid-msg').remove();
     html.find('input').val('');
     numberOfPhones++;
     html.find('input').attr('name', 'phone' + numberOfPhones);
     div.find('.input-phone').last().after(html);

     var validator = $("#form_register").kendoValidator().data("kendoValidator");
     })*/
});