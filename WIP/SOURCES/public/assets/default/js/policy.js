$(document).on('click', '.check-policy', function (e) {
	if ($('#policy-checkbox').prop('checked')) {
		//do nothing
	} else {
		swal("Lỗi", "Vui lòng chọn đồng ý với điều khoản sử dụng", "error");
	}
});