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
                if (result == 'LOGIN') {
                    must_login('Lưu việc làm');
                    return false;
                }
                else if (result == 'DONE') {
                    $("[data-candidateId='" + candidateId + "']").each(function () {
                        $(this).toggleClass('active');
                        var star = $(this).find('.icon-star-line').toggleClass('active');
                    });
                }
            }
        });
    }
</script>