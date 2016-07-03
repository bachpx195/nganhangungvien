<script type="text/javascript">
    // processing change password
    $(document).ready(function () {
        var padding_h = 56;
        var height_w = $('#popup_content_register_choice').height();
        var scroll_h = height_w - (padding_h);
        $(".regis_content_1").css('height', scroll_h);

        // show popup
        // show change password popup
        $("#btnChangePassword").click(function () {
            $('#popup_change_password').show();
        });
        // show change company information
        $("#btnChangeCompanyInfo").click(function () {
            $('#popup_change_company_info').show();
        });
        // show change contact person information
        $("#btnChangeContactPerson").click(function () {
            $('#popup_change_contact_person').show();
        });

        //close confirm
        $(".block-img-close, #btnCancel").click(function () {
            $('#popup_change_password').hide();
            $('#popup_change_company_info').hide();
            $('#popup_change_contact_person').hide();
            hideSuccessMessage();
        });

        // processing change password
        $("#btnSave").click(function () {
            var isOk = true;
            var oldPassword = document.getElementById("oldPassword").value;
            var newPassword = document.getElementById("newPassword").value;
            var newPasswordConfirm = document.getElementById("newPasswordConfirm").value;

            $('.inputText').each(function () {
                if ($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            if (oldPassword == '') {
                $("#error_oldPassword").html("Vui lòng nhập vào mật khẩu cũ!");
                $("#error_oldPassword").removeClass('display_none');
                isOk = false;
            } else if (oldPassword == '') {
                $("#error_newPassword").html("Vui lòng nhập vào mật khẩu mới!");
                $("#error_newPassword").removeClass('display_none');
                isOk = false;
            } else if ((newPassword != newPasswordConfirm) && (newPassword != '' && newPasswordConfirm != '')) {
                $(".err_password").html("Mật khẩu xác nhận không trùng khớp");
                $(".err_password").removeClass('display_none');
                isOk = false;
            } else {
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
                            setTimeout(function () {
                                $('#popup_change_password').hide();
                                hideSuccessMessage();
                            }, 2000);
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
        var height_wd = $(window).height();
        var height_w = $('#popup_content').height();
        var page_top = 75;

        var scroll_h = height_w - padding_h;
        $(".regis_content_s33_4").css('height', scroll_h);

        $(".pos_new_pos_s34").css('top', page_top);
        $(".pos_new_pos_s34").css('left', 0);

        //reinit scroll
        $('.scrollbar_cus_s33_4').enscroll({
            showOnHover: false,
            verticalTrackClass: 'track3',
            verticalHandleClass: 'handle3'
        });

        $("#btnSaveCompanyInfo").click(function () {
            var isOk = true;
            $('.cInput').each(function () {
                if ($(this).val().trim() == '') {
                    isOk = false;
                    console.log('Error input');
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            $('.cSelect option:selected').each(function () {
                if ($(this).val().trim() == '') {
                    isOk = false;
                    console.log('Error select');
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });

            // check size of upload file
            var file = document.getElementById("logo").files[0];
            var sFileName = file.name;
            var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
            if (!(sFileExtension === "jpg" || sFileExtension === "gif" || sFileExtension === "png")) {
                alert('Vui lòng chọn file có định dạng .jpg, .gif, .png');
                isOk = false;
            }
            var iFileSize = file.size;
            if (iFileSize > 307200) {
                alert('Vui lòng chọn file có dung lượng <= 300KB');
                isOk = false;
            }

            if (isOk == false) {
                console.log('Error can post data');
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

                            // replace content
                            var template = $('#template_employer_company_information_content').html();
                            Mustache.parse(template);
                            var output = Mustache.render(template, getCompanyInformationRenderData(data));
                            $('#employer_company_information_content').html(output);

                            // dong popup sau 3 giay
                            setTimeout(function () {
                                $('#popup_change_company_info').hide();
                                hideSuccessMessage();
                            }, 2000);
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

        $("#btnSaveContactPerson").click(function () {
            var isOk = true;
            $('.ctInput').each(function () {
                if ($(this).val().trim() == '') {
                    isOk = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
                } else {
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

                            // replace content
                            var template = $('#template_employer_contact_person_content').html();
                            Mustache.parse(template);
                            var output = Mustache.render(template, getContactPersonRenderData());
                            $('#employer_contact_person_content').html(output);

                            // dong popup sau 3 giay
                            setTimeout(function () {
                                $('#popup_change_contact_person').hide();
                                hideSuccessMessage();
                            }, 2000);
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

    function hideSuccessMessage() {
        $("#msg_success_contact").addClass('display_none');
        $("#msg_success").addClass('display_none');
        $("#msg_success_info").addClass('display_none');
    }

    function getContactPersonRenderData() {
        return {
            contact_person: $('input[name=contact_name]').val(),
            contact_phone: $('input[name=contact_phone]').val(),
            contact_email: $('input[name=contact_email]').val()
        };
    }

    function getCompanyInformationRenderData(data) {
        return {
            company_name: $('input[name=company_name]').val(),
            companySize: $('select[name=company_size] option:selected').text(),
            company_address: $('input[name=company_address]').val(),
            provinceName: $('select[name=province_id] option:selected').text(),
            phone: $('input[name=company_phone]').val(),
            website: $('input[name=website]').val(),
            company_description: $('#about_company').val(),
            company_logo: data.img
        };
    }

    function fileOnchange(objFile) {
        var file = document.getElementById("logo").files[0];
        var iFileSize = file.size;
        if (iFileSize > 307200) {
            alert('Hệ thống chỉ hỗ trợ các file có dung lượng <= 300KB');
        }
        var fileName = objFile.value.replace(/C:\\fakepath\\/i, '');
        var sFileExtension = fileName.split('.')[fileName.split('.').length - 1].toLowerCase();
        if (!(sFileExtension === "jpg" || sFileExtension === "gif" || sFileExtension === "png")) {
            alert('Hệ thống chỉ hỗ trợ các định dạng .jpg, .gif, .png');
        }
        $("#note_select_file_"+objFile.name).html(fileName);
    }
</script>