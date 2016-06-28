@extends('front/global')

@section('content')

    @include('front/home/ads')
    
    @include('front/home/count',['coutData' => $countData])

    <div class="row mt_24">
        <div class="box_tab pl_0 pr_0">
            <div class="clearfix"></div>
            <div class="content_dangky bg_white mt16 box_shadow">
                <div class="">
                    <div class="block_ntv_dangnhap pd_up_new regis_header pl12" id="regis_header">
                        <div class="w_50 floatLeft">
                            <span class="title_bangcap_chungchi border_left_s33"></span><span class="uppercase fws fs16 txt_color_692095">Đổi mật khẩu</span>
                        </div>
                    </div>
                    <center>
                        <!-- <div class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg colorRegRed text-center" id="main_message"></div> -->
                        <div class="regis_content_1 scrollbar_cus w558 pr0">
                         <div class="pl_16 pr_16">
                            <div class="block-content" id="frm-login-info">
                               <div class="pt_10 pb10">
                                  <div class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none" enctype="multipart/form-data" id="msg_success"></span></div>
                                  <form class="form-horizontal" method="post" action="" name="resetpassword" id="resetpassword">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     <div id="block-thong-tin-dang-nhap" class="pt_8">
                                        <!-- input Mật khẩu mới  -->
                                        <div class="mb_8 pt12 clearfix">
                                           <label for="txt_password" class="fwn txt-color-363636 fs14 floatLeft">Mật khẩu mới (<span class="colorRed">*</span>)</label><br />
                                           <div class="fr-input-ntk pt_4 pl_0 pr_0 w530">
                                              <input type="password" class="form-control input-lg2 color-input inputText" id="txt_password" name="txt_password" value="" />
                                           </div>
                                           <div class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none" id="error_txt_password"></div>
                                        </div>
                                        <!-- input Nhập lại mật khẩu mới   -->
                                        <div class="mb_8 pt12 clearfix">
                                           <label for="password_renew" class="fwn txt-color-363636 fs14 floatLeft">Nhập lại mật khẩu mới (<span class="colorRed">*</span>)</label><br />
                                           <div class="fr-input-ntk pt_4 pl_0 pr_0 w530">
                                              <input type="password" name="password_renew" class="form-control input-lg2 color-input" id="password_renew" value="" />
                                           </div>
                                           <div class="error_reg_mess err_password pl_0 clearfix fs14 italic invalid-msg display_none" id="error_password_renew"></div>
                                        </div>
                                        <div class="mb_10 pt_10 clearfix" id="row_btn">
                                           <div class="fr-input-ntk pl_0 pr_0 w530 floatLeft">
                                              <button type="button" id="btnSavePass" class="btn bold btnSavePass w193 fs16 uppercase mr12">Lưu mật khẩu mới</button>
                                              <button type="button" id="btnCancel" class="btn bold btnCancel w193 fs16 uppercase" onClick="window.location='{{ URL::to('/') }}'">Huỷ đổi mật khẩu</button>
                                           </div>
                                        </div>
                                     </div>
                                  </form>
                               </div>
                            </div>
                         </div>
                        </div>
                    </center>
                    <center>
                    <div class="block_reg_footer_common regis_footer h_96" id="regis_footer">
                    <div class="footer_login_common fs14 txt-color-363636">
                        <span class="bold fs14">Bạn gặp khó khăn khi tạo hồ sơ? Liên hệ Hotline hỗ trợ Người tìm việc:</span><br />
                        Giờ hành chính:
                        <span class="italic"> </span> <span class="txt-hong bold">(04) 6684 7421</span>,
                    </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- Thong tin lien he -->
    @include('front/home/contact_info')
    <!-- END Thong tin lien he -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btnSavePass").click(function () {
                var isOk = true;
                var newPassword = document.getElementById("txt_password").value;
                var newPasswordConfirm = document.getElementById("password_renew").value;

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

                if (newPassword == '') {
                    $("#error_txt_password").html("Vui lòng nhập vào mật mới!");
                    $("#error_txt_password").removeClass('display_none');
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
                    var dataPost = new FormData($("#resetpassword")[0]);
                    var rs = false;
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        async: false,
                        url: '{{ route('user.reset.form',[$user->id, $user->confirmation_code]) }}',
                        data: dataPost,
                        mimeType: "multipart/form-data",
                        processData: false,
                        contentType: false,
                        success: function (data, textStatus, jqXHR) {
                            if (data.status == true) { // thanh cong
                                console.log('true');
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
                                console.log('false');
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
        });
    </script>
@endsection