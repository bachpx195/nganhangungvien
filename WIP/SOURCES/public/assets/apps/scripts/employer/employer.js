$(document).ready(function () {
    $('#admin-employers .set-vip').on('ifChanged', function(event){
        var _this = $(this);
        var id = _this.data('id');
        var vip = 1 - _this.data('vip');
        var url = _this.data('url');

        $.ajax({
            url: url,
            type: 'POST',
            data: {'vip': vip},
            complete: function(reponse) {
                if (reponse.success) {
                    _this.data('vip', vip);
                    if (vip) {
                        var text = "Đã chuyển thành tài khoản VIP!";
                    } else {
                        var text = "Đã bỏ trạng thái VIP!";
                    }

                    swal("Thành công!", text);
                }
            }
        });
    });
});