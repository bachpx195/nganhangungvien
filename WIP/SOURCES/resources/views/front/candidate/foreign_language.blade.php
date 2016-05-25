<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#coll_nn" class="accordion">
            <span class="uppercase bold text-tim-nhat">NGOẠI NGỮ</span>
            <span class="required_l_n">(không bắt buộc)</span>
            <span class="required_r"><i class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" id="coll_nn" style="">
        <div id="div-frm-ngoaingu" class="">
            <div class="box-edit form display_block">
                <div class="box-ngonngu">

                    <div class="form-horizontal addformngonngu mt0 noboder">
                        <!-- input Ngoại ngữ -->
                        <input type="hidden" name="ngoaingu_created"
                               id="ngoaingu_created" value="0">
                        <input type="hidden" name="ngoaingu_form_show"
                               id="ngoaingu_form_show" value="1">
                        <div class="form-group mb8" id="div_slt_ngoaingu">
                            <label for="c_ma_ngoai_ngu"
                                   class="control-label-info bold txt-color-363636 fs14 w181">
                                Ngoại ngữ
                            </label>
                            <div class=" col-xs-8">
                                <div class="ngoai_ngu w224 pl_10 col-xs-4 pr_2 mr_24 select_style31 city_select">
                                    <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                        <select id="c_ma_ngoai_ngu"
                                                name="ngoaingu[c_ma_ngoai_ngu]"
                                                class="checkComboboxEditNN tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style"
                                                data-disS="1"
                                                data-select-class="select_language">
                                            <option value="0">Chọn ngoại ngữ</option>
                                            <option value="EN">Tiếng Anh</option>
                                            <option value="JP">Tiếng Nhật</option>
                                            <option value="FR">Tiếng Pháp</option>
                                            <option value="CN">Tiếng Trung</option>
                                            <option value="RU">Tiếng Nga</option>
                                            <option value="KR">Tiếng Hàn</option>
                                            <option value="DE">Tiếng Đức</option>
                                            <option value="IT">Tiếng Ý</option>
                                            <option value="SA">Tiếng Ả Rập</option>
                                            <option value="OTHER">Ngoại ngữ khác
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="clearfix"></div>
                            <div class="form-group" id="div_ngonngukhac">
                                <label for="c_ngoai_ngu_khac"
                                       class="control-label-info bold txt-color-363636 fs14 w181">Ngôn
                                    ngữ khác
                                </label>
                                <div class="ml_8 col-xs-8">

                                    <div class="form-inline">
                                        <input type="text"
                                               class="form-control input-lg2 checkTextEditNN color-input"
                                               id="c_ngoai_ngu_khac"
                                               name="ngoaingu[c_ngoai_ngu_khac]"
                                               placeholder="">
                                    </div>


                                    <div class="error_reg_mess clearfix err_chonngoaingu display_none pl_0"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group clearfix mt16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">
                                    Trình độ
                                </label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    <div class="demo-list sex-lable khanang">
                                        Tốt
                                    </div>
                                    <div class="demo-list sex-lable khanang mr_10">
                                        Khá
                                    </div>
                                    <div class="demo-list sex-lable khanang mr_10">
                                        Trung bình
                                    </div>
                                    <div class="demo-list sex-lable khanang">
                                        Kém
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Nghe</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="1"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[nghe]"
                                               id="ngoaingu_nghe_1" value="1">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="2"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[nghe]"
                                               id="ngoaingu_nghe_2" value="2">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="3"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[nghe]"
                                               id="ngoaingu_nghe_3" value="3">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="4"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[nghe]"
                                               id="ngoaingu_nghe_4" value="4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Nói</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="1"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[noi]" id="ngoaingu_noi_1"
                                               value="1">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="2"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[noi]" id="ngoaingu_noi_2"
                                               value="2">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="3"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[noi]" id="ngoaingu_noi_3"
                                               value="3">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="4"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[noi]" id="ngoaingu_noi_4"
                                               value="4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Đọc</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="1"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[doc]" id="ngoaingu_doc_1"
                                               value="1">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="2"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[doc]" id="ngoaingu_doc_2"
                                               value="2">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="3"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[doc]" id="ngoaingu_doc_3"
                                               value="3">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="4"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[doc]" id="ngoaingu_doc_4"
                                               value="4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Viết</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="1"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[viet]"
                                               id="ngoaingu_viet_1" value="1">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="2"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[viet]"
                                               id="ngoaingu_viet_2" value="2">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="3"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[viet]"
                                               id="ngoaingu_viet_3" value="3">
                                    </div>
                                    <div class="demo-list  sex-lable trinhdo">
                                        <input class="input_capdo_ngoaingu" relval="4"
                                               tabindex="1" type="radio"
                                               name="ngoaingu[viet]"
                                               id="ngoaingu_viet_4" value="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box-ngonngu2"></div>
    <div class="footer-box-child-ths" id="show-add-ngoai-ngu">
        <a href="#"><i class="icn-main-menu icn-add-ths"></i>THÊM NGOẠI NGỮ</a>
    </div>
    <input type="hidden" id="ngoai_ngu_id" value="0"/>
</div>