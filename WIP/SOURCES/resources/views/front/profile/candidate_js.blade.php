<script type="text/javascript">
    function luuhoso(id) {
        var candidateId = $(id).attr('data-candidateId');
        $.ajax({
            type: 'post',
            dataType: 'json',
            async: false,
            url: '{{ route('user.saved.profile') }}',
            data: {
                candidateId: candidateId
            },
            cache: false,
            success: function (result) {
                if (result.data == 'LOGIN') {
                    alert('Bạn phải đăng nhập để lưu hồ sơ');
                }
                else if (result.data == 'DONE') {
                    $("[data-candidateId='" + candidateId + "']").each(function () {
                        $(this).toggleClass('active');
                        var star = $(this).find('.icon-star-line').toggleClass('active');
                    });
                    if (result.type == 'saved') {
                        swal("Lưu hồ sơ thành công");
                    } else {
                        swal("Hủy lưu hồ sơ thành công");
                    }
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    }
</script>