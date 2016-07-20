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
            error: function (jqXHR, status, errorThrown) {
                if (jqXHR.status == 401) {
                    alert('Bạn phải đăng nhập để lưu hồ sơ');
                } else {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                }
            }
        });
    }

    function viewContact(candidateId) {
        $.ajax({
            type: 'post',
            dataType: 'json',
            async: false,
            url: '{{ route('user.view.profile') }}',
            data: {
                candidateId: candidateId
            },
            cache: false,
            success: function (res) {
                if(res.error == 0){
                    var html = "<span><strong>Số địa thoại :</strong></span> " + res.data.phone_number
                            + "<br/><span><strong>Địa chỉ :</strong></span> " + res.data.address
                            + "<br/><span><strong>Email :</strong></span> <a>" + res.data.email + "</a>"

                    $('#candidateContact').html(html);

                    if(res.data.attach_cv){
                        var attactFrame = '<iframe name="2" width="99%" height="800px"'
                        + 'src="' + res.data.attach_cv +'" frameborder="0">'
                        + '</iframe>';

                        $('#candidateAttact').html(attactFrame);
                    }

                }else{
                    //swal("Thông báo!", "Tài khoản của bạn không đủ. Hãy đăng ký tài khoản VIP hoặc nạp tiền để sử dụng dịch vụ!")
                    popupPayment_open();
                }
            },
            error: function (jqXHR, status, errorThrown) {
                if (jqXHR.status == 401) {
                    alert('Bạn phải đăng nhập để xem liên hệ');
                } else {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                }
            }
        });
    }
</script>