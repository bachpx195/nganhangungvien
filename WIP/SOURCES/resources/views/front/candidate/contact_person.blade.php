<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#coll_ntk"
           class="accordion">
            <span class="uppercase bold text-tim-nhat">NGƯỜI THAM KHẢO</span>
            <span class="required_l_n">(không bắt buộc)</span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" id="coll_ntk" style="">
        <div class="corner_top" id="div-frm-thamkhao">
            <div id="contact-person-list" id="frm-login-info">
                <?php $contactPersonCount = isset($candidate['contact_person_count']) ? $candidate['contact_person_count'] : 1;?>
                <input type="hidden" name="contact_person_count" id="contact-person-count" value="{{$contactPersonCount}}">
                @for ($i = 1; $i <= $contactPersonCount; $i++)
                    <div class="form-horizontal noboder addformthamkhao">
                        <div class="form-group">
                            <div class="ln_hr_head"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_person_full_name_{{$i}}" class="control-label-info bold txt-ghi fs14 w180">
                                Họ và tên
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <input type="text"
                                       class="form-control input-lg2 color-input inputTextNTK required"
                                       name="contact_person_full_name_{{$i}}" value="{{$candidate['contact_person_full_name_' . $i]}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_person_company_{{$i}}" class="control-label-info bold txt-ghi fs14 w180">
                                Công ty/Tổ chức
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <input type="text"
                                       class="form-control input-lg2 color-input inputTextNTK required"
                                       name="contact_person_company_{{$i}}" value="{{$candidate['contact_person_company_' . $i]}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label-info bold txt-ghi fs14 w180">
                                Số điện thoại
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <input type="text"
                                       class="form-control input-lg2 color-input inputTextNTK required"
                                       name="contact_person_phone_number_{{$i}}" value="{{$candidate['contact_person_phone_number_'. $i]}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_person_office_{{$i}}" class="control-label-info bold txt-ghi fs14 w180">
                                Chức vụ
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <input name="contact_person_office_{{$i}}" type="text"
                                       class="form-control input-lg2 color-input inputTextNTK required"
                                      value="{{$candidate['contact_person_office_' . $i]}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label-checkbox bold txt-ghi fs14 w180"> &nbsp; </label>
                            <div class="fr_ip_vtmm col-xs-8 remove-addition-info-form"
                                 data-class="addformthamkhao" data-index="1" data-count-id="contact-person-count">
                                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA NGƯỜI THAM KHẢO</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="box-ngonngu2"></div>
    <div class="footer-box-child-ths" id="add-more-contact-person">
        <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM NGƯỜI THAM KHẢO </a>
    </div>
</div>