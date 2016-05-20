<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#coll_ntk"
           class="accordion">
            <span class="uppercase bold text-tim-nhat">NGƯỜI THAM KHẢO</span>
            <span class="required_l_n">(không bắt buộc)</span>
            <span class="required_r"><i class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" id="coll_ntk" style="">
        <div class="corner_top" id="div-frm-thamkhao">
            <form id="frmthamkhao" name="frmThamkhaoNew">
                <div class="form-horizontal noboder addformthamkhao pt_16 pb_16">
                    <div class="form-group clearfix mb_16">
                        <label for="fullname_tk" class="control-label-info bold txt-ghi fs14 w180">
                            Họ và tên <span class="colorRed">*</span>
                        </label>
                        <div class="fr_ip_vtmm col-xs-8">
                            <input type="text"
                                   class="form-control input-lg2 color-input inputTextNTK required"
                                   id="fullname_tk" name="thamkhao[c_ho_ten]" value=""/>
                        </div>
                        <div id="error_c_ho_ten"
                             class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                    </div>
                    <div class="form-group clearfix mb_16">
                        <label for="company_name_ntk" class="control-label-info bold txt-ghi fs14 w180">
                            Công ty/Tổ chức <span class="colorRed">*</span>
                        </label>
                        <div class="fr_ip_vtmm col-xs-8">
                            <input type="text"
                                   class="form-control input-lg2 color-input inputTextNTK required"
                                   id="company_name_ntk" name="thamkhao[c_cong_ty]" value=""/>
                        </div>
                        <div id="error_c_cong_ty"
                             class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                    </div>


                    <div class="form-group clearfix mb_16">
                        <label class="control-label-info bold txt-ghi fs14 w180">
                            Số điện thoại <span class="colorRed">*</span>
                        </label>
                        <div class="fr_ip_vtmm col-xs-8">
                            <input type="text"
                                   class="form-control input-lg2 color-input inputTextNTK required"
                                   name="thamkhao[c_so_dien_thoai]" id="tel_ntk" value=""/>
                        </div>
                        <div id="error_c_so_dien_thoai"
                             class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                    </div>
                    <div class="form-group clearfix mb_16">
                        <label for="chucvu_ntk" class="control-label-info bold txt-ghi fs14 w180">
                            Chức vụ <span class="colorRed">*</span>
                        </label>
                        <div class="fr_ip_vtmm col-xs-8">
                            <input name="thamkhao[c_chuc_vu]" type="text"
                                   class="form-control input-lg2 color-input inputTextNTK required"
                                   id="chucvu_ntk" value=""/>
                        </div>
                        <div id="error_c_chuc_vu"
                             class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                    </div>

                    <div class="form-group mb1 input-phone">
                        <label class="control-label-info bold txt-ghi fs14 w180"></label>
                        <div class="fr-input-wd153">
                            <div class="fr-input-wd153 floatLeft">
                                <button type="button" id="btnSaveThamKhao"
                                        class="ml_15 mr_10 btn btnluu w153 fwb uppercase fs16">Lưu
                                </button>
                            </div>
                            <div class="fr-input-wd153 floatLeft">
                                <button type="reset" id="btnRegisterThamKhao"
                                        class="btn btnhuy w153 fwb uppercase fs16">Hủy
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- start block message -->
                    <div class="error_reg_mess max_content_thamkhao main_message pl_184 clearfix fs14 italic invalid-msg display_none"></div>
                    <!-- end block message -->

                </div>
            </form>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="box-ngonngu2"></div>
    <div class="footer-box-child-ths" id="addthamkhao2_new">
        <a href="#"><i class="icn-main-menu icn-add-ths"></i>THÊM NGƯỜI THAM KHẢO </a>
    </div>
    <input type="hidden" id="nguoitk_status_id" value="0"/></div>