<script type="text/javascript">

    // processing change password
    $(document).ready(function() {
        var padding_h = 56;
        var height_w  = $('#popup_content_register_choice').height();
        var scroll_h  = height_w - (padding_h);
        $(".regis_content_1").css('height', scroll_h);

        // show popup
        // show change password popup
        $("#btnChangePassword").click(function() {
            $('#popup_change_password').show();
        });
        // show change company information
        $("#btnChangeCompanyInfo").click(function() {
            $('#popup_change_company_info').show();
        });
        // show change contact person information
        $("#btnChangeContactPerson").click(function() {
            $('#popup_change_contact_person').show();
        });

        //close confirm
        $(".block-img-close, #btnCancel").click(function() {
            $('#popup_change_password').hide();
            $('#popup_change_company_info').hide();
            $('#popup_change_contact_person').hide();
        });

        // processing change password
        $("#btnSave").click(function() {
            var isOk    = true;
            var oldPassword = document.getElementById("oldPassword").value;
            var newPassword = document.getElementById("newPassword").value;
            var newPasswordConfirm = document.getElementById("newPasswordConfirm").value;

            $('.inputText').each(function (){
                if($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                }else{
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            if (oldPassword == '') {
                $("#error_oldPassword").html("Vui lòng nhập vào mật khẩu cũ!");
                $("#error_oldPassword").removeClass('display_none');
                isOk = false;
            }else if ((newPassword != newPasswordConfirm) && (newPassword != '' && newPasswordConfirm != '')){
                $(".err_password").html("Mật khẩu xác nhận không trùng khớp");
                $(".err_password").removeClass('display_none');
                isOk = false;
            }else{
                $(".err_password").html("");
                $(".err_password").addClass('display_none');
            }

            if (isOk == false) {
                return false;
            } else {
                var dataPost = new FormData($("#changePassword")[0]);
                var rs = false;
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    async: false,
                    url: '{{ route('user.account.changepassword') }}',
                    data: dataPost,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.status == true) { // thanh cong
                            //hide popup dang ky
                            $('#msg_success').text(data.message);
                            $("#msg_success").removeClass('display_none');

                            $("#row_btn").addClass('display_none');
                            // dong popup sau 3 giay
                            setTimeout(function(){
                                $('#popup_change_password').hide();
                            }, 3000);
                        } else {
                            $('[id^="error_"]').text('');
                            $('#msg_success').text(data.message);
                            $("#msg_success").removeClass('display_none');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        });


        // Change company information
        var padding_h = 56;
        var height_wd = $( window ).height();
        var height_w  = $('#popup_content').height();
        var page_top  = 20;

        var scroll_h  = height_w - padding_h;
        $(".regis_content_s33_4").css('height', scroll_h);

        $(".pos_new_pos_s34").css('top', page_top);
        $(".pos_new_pos_s34").css('left',0);

        //reinit scroll
        $('.scrollbar_cus_s33_4').enscroll({
            showOnHover: false,
            verticalTrackClass: 'track3',
            verticalHandleClass: 'handle3'
        });

        $("#btnSaveCompanyInfo").click(function() {
            isOk = true;
            $('.cInput').each(function (){
                if($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                }else{
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            if (isOk == false) {
                return false;
            } else {
                var dataPost = new FormData($("#edit_profile_ntd")[0]);
                var rs = false;
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    async: false,
                    url: '{{ route('user.account.changecompanyinfo') }}',
                    data: dataPost,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.status == true) { // thanh cong
                            //hide popup dang ky
                            $('#msg_success_info').text(data.message);
                            $("#msg_success_info").removeClass('display_none');

                            // dong popup sau 3 giay
                            setTimeout(function(){
                                $('#popup_change_company_info').hide();
                            }, 3000);
                        } else {
                            $('[id^="error_"]').text('');
                            $('#msg_success_info').text(data.message);
                            $("#msg_success_info").removeClass('display_none');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        });

        // popup edit contact person information
        $("#popup_content_successfull").css('top', 0);
        $("#popup_content_successfull").css('top', 50);

        $("#btnSaveContactPerson").click(function() {
            isOk = true;
            $('.ctInput').each(function (){
                if($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                }else{
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            if (isOk == false) {
                return false;
            } else {
                var dataPost = new FormData($("#edit_contact_ntd")[0]);
                var rs = false;
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    async: false,
                    url: '{{ route('user.account.changecontactperson') }}',
                    data: dataPost,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.status == true) { // thanh cong
                            //hide popup dang ky
                            $('#msg_success_contact').text(data.message);
                            $("#msg_success_contact").removeClass('display_none');

                            // dong popup sau 3 giay
                            setTimeout(function(){
                                $('#popup_change_contact_person').hide();
                            }, 3000);
                        } else {
                            $('[id^="error_"]').text('');
                            $('#msg_success_contact').text(data.message);
                            $("#msg_success_contact").removeClass('display_none');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        });
    });
</script>