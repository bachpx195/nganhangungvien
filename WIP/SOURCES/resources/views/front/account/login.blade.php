<div class="popup_login" hidden="hidden" id="popup_login">
    <div id="popup_component_register_choice" style="display: block;">
        <div id="pos_popup_register_choice" style="top: 125px; left: 0px;">
            <div id="popup_content_register_choice" class="w580 h_315">
                <div class="pb12 btn_close">
                    <div class="block-img-close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Đóng"></div>
                </div>
                <div class="content_dangky_register_choice ">
                    <div class="">
                        <div class="block_ntv_dangnhap regis_header pl12" id="regis_header">
                            <div class="w_50 floatLeft">
                                <span class="title_ntd_dangnhap"></span><span class="uppercase bold fs16 txt_color_63248a">Nhà tuyển dụng Đăng nhập</span>
                            </div>
                        </div>
                        <div class="pl_14">
                            <div class="block-content" id="frm-login-info">
                                <div class="mb8">
                                    <div class="center-p12p24 pt_22">
                                        <form id="form_login" class="form-horizontal" method="post" onsubmit="return doNtvLogin()">
                                            <div id="block-thong-tin-dang-nhap" class="mb_22 pt_2">
                                                <!-- input email -->
                                                <div class="form-group clearfix mb_12">
                                                    <label for="inputEmail" class="control-label-info bold txt-color-363636 fs14 w150">
                                                        Email <span class="colorRed">*</span>
                                                    </label>
                                                    <div class="fr-input-wd389">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="text" class="form-control input-lg2 color-input" id="inputEmail" name="username" />
                                                    </div>
                                                </div>
                                                <!-- input repassword -->
                                                <div class="form-group mb_4">
                                                    <label for="inputPassword" class="control-label-info bold txt-color-363636 fs14 w150">Mật khẩu <span class="colorRed">*</span></label>
                                                    <div class="fr-input-wd389">
                                                        <input type="password" class="form-control input-lg2 color-input" id="inputPassword" name="password" />
                                                    </div>
                                                    <div class="error_reg_mess clearfix err_password display_none"></div>
                                                </div>
                                                <div class="mb_16 mt2 pl_155"><a href="javascript:;" class="show_s006_lay_lai_mat_khau fs14 txt-color-757575 underline">Quên mật khẩu?</a></div>

                                                <div class="form-group mb_12">
                                                    <label class="control-label-info w150"></label>
                                                    <div class="fr-input-wd389 floatLeft">
                                                        <button id="btnLogin" class="btn bold btnLogin w130 fwb uppercase">Đăng nhập</button>
                                                        Bạn chưa có tài khoản? <a href="{{route('employer.register')}}" class="member_register txt_color_63248a underline">Đăng ký?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup_reset_password" hidden="hidden" id="popup_reset_password">
    @include('front/account/popup_reset_password')
</div>
<script type="text/javascript">


    //check submit form
    function doNtvLogin() {
        var passw_val = document.getElementById("inputPassword").value;
        var email_addr = document.getElementById("inputEmail").value;
        var isCheck = true;
        if ( (passw_val == '') || (email_addr == '') ){
            $(".err_password").html("<span class='error_reg_mess_icon'></span>Tài khoản đăng nhập hoặc Mật khẩu không chính xác");
            $(".err_password").removeClass("display_none").addClass('colorRegRed');
            isCheck = false;
        }else{
            $(".err_password").html("");
            $(".err_password").removeClass("colorRegRed").addClass('display_none');

            var datapost = $("#form_login").serialize();
            $.ajax({
                type: 'post',
                dataType : 'json',
                url:"{{ URL::to('/login') }}",
                data: datapost,
                success: function (data) {
                    if (data.error == 0) { // thanh cong
                        window.location.href = window.location.href;
                    } else {
                        $(".err_password").html("<span class='error_reg_mess_icon'></span>Tài khoản đăng nhập hoặc Mật khẩu không chính xác");
                        $(".err_password").removeClass("display_none").addClass('colorRegRed');
                    }
                },
                error: function(data, code) {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                }
            });
        }
        return false;
    }

    $("#btnSend").click(function () {
        var isOk = true;
        var emailUsername = document.getElementById("emailUsername").value;
        console.log(emailUsername);
        if (emailUsername == '') {
            $("#error_username").html("Vui lòng nhập vào Email bạn đã đăng ký tài khoản!");
            $("#error_username").removeClass('display_none');
            isOk = false;
        }else{
            $(".err_password").html("");
            $(".err_password").removeClass("colorRegRed").addClass('display_none');
        }

        if (isOk == false) {
            return false;
        } else {
            $(".sent").addClass('display_none');
            $(".senting").removeClass('display_none');
            var dataPost = new FormData($("#resetPassword")[0]);
            var rs = false;
            $.ajax({
                type: 'post',
                dataType: 'json',
                async: true,
                url: "{{ route('user.reset.password') }}",
                data: dataPost,
                mimeType: "multipart/form-data",
                processData: false,
                contentType: false,
                success: function (data, textStatus, jqXHR) {
                        console.log('success');
                    if (data.status == true) { // thanh cong
                        //hide popup dang ky

                        $("#mess-success").removeClass('display_none');

                        $("#mess-defaut").addClass('display_none');

                        $("#sent").addClass('display_none');
                        // dong popup sau 3 giay
                        console.log('true');
                    } else {
                        $('[id^="error_"]').text('');
                        $('#msg_success').text(data.message);
                        $("#msg_success").removeClass('display_none');
                        console.log('false');

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
    $(document).ready(function() {
        $(".member_login").click(function () {
           $("#popup_login").show();
        });

        var height_w = $( window ).height();

        //close confirm
        $(".btn_close").click(function(){
            //hide popup dang ky
            $("#overlay_popup, #popup_login, #popup_reset_password").hide();
            $("#popup_ntv_register").html('');

        });

        //forget password
        $(".show_s006_lay_lai_mat_khau").click(function() {
            $("#popup_login").hide();
            $("#popup_reset_password").show();
            console.log('show');

        });

        //nguoi tim viec dang nhap
        $(".text-dang-nhap").click(function () {
            $("#popup_ntv_register, .popup_ntv_register").load("/taikhoan/login_ntv", function() {
                $("#overlay_popup, #popup_component_register_choice").show();
                //load popup confirm
                var h_win_2 = height_w/2;
                var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
                var h_confirm = h_win_2 - h_pop_confirm_2;

                $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
                $("#pos_popup_register_choice").css('left',0);
                $("#overlay_popup, #popup_component_register_choice").show();

            });
        });

        //click register
        $(".member_register").click(function(e){
            $(".btn_close").click();
            $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
            $("#popup_ntv_register").load("/taikhoan/register", function() {

                //load popup confirm
                var h_win_2 = height_w/2;
                var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
                var h_confirm = h_win_2 - h_pop_confirm_2;

                $("#overlay_popup, #popup_component_register_choice").show();
                $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
                $("#pos_popup_register_choice").css('left',0);

            });
        });

        //submit form
        $('#inputEmail, #inputPassword').keypress(function (e) {
            if (e.which == 13) {
                $("#btnLogin").click();
                return false;
            }
        });
    });
</script>