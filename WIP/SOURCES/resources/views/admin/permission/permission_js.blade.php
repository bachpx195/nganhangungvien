<script type="text/javascript">
    $(document).on('click', '.change-permission', function (e) {
        e.preventDefault();
        var userId = $(this).data('id');
        var roleId = $(this).data('role');

        // set current role
        $('#modal-content option').removeAttr('selected');
        $("#modal-content option").each(function () {
            if ($(this).val() == roleId)
                $(this).attr("selected", "selected");
        });
        // create popup
        var s = $('#modal-content').clone();
        s.find('.chosen').addClass('swal');
        swal({
            html: s.html(),
            title: 'Chọn quyền',
            preConfirm: function () {
                return new Promise(function (resolve) {
                    resolve($('.chosen.swal').val());
                });
            }
        }).then(function (result) {
            $.ajax({
                url: '{{ route('admin.permission.update') }}',
                type: 'POST',
                data: {
                    'userId': userId,
                    'roleId': result
                },
                complete: function (data) {
                    if (data.status) {
                        swal("Thông báo", "Phân quyền thành công");
                        window.location.reload();
                    } else {
                        swal("Thông báo", "Đã có lỗi xảy ra. Vui lòng thử lại");
                    }
                }
            });
        });
    });
</script>