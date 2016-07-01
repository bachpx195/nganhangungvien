<div id="popup_component_register_choice" style="display: block;">
    <div id="pos_popup_register_choice" style="top: 73.5px; left: 0px;">
        <div class="w563 h_480" id="popup_content_successfull">
            <div class="pb12 btn_close btn_close_success">
                <div data-original-title="Đóng" title="" data-placement="bottom" data-toggle="tooltip"
                     class="block-img-close"></div>
            </div>
            <div id="frm-login-info" class="content_dangky_successfull s31">
                <div id="regis_header" class="block_ntv_dangky regis_header pl12">
                    <div class="w632 floatLeft">
                        <span class="title_ntd_dky"></span><span
                                class="uppercase bold fs16 txt_color_blue">Đổi mật khẩu</span>
                    </div>
                </div>
                <div class="regis_content_1 scrollbar_cus w558">
                    <div class="pl_16 pr_16">
                        <div id="msg_success"
                             class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none"></div>
                        <form action="" id="changePassword" name="edit_contact_ntd" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="employer_id" value="{{ $employer->id }}">
                            <div id="regis_content_successfull" class="block_message_success pt_12  mt_6">
                                <div class="require_info mb_10 italic pr_10">(<span class="colorRed">*</span>)
                                    Thông tin bắt buộc nhập
                                </div>
                                <!-- input Mật khẩu cũ -->
                                <div class="form-group clearfix mb_12 mt_12">
                                    <label class="control-label-info bold txt-color-363636 fs14 w155" for="oldPassword">
                                        Mật khẩu cũ <span class="colorRed">*</span>
                                    </label>
                                    <div class="fr_input_kinhnghien_lv w360 pos_ip_new">
                                        <input type="password" value="" name="oldPassword"
                                               id="oldPassword"
                                               class="form-control input-lg2 color-input inputText"
                                               required data-required-msg="Vui lòng nhập mật khẩu cũ">
                                    </div>
                                    <div id="error_oldPassword"
                                         class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none"></div>
                                </div>
                                <!-- input Mật khẩu mới  -->
                                <div class="form-group clearfix mb_8 input-phone">
                                    <label class="control-label-info bold txt-color-363636 fs14 w155" for="newPassword">
                                        Mật khẩu mới <span class="requireContact colorRed ">*</span>
                                    </label>
                                    <div class="fr_input_kinhnghien_lv w360">
                                        <input type="password" value="" name="newPassword"
                                               id="newPassword"
                                               class="form-control input-lg2 color-input inputText"
                                               required data-required-msg="Vui lòng nhập mật khẩu mới">
                                    </div>
                                    <div id="error_tel_co_dinh"
                                         class="clearfix pl_173 error_reg_mess fs14 italic invalid-msg display_none"></div>
                                    <div id="error_newPassword"
                                         class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none"></div>
                                </div>
                                <!-- input Nhập lại mật khẩu mới -->
                                <div class="form-group clearfix mt_16 mb_12">
                                    <label class="control-label-info bold txt-color-363636 fs14 w155"
                                           for="newPasswordConfirm">
                                        Nhập lại mật khẩu mới <span class="colorRed">*</span>
                                    </label>
                                    <div class="fr_input_kinhnghien_lv w360">
                                        <input type="password" value="" id="newPasswordConfirm"
                                               class="form-control input-lg2 color-input"
                                               name="newPasswordConfirm"
                                               required data-required-msg="Vui lòng nhập xác nhận mật khẩu">
                                    </div>
                                    <div id="error_newPasswordConfirm"
                                         class="error_reg_mess err_password pl_0 clearfix fs14 italic invalid-msg display_none"></div>
                                </div>
                                <div class="mb_4 pt_10 clearfix floatLeft">
                                    <label class="w76 floatLeft"></label>
                                    <div class="fr-input-ntk w410 floatLeft">
                                        <button class="btn fwb btnSavePass w197 fs16 uppercase mr12" id="btnSave"
                                                type="button">Lưu mật khẩu mới
                                        </button>
                                        <button class="btn fwb btnCancel w148 fs14 uppercase"
                                                id="btnCancel" type="button">Huỷ
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>