<script src="{{ asset('/assets/default/js/chosen.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/default/js/sweetalert2.js') }}" type="text/javascript"></script>
<link href="{{ asset('/assets/default/css/chosen.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/default/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(document).on('click', '.change-permission', function (e) {
        e.preventDefault();
        var userId = $(this).data('id');
        var roleId = $(this).data('role');
        var currentUserId = $('#_currentUserId').val();
        if (userId == currentUserId) {
            swal("Thông báo", "Bạn không được phép thay đổi quyền của bản thân");
            return;
        }

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
            if (roleId == result) {
                return;
            }
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