<div id="popup_component_register_choice" style="display: block;">
    <div id="pos_popup_register_choice" style="top: 73.5px; left: 0px;">
        <div class="w558 h_400" id="popup_content_register_choice">
            <div class="pb12 btn_close">
                <div data-original-title="Đóng" title="" data-placement="bottom" data-toggle="tooltip"
                     class="block-img-close"></div>
            </div>
            <div class="content_dangky_register_choice ">
                <div class="">
                    <div id="regis_header" class="block_ntv_dangnhap pd_up_new regis_header pl12">
                        <div class="w_50 floatLeft">
                            <span class="title_bangcap_chungchi border_left_s33"></span><span
                                    class="uppercase bold fs16 txt_color_blue">Đổi mật khẩu</span>
                        </div>
                    </div>
                    <div class="regis_content_1 scrollbar_cus w558 pr0">
                        <div class="pl_16 pr_16">
                            <div id="frm-login-info" class="block-content">
                                <div class="pt_10 pb10">
                                    <div id="msg_success"
                                         class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none"></div>
                                    <form id="changePassword" name="changePassword" action=""
                                          enctype="multipart/form-data" method="post"
                                          class="form-horizontal">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="pt_8" id="block-thong-tin-dang-nhap">
                                            <!-- input Mật khẩu cũ -->
                                            <div class="mb_8 clearfix">
                                                <label class="fwn txt-color-363636 fs14 floatLeft"
                                                       for="oldPassword">Mật khẩu cũ (<span
                                                            class="colorRed">*</span>)</label><br>
                                                <div class="fr-input-ntk pt_4 pl_0 pr_0 w530">
                                                    <input type="password" value="" name="oldPassword"
                                                           id="oldPassword"
                                                           class="form-control input-lg2 color-input inputText"
                                                           required data-required-msg="Vui lòng nhập mật khẩu cũ">
                                                </div>
                                                <div id="error_oldPassword"
                                                     class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none"></div>
                                            </div>
                                            <!-- input Mật khẩu mới  -->
                                            <div class="mb_8 pt12 clearfix">
                                                <label class="fwn txt-color-363636 fs14 floatLeft"
                                                       for="newPassword">Mật khẩu mới (<span
                                                            class="colorRed">*</span>)</label><br>
                                                <div class="fr-input-ntk pt_4 pl_0 pr_0 w530">
                                                    <input type="password" value="" name="newPassword"
                                                           id="newPassword"
                                                           class="form-control input-lg2 color-input inputText"
                                                           required data-required-msg="Vui lòng nhập mật khẩu mới">
                                                </div>
                                                <div id="error_newPassword"
                                                     class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none"></div>
                                            </div>
                                            <!-- input Nhập lại mật khẩu mới   -->
                                            <div class="mb_8 pt12 clearfix">
                                                <label class="fwn txt-color-363636 fs14 floatLeft"
                                                       for="newPasswordConfirm">Nhập lại mật khẩu mới (<span
                                                            class="colorRed">*</span>)</label><br>
                                                <div class="fr-input-ntk pt_4 pl_0 pr_0 w530">
                                                    <input type="password" value="" id="newPasswordConfirm"
                                                           class="form-control input-lg2 color-input"
                                                           name="newPasswordConfirm"
                                                           required data-required-msg="Vui lòng nhập xác nhận mật khẩu">
                                                </div>
                                                <div id="error_newPasswordConfirm"
                                                     class="error_reg_mess err_password pl_0 clearfix fs14 italic invalid-msg display_none"></div>
                                            </div>

                                            <div id="row_btn" class="mb_10 pt_10 clearfix">
                                                <div class="fr-input-ntk pl_0 pr_0 w530 floatLeft">
                                                    <button class="btn bold btnSavePass w193 fs16 uppercase mr12"
                                                            id="btnSave" type="button">Lưu mật khẩu mới
                                                    </button>
                                                    <button class="btn bold btnCancel w193 fs16 uppercase"
                                                            id="btnCancel" type="button">Huỷ
                                                    </button>
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