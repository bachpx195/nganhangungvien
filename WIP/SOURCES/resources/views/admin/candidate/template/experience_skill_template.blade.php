<script id="experience-template" type="x-tmpl-mustache">
    <div class="experience-skill-item">
        <div class="form-group ">
            <div class="ln_hr_head"></div>
        </div>
        <!-- tên company_name -->
        <div class="form-group">
            <label for="experience_company_name_@{{index}}"
                   class="col-sm-2 control-label">Tên
                Công ty/Tổ chức</label>
            <div class="col-sm-10 ">
                <input name="experience_company_name_@{{index}}" type="text"
                       class="inputTextKNEdit form-control input-lg2 color-input required"/>
            </div>
            <div id="error_c_cong_ty"
                 class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="clearfix"></div>
        <!-- Trường đào tạo cấp -->
        <div class="form-group">
            <label for="experience_office_@{{index}}"
                   class="col-sm-2 control-label">Chức danh</label>
            <div class="col-sm-10 ">
                <input name="experience_office_@{{index}}" type="text"
                       class="inputTextKNEdit form-control input-lg2 color-input required"/>
            </div>
            <div id="error_c_chuc_danh"
                 class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="clearfix"></div>

        <!-- input birthday -->
        <div class="form-group mt_16">
            <label for="address"
                   class="col-sm-2 control-label">Thời
                gian làm việc</label>
            <div class="col-sm-10 ">
                <span class="col-sm-1">từ </span>
                <div class="col-sm-2">
                    <select name="experience_day_in_month_@{{index}}" class="form-control">
                        @include('front.common.month_options')
                    </select>
                </div>
                <div class="col-sm-2">
                    <select name="experience_day_in_year_@{{index}}" class="form-control">
                        @include('front.common.year_options')
                    </select>
                </div>
                <span class="col-sm-1">đến </span>
                <div class="col-sm-2">
                    <select name="experience_day_out_month_@{{index}}" class="form-control">
                        @include('front.common.month_options')
                    </select>
                </div>
                <div class="col-sm-2">
                    <select name="experience_day_out_year_@{{index}}" class="form-control">
                        @include('front.common.year_options')
                    </select>
                </div>

                <div class="col-sm-2">
                    <input type="checkbox" name="experience_current_job_@{{index}}" style="vertical-align: middle;"/> <span style="vertical-align: middle;">Hiện tại</span>
                </div>

                <div id="error_c_thoigian"
                     class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
            </div>
        </div>

        <div class="form-group mt_16">
            <label for="expect_salary"
                   class="col-sm-2 control-label"> Mức lương
            </label>

            <div class="col-sm-10 ">
                <select name="experience_salary_@{{index}}" class="form-control">
                    @include('front.common.options',
                             array(
                                 'options' => $salaries,
                                 'defaultName' => 'Chọn Mức lương'
                                 ))
                </select>
            </div>
        </div>
        <div class="error_reg_mess clearfix italic validator-message display_none"
             data-name="experience_salary_@{{index}}">
            Vui lòng chọn mức lương.</div>

        <div class="form-group">
            <label class="col-sm-2 control-label">
                Mô tả công việc
            </label>
            <div class="col-sm-10 ">
                <textarea name="experience_description_@{{index}}"
                          class="form-control pt4 pb4 pl_10 pr_10 inputTextAreaKNEdit required"
                          id="experience_description" rows="5"></textarea>
            </div>
            <div id="error_c_mo_ta_cong_viec"
                 class="clearfix error_reg_mess fs14 italic invalid-msg display_none"></div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"> &nbsp; </label>
            <div class="remove-addition-info-form col-sm-10"
                 data-class="experience-skill-item" data-index="1" data-count-id="experience-count">
                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA KINH NGHIỆM LÀM VIỆC</a>
            </div>
        </div>
    </div>
</script>