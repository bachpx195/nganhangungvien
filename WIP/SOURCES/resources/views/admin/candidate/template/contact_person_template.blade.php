<div id="contact-person-template" style="display: none;">
    <div class="form-horizontal noboder addformthamkhao pt_16 pb_16">
        <div class="form-group ">
            <div class="ln_hr_head"></div>
        </div>
        <div class="form-group">
            <label for="contact_person_full_name_@{{index}}" class="col-sm-2 control-label">
                Họ và tên
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       name="contact_person_full_name_@{{index}}"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="form-group">
            <label for="contact_person_company_@{{index}}" class="col-sm-2 control-label">
                Công ty/Tổ chức
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       name="contact_person_company_@{{index}}"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">
                Số điện thoại
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       name="contact_person_phone_number_@{{index}}"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="form-group">
            <label for="contact_person_office_@{{index}}" class="col-sm-2 control-label">
                Chức vụ
            </label>
            <div class="col-sm-10">
                <input name="contact_person_office_@{{index}}" type="text"
                       class="form-control"/>
            </div>
            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
    </div>
</div>