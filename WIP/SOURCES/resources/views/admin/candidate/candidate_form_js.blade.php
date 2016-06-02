<script type="text/javascript">
    var func_box_taohoso_tungbuoc_landau = function () {
        $("#sliding_menu_js").remove();

        $('#c_ma_ngoai_ngu').change(function () {
            if ($(this).val() == '0') {
                $('#div_ngonngukhac').fadeIn();
            } else {
                $('#div_ngonngukhac').fadeOut();
            }
        });
        $('#c_ngoai_ngu_khac').change(function () {
            if ($(this).val() == '') {
                $('#div_slt_ngoaingu').fadeIn();
            } else {
                $('#div_slt_ngoaingu').fadeOut();
            }
        })


        $(".select_box2, .them_nganhnghe").select2({
            dropdownCssClass: 'tinh_thanh_reg'
        });
        $(".select_time").select2({
            dropdownCssClass: 'select_start_month'
        });
        $eventSelect = $(".them_tinh_thanh");
        $eventSelect.select2({
            dropdownCssClass: 'tinh_thanh_reg'
        });
        chon_cv_hientai();
        function chon_cv_hientai() {

            setTimeout(function () {
                        $('input[id="chk_c_cong_viec_hien_tai"]').on('ifChecked ifUnchecked', function (event) {
                            if (event.type == 'ifChecked') {
                                $('.kn_dennam').addClass('display_none');
                                $('.kn_denthang').addClass('display_none');
                                $('.kn_denhientai').removeClass('display_none');
                                $('#end_month, #end_year').removeClass('checkComboboxKNEdit');
                            } else {
                                $('.kn_dennam').removeClass('display_none');
                                $('.kn_denthang').removeClass('display_none');
                                $('.kn_denhientai').removeClass('display_none').addClass('display_none');
                                $('#end_month, #end_year').addClass('checkComboboxKNEdit');
                            }

                        });
                    }
                    , 500);
        }

        $('#c_so_nam_kinh_nghiem').on("change", function (e) {
            if ($('.div_info_kinhnghiem').length == 0 && $('#c_so_nam_kinh_nghiem').val() != 8) {
                $('.kn_bb').removeClass('display_none');
                $('.kn_kobb').removeClass('display_none').addClass('display_none');
            } else {
                $('.kn_bb').removeClass('display_none').addClass('display_none');
                $('.kn_kobb').removeClass('display_none');
            }
            ;
        });

        $('#c_trinh_do_hv').on("change", function (e) {
            if ($('.div_info_bangcap').length == 0 && $('#c_trinh_do_hv').val() != 6 && $('#c_trinh_do_hv').val() != 5) {
                $('.bc_bb').removeClass('display_none');
                $('.bc_kobb').removeClass('display_none').addClass('display_none');
            } else {
                $('.bc_bb').removeClass('display_none').addClass('display_none');
                $('.bc_kobb').removeClass('display_none');
            }
            ;
        });

        $('.them_nganhnghe').on("change", function (e) {
            var nganhnghe = e.added.text;
            var nganhnghe_id = e.added.id;
            if ($('.input_nganhnghe_' + nganhnghe_id).length == 0) {
                var html = '<div class="breaking-news floatLeft ml6">' +
                        '<span class="title">' + nganhnghe + '</span>' +
                        '<input class="display_none input_nganhnghe_' + nganhnghe_id + '" name="nganhnghe[]" type="text" value="' + nganhnghe_id + '" />' +
                        '<span class="icon icon-xs icon-arrow-org"></span>' +
                        '</div>';
                var items = $('.list-nganh-nghe').find('.breaking-news').length;
                if (items >= 3) {
                    $('#error_nganhnghe').html('Chỉ được phép chọn tối đa 3 ngành nghề!').removeClass('display_none');
                    return false;
                } else {
                    $('#error_nganhnghe').not('.display_none').html('').addClass('display_none');
                }

                if (nganhnghe_id != undefined && nganhnghe_id != '' && nganhnghe_id != '0') {
                    $('.list-nganh-nghe').find('.dangchon-diadiem-lv').after(html);
                    $('.list-nganh-nghe').find('.breaking-news').addClass('ml6');
                    $('.list-nganh-nghe').find('.breaking-news').first().removeClass('ml6');
                    var items = $('.list-nganh-nghe').find('.breaking-news').length;
                    if (items <= 0) {
                        $('.list-nganh-nghe').hide();
                    } else {
                        $('.list-nganh-nghe').show();
                    }
                }
                ;
            }
            ;
        });

        $(document).on('click', '#block-thong-tin-dang-nhap .list-nganh-nghe .breaking-news .icon', function () {
            $(this).parent().remove();
            $('.list-nganh-nghe').find('.breaking-news').addClass('ml6');
            $('.list-nganh-nghe').find('.breaking-news').first().removeClass('ml6');
            var items = $('.list-nganh-nghe').find('.breaking-news').length;
            if (items <= 0) {
                $('.list-nganh-nghe').hide();
            } else {
                $('.list-nganh-nghe').show();
            }
            if (items >= 3) {
                $('#error_nganhnghe').html('Chỉ được phép chọn tối đa 3 ngành nghề!').removeClass('display_none');
                return false;
            } else {
                $('#error_nganhnghe').not('.display_none').html('').addClass('display_none');
            }
        });

        $eventSelect.on("change", function (e) {
            var city = e.added.text;
            var city_id = e.added.id;
            if ($('.input_tinhthanh_' + city_id).length == 0) {
                var html = '<div class="breaking-news floatLeft ml6">' +
                        '<span class="title">' + city + '</span>' +
                        '<input class="display_none input_tinhthanh_' + city_id + '" name="tinhthanh[]" type="text" value="' + city_id + '" />' +
                        '<span class="icon icon-xs icon-arrow-org"></span>' +
                        '</div>';
                var items = $('.list-dia-diem').find('.breaking-news').length;
                if (items >= 10) {
                    $('#error_fk_tinh').html('Chỉ được phép chọn tối đa 10 tỉnh thành phố!').removeClass('display_none');
                    return false;
                } else {
                    $('#error_fk_tinh').not('.display_none').html('').addClass('display_none');
                }

                if (city_id != undefined && city_id != '' && city_id != '0') {
                    $('.list-dia-diem').find('.dangchon-diadiem-lv').after(html);
                    $('.list-dia-diem').find('.breaking-news').addClass('ml6');
                    $('.list-dia-diem').find('.breaking-news').first().removeClass('ml6');
                    var items = $('.list-dia-diem').find('.breaking-news').length;
                    if (items <= 0) {
                        $('.list-dia-diem').hide();
                    } else {
                        $('.list-dia-diem').show();
                    }
                }
                ;
            }
            ;
        });

        $(document).on('click', '#block-thong-tin-dang-nhap .list-dia-diem .breaking-news .icon', function () {
            $(this).parent().remove();
            $('.list-dia-diem').find('.breaking-news').addClass('ml6');
            $('.list-dia-diem').find('.breaking-news').first().removeClass('ml6');
            var items = $('.list-dia-diem').find('.breaking-news').length;
            if (items <= 0) {
                $('.list-dia-diem').hide();
            } else {
                $('.list-dia-diem').show();
            }
            if (items >= 10) {
                $('#error_fk_tinh').html('Chỉ được phép chọn tối đa 10 tỉnh thành phố!').removeClass('display_none');
                return false;
            } else {
                $('#error_fk_tinh').not('.display_none').html('').addClass('display_none');
            }
        });

        $(window).scrollTop(0);

        var height_wd = $(window).height();

        function checkValidHoSoLocal() {
            var isCheck = true;
            var focus = false;
            var id_form = 'div-frm-hoso';

            $('.inputTextTop, .inputTxtAreaTop').each(function () {
                if ($(this).val().trim() == '') {
                    isCheck = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        if ($("." + id_form + " #error_" + $(this).attr('id')).length > 0) {
                            $('#cols-right').scrollTo2("." + id_form + " #error_" + $(this).attr('id'));
                        } else {
                            $('#cols-right').scrollTo2("." + id_form + " #" + $(this).attr('id'));
                        }
                        focus = true;
                    }
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            $('.reqCheckBoxTop').each(function () {
                if ($(this).attr('name') == 'fk_tinh') {
                    return true;
                }
                ;
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        if ($("." + id_form + " #error_" + $(this).attr('id')).length > 0) {
                            $('#cols-right').scrollTo2("." + id_form + " #error_" + $(this).attr('id'));
                        } else {
                            $('#cols-right').scrollTo2("." + id_form + " #" + $(this).attr('id'));
                        }
                        focus = true;
                    }
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });


            var c_so_nam_kinh_nghiem = $('#c_so_nam_kinh_nghiem').val();
            // can_save_kinh_nghiem() == true : Sẽ lưu kinh nghiệm
            if (($('.new-kinhnghiem').length == 0 && c_so_nam_kinh_nghiem != 8)) {
                isCheck = 0;
                $('.max_content_kinhnghiem_lv').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập kinh nghiệm làm việc!").removeClass('display_none');
                if (!focus) {
                    $('#cols-right').scrollTo2("#div-frm-kinhnghiem");
                    focus = true;
                }
            }
            ;

            var c_trinh_do_hv = $('#c_trinh_do_hv').val();
            // can_save_bang_cap() == true : Sẽ lưu kbằng cấp
            if (($('.new-bangcap').length == 0 && c_trinh_do_hv != 6 && c_trinh_do_hv != 5)) {
                isCheck = 0;
                $('.max_content_bangcap_cc').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập trình độ và bằng cấp!").removeClass('display_none');
                if (!focus) {
                    $('#cols-right').scrollTo2("#div-frm-bangcap");
                    focus = true;
                }
            }
            ;

            if (!isCheck) {
                return false;
            } else {
                return true;
            }
        }


        function check_form_hoso_landau() {
            var valid = true;
            if (!$('#div-frm-thamkhao').hasClass('display_none') && kiem_tra_form_co_thongtin('frmthamkhao') && !can_save_tham_khao()) {
                yeu_cau_dien_form('frmthamkhao');
                valid = false;
            } else {
                xoa_loi_trong_form('frmthamkhao');
            }
            if (!$('#div-frm-kynang').hasClass('display_none') && kiem_tra_form_co_thongtin('frmkynang') && !can_save_ky_nang()) {
                yeu_cau_dien_form('frmkynang');
                valid = false;
            } else {
                xoa_loi_trong_form('frmkynang');
            }
            if (!$('#div-frm-tinhoc').hasClass('display_none') && kiem_tra_form_co_thongtin('frmtinhoc') && !can_save_tin_hoc()) {
                yeu_cau_dien_form('frmtinhoc');
                valid = false;
            } else {
                xoa_loi_trong_form('frmtinhoc');
            }
            if (!$('#div-frm-ngoaingu').hasClass('display_none') && kiem_tra_form_co_thongtin('frmNgoaingu') && !can_save_ngoai_ngu()) {
                yeu_cau_dien_form('frmNgoaingu');
                valid = false;
            } else {
                xoa_loi_trong_form('frmNgoaingu');
            }
            if ($('#c_trinh_do_hv').val() != 6 && $('#c_trinh_do_hv').val() != 5 && !$('#div-frm-bangcap').hasClass('display_none') && kiem_tra_form_co_thongtin('frmBangcap') && !can_save_bang_cap()) {
                yeu_cau_dien_form('frmBangcap');
                valid = false;
            } else {
                xoa_loi_trong_form('frmBangcap');
            }
            xoa_loi_trong_form('frmkinhnghiem');
            var c_so_nam_kinh_nghiem = $('#c_so_nam_kinh_nghiem').val();
            if (!$('#div-frm-kinhnghiem').hasClass('display_none') && kiem_tra_form_co_thongtin('frmkinhnghiem') && !can_save_kinh_nghiem() && c_so_nam_kinh_nghiem != 8) {
                yeu_cau_dien_form('frmkinhnghiem');
                valid = false;
            }
            return valid;
        }

        function dang_ho_so(trang_thai) {

            var valid = true;
            // valid = checkValidHoSoLocal();

            if (!valid) {
                return false;
            } else {
                $('#c_trang_thai').val(trang_thai);
                var datapost = new FormData($("#frm-hoso")[0]);
                // datapost.append( 'file', $('#hosodinhkem')[0].files[0] );
                datapost.append('hoso[c_so_nam_kinh_nghiem]', $('#c_so_nam_kinh_nghiem').val());
                if ($('#is_search_allowed').prop('checked')) {
                    datapost.append('is_search_allowed', '1');
                } else {
                    datapost.append('is_search_allowed', '0');
                }
                var id_form = 'frm-hoso';
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: 'https://vieclam24h.vn/tintimviec/hoso_create',
                    data: datapost,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.error == 0) { // thanh cong
                            // Thành Công
                            if (trang_thai != 1) {
                                window.location = 'https://vieclam24h.vn/quan-ly-ho-so-tim-viec.html';
                                return false;
                            }
                            // Hiện thông báo thành công:
                            $("#popup_tao_ho_so_thanh_cong").load("/tintimviec/danghosothanhcong/1", $("#frm-hoso").serializeArray(), function () {
                                //load popup confirm
                                var h_win_2 = height_wd / 2;
                                var h_pop_confirm_2 = $("#popup_content_successfull").height() / 2;

                                var h_confirm = h_win_2 - h_pop_confirm_2;
                                $("#overlay_popup, .popup_danghoso, .tao_hso_landau").hide();
                                $("#overlay_popup, #popup_component_successfull").show();
                                $("#popup_content_successfull").css('top', ($(window).scrollTop() + h_confirm) - 5);
                                $("#popup_content_successfull").css('left', 0);
                                $("#overlay_popup, #popup_component_successfull").css('display', '-ms-flexbox');
                                $("#overlay_popup, #popup_component_successfull").css('display', '-moz-box');
                                $("#overlay_popup, #popup_component_successfull").css('display', '-webkit-box');
                                $("#overlay_popup, #popup_component_successfull").css('display', 'box');
                                //close confirm
                                $(".btn_close").click(function () {
                                    //hide popup dang ky
                                    window.location = 'https://vieclam24h.vn/quan-ly-ho-so-tim-viec.html';
                                    $("#overlay_popup, #popup_component_successfull").hide();
                                });
                                $("#btnDangHoSo").prop('disabled', false);
                            });
                        } else {
                            $("#btnDangHoSo").prop('disabled', false);
                            var focus = false;
                            if (data.tokenKey) {
                                $('#token-key').val(data.tokenKey);
                            }
                            ;
                            if (data.tokenValue) {
                                $('#token-value').val(data.tokenValue);
                            }
                            ;
                            $('[id^="error_"]').text('');
                            for (key in data.message) {
                                $('#error_' + key).text(data.message[key]);
                                $('#error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14').show();
                                if (key == 'alert') {
                                    alert(data.message[key]);
                                }
                                if (!focus) {
                                    if ($("." + id_form + " #error_" + key).length > 0) {
                                        $('#cols-right').scrollTo2("." + id_form + " #error_" + key);
                                        focus = true;
                                    }
                                    ;
                                }
                            }
                            if (data.main_message != null) {
                                $('.max_content').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                            }
                            ;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        $("#btnDangHoSo").prop('disabled', false);
                    }
                });

                return true;
            }

        }

        //check submit form - dang ho so
        $("#btnDangHoSo").click(function () {
            $("#btnDangHoSo").prop('disabled', true);
            var dienform = check_form_hoso_landau();

            if (!dienform) {
                $("#btnDangHoSo").prop('disabled', false);
                return false;
            }

            var valid = false;
            if (can_save_kinh_nghiem() !== 0) {
                if (save_kinh_nghiem()) {
                    $('#div-frm-kinhnghiem').addClass('display_none');
                }

            }
            if (can_save_bang_cap() !== 0) {
                if (save_bang_cap()) {
                    $('#div-frm-bangcap').addClass('display_none');
                }

            }
            if (can_save_ngoai_ngu()) {
                if (save_ngoai_ngu()) {
                    $('#div-frm-ngoaingu').addClass('display_none');
                }
                ;
            }
            if (can_save_tin_hoc()) {
                if (save_tin_hoc()) {
                    $('#div-frm-tinhoc').addClass('display_none');
                }
            }
            if (can_save_ky_nang()) {
                if (save_ky_nang()) {
                    $('#div-frm-kynang').addClass('display_none');
                }

            }
            if (can_save_tham_khao() !== 0) {
                if (save_tham_khao()) {
                    $('#div-frm-thamkhao').addClass('display_none');
                }

            }

            valid = checkValidHoSoLocal();

            if (!valid) {
                $("#btnDangHoSo").prop('disabled', false);
                return false;
            } else {
                dang_ho_so(1);
            }
        });
        $("#btnLuuNhap").click(function () {
            $(this).prop('disabled', true);
            if (can_save_kinh_nghiem() !== 0) {
                save_kinh_nghiem();
            }
            if (can_save_bang_cap() !== 0) {
                save_bang_cap();
            }
            if (can_save_ngoai_ngu()) {
                save_ngoai_ngu();
            }
            if (can_save_tin_hoc()) {
                save_tin_hoc();
            }
            if (can_save_ky_nang()) {
                save_ky_nang();
            }
            if (can_save_tham_khao() !== 0) {
                save_tham_khao();
            }
            dang_ho_so(-2);
            $(this).prop('disabled', false);
        });

        //NGƯỜI THAM KHẢO
        $("#btnSaveThamKhao").click(function () {
            save_tham_khao();
            // $('#div-frm-thamkhao').addClass('display_none');
            if ($('.new-thamkhao').length > 0) {
                $('#div-frm-thamkhao').fadeOut().addClass('display_none');
            }
        });
        function can_save_tham_khao() {
            if ($('#div-frm-thamkhao').hasClass('display_none')) {
                return false;
            }
            ;
            var isCheck = 1;
            var focus = false;
            var id_form = 'div-frm-thamkhao';
            $('.inputTextNTK').each(function () {
                if ($(this).val().trim() == '') {
                    isCheck = 0;
                }
            });
            return isCheck;
        }

        function validate_tham_khao() {
            var isCheck = 1;
            var focus = false;
            var id_form = 'div-frm-thamkhao';
            $('.inputTextNTK').each(function () {
                if ($(this).val().trim() == '') {
                    isCheck = 0;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                        focus = true;
                    }
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });
            return isCheck;
        }

        function save_tham_khao() {

            var id_form = 'div-frm-thamkhao';
            $("#btnSaveThamKhao").prop('disabled', true);
            var tel = $('#div-frm-thamkhao #tel_ntk').val();
            isCheck = validate_tham_khao();
            if (isCheck == 0) {
                $("#nguoitk_status_id").val(0);
                $("#btnSaveThamKhao").prop('disabled', false);
                return false;
            }
            else {
                $("#nguoitk_status_id").val(1);
                // $("#hienform-thamkhao").slideUp("slow");

                var datapost = new FormData($("#frmthamkhao")[0]);
                var rs = false;
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: 'https://vieclam24h.vn/tintimviec/update_thamkhao',
                    data: datapost,
                    async: false,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.error == 0) { // thanh cong
                            var id = data.id;
                            $('#div-frm-thamkhao').before('<div id="thamkhao-view-' + id + '" class="listnews new-thamkhao"></div>');
                            $("#thamkhao-view-" + id).load("/tintimviec/update_thamkhao?viewid=" + id, function () {
                                $('#div-frm-thamkhao input').each(function () {
                                    $(this).val('');
                                });
                                // $('#div-frm-thamkhao').addClass("display_none");
                                $('#thamkhao_created').val(1);
                                // $('#thamkhao_form_show').val(0);
                                $('.max_content').addClass("display_none").hide();
                                $("#btnRegisterThamKhao").click();
                            });
                            $("#btnSaveThamKhao").prop('disabled', false);
                            rs = true;
                        } else {
                            var focus = false;
                            $('#' + id_form + ' [id^="error_"]').text('');
                            for (key in data.message) {
                                $('#error_' + key).text(data.message[key]);
                                $('#error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14');
                                if (!focus) {
                                    $('#' + key).focus();
                                    focus = true;
                                }
                            }
                            if (data.main_message != null) {
                                $('.max_content').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                            }
                            ;
                            $("#btnSaveThamKhao").prop('disabled', false);
                            rs = false;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        }

        $("#btnRegisterThamKhao").click(function () {
            $('#div-frm-thamkhao input').each(function () {
                $(this).val('');
            });
            $('#div-frm-thamkhao .error_reg_mess').addClass('display_none');
            // if ($('.new-thamkhao').length > 0) {
            //     $('#div-frm-thamkhao').fadeOut().addClass('display_none');
            // }
        });

        $('#addthamkhao2_new').click(function (event) {
            var save_oke = save_tham_khao();
            if (save_oke) {
                $("#btnRegisterThamKhao").click();
                $('.max_content_thamkhao').fadeOut().addClass('display_none');
                $('#div-frm-thamkhao').removeClass("display_none").fadeIn();
                $('#thamkhao_form_show').val(1);
                if ($('.new-thamkhao').length > 0) {
                    $('#btnRegisterThamKhao').removeClass('display_none');
                } else {
                    $('#btnRegisterThamKhao').addClass('display_none');
                }
            } else {
                if ($('#div-frm-thamkhao').hasClass('display_none')) {
                    $("#btnRegisterThamKhao").click();
                    $('#div-frm-thamkhao').removeClass("display_none").fadeIn();
                    $('#thamkhao_form_show').val(1);
                }
                ;
            }
        });


        //THÊM NGƯỜI THAM KHẢO
        $("#btnSaveThamKhaoNew").click(function () {
            var isCheck = 1;

            $('.inputTextNTK1').each(function () {
                if ($(this).val().trim() == '') {
                    isCheck = 0;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });
            if (isCheck == 0) {
                $("#nguoitk_status_id").val(0);
                return false;
            }
            else {
                $("#nguoitk_status_id").val(1);
                $('.inputTextNTK1').each(function () {
                    $(this).val('');
                });
                $("#addthamkhao2_new").removeClass("addNguoiThamKhao");
                $("#hienform-thamkhao-add").slideUp("slow");
                $(".max_content_thamkhao").slideUp("slow");
                $(".max_content_thamkhao").html("");

            }
        });

        //save Ngoại ngữ
        $("#btnRegisNgoaiNgu").click(function () {

            var can_save = can_save_ngoai_ngu();
            if (can_save) {
                $('.max_content_ngoaingu').html('').addClass('display_none');
                if (save_ngoai_ngu()) {
                    $('#div-frm-ngoaingu').addClass("display_none");
                }
            } else {
                $('.max_content_ngoaingu').html('<span class="error_reg_mess_icon"></span> Vui lòng nhập đầy đủ các trường yêu cầu').removeClass('display_none');
            }

        });
        function save_ngoai_ngu() {

            $("#btnRegisNgoaiNgu").prop('disabled', true);
            $("#ngoai_ngu_id").val(1);

            var isCheck = true;
            var ngoaingu = false;
            $('.checkComboboxEditNN').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    ngoaingu = true;
                }
            });
            var ngoaingukhac = false;
            $('.checkTextEditNN').each(function () {
                if ($(this).val().trim() == '') {
                    ngoaingukhac = true;
                }
            });
            if (ngoaingu && ngoaingukhac) {
                isCheck = 0;
                $('.err_chonngoaingu').removeClass('display_none');
                $('.err_chonngoaingu').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
            } else {
                $('.err_chonngoaingu').addClass('display_none');
                $('.err_chonngoaingu').html('');
            }


            if (isCheck == 0) {
                $("#btnRegisNgoaiNgu").prop('disabled', false);
                return false;
            }
            else {
                var datapost = new FormData($("#frmNgoaingu")[0]);
                var rs = false;
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: 'https://vieclam24h.vn/tintimviec/update_ngoaingu',
                    data: datapost,
                    async: false,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.error == 0) { // thanh cong
                            var id = data.id;
                            $('#div-frm-ngoaingu').before('<div id="ngoaingu-view-' + id + '" class="listnews new-ngoaingu"></div>');
                            $("#ngoaingu-view-" + id).load("/tintimviec/update_ngoaingu?viewid=" + id, function () {
                                $('#div-frm-ngoaingu input').each(function () {
                                    $(this).val('');
                                });
                                // $('#div-frm-ngoaingu').addClass("display_none");
                                $('#ngoaingu_created').val(1);
                                $('.max_content_ngoaingu').addClass("display_none").hide();
                                $("#btnResetNgoaiNgu").click();
                            });
                            $("#btnRegisNgoaiNgu").prop('disabled', false);
                            rs = true;
                        } else {
                            var focus = false;
                            $('#div-frm-ngoaingu [id^="error_"]').text('');
                            for (key in data.message) {
                                $('#error_' + key).text(data.message[key]);
                                $('#error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14');
                                if (!focus) {
                                    $('#' + key).focus();
                                    focus = true;
                                }
                            }
                            if (data.main_message != null) {
                                $('.max_content_ngoaingu').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                            }
                            ;
                            $("#btnRegisNgoaiNgu").prop('disabled', false);
                            rs = false;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        }

        //save Ngoại ngữ
        $("#btnSaveTinHoc").click(function () {
            var can_save = can_save_tin_hoc();
            if (can_save) {
                $('.max_content_tinhoc').html('').addClass('display_none');
                save_tin_hoc();
            } else {
                $('.max_content_tinhoc').html('<span class="error_reg_mess_icon"></span> Vui lòng nhập đầy đủ các trường yêu cầu').removeClass('display_none');
            }
        });
        // Kiểm tra form tin học đủ điều kiện để lưu dữ liệu
        function can_save_tin_hoc() {
            if ($('#div-frm-tinhoc').hasClass('display_none')) {
                return false;
            }
            ;
            var has_check = false;
            $("#frmtinhoc input[type=radio]").each(function (index, el) {
                var check = $(this).prop("checked");
                if (check) {
                    has_check = true;
                }
                ;
            });
            if (has_check || $('#c_phan_mem_khac').val() != '') {
                return true;
            }
            ;
            return false;
        }

        function save_tin_hoc() {
            $("#btnSaveTinHoc").prop('disabled', true);
            var datapost = new FormData($("#frmtinhoc")[0]);
            var rs = false;
            $.ajax({
                type: 'post',
                dataType: 'json',
                async: false,
                url: 'https://vieclam24h.vn/tintimviec/update_tinhoc',
                data: datapost,
                mimeType: "multipart/form-data",
                processData: false,
                contentType: false,
                success: function (data, textStatus, jqXHR) {
                    if (data.error == 0) { // thanh cong
                        var id = data.id;
                        if (!($('#tinhoc-view-' + id).length > 0)) {
                            $('#div-frm-tinhoc').before('<div id="tinhoc-view-' + id + '" class="listnews box_trinhdo"  style="margin-left:0px"></div>');
                        }
                        ;
                        $("#tinhoc-view-" + id).load("/tintimviec/update_tinhoc?viewid=" + id, function () {
                            $('#div-frm-tinhoc input').each(function () {
                                $(this).val('');
                            });
                            $('#div-frm-tinhoc').addClass("display_none");
                            $('#tinhoc_created').val(1);
                            $('#tinhoc_form_show').val(0);
                        });
                        $("#btnSaveTinHoc").prop('disabled', false);
                        rs = true;
                    } else {
                        var focus = false;
                        $('#div-frm-tinhoc [id^="error_"]').text('');
                        for (key in data.message) {
                            $('#error_' + key).text(data.message[key]);
                            $('#error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14');
                            if (!focus) {
                                $('#' + key).focus();
                                focus = true;
                            }
                        }
                        if (data.main_message != null) {
                            $('.max_content_tinhoc').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                        }
                        ;
                        $("#btnSaveTinHoc").prop('disabled', false);
                        rs = false;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                    rs = false;
                }
            });
            return rs;
        }

        //check reset form Trình độ tin học
        $("#btnTHCancel").click(function () {
            $('#soft_id').val('');
            $('#div-frm-tinhoc div.iradio_square-blue').removeClass('checked');
            $('#div-frm-tinhoc div.iradio_square-green').removeClass('checked');
            $('.input_capdo_tinhoc').each(function (index, el) {
                var v = $(this).attr('relval');
                $(this).val(v);
            });
        });

        //check reset form Ngoại ngữ
        $("#btnResetNgoaiNgu").click(function () {
            // $('#block-thong-tin-dang-nhap .error_reg_mess').addClass('display_none');
            $('#c_trinh_do_ngoai_ngu').select2('val', '');
            $('#c_ma_ngoai_ngu').select2('val', '');
            // $('#div-frm-ngoaingu').fadeOut();
            $('#div-frm-ngoaingu div.iradio_square-blue').removeClass('checked');
            $('#div-frm-ngoaingu div.iradio_square-green').removeClass('checked');
            $('.input_capdo_ngoaingu').each(function (index, el) {
                var v = $(this).attr('relval');
                $(this).val(v);
            });
        });
        function can_save_ngoai_ngu() {
            if ($('#div-frm-ngoaingu').hasClass('display_none')) {
                return false;
            }
            ;
            if ($('#c_ma_ngoai_ngu').val() != '0' || $('#c_ngoai_ngu_khac').val() != '') {
                var has_check = false;
                $("#frmNgoaingu input[type=radio]").each(function (index, el) {
                    var check = $(this).prop("checked");
                    if (check) {
                        has_check = true;
                    }
                    ;
                });
                return has_check;
            }
            return false;
        }

        $('#show-add-ngoai-ngu').click(function () {
            var can_save = can_save_ngoai_ngu();
            $('#c_ma_ngoai_ngu').select2('val', 0);
            if (can_save) {
                var save_oke = save_ngoai_ngu();
                if (save_oke) {
                    $('#ngoaingu_form_show').val(1);
                    $('#div-frm-ngoaingu').removeClass("display_none").fadeIn();
                    ;
                } else {
                    $('#ngoaingu_form_show').val(0);
                    $('#div-frm-ngoaingu').addClass("display_none");
                }
            } else {
                $('#ngoaingu_form_show').val(1);
                $('#div-frm-ngoaingu').removeClass("display_none").fadeIn();
                $('#max_content_ngoaingu').addClass('display_none').css('display', '');
            }
        });
        //save Ngoại ngữ
        $("#btnRegisNgoaiNgu01").click(function () {
            $("#hienform-ngoaingu_add").slideUp("slow");
            $("#show-add-ngoai-ngu").removeClass("addNgoaiNgu");
            $(".max_content_ngoaingu").slideUp("slow");
            $(".max_content_ngoaingu").html("");
            $("#ngoai_ngu_id").val(1);
        });

        //Kỹ năng và sở trường
        $(".btnSaveKiNang").click(function () {
            $("#sotruong_status_id").val(1);
        });

        //Kỹ năng và sở trường
        $("#btnSaveKiNang01").click(function () {
            $('.inputTextAre01').each(function () {
                $(this).val('');
            });
            //$("#lnghe1_1").removeAttr('checked');
            //$("#lnghe1_2").removeAttr('checked');
            $("#lnghe1_2").prop('checked', false);
            $("#hienform-kynang-new").slideUp("slow");
            //remove message notice
            $(".max_content_kynang_st").slideUp("slow");
            $(".max_content_kynang_st").html("");
            $("#addbkynang2_new").removeClass("addKyNangSoTruong");
            $("#sotruong_status_id").val(1);
        });

        //KINH NGHIỆM VÀ KỸ NĂNG - edit
        $("#btnSaveKN").click(function () {
            kn = save_kinh_nghiem(false);
            if (kn) {
                $('#div-frm-kinhnghiem').addClass('display_none');
            }
        });

        function can_save_kinh_nghiem() {

            if ($('#div-frm-kinhnghiem').hasClass('display_none')) {
                return false;
            }
            ;
            var isCheck = 1;
            var focus = false;
            var id_form = 'div-frm-kinhnghiem';
            $('.inputTextKNEdit, .inputTextAreaKNEdit').each(function () {
                if ($(this).val().trim() == '') {
                    $("#btnSaveKN").prop('disabled', false);
                    isCheck = 0;
                }
            });

            $('.reqCheckBoxKNEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    $("#btnSaveKN").prop('disabled', false);
                    isCheck = 0;
                }
            });

            var loithoigian = false;

            $('.checkComboboxKNEdit').each(function () {
                var this_id = $(this).attr('id');
                if ($('#chk_c_cong_viec_hien_tai').prop("checked") && (this_id == 's2id_end_month' || this_id == 's2id_end_year' || this_id == 'end_month' || this_id == 'end_year')) {
                    return true;
                }
                ;
                if ($(this).find('option:selected').val() == 0) {
                    loithoigian = true;
                }
            });

            if (loithoigian) {
                isCheck = 0;
            }
            return isCheck;
        }

        function validate_kinh_nghiem() {

            var isCheck = true;
            var focus = false;
            var id_form = 'div-frm-kinhnghiem';
            $('.inputTextKNEdit, .inputTextAreaKNEdit').each(function () {
                if ($(this).val().trim() == '') {
                    $("#btnSaveKN").prop('disabled', false);
                    isCheck = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                        focus = true;
                    }
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            $('.reqCheckBoxKNEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    $("#btnSaveKN").prop('disabled', false);
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                        focus = true;
                    }
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });

            var loithoigian = false;

            $('.checkComboboxKNEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    loithoigian = true;
                }
            });

            if (loithoigian) {
                isCheck = 0;
                $('#error_c_thoigian').removeClass('display_none');
                $('#error_c_thoigian').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                if (!focus) {
                    $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                    focus = true;
                }
            } else {
                $('#error_c_thoigian').addClass('display_none');
                $('#error_c_thoigian').html('');

            }
            return isCheck;
        }

        function save_kinh_nghiem(showform) {
            $("#btnSaveKN").prop('disabled', true);
            var id_form = 'div-frm-kinhnghiem';
            isCheck = validate_kinh_nghiem();
            if (isCheck == 0) {
                $("#kinh_nghiem_status_id").val(0);
                return false;
            } else {
                $("#kinh_nghiem_status_id").val(1);
                // $("#hienform-kinhnghiem").slideUp("slow");
                var rs = false;
                var datapost = new FormData($("#frmkinhnghiem")[0]);

                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: 'https://vieclam24h.vn/tintimviec/update_kinhnghiem',
                    data: datapost,
                    async: false,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.error == 0) { // thanh cong
                            var id = data.id;
                            $('#div-frm-kinhnghiem').before('<div id="kinhnghiem-view-' + id + '" class="listnews new-kinhnghiem"></div><div class="ln_hr_head"></div>');
                            $("#kinhnghiem-view-" + id).load("/tintimviec/update_kinhnghiem?viewid=" + id, function () {
                                $('#div-frm-kinhnghiem input').each(function () {
                                    $(this).val('');
                                });
                                $('#div-frm-kinhnghiem textarea').each(function () {
                                    $(this).val('');
                                });
                                $('#kinhnghiem_created').val(1);
                                $('.max_content_kinhnghiem_lv').addClass("display_none").hide();
                                // $("#btnRegisterKN").click();
                                $('#btnRegisterKN').removeClass('display_none');
                                $('#cols-right').scrollTo2("#kinhnghiem-view-" + id);
                            });
                            $("#btnSaveKN").prop('disabled', false);
                            rs = true;
                        } else {
                            var focus = false;
                            $('#' + id_form + ' [id^="error_"]').text('');
                            for (key in data.message) {
                                $('#div-frm-kinhnghiem #error_' + key).html(data.message[key]);
                                $('#div-frm-kinhnghiem #error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14');
                                if (!focus) {
                                    $('#cols-right').scrollTo2("#" + id_form + " #" + key);
                                    // $('#'+key).focus();
                                    focus = true;
                                }
                            }
                            if (data.main_message != null) {
                                $('#div-frm-kinhnghiem .max_content_kinhnghiem_lv').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                            }
                            ;
                            $("#btnSaveKN").prop('disabled', false);
                            rs = false;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        }

        //check reset form - Kinh nghiệm làm việc
        $("#btnRegisterKN").click(function () {
            $('#kinhnghiemvakynang .error_reg_mess').addClass('display_none');
            $('#kinh_nghiem_id').select2('val', '0');
            $('#start_month').select2('val', '0');
            $('#start_year').select2('val', '0');
            $('#end_month').select2('val', '0');
            $('#end_year').select2('val', '0');
            $('#m_type').select2('val', '1');

            $('.inputTextKNNew,.inputTextAreaKNNew').each(function () {
                $(this).val('');
            });
            $("#new_thanh_tich").val('');

            if ($('.new-kinhnghiem').length > 0) {
                $('#div-frm-kinhnghiem').fadeOut().addClass('display_none');
            }
        });


        $('#addbkinhngiem2_new').click(function (event) {
            var save_oke = save_kinh_nghiem(true);
            $('#end_month').select2('val', 0);
            $('#end_year').select2('val', 0);
            $('#start_year').select2('val', 0);
            $('#start_month').select2('val', 0);
            var chk = $('input#chk_c_cong_viec_hien_tai');
            chk.val(1);
            chk.iCheck('uncheck');
            chon_cv_hientai();

            // if(save_oke) {

            // }else{
            //     $('#div-frm-kinhnghiem').addClass("display_none");
            //     $('#kinhnghiem_form_show').val(0);
            // }

            // if ($('#div-frm-kinhnghiem').hasClass('display_none')) {
            //     $('#div-frm-kinhnghiem .error_reg_mess').addClass('display_none');
            // };

            $('#kinhnghiem_form_show').val(1);
            $('.box-knlv').addClass('display_none');
            // $("#btnSaveKN").click();
            $('#div-frm-kinhnghiem').removeClass("display_none").fadeIn();
            // $('#kinhnghiem_form_show').val(1);
            // $('#div-frm-kinhnghiem .error_reg_mess').html('').addClass('display_none');
            if ($('.new-kinhnghiem').length > 0) {
                $('#btnRegisterKN').removeClass('display_none');
                $(".max_content_kinhnghiem_lv").slideUp("slow");
            } else {
                $('#btnRegisterKN').addClass('display_none');
            }
            $('#div-frm-kinhnghiem').removeClass("display_none").fadeIn();
        });


        //KINH NGHIỆM VÀ KỸ NĂNG - New
        $("#btnSaveKN01").click(function () {
            $(this).prop('disabled', true);
            var isCheck = true;
            $('.inputTextKNNew, .inputTextAreaKNNew').each(function () {
                if ($(this).val().trim() == '') {
                    isCheck = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu1!");
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            $('.reqCheckBoxKNNew').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu2!");
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });

            $('.checkComboboxKNNew').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu3!");
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });


            if (isCheck == 0) {
                $("#kinh_nghiem_status_id").val(0);
                $("#btnSaveKN01").prop('disabled', false);
                return false;
            }

            else {
                $("#kinh_nghiem_status_id").val(1);
                $('.inputTextKNNew, .inputTextAreaKNNew').each(function () {
                    $(this).val('');
                });
                $("#hienform-kinhnghiem-add").slideUp("slow");
                $(".max_content_kinhnghiem_lv").slideUp("slow");
                $(".max_content_kinhnghiem_lv").html("");
                $("#addbkinhngiem2_new").removeClass("addKinhNghiemLV");
            }
        });

        //check submit form Bằng cấp - chứng chỉ - edit
        $("#btnSaveBCCC").click(function () {
            var can_save = can_save_bang_cap();
            if (can_save) {
                $('.max_content_bangcap_cc').html('').addClass('display_none');
                if (save_bang_cap()) {
                    $('#div-frm-bangcap').addClass("display_none");
                }
            } else {
                $('.max_content_bangcap_cc').html('<span class="error_reg_mess_icon"></span> Vui lòng nhập đầy đủ các trường yêu cầu').removeClass('display_none');
            }
        });
        function can_save_bang_cap() {

            if ($('#div-frm-bangcap').hasClass('display_none')) {
                return false;
            }
            ;
            var id_form = 'div-frm-bangcap';
            var isCheck = 1;
            var focus = false;
            $('.inputTextEdit').each(function () {

                if ($(this).val().trim() == '') {
                    $("#btnSaveBCCC").prop('disabled', false);
                    isCheck = 0;
                }
            });

            $('.reqCheckBoxEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                }
            });

            $('.checkComboboxEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                }
            });
            return isCheck;
        }

        function validate_bang_cap() {

            var id_form = 'div-frm-bangcap';
            var isCheck = true;
            var focus = false;
            $('.inputTextEdit').each(function () {

                if ($(this).val().trim() == '') {
                    $("#btnSaveBCCC").prop('disabled', false);
                    isCheck = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                        focus = true;
                    }
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            $('.reqCheckBoxEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                        focus = true;
                    }
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });

            $('.checkComboboxEdit').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                    if (!focus) {
                        $('#cols-right').scrollTo2("#" + id_form + " #" + $(this).attr('id'));
                        focus = true;
                    }
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });
            return isCheck;
        }

        function save_bang_cap() {
            $("#btnSaveBCCC").prop('disabled', true);
            var id_form = 'div-frm-bangcap';
            var isCheck = validate_bang_cap();
            if (isCheck == 0) {
                $("#bang_cap_id").val(0);
                $("#btnSaveBCCC").prop('disabled', false);
                // var err_ele = $('#div-frm-bangcap .error_reg_mess').not('.display_none').first().attr('id');
                // $('#regis_content').scrollTo('#'+err_ele);
                // $('#popup_component').scrollTo('#'+err_ele);
                // $('#pos_popup').scrollTo('#'+err_ele);
                return false;
            }
            else {
                // $("#bang_cap_id").val(1);
                // $("#c_trinh_do").select2('val', '0');
                // $("#hienform").slideUp("slow");
                // Submit form đi :(
                var datapost = new FormData($("#frmBangcap")[0]);
                var rs = false;
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    async: false,
                    url: 'https://vieclam24h.vn/tintimviec/update_bangcap',
                    data: datapost,
                    mimeType: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (data.error == 0) { // thanh cong
                            rs = true;
                            var id = data.id;
                            $('#div-frm-bangcap').before('<div id="bangcap-view-' + id + '" class="listnews new-bangcap"></div><div class="ln_hr_head"></div>');
                            $("#bangcap-view-" + id).load("/tintimviec/update_bangcap?viewid=" + id, function () {
                                $('#div-frm-bangcap input').each(function () {
                                    $(this).val('');
                                });
                                // Hiện lại form
                                $("#btnSaveBCCC").prop('disabled', false);
                                $('#bangcap_created').val(1);
                                $('.max_content_bangcap_cc').addClass("display_none");
                                $('#div-frm-bangcap .error_reg_mess').html('').addClass('display_none');
                                $('#btnCancelBCCC').removeClass('display_none');
                                $("#btnCancelBCCC").click();
                                $('#cols-right').scrollTo2("#bangcap-view-" + id);
                            });
                        } else {
                            var focus = false;
                            $('#' + id_form + ' [id^="error_"]').text('');
                            for (key in data.message) {
                                $('#error_' + key).text(data.message[key]);
                                $('#error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14');
                                if (!focus) {
                                    // $('#'+key).focus();
                                    // $('#'+key).focus();
                                    $('#popup_content').scrollTo('#' + key);
                                    focus = true;
                                }
                            }
                            if (data.main_message != null) {
                                $('.max_content_bangcap_cc').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                            }
                            ;
                            $("#btnSaveBCCC").prop('disabled', false);
                            rs = false;
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                        rs = false;
                    }
                });
                return rs;
            }
        }

        // $('#add_bangcap_chungchi').unbind('click');
        $('#add_bangcap_chungchi').click(function () {
            var save_oke = save_bang_cap(true);
            $('#c_tu_thang_thang').select2('val', 0);
            $('#c_tu_thang_nam').select2('val', 0);
            $('#c_den_thang_thang').select2('val', 0);
            $('#c_den_thang_nam').select2('val', 0);
            $('#c_loai_tot_nghiep').select2('val', 0);
            if (save_oke) {
                // $('#div-frm-bangcap').removeClass("display_none");
                $('.max_content_bangcap_cc').css('display', '');
                $('#div-frm-bangcap .error_reg_mess').html('').addClass('display_none');
                $('#bangcap_form_show').val(1);
                if ($('#bangcap_created').val() == '1') {
                    $('#btnCancelBCCC').removeClass('display_none');
                }
                ;
            }
            $('#div-frm-bangcap').removeClass("display_none");
        });
        //check reset form trinh do
        $("#btnCancelBCCC").click(function () {
            $('#hienform #block-thong-tin-dang-nhap .error_reg_mess').addClass('display_none');
            $('#c_tu_thang_thang').select2('val', 0);
            $('#c_tu_thang_nam').select2('val', 0);
            $('#c_den_thang_thang').select2('val', 0);
            $('#c_den_thang_nam').select2('val', 0);
            $('#c_loai_tot_nghiep').select2('val', 0);
            $('#mo_ta_cong_viec').select2('val', '');

            $('.inputTextEdit').each(function () {
                $(this).val('');
            });
            if ($('#bangcap_created').val() == '1') {
                $('#div-frm-bangcap').addClass('display_none');
            }
            ;
        });

        //check reset form trinh do
        $("#btnCancelBCCC01").click(function () {
            $('#hienform_add_bccc .error_reg_mess').addClass('display_none');
            $('#new_trinh_do_id').select2('val', '0');
            $('#new_start_month').select2('val', '0');
            $('#new_start_year').select2('val', '0');
            $('#new_end_month').select2('val', '0');
            $('#new_end_year').select2('val', '0');
            $('#new_quy_mo_cong_ty_id').select2('val', '0');

            $('.inputTextBCCCNew').each(function () {
                $(this).val('');
            });

        });

        //check submit form Bằng cấp - chứng chỉ - edit
        $("#btnSaveKynang").click(function () {
            var can_save = can_save_ky_nang();
            if (can_save) {
                $('.max_content_kynang_st').html('').addClass('display_none');
                save_ky_nang();
                $('#div-frm-kynang').fadeOut().addClass("display_none");
            } else {
                $('.max_content_kynang_st').html('<span class="error_reg_mess_icon"></span> Vui lòng nhập đầy đủ các trường yêu cầu').removeClass('display_none');
            }
        });
        function save_ky_nang() {
            $("#btnSaveKynang").prop('disabled', true);
            // $("#bang_cap_id").val(1);
            // $("#c_trinh_do").select2('val', '0');
            // $("#hienform").slideUp("slow");
            // Submit form đi :(

            var datapost = new FormData($("#frmkynang")[0]);
            var rs = false;
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: 'https://vieclam24h.vn/tintimviec/update_kynang',
                data: datapost,
                async: false,
                mimeType: "multipart/form-data",
                processData: false,
                contentType: false,
                success: function (data, textStatus, jqXHR) {
                    if (data.error == 0) { // thanh cong
                        var id = data.id;
                        $('#div-frm-kynang').before('<div id="kynang-view-' + id + '" class="listnews new-kynang"></div>');
                        $("#kynang-view-" + id).load("/tintimviec/update_kynang?viewid=" + id, function () {
                            $('#div-frm-kynang input').each(function () {
                                $(this).val('');
                            });
                            // $('#div-frm-kynang').addClass("display_none");
                            $('#kynang_created').val(1);
                            // $('#kynang_form_show').val(0);
                            $('.max_content_kynang_st').addClass("display_none").hide();
                            $("#btnCancelKNang").click();
                        });
                        $("#btnSaveKynang").prop('disabled', false);
                        rs = true;
                    } else {
                        var focus = false;
                        $('#' + id_form + ' [id^="error_"]').text('');
                        for (key in data.message) {
                            $('#error_' + key).text(data.message[key]);
                            $('#error_' + key).removeClass("display_none").addClass('colorRegRed').addClass('fs14');
                            if (!focus) {
                                $('#' + key).focus();
                                focus = true;
                            }
                        }
                        if (data.main_message != null) {
                            $('.max_content_kynang_st').show().removeClass("display_none").addClass('colorRegRed').addClass('fs14').html('<span class="error_reg_mess_icon"></span>' + data.main_message);
                        }
                        ;
                        $("#btnSaveKynang").prop('disabled', false);
                        rs = false;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                    rs = false;
                }
            });
            return rs;
        }

        //check reset form - Kỹ năng và sở trường
        $("#btnCancelKNang").click(function () {
            $("#ky_nang_db_add_id").val('');
            $("#sothich_add_id").val('');
            $('#div-frm-kynang div.icheckbox_square-blue').removeClass('checked');
            $('#div-frm-kynang div.icheckbox_square-green').removeClass('checked');
            $('.chk_ky_nang_khac').each(function (index, el) {
                var v = $(this).attr('relval');
                $(this).val(v);
            });
            // $('#div-frm-kynang').fadeOut().addClass("display_none");
        });

        function can_save_ky_nang() {
            if ($('#div-frm-kynang').hasClass('display_none')) {
                return false;
            }
            ;
            var has_check = false;
            $("#frmkynang input[type=checkbox]").each(function (index, el) {
                var check = $(this).prop("checked");
                if (check) {
                    has_check = true;
                }
                ;
            });
            $("#frmkynang textarea").each(function (index, el) {
                if ($(this).val() != '') {
                    has_check = true;
                }
                ;
            });
            if (has_check) {
                return true;
            }
            ;
            return false;
        }

        $('#addbkynang2_new').click(function (event) {
            var can_save = can_save_ky_nang();
            if (can_save) {
                $('.max_content_kynang_st').html('').addClass('display_none');
                save_ky_nang();
            } else {
                $('#div-frm-kynang').removeClass("display_none").fadeIn();
                $('#kynang_form_show').val(1);
                $('.max_content_kynang_st').html('<span class="error_reg_mess_icon"></span> Vui lòng nhập đầy đủ các trường yêu cầu').removeClass('display_none');
                return false;
            }

            // $("#btnCancelKNang").click();
            $('#div-frm-kynang').removeClass("display_none").fadeIn();
            $('#kynang_form_show').val(1);
            // if ($('.new-kynang').length > 0) {
            //     // $('#btnCancelKNang').removeClass('display_none');
            // }else{
            //     $('#btnCancelKNang').addClass('display_none');
            // }
        });

        //check reset form - NGƯỜI THAM KHẢO
        $("#btnResetThamKhaoNew").click(function () {
            $('#nguoithamkhao .error_reg_mess').addClass('display_none');

            $('.inputTextNTK1').each(function () {
                $(this).val('');
            });

        });

        //check reset form Ngoại ngữ
        $("#btnResetNgoaiNgu01").click(function () {
            //$('#block-thong-tin-dang-nhap .error_reg_mess').addClass('display_none');
            $('#language_id_new').select2('val', '0');
        });


        //check submit form Bằng cấp - chứng chỉ - New
        $("#btnSaveBCCC01").click(function () {
            var isCheck = true;
            $('.inputTextBCCCNew').each(function () {
                if ($(this).val().trim() == '') {
                    isCheck = false;
                    $(this).parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().next('div.invalid-msg').html('');
                }
            });

            $('.reqCheckBoxBCCCNew').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });

            $('.checkComboboxBCCCNew').each(function () {
                if ($(this).find('option:selected').val() == 0) {
                    isCheck = 0;
                    $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
                } else {
                    $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
                    $(this).parent().parent().next('div.invalid-msg').html('');
                }
            });

            if (isCheck == 0) {
                $("#bang_cap_id").val(0);
                return false;
            }
            else {
                $("#bang_cap_id").val(1);
                $('.inputTextBCCCNew').each(function () {
                    $(this).val('');
                });
                $("#hienform_add_bccc").slideUp("slow");
                $(".max_content_bangcap_cc").slideUp("slow");
                $(".max_content_bangcap_cc").html("");
                $("#add_bangcap_chungchi").removeClass("addBangCapCC");
            }
        });

        //Xem trước hồ sơ
        $("#btnXemTruoc").click(function () {

            if (can_save_kinh_nghiem() !== 0) {
                save_kinh_nghiem();
            }
            if (can_save_bang_cap() !== 0) {
                save_bang_cap();
            }
            if (can_save_ngoai_ngu()) {
                save_ngoai_ngu();
            }
            if (can_save_tin_hoc()) {
                save_tin_hoc();
            }
            if (can_save_ky_nang()) {
                save_ky_nang();
            }
            if (can_save_tham_khao() !== 0) {
                save_tham_khao();
            }

            var valid = false;
            valid = checkValidHoSoLocal();

            if (!valid) {
                return false;
            }

            $("#popup_xem_truoc_ho_so").load("/tintimviec/xemtruochoso", $("#frm-hoso").serializeArray(), function () {
                //load popup confirm
                var h_win_2 = height_wd / 2;
                var h_pop_confirm_2 = $("#popup_component").height() / 2;
                var h_confirm = h_win_2 - h_pop_confirm_2 + 25;

                $("#overlay_popup, #popup_component").show();
                $("#popup_component").css('top', $(window).scrollTop() + h_confirm);
                $("#popup_component").css('left', 0);

                $("#overlay_popup, .popup_danghoso, .tao_hso_landau").hide();
                $("#overlay_popup, .hoso_xemtruoc").show();

                //close confirm
                $(".btn_close").click(function () {
                    //hide popup dang ky
                    $("#overlay_popup, #popup_component").hide();
                });
            });
        });

        //Hủy Tạo hồ sơ
        $("#btnHuyTaoHoSo, .btn_11_2c_close").click(function () {

            $("#popup_regis_successfull").load("/common/confirm_dong_popup_sua_ho_so", function () {
                //load popup confirm
                var h_win_2 = height_wd / 2;
                var h_pop_confirm_2 = $("#popup_content_register_choice").height() / 2;
                var h_confirm = h_win_2 - h_pop_confirm_2;

                //$("#overlay_popup, #popup_component_register").show();
                $("#pos_popup_register_choice").css('top', $(window).scrollTop() + h_confirm);
                $("#pos_popup_register_choice").css('left', 0);

                $("#overlay_popup, #popup_component_register_choice").show();
                $("#popup_component").hide();

                //close confirm
                $(".btnCancel").click(function () {
                    window.location.href = 'https://vieclam24h.vn/';
                });

                $(".btn_close").click(function () {
                    //hide popup dang ky
                    $("#overlay_popup, #popup_component").hide();
                    $("#popup_tao_ho_so_thanh_cong").html("");
                });
                $(".block-img-close").click(function () {
                    //hide popup dang ky
                    $("#overlay_popup, #popup_component").hide();
                    $("#popup_tao_ho_so_thanh_cong").html("");
                });
                //back confirm
                $("#btnBack").click(function () {
                    //hide popup dang ky
                    $("#overlay_popup, #popup_component_register_choice").hide();
                    $("#overlay_popup, #popup_component").show();
                    $("#popup_regis_successfull").html("");
                });
                $("#btnCloseSaveDraft").click(function () {
                    //hide popup dang ky
                    $("#overlay_popup, #popup_component_register_choice").hide();
                    $("#overlay_popup, #popup_component").show();
                    $("#popup_regis_successfull").html("");
                    dang_ho_so(-2);
                });

            });
        });

    }
    if (document.addEventListener) {
        addListener(document, "DOMContentLoaded", func_box_taohoso_tungbuoc_landau);
    } else {
        addListener(window, "load", func_box_taohoso_tungbuoc_landau);
    }


    function fileOnchange(objFile) {
        fileName = objFile.value.replace(/C:\\fakepath\\/i, '');
        $("#select_file_note").html(fileName);
        $("#ten_file_dinh_kem").val(fileName);
    }

    function fileOnchange2(objFile) {
        fileName = objFile.value.replace(/C:\\fakepath\\/i, '');
        $("#note_select_file_" + objFile.name).html(fileName);
    }

</script>