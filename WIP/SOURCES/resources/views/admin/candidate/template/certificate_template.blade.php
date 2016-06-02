<div id="certificate-template" style="display: none;">
    <div class="certificate-item">
        <div class="form-group ">
            <div class="ln_hr_head"></div>
        </div>
        <div class="form-group ">
            <label for="certificate_name_@{{index}}"
                   class="col-sm-2 control-label">
                Tên Bằng cấp/Chứng chỉ <span
                        class="colorRed">*</span>
            </label>
            <div class="col-sm-10">
                <input placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT..."
                       type="text"
                       class="form-control input-lg2 color-input inputTextEdit required"
                       name="certificate_name_@{{index}}"/>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <!-- input Trường/Đơn vị đào tạo -->
        <div class="form-group ">
            <label for="training_unit_@{{index}}"
                   class="col-sm-2 control-label">Trường/Đơn
                vị đào tạo <span
                        class="colorRed">*</span></label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control input-lg2 color-input inputTextEdit required"
                       name="training_unit_@{{index}}"/>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>

        <div class="form-group ">
            <label class="col-sm-2 control-label">Thời
                gian <span class="colorRed">*</span></label>
            <div class="col-sm-10">
                <span class="col-sm-1">từ </span>
                <div class="col-sm-2">
                    <select name="started_at_month_@{{index}}" class="form-control">
                        @include('front.common.month_options')
                    </select>
                </div>
                <div class="col-sm-2">
                    <select name="started_at_year_@{{index}}" class="form-control">
                        @include('front.common.year_options')
                    </select>
                </div>
                <span class="col-sm-1">đến </span>
                <div class="col-sm-2">
                    <select name="ended_at_month_@{{index}}" class="form-control">
                        @include('front.common.month_options')
                    </select>
                </div>
                <div class="col-sm-2">
                    <select name="ended_at_year_@{{index}}" class="form-control">
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
        <div class="form-group ">
            <label for="specialize_@{{index}}"
                   class="col-sm-2 control-label">Chuyên
                ngành</label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control input-lg2 color-input "
                       name="specialize_@{{index}}"/>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <!-- input Loại tốt nghiệp -->
        <div class="form-group ">
            <label for="graduation_type_@{{index}}"
                   class="col-sm-2 control-label">
                Loại tốt nghiệp <span
                        class="colorRed">*</span>
            </label>
            <div class="col-sm-10">
                <div class="">
                    <select name="graduation_type_@{{index}}" class="form-control">
                        @include('front.common.options',
                            array(
                                'options' => $graduationTypes,
                                'defaultName' => 'Chọn loại tốt nghiệp'
                                ))
                    </select>
                </div>
            </div>
            <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <!-- input logo_company -->
        <!-- TODO:
        <div class="form-group ">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
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
    </div>
</div>