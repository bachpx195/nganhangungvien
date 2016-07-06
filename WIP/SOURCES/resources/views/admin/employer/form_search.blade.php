<form role="form">
    <div class="form-body">
        <div class="form-group col-md-3">
            <label>Tên công ty</label>
            <input type="text" class="form-control" placeholder="Tên công ty" id="company_name">
        </div>
        <div class="form-group col-md-3">
            <label>Liên hệ</label>
            <input type="text" class="form-control" placeholder="Tên, Email, SĐT" id="contact">
        </div>
        <div class="form-group col-md-3">
            <label>Tỉnh thành</label>
            <select name="province" class="form-control" id="province">
                @include('admin.common.options',
                    array(
                        'options' => $provinces,
                        'defaultName' => 'Tất cả tỉnh thành'
                        ))
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" placeholder="Địa chỉ" id="company_address">
        </div>
        <div class="form-group col-md-3">
            <label>Kích hoạt</label>
            <select name="status" class="form-control" id="status">
                <option value="">Tất cả</option>
                <option value="0">Chưa kích hoạt</option>
                <option value="1">Đã kích hoạt</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>Loại tài khoản</label>
            <select name="vip" class="form-control" id="vip">
                <option value="">Tất cả</option>
                <option value="0">Tài khoản thường</option>
                <option value="1">Tài khoản VIP</option>
            </select>
        </div>

    </div>
    <div class="form-actions">
        <div class="form-group col-md-offset-5 col-md-3">
        <button class="btn blue" id="btnSearch">Tìm kiếm</button>
        </div>
    </div>
</form>