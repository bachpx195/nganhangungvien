$(document).ready(function () {
    $(document).on('click', '.sweet-delete', function (e) {
        var id = $(this).data('id');
        var url = $(this).data('url');
        swal({
                title: 'Bạn có muốn xóa?',
                text: 'Bạn sẽ không thể khôi phục lại được đối tượng này!!',
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d9534f",
                confirmButtonText: "Đồng ý!",
                cancelButtonText: "Hủy!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        complete: function(data) {
                            if (data.status) {
                                window.location.reload();
                            }
                        }
                    });
                }
            }
        );
    });
});