<!--  KINH NGHIEM VA KY NANG -->
<div class="box-child-ths" id="block-thong-tin-ca-nhan">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="https://vieclam24h.vn/ntv-trang-tao-ho-so-tim-viec-lan-dau.html#div-frm-kinhnghiem" class="accordion">
            <span class="uppercase bold text-tim-nhat">KINH NGHIỆM LÀM VIỆC</span>
            <span class="required_l kn_bb ">(bắt buộc)</span>
            <span class="required_l_n kn_kobb display_none">(Không bắt buộc)</span>
            <span class="required_r"><i class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" style="">
        <div id="div-frm-kinhnghiem" class="mt_8">
            <div class="box-edit form display_block">
                <form id="frmkinhnghiem" name="frmThamkhaoNew">
                    <input type="hidden" name="kinhnghiem_created" id="kinhnghiem_created" value="0">
                    <input type="hidden" name="kinhnghiem_form_show" id="kinhnghiem_form_show" value="1">
                    <div class="">

                        <div class="box-knlv">
                            <p>- Liệt kê các kinh nghiệm công việc từ thời gian gần nhất trở về trước.</p>
                            <p>- Kinh nghiệm có thể trong công việc hoặc các hoạt động đoàn thể.</p>
                            <p>- Không yêu cầu nếu chưa có kinh nghiệm</p>
                        </div>

                        <div class="clearfix"></div>
                        <!-- tên company_name -->
                        <div class="form-group mt16">
                            <label for="company_name" class="control-label-info bold txt-ghi fs14 w180">Tên Công ty/Tổ chức <span class="colorRed">*</span></label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <input name="kinhnghiem[c_cong_ty]" type="text" class="inputTextKNEdit form-control input-lg2 color-input required" id="company_name" value="">
                            </div>
                            <div id="error_c_cong_ty" class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Trường đào tạo cấp -->
                        <div class="form-group mt16">
                            <label for="address" class="control-label-info bold txt-ghi fs14 w180">Chức danh <span class="colorRed">*</span></label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <input name="kinhnghiem[c_chuc_danh]" type="text" class="inputTextKNEdit form-control input-lg2 color-input required" id="address" value="">
                            </div>
                            <div id="error_c_chuc_danh" class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- input birthday -->
                        <div class="form-group mt_16">
                            <label for="address" class="control-label-info bold txt-ghi fs14 w180">Thời gian làm việc <span class="colorRed">*</span></label>
                            <div class="fr_ip_vtmm pl_18 select_style31 city_select">
                                <span class="txt-color-757575 fs14 italic floatLeft lbl_from_bangcap">từ</span>
                                <div id="c_thoigian" class="w87 filter_box font14 style-flat  reg_box_tinhthanh box_tinhthanh_reg  floatLeft mr_8 ml_6">
                                    <div class="select2-container checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time required" id="s2id_start_month"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Tháng</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen9"><div class="select2-drop select2-display-none select_start_month select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results" tabindex="0" style="width: 183px; padding-right: 32px; outline: none; overflow: hidden;">   </ul><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="https://vieclam24h.vn/ntv-trang-tao-ho-so-tim-viec-lan-dau.html" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div></div></div><select id="start_month" name="kinhnghiem[c_thoi_gian_bat_dau_thang]" class="checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time required select2-offscreen" data-diss="1" tabindex="-1">
                                        <option value="0" selected="">Tháng</option>
                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                                            </select>
                                </div>
                                <div class="w87 filter_box font14 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_8">
                                    <div class="select2-container checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time" id="s2id_start_year"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Năm</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen10"><div class="select2-drop select2-display-none select_start_month select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results" tabindex="0" style="width: 183px; padding-right: 32px; outline: none; overflow: hidden;">   </ul><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="https://vieclam24h.vn/ntv-trang-tao-ho-so-tim-viec-lan-dau.html" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div></div></div><select id="start_year" name="kinhnghiem[c_thoi_gian_bat_dau_nam]" class="checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time  required select2-offscreen" data-diss="1" tabindex="-1">
                                        <option value="0" selected="">Năm</option>
                                        <option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>                                            </select>
                                </div>
                                <span class="txt-color-757575 fs14 italic pl_16 pr12 floatLeft lbl_from_bangcap">đến</span>
                                <p class="kn_denhientai text-tim-nhat text-lowercase fs14  pr12 floatLeft lbl_from_bangcap display_none"> Hiện tại</p>
                                <div class="kn_denthang w87 filter_box font14 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_8">
                                    <div class="select2-container checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time required" id="s2id_end_month"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Tháng</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen11"><div class="select2-drop select2-display-none select_start_month select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results" tabindex="0" style="width: 183px; padding-right: 32px; outline: none; overflow: hidden;">   </ul><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="https://vieclam24h.vn/ntv-trang-tao-ho-so-tim-viec-lan-dau.html" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div></div></div><select id="end_month" name="kinhnghiem[c_thoi_gian_ket_thuc_thang]" class="checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time required select2-offscreen" data-diss="1" tabindex="-1">
                                        <option value="0" selected="">Tháng</option>
                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                                            </select>
                                </div>
                                <div class="kn_dennam ml_4 w87 filter_box font14 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                    <div class="select2-container checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time" id="s2id_end_year"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Năm</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12"><div class="select2-drop select2-display-none select_start_month select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results" tabindex="0" style="width: 183px; padding-right: 32px; outline: none; overflow: hidden;">   </ul><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div><div style="position: absolute; z-index: 100; margin: 0px; padding: 0px; right: 3px; display: none; top: -4px;"><div class="enscroll-track track3" style="position: relative;"><a href="https://vieclam24h.vn/ntv-trang-tao-ho-so-tim-viec-lan-dau.html" class="handle3" style="position: absolute; z-index: 1;"><div class="top"></div><div class="bottom"></div></a></div></div></div></div><select id="end_year" name="kinhnghiem[c_thoi_gian_ket_thuc_nam]" class="checkComboboxKNEdit selectpicker checkCombobox box_select_filter_reg pos_relative w65 select_time  required select2-offscreen" data-diss="1" tabindex="-1">
                                        <option value="0" selected="">Năm</option>
                                        <option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>                                            </select>
                                </div>
                            </div>
                            <div id="error_c_thoigian" class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="form-group clearfix mt_8">
                            <div class="box-cvht">
                                <div class="demo-list">
                                    <div class="icheckbox_square-blue" style="position: relative;"><div class="icheckbox_square-blue" style="position: relative;"><input tabindex="1" type="checkbox" name="kinhnghiem[c_cong_viec_hien_tai]" id="chk_c_cong_viec_hien_tai" value="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                    <label for="cvht" class="font14 fwn">Công việc hiện tại</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group clearfix mb_12">
                            <label for="salary" class="control-label-info bold txt-ghi fs14 w180">
                                Mức lương
                            </label>
                            <div class="pl_8 w120 floatLeft select_style31 city_select">
                                <div class="w112 filter_box font14 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                    <div class="select2-container selectpicker checkCombobox box_select_filter_reg pos_relative w94 select_time" id="s2id_m_type"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">VND</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen13"></div><select id="m_type" name="kinhnghiem[c_loai_tien_te]" class="selectpicker checkCombobox box_select_filter_reg pos_relative w94 select_time select2-offscreen" data-diss="1" tabindex="-1">
                                        <option value="1">VND</option>
                                        <option value="2">USD</option>
                                    </select>
                                </div>
                            </div>

                            <div class="fr-input-wd200">
                                <input type="text" class="inputTextKNEdit1 form-control input-lg2 color-input" id="salary" name="kinhnghiem[c_muc_luong]" placeholder="Nhập số">
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group clearfix mt_16">
                            <label class="control-label-checkbox bold txt-ghi fs14 w180">
                                Mô tả công việc <span class="colorRed">*</span>
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <textarea name="kinhnghiem[c_mo_ta_cong_viec]" class="form-control pt4 pb4 pl_10 pr_10 inputTextAreaKNEdit required" id="mo_ta_cong_viec" rows="5"></textarea>
                            </div>
                            <div id="error_c_mo_ta_cong_viec" class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group clearfix mt_16">
                            <label class="control-label-checkbox bold txt-ghi fs14 w180">
                                Thành tích đạt được
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <textarea name="kinhnghiem[c_thanh_tich_dat_duoc]" class="form-control pt4 pb4 pl_10 pr_10 " id="thanh_tich" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group mb1 input-phone">
                            <label class="control-label-info bold txt-ghi fs14 w180"></label>
                            <div class="fr-input-wd153">
                                <div class="fr-input-wd153 floatLeft">
                                    <button type="button" id="btnSaveKN" class="ml_15 mr_10 btn btnluu w153 fwb uppercase fs16">Lưu</button>
                                </div>
                                <div class="fr-input-wd153 floatLeft">
                                    <button type="reset" id="btnRegisterKN" class="btn btnhuy w153 fwb uppercase fs16 display_none">Hủy</button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- start block message -->
                        <div class="error_reg_mess main_message max_content_kinhnghiem_lv pl_176 clearfix fs14 italic invalid-msg display_none"></div>
                        <!-- end block message -->

                    </div>
                </form>

            </div>
        </div>


        <div class="form-group">
            <div id="addbkinhngiem2_new" class="footer-box-child-ths">
                <i class="icn-main-menu icn-add-ths"></i>THÊM KINH NGHIỆM LÀM VIỆC
            </div>
            <input type="hidden" id="kinh_nghiem_status_id" value="0">
        </div>
    </div>
</div><!--END Kinh nghiem-->