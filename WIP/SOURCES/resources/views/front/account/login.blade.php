
<div id="popup_component_register_choice">
    <div id="pos_popup_register_choice" style="top: 125px; left: 0px;">
        <div id="popup_content_register_choice" class="w630 h_393">
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
                                                <label for="inputEmail" class="control-label-info bold txt-color-363636 fs14 w180">
                                                    Email <span class="colorRed">*</span>
                                                </label>
                                                <div class="fr-input-wd389">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="text" class="form-control input-lg2 color-input" id="inputEmail" name="username" />
                                                </div>
                                            </div>
                                            <!-- input repassword -->
                                            <div class="form-group mb_4">
                                                <label for="inputPassword" class="control-label-info bold txt-color-363636 fs14 w180">Mật khẩu <span class="colorRed">*</span></label>
                                                <div class="fr-input-wd389">
                                                    <input type="password" class="form-control input-lg2 color-input" id="inputPassword" name="password" />
                                                </div>
                                                <div class="error_reg_mess clearfix err_password display_none"></div>
                                            </div>
                                            <div class="mb_16 mt2 pl_185"><a href="javascript:;" class="show_s006_lay_lai_mat_khau fs14 txt-color-757575 underline">Quên mật khẩu?</a></div>

                                            <div class="form-group mb_12">
                                                <label class="control-label-info w180"></label>
                                                <div class="fr-input-wd389 floatLeft">
                                                    <button id="btnLogin" class="btn bold btnLogin w151 fwb uppercase">Đăng nhập</button>
                                                </div>
                                            </div>
                                            <div class="mb_2 pl_185 fs14 txt-color-363636">Bạn chưa có tài khoản? <a href="{{route('employer.register')}}" class="member_register txt_color_63248a underline">Đăng ký?</a></div>
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
    $(document).ready(function() {
        $(".member_login").click(function () {
           $("#popup_component_register_choice").show();
        });

        var height_w = $( window ).height();

        //close confirm
        $(".btn_close").click(function(){
            //hide popup dang ky
            $("#overlay_popup, #popup_component_register_choice").hide();
            $("#popup_ntv_register").html('');

        });

        //forget password
        $(".show_s006_lay_lai_mat_khau").click(function() {
            //load popup khac
            $(".popup_register_choice").load("/taikhoan/forgotpassword", function() {

                //load popup confirm
                var h_win_2 = height_w/2;
                var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
                var h_confirm = h_win_2 - h_pop_confirm_2;

                $("#overlay_popup, #popup_component_register").show();
                $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
                $("#pos_popup_register_choice").css('left',0);

                $("#overlay_popup, #popup_component_register_choice").show();

            });
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