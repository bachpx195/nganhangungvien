<script id="certificate-template" type="x-tmpl-mustache">
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
        <div class="form-group">
            <label class="col-sm-2 control-label"> &nbsp; </label>
            <div class="col-sm-10 remove-addition-info-form"
                 data-class="certificate-item" data-index="1" data-count-id="certificate-count">
                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA BẰNG CẤP CHỨNG CHỈ</a>
            </div>
        </div>
    </div>
</script>