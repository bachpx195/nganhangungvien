<script type="text/javascript">
    function fileOnchange(objFile) {
        fileName = objFile.value.replace(/C:\\fakepath\\/i, '');
        $("#note_select_file_"+objFile.name).html(fileName);
    }
    
    function checkFormUser() {
        var isOk = true;
        $('.uInput').each(function () {
            if ($(this).val().trim() == '') {
                isOk = false;
            } else {
                $(this).parent().next('div.error_reg_mess_cus').addClass('display_none');
                $(this).parent().next('div.error_reg_mess_cus').html('');
            }
        });
        var userId = $('#_userId').val();
        if (!userId) {
            $('.pInput').each(function () {
                if ($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().next('div.error_reg_mess_cus').removeClass('display_none');
                    $(this).parent().next('div.error_reg_mess_cus').html("Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().next('div.error_reg_mess_cus').addClass('display_none');
                    $(this).parent().next('div.error_reg_mess_cus').html('');
                }
            });
            $('.cSelect option:selected').each(function () {
                if ($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().parent().next('div.invalid-msg-role').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg-role').html("Vui lòng chọn quyền cho user");
                } else {
                    $(this).parent().parent().next('div.invalid-msg-role').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg-role').html('');
                }
            });
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
            if (password.length > 0 && confirm_password.length > 0 && password != confirm_password) {
                $('div.error_reg_mess_conf').removeClass('display_none');
                $('div.error_reg_mess_conf').html("Xác nhận mật khẩu không đúng");
                isOk = false;
            }
        }
        if (!isOk) {
            console.log('Not submit');
            return false;
        }
        console.log('Submit');
        return true;
    }
</script>