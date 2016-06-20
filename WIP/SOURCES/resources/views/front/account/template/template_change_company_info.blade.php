<div class="pull-left w_100" id="template_employer_company_information_content">
    <div class="w_50 floatLeft">
        <div class="list-items mb_0">
            <span class="fwb">Tên công ty: </span>@{{ company_name }}
        </div>
        <div class="list-items mb_0">
            <span class="fwb">Quy mô công ty: </span>@{{ companySize }}
        </div>
        <div class="list-items mb_0">
            <span class="fwb">Địa chỉ công ty: </span>@{{ company_address }}
        </div>
        <div class="list-items mb_0">
            <span class="fwb">Tỉnh/thành phố: </span>@{{ provinceName }}
        </div>
        <div class="list-items mb_0">
            <span class="fwb">Điện thoại cố định: </span>@{{ phone }}
        </div>
        <div class="list-items mb_0">
            <span class="fwb">Website: </span>@{{ website }}
        </div>
    </div>
    <div class="w_33 floatLeft">
        <div class="box_info font14">
            <div class="w_100">
                <div class="w_33 floatLeft"><strong>Ảnh đại diện: </strong></div>
                <div class="fileinput-new custom-thumbnail custom-upload-image floatLeft">
                    <img src="@{{ company_logo }}" height="130"
                         width="170" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="w_100 floatLeft">
        <div class="list-items mb_0">
            <span class="fwb">Giới thiệu về công ty:</span>
        </div>
        <div class="list-items mb_0">
            @{{ company_description }}
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="list-items mb_0">
        <span class="fwb">Địa chỉ công ty: </span>@{{ company_address }}
    </div>
    <div class="list-items mb_0">
        <span class="fwb">Tỉnh/thành phố: </span>@{{ provinceName }}
    </div>
    <div class="list-items mb_0">
        <span class="fwb">Điện thoại cố định: </span>@{{ phone }}
    </div>
    <div class="list-items mb_0">
        <span class="fwb">Website: </span>@{{ website }}
    </div>
    <div class="list-items mb_0">
        <span class="fwb">Giới thiệu về công ty:</span>
    </div>
    <div class="list-items mb_0">
        @{{ company_description }}
    </div>
    <div class="clearfix"></div>
</div>