<form role="form">
    <div class="form-body">
        <div class="form-group col-md-3">
            <label>Tiêu dề hồ sơ</label>
            <input type="text" class="form-control" placeholder="Tiêu đề" id="title">
        </div>
        <div class="form-group col-md-3">
            <label>Ngành nghề</label>
            <select name="current_rank" class="form-control" id="occupation">
                @include('admin.common.options',
                    array(
                        'options' => $dropdownData['occupations'],
                        'defaultName' => 'Tất cả ngành nghề'
                        ))
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Tỉnh thành</label>
            <select name="province" class="form-control" id="province">
                @include('admin.common.options',
                    array(
                        'options' => $dropdownData['provinces'],
                        'defaultName' => 'Tất cả tỉnh thành'
                        ))
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Mức lương</label>
            <select name="salaryGrade" class="form-control" id="salaryGrade">
                @include('admin.common.options',
                    array(
                        'options' => $dropdownData['salaryGrades'],
                        'defaultName' => 'Tất cả mức lương'
                        ))
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Kinh nghiệm</label>
            <select name="yearOfexps" class="form-control" id="yearOfExp">
                @include('admin.common.options',
                    array(
                        'options' => $dropdownData['yearOfexps'],
                        'defaultName' => 'Tất cả kinh nghiệm'
                        ))
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Trình độ</label>
            <select name="degree" class="form-control" id="degree">
                @include('admin.common.options',
                    array(
                        'options' => $dropdownData['degrees'],
                        'defaultName' => 'Tất cả trình độ'
                        ))
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Giới tính</label>
            <select name="sex" class="form-control" id="sex">
                <option value="">Tất cả Giới tính</option>
                <option value="2">Nữ</option>
                <option value="1">Nam</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Ngoại ngữ</label>
            <select name="language" class="form-control" id="language">
                @include('admin.common.options',
                    array(
                        'options' => $dropdownData['languages'],
                        'defaultName' => 'Tất cả ngoại ngữ'
                        ))
            </select>
        </div>

    </div>
    <div class="form-actions">
        <div class="form-group col-md-offset-5 col-md-3">
        <button class="btn blue" id="btnSearchCandidate">Tìm kiếm</button>
        </div>
    </div>
</form>