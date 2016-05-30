/**
 * Created by cuong on 29/05/2016.
 */
$(document).ready(function () {
    var validator = $("#form_register").kendoValidator().data("kendoValidator");

    $("#btnRegister").click(function () {
        if (validator.validate()) {
            //collect phone number
            var phones = [];
            $('.phone_txt').each(function () {
                phones.push($(this).val());
            });

            $("#phones").val(phones);

            $("#form_register").submit();
        }
    });

    var numberOfPhones = 1;
    $('#addPhone').click(function () {
        var div = $(this).parent().parent().parent();
        var html = div.find('.input-phone').last().clone(true, true);
        html.find('.k-invalid-msg').remove();
        html.find('input').val('');
        numberOfPhones++;
        html.find('input').attr('name', 'phone' + numberOfPhones);
        div.find('.input-phone').last().after(html);

        var validator = $("#form_register").kendoValidator().data("kendoValidator");
    })
});