    <div id="popup_component_register_choice" style="display: block;">
        <div id="pos_popup_register_choice" style="top: 125px; left: 0px;">
            <div id="popup_content_register_choice" class="w580 h_305">
                <div class="pb12 btn_close">
                    <div class="block-img-close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Đóng"></div>
                </div>
                <div class="content_dangky_register_choice ">
                    <div class="">
                        <div class="block_ntv_dangnhap regis_header pl12" id="regis_header">
                            <div class="w_50 floatLeft">
                                <span class="title_ntd_dangnhap"></span><span class="uppercase bold fs16 txt_color_63248a">Lấy lại mật khẩu</span>
                            </div>
                        </div>
                          <div class="block_ntv_dangnhap pt_4 pb_2">
                             <div class="block-content" id="frm-login-info">
                                <div class="mb8 notice_forget_pass fs14 txt-color-363636" id="mess-defaut">
                                   <p>
                                      - Chúng tôi sẽ gửi thông tin mật khẩu mới đến Email của bạn.
                                   </p>
                                   <p>- Vui lòng nhập Email bạn đã đăng ký tài khoản</p>
                                   <br>
                                </div>


                                <div class="pt_20 pr_16 pl_16 display_none" id="mess-success" >
                                   <div class="mess-success-title text-center txt_color_78b43d uppercase fs18 bold">
                                      <i class="icon-succsess"></i>Gửi thông tin lấy lại mật khẩu thành công
                                   </div>
                                      <div class="mb8 notice_forget_pass fs14 txt-color-363636">
                                         <p>- Chúng tôi đã gửi thông tin thay đổi mật khẩu đến Email của bạn.</p>
                                         <p>- Hãy kiểm tra email và làm theo hướng dẫn.</p>
                                      </div>
                                </div>


                                <form class="form-horizontal" id="resetPassword" name="resetPassword" action=""
                                          enctype="multipart/form-data" method="post">
                                   <div id="block-thong-tin-dang-nhap" class="mb_12 pt_4">
                                      <!-- input email -->
                                      <div class="form-group clearfix mb_8">
                                         <label for="inputEmail" class="control-label-info bold txt-ghi fs14 w150">
                                         Email <span class="colorRed">*</span>
                                         </label>
                                         <div class="fr-input-wd374">
                                            <input class="form-control input-lg2 color-input" id="emailUsername" name="emailUsername" type="email" value="{!! old('emailUsername') !!}">
                                         </div>
                                         <div class="error_reg_mess_email clearfix err_email display_none" id="error_username"></div>
                                         <div id="msg_success"
                                         class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none"></div>
                                      </div>
                                      <!-- input Nhập mã bảo mật * -->
                                      <div class="form-group mb_4">
                                         <label class="control-label-info w150"></label>
                                         <div class="fr-input-wd374 floatLeft" id="sent">
                                             <button type="button" id="btnSend" class="btn btnRegister w130 fwb uppercase sent" >Gửi</button>
                                             <button type="button" id="btnSend" class="btn btnRegister w130 fwb uppercase senting display_none">Đang gửi...</button>
                                             Bạn chưa có tài khoản? <a href="{{route('employer.register')}}" class="member_register txt-xanh-la-cay underline">Đăng ký?</a>
                                         </div>
                                      </div>
                                   </div>
                                </form>
                             </div>
                          </div>
                    </div>
                   {{--<div class="block_reg_footer_common regis_footer" id="regis_footer_successfull">
                      <div class="footer_regis_common fs14 txt-color-363636">
                         <span class="bold">Bạn gặp khó khăn khi đăng ký?</span><br>
                         <span class="bold">Liên hệ Hotline hỗ trợ Nhà tuyển dụng:</span><br>
                         <span class="color_tim bold">(04) 6684 7421</span>
                      </div>
                      <div class="regis_common_line_break mt_12 ml_16 mb_4 mr16"></div>
                   </div>--}}
                </div>
            </div>
        </div>
    </div>


