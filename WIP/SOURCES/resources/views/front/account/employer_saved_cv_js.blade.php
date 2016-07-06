<script type="text/javascript">
    $(document).ready(function () {
        $("#btnShowMoreSavedCv").click(function () {
            var start = document.getElementById("hdfStart").value;
            var limit = document.getElementById('hdfLimit').value;
            $.ajax({
                type: 'get',
                dataType: 'json',
                async: false,
                url: '{{ route('user.saved.profile.loadmore') }}',
                data: {
                    start: start,
                    limit: limit
                },
                success: function (data, textStatus, jqXHR) {
                    if (data.status == true) {
                        var cvList = data.saveCvs;
                        if (cvList.length > 0) {
                            for (var i = 0; i < cvList.length; i++) {
                                var template = $('#template_employer_saved_cv').html();
                                Mustache.parse(template);
                                var newIndex = parseInt(start) + i + 1;
                                var dataRender = {
                                    index: newIndex,
                                    candidateName: cvList[i].candidateName,
                                    created_at: cvList[i].created_at
                                };
                                var rendered = Mustache.render(template, dataRender);
                                $("#table_employer_saved_cv").append(rendered);
                            }
                            var newStart = parseInt(start) + parseInt(limit);
                            $('#hdfStart').val(newStart);
                        }
                        if (cvList.length < parseInt(limit)) {
                            $('.button_load_more').hide();
                        }
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                }
            });
        });

        (function () {
            $(window).bind('scroll', function(ev){

                //get the viewport height. i.e. this is the viewable browser window height
                var clientHeight = document.body.clientHeight,

                //height of the window/document. $(window).height() and $(document).height() also return this value.
                        windowHeight = $(this).outerHeight(),

                //current top position of the window scroll. Seems this *only* works when bound inside of a scoll event.
                        scrollY = $(this).scrollTop();

                if( windowHeight - clientHeight === scrollY ){
                    $("#btnShowMoreSavedCv").trigger('click');
                }
            });
        })();
    });
</script>