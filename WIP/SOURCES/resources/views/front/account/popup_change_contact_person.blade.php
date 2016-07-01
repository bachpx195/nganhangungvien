<div id="popup_component_successfull" style="display: block;">
    <div id="pos_popup_successfull" style="top: 73.5px; left: 0px;">
        <div class="w563 h_400" id="popup_content_successfull">
            <div class="pb12 btn_close btn_close_success">
                <div data-original-title="Đóng" title="" data-placement="bottom" data-toggle="tooltip"
                     class="block-img-close"></div>
            </div>
            <div id="frm-login-info" class="content_dangky_successfull s31">
                <div id="regis_header" class="block_ntv_dangky regis_header h_56">
                    <div class="w632 floatLeft">
                        <span class="title_ntd_dky"></span><span class="uppercase bold fs16 txt_color_blue">Sửa thông tin Chủ tài khoản</span>
                    </div>
                </div>
                <div class="regis_content_1 scrollbar_cus w563 pr0"
                     style="width: 563px; padding-right: 10px; outline: medium none; overflow: hidden; height: 400px;"
                     tabindex="0">
                    <div class="pr_16 pl_16 mb_6 s31_4">
                        <div id="msg_success_contact"
                             class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none"></div>
                        <form action="" id="edit_contact_ntd" name="edit_contact_ntd" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="employer_id" value="{{ $employer->id }}">
                            <div id="regis_content_successfull" class="block_message_success pt_12  mt_6">
                                <div class="require_info mb_10 italic pr_10">(<span class="colorRed">*</span>)
                                    Thông tin bắt buộc nhập
                                </div>
                                <div class="form-group clearfix mb_12 mt_12">
                                    <label class="control-label-info bold txt-color-363636 fs14 w155" for="fullname">
                                        Tên chủ tài khoản <span class="colorRed">*</span>
                                    </label>
                                    <div class="fr_input_kinhnghien_lv w360 pos_ip_new">
                                        <input type="text" value="{{ $employer->contact_person }}" name="contact_name"
                                               id="contact_name"
                                               class="form-control input-lg2 color-input ctInput">
                                    </div>
                                    <div id="error_contact_name"
                                         class="clearfix pl_173 error_reg_mess fs14 italic invalid-msg display_none"></div>
                                </div>
                                {{--<div class="form-group clearfix mb_12 mt_12">--}}
                                    {{--<label class="control-label-info bold txt-color-363636 fs14 w155" for="fullname">Địa chỉ--}}
                                        {{--liên hệ <span class="colorRed">*</span>--}}
                                    {{--</label>--}}
                                    {{--<div class="fr_input_kinhnghien_lv w360 pos_ip_new">--}}
                                        {{--<input type="text" value="{{ $employer->contact_person }}" name="dia_chi"--}}
                                               {{--id="dia_chi" class="form-control input-lg2 color-input">--}}
                                    {{--</div>--}}
                                    {{--<div id="error_dia_chi"--}}
                                         {{--class="clearfix pl_173 error_reg_mess clearfix fs14 italic invalid-msg-fullname display_none"></div>--}}
                                {{--</div>--}}
                                <div class="form-group clearfix mb_8 input-phone">
                                    <label class="control-label-info bold txt-color-363636 fs14 w155" for="tel_contact">
                                        Số điện thoại liên hệ <span class="requireContact colorRed ">*</span>
                                    </label>
                                    <div class="fr_input_kinhnghien_lv w360">
                                        <input type="text" value="{{ $employer->contact_phone }}" name="contact_phone"
                                               id="tel_contact"
                                               class="form-control input-lg2 color-input ctInput">
                                        <span class="clickRemove"><b></b></span>
                                    </div>
                                    <div id="error_tel_co_dinh"
                                         class="clearfix pl_173 error_reg_mess fs14 italic invalid-msg display_none"></div>
                                </div>
                                {{--<div id="add_tel_contact" class="form-group clearfix mb_12">--}}
                                    {{--<label class="control-label-checkbox w155"></label>--}}
                                    {{--<div class="fr_input_kinhnghien_lv w360">--}}
                                        {{--<span id="addPhoneContact" class="color_add_tel fs14 cursor_pointer">--}}
                                             {{--<span class="add_tel_692095"></span>Thêm Số điện thoại--}}
                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group clearfix mt_16 mb_12">
                                    <label class="control-label-info bold txt-color-363636 fs14 w155"
                                           for="email_contact">
                                        Email liên hệ <span class="colorRed">*</span>
                                    </label>
                                    <div class="fr_input_kinhnghien_lv w360">
                                        <input type="text" value="{{ $employer->contact_email }}" name="contact_email"
                                               id="email_contact" class="form-control input-lg2 color-input ctInput">
                                    </div>
                                    <div id="error_contact_email"
                                         class="clearfix pl_173 error_reg_mess fs14 italic invalid-msg display_none"></div>
                                </div>
                                <div class="mb_4 pt_10 clearfix floatLeft">
                                    <label class="w76 floatLeft"></label>
                                    <div class="fr-input-ntk w410 floatLeft">
                                        <button class="btn fwb btnSavePass w197 fs16 uppercase mr12"
                                                id="btnSaveContactPerson"
                                                type="button">Lưu thông tin
                                        </button>
                                        <button class="btn fwb btnCancel w148 fs14 uppercase" id="btnCancel"
                                                type="button">
                                            Huỷ
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