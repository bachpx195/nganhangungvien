<div id="contact-person-template" style="display: none;">
    <div class="form-horizontal noboder addformthamkhao pt_16 pb_16">
        <div class="row">
            <div class="ln_hr_head"></div>
        </div>
        <div class="form-group clearfix mb_16 mt16">
            <label for="contact_person_full_name_@{{index}}" class="control-label-info bold txt-ghi fs14 w180">
                Họ và tên <span class="colorRed">*</span>
            </label>
            <div class="fr_ip_vtmm col-xs-8">
                <input type="text"
                       class="form-control input-lg2 color-input inputTextNTK required"
                       name="contact_person_full_name_@{{index}}"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="form-group clearfix mb_16">
            <label for="contact_person_company__@{{index}}" class="control-label-info bold txt-ghi fs14 w180">
                Công ty/Tổ chức <span class="colorRed">*</span>
            </label>
            <div class="fr_ip_vtmm col-xs-8">
                <input type="text"
                       class="form-control input-lg2 color-input inputTextNTK required"
                       name="contact_person_company__@{{index}}"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>


        <div class="form-group clearfix mb_16">
            <label class="control-label-info bold txt-ghi fs14 w180">
                Số điện thoại <span class="colorRed">*</span>
            </label>
            <div class="fr_ip_vtmm col-xs-8">
                <input type="text"
                       class="form-control input-lg2 color-input inputTextNTK required"
                       name="contact_person_phone_number_@{{index}}"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="form-group clearfix mb_16">
            <label for="contact_person_office_@{{index}}" class="control-label-info bold txt-ghi fs14 w180">
                Chức vụ <span class="colorRed">*</span>
            </label>
            <div class="fr_ip_vtmm col-xs-8">
                <input name="contact_person_office_@{{index}}" type="text"
                       class="form-control input-lg2 color-input inputTextNTK required"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
    </div>
</div>