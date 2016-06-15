<div id="popup_component" style="display: block;">
    <div class="pos_new_pos_s34" id="pos_popup" style="top: 26.5px; left: 0px;">
        <div class=" w816 h_915" id="popup_content">
            <div class="pb12 btn_close">
                <div data-original-title="Đóng" title="" data-placement="bottom" data-toggle="tooltip"
                     class="block-img-close"></div>
            </div>
            <div class="content_dangky ">
                <div class="block_ntv_dangky regis_header h_56">
                    <div class="w_50 floatLeft">
                        <span class="title_ntd_dky "></span><span class="uppercase fws fs16 txt_color_363636">Sửa thông tin công ty</span>
                    </div>
                </div>
                <div id="regis_content" class="regis_content_s33_4 scrollbar_cus_s33_4 w816 pr0">
                    <div class="block-pop-dangky ">
                        <div id="frm-login-info" class="block-content">
                            <div class="mb8">
                                <div class="center-p12p24 ">
                                    <div id="msg_success_info"
                                         class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none"></div>
                                    <form action="" id="edit_profile_ntd" name="edit_profile_ntd"
                                          class="form-horizontal">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="employer_id" value="{{ $employer->id }}">
                                        <div class="block_message_success pt_12  mt_6" id="block-thong-tin-dang-nhap">
                                            <div class="require_info clearfix mb_10 italic pr_10">(<span
                                                        class="colorRed">*</span>) Thông tin bắt buộc nhập
                                            </div>
                                            <!-- input Tên công ty  * -->
                                            <div class="form-group clearfix mb_12 mt_12">
                                                <label class="control-label-info bold txt-color-363636 fs14 w180"
                                                       for="company_name">
                                                    Tên công ty <span class="colorRed">*</span>
                                                </label>
                                                <div class="register_fr_input_wd583 w598">
                                                    <input type="text" readonly="" value="{{ $employer->company_name }}"
                                                           name="company_name" id="company_name"
                                                           class="form-control input-lg2 color-input-1 txt-color-757575 cInput">
                                                </div>
                                                <div class="mess_notice_fullname  pl_210 clearfix require_req_fullname err_fullname">
                                                    Ghi tên công ty đầy đủ và rõ ràng theo Giấy phép đăng ký kinh
                                                    doanh
                                                </div>
                                                <div id="error_company_name"
                                                     class="clearfix error_reg_mess fs14 italic invalid-msg display_none"></div>
                                            </div>
                                            <!-- input Quy mô công ty -->
                                            <div class="form-group mb_14">
                                                <label for="company_size"
                                                       class="control-label-info bold txt-color-363636 fs14 w180">
                                                    Quy mô công ty <span class="colorRed">*</span>
                                                </label>
                                                <div class="fr-input-wd333 select_style31 city_select">
                                                    <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                        <select id="company_size" name="company_size"
                                                                class="tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style cSelect"
                                                                required
                                                                data-required-msg="Vui lòng chọn quy mô công ty">
                                                            <option value="">Chọn Quy mô công ty</option>
                                                            @foreach($companySizes as $cSize)
                                                                @if ($cSize->id == $employer->company_size)
                                                                    <option value="{{ $cSize->id }}"
                                                                            selected="selected">{{ $cSize->name }}</option>
                                                                @else
                                                                    <option value="{{ $cSize->id }}">{{ $cSize->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div id="select-data" data-for='company_size'
                                                         class='clearfix error_reg_mess fs14 italic invalid-msg display_none'></div>
                                                </div>
                                            </div>
                                            <!-- input tel_co_dinh -->
                                            <div class="form-group mb_14">
                                                <label class="control-label-info bold txt-color-363636 fs14 w180"
                                                       for="company_phone">Điện thoại cố định <span
                                                            class="colorRed">*</span></label>
                                                <div class="fr-input-wd333">
                                                    <input type="text" value="{{ $employer->phone }}" name="company_phone"
                                                           id="company_phone"
                                                           class="form-control input-lg2 color-input-1 txt-color-757575 cInput">
                                                </div>
                                                <div id="error_tel_co_dinh"
                                                     class="clearfix error_reg_mess fs14 italic invalid-msg display_none"></div>
                                            </div>
                                            <!-- input about_company -->
                                            <div class="form-group mb_14">
                                                <label class="control-label-info bold txt-color-363636 fs14 w180"
                                                       for="about_company">Giới thiệu về công ty <span
                                                            class="colorRed">*</span></label>
                                                <div class="register_fr_input_wd583 w598">
                                                        <textarea name="company_description" rows="4" id="about_company"
                                                                  class="form-control p14 inputTextArea txt-color-757575 cInput">{{ $employer->company_description }}</textarea>
                                                </div>
                                                <div id="error_company_info"
                                                     class="clearfix error_reg_mess fs14 italic invalid-msg display_none"></div>
                                            </div>
                                            <!-- input address -->
                                            <div class="form-group mb_14">
                                                <label class="control-label-info bold txt-color-363636 fs14 w180"
                                                       for="address">Địa chỉ công ty <span
                                                            class="colorRed">*</span></label>
                                                <div class="register_fr_input_wd583 w598">
                                                    <input type="text" value="{{ $employer->company_address }}"
                                                           name="company_address" id="company_address"
                                                           class="form-control input-lg2 color-input-1 txt-color-757575 cInput">
                                                </div>
                                                {{--<div class="notice_address_detail pl_210 err_address">Vui
                                                    lòng nhập chi tiết địa chỉ của bạn bằng tiếng Việt có dấu.
                                                </div>--}}
                                                <div id="error_company_address"
                                                     class="clearfix error_reg_mess fs14 italic invalid-msg display_none"></div>
                                            </div>
                                            <!-- input Tỉnh/thành phố * -->
                                            <div class="form-group mb_14">
                                                <label for="province_id"
                                                       class="control-label-info bold txt-ghi fs14 w180">Tỉnh/thành
                                                    phố <span class="colorRed">*</span>
                                                </label>
                                                <div class="fr-input-wd333 select_style31 city_select">
                                                    <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                        <select id="province_id" name="province_id"
                                                                class="tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style cSelect"
                                                                tabindex="-1" required
                                                                data-required-msg="Vui lòng chọn tỉnh thành">
                                                            <option value="">Chọn Tỉnh thành</option>
                                                            @foreach($provinces as $item)
                                                                @if ($item->id == $employer->province_id)
                                                                    <option value="{{ $item->id }}"
                                                                            selected="selected">{{ $item->name }}</option>
                                                                @else
                                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div id="select-data" data-for='province_id'
                                                         class='clearfix error_reg_mess fs14 italic invalid-msg display_none'></div>
                                                </div>
                                            </div>
                                            <!-- input website -->
                                            <div class="form-group mb_14">
                                                <label for="website"
                                                       class="control-label-info bold txt-ghi fs14 w180">Website </label>
                                                <div class="fr-input-wd333">
                                                    <input type="text" class="form-control input-lg2 color-input cInput"
                                                           id="website" name="website"
                                                           value="{{ $employer->website }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group mb_14">
                                                <label class="control-label-info w180"></label>
                                                <div class="fr-input-ntk pl_16 floatLeft">
                                                    <button class="btn fwb btnSavePass w197 fs16 uppercase mr12"
                                                            id="btnSaveCompanyInfo" type="button">Lưu thông tin
                                                    </button>
                                                    <button class="btn fwb btnCancel w148 fs16 uppercase"
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