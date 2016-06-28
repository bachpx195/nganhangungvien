<form role="form">
    <div class="form-body">
        <div class="form-group col-md-6">
            <label>Thông tin người dùng</label>
            <input type="text" class="form-control" placeholder="Tên, email, số điện thoại người dùng" id="user_info">
        </div>
        <div class="form-group col-md-3">
            <label>Loại người dùng</label>
            <select name="user_type" class="form-control cSelect" id="user_type">
                <option value="">Chọn loại người dùng</option>
                <option value="admin">Admin</option>
                <option value="employer">Nhà tuyển dụng</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label> &nbsp; </label>
            <button class="btn blue form-control" id="btnSearchUser">Tìm kiếm</button>
        </div>
    </div>
</form>