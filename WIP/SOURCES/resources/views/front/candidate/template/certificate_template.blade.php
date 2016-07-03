<div id="certificate-template" style="display: none;">
    <div class="certificate-item">
        <div class="row">
            <div class="ln_hr_head"></div>
        </div>
        <div class="form-group clearfix mb_12 mt16">
            <label for="certificate_name_@{{index}}"
                   class="control-label-info bold txt-color-363636 fs14 w181">
                Tên Bằng cấp/Chứng chỉ <span
                        class="colorRed">*</span>
            </label>
            <div class="fr_ip_vtmm col-xs-8">
                <input placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT..."
                       type="text"
                       class="form-control input-lg2 color-input inputTextEdit required"
                       name="certificate_name_@{{index}}" value=""/>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <!-- input Trường/Đơn vị đào tạo -->
        <div class="form-group mb_12">
            <label for="training_unit_@{{index}}"
                   class="control-label-info bold txt-color-363636 fs14 w181">Trường/Đơn
                vị đào tạo <span
                        class="colorRed">*</span></label>
            <div class="fr_ip_vtmm col-xs-8">
                <input type="text"
                       class="form-control input-lg2 color-input inputTextEdit required"
                       name="training_unit_@{{index}}" value=""/>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>

        <div class="form-group mb_12">
            <label class="control-label-info bold txt-color-363636 fs14 w181">Thời
                gian <span class="colorRed">*</span></label>
            <div class="fr_ip_vtmm pl_18 select_style31 city_select">
                <span class="txt-color-757575 fs14 italic pr12 floatLeft lbl_from_bangcap">từ </span>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                    <select name="started_at_month_@{{index}}" class="w128">
                        @include('front.common.month_options')
                    </select>
                </div>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                    <select name="started_at_year_@{{index}}" class="w128">
                        @include('front.common.year_options')
                    </select>
                </div>
                <span class="txt-color-757575 fs14 italic pl_16 pr12 floatLeft lbl_from_bangcap">đến</span>
                <p class="kn_denhientai text-tim-nhat text-lowercase fs14  pr12 floatLeft lbl_from_bangcap display_none">
                    Hiện tại</p>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                    <select name="ended_at_month_@{{index}}" class="w128">
                        @include('front.common.month_options')
                    </select>
                </div>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                    <select name="ended_at_year_@{{index}}" class="w128">
                        @include('front.common.year_options')
                    </select>
                </div>
                <div id="error_c_thoigian"
                     class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
            </div>
            <div id="error_c_thoigian_bc"
                 class="clearfix error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>

        <!-- input Chuyên ngành -->
        <div class="form-group mb_12">
            <label for="specialize_@{{index}}"
                   class="control-label-info bold txt-color-363636 fs14 w181">Chuyên
                ngành</label>
            <div class="fr_ip_vtmm col-xs-8">
                <input type="text"
                       class="form-control input-lg2 color-input "
                       name="specialize_@{{index}}" value=""/>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <!-- input Loại tốt nghiệp -->
        <div class="form-group mb_12">
            <label for="graduation_type_@{{index}}"
                   class="control-label-info bold txt-color-363636 fs14 w181">
                Loại tốt nghiệp <span
                        class="colorRed">*</span>
            </label>
            <div class="fr-input-wd333 select_style31 city_select">
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                    <select name="graduation_type_@{{index}}"
                            class="required"
                            data-disS="1">
                        <option value="0" selected>-- Chọn loại
                            tốt nghiệp --
                        </option>
                        <option value="1">Xuất sắc</option>
                        <option value="2">Giỏi</option>
                        <option value="3">Khá</option>
                        <option value="4">Trung bình khá
                        </option>
                        <option value="5">Trung bình
                        </option>
                    </select>
                </div>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <!-- input logo_company -->
        <!-- TODO
        <div class="form-group mb_20">
            <label class="control-label-info bold txt-color-363636 fs14 w181"></label>
            <div class="fr_input_bangcap_chungchi">
                <div class="display_block btn-big plr6 pos_relactive w208 floatLeft">
                    <input type="file" name="certificate_image_@{{index}}"
                           id="dinhkembangcap"
                           class="bt_input pos_absolute"
                           onchange="fileOnchange2(this)">
                    <span class='icon_upload_file'></span>Tải
                    ảnh bằng cấp (nếu có)
                </div>
                <span id="note_select_file_certificate_image_@{{index}}" class="select_file_note floatLeft txt-color-363636">(Bạn chưa chọn file nào)</span>
                <div class="note_size_photo clearfix font12 italic">
                    (Dạng file ảnh .jpg, .gif, .png, dung
                    lượng <=300KB)
                </div>
            </div>
        </div>
        -->
        <div class="clearfix"></div>

        <!-- Remove experience -->
        <div class="form-group">
            <label class="control-label-checkbox bold txt-ghi fs14 w180"> &nbsp; </label>
            <div class="fr_ip_vtmm col-xs-8 remove-addition-info-form"
                 data-class="certificate-item" data-index="1" data-countId="certificate-count">
                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA BẰNG CẤP CHỨNG CHỈ</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>