<script type="text/javascript">
    $(document).ready(function() {
        $('.job-change').on("change", function (e) {
            var jobId = $(this).find("option:selected").val();
            var jobName = $(this).find("option:selected").text();

            if ($('.job_input_' + jobId).length == 0) {
                var html = '<div class="breaking-news floatLeft ml6">' +
                        '<span class="title">' + jobName + '</span>' +
                        '<input class="display_none job_input_' + jobId + '" name="expect_jobs[]" type="text" value="' + jobId + '" />' +
                        '<span class="icon icon-xs icon-arrow-org"></span>' +
                        '</div>';
                var items = $('.job-list').find('.breaking-news').length;
                if (items >= 3) {
                    $('#error_nganhnghe').html('Chỉ được phép chọn tối đa 3 ngành nghề!').removeClass('display_none');
                    return false;
                } else {
                    $('#error_nganhnghe').not('.display_none').html('').addClass('display_none');
                }

                if (jobId != undefined && jobId != '' && jobId != '0') {
                    $('.job-list').find('.dangchon-diadiem-lv').after(html);

                    var items = $('.job-list').find('.breaking-news').length;
                    if (items <= 0) {
                        $('.job-list').hide();
                    } else {
                        $('.job-list').show();
                    }
                }
                ;
            }
            ;
        });

        $(document).on('click', '.job-list .breaking-news .icon', function () {
            $(this).parent().remove();
            var items = $('.job-list').find('.breaking-news').length;

            if (items <= 0) {
                $('.job-list').hide();
            } else {
                $('.job-list').show();
            }
            if (items >= 3) {
                $('#error_nganhnghe').html('Chỉ được phép chọn tối đa 3 ngành nghề!').removeClass('display_none');
                return false;
            } else {
                $('#error_nganhnghe').not('.display_none').html('').addClass('display_none');
            }
        });

        $('.address-change').on("change", function (e) {
            var provinceId = $(this).find("option:selected").val();
            var provinceName = $(this).find("option:selected").text();

            if ($('.province_input_' + provinceId).length == 0) {
                var html = '<div class="breaking-news floatLeft ml6">' +
                        '<span class="title">' + provinceName + '</span>' +
                        '<input class="display_none job_input_' + provinceId + '" name="expect_addresses[]" type="text" value="' + provinceId + '" />' +
                        '<span class="icon icon-xs icon-arrow-org"></span>' +
                        '</div>';
                var items = $('.address-list').find('.breaking-news').length;
                if (items >= 10) {
                    $('#address-error').html('Chỉ được phép chọn tối đa 10 tỉnh thành!').removeClass('display_none');
                    return false;
                } else {
                    $('#address-error').not('.display_none').html('').addClass('display_none');
                }

                if (provinceId != undefined && provinceId != '' && provinceId != '0') {
                    $('.address-list').find('.dangchon-diadiem-lv').after(html);

                    var items = $('.address-list').find('.breaking-news').length;
                    if (items <= 0) {
                        $('.address-list').hide();
                    } else {
                        $('.address-list').show();
                    }
                }
                ;
            }
            ;
        });

        $(document).on('click', '.address-list .breaking-news .icon', function () {
            $(this).parent().remove();
            var items = $('.address-list').find('.breaking-news').length;

            if (items <= 0) {
                $('.address-list').hide();
            } else {
                $('.address-list').show();
            }
            if (items >= 10) {
                $('#address-error').html('Chỉ được phép chọn tối đa 10 tỉnh thành!').removeClass('display_none');
                return false;
            } else {
                $('#address-error').not('.display_none').html('').addClass('display_none');
            }
        });


        $(document).on('ifChecked ifUnchecked', '#experience_is_current_job', function (event) {
            console.log('experience_is_current_job---');
            var i = document.getElementById('experience_num').value;
            var current_job = '#current_job_' + i;
            var date_out1 = '#date_out1_' + i;
            var date_out2 = '#date_out2_' +i;
            console.log(current_job);
            console.log(date_out1);
            console.log(date_out2);
           if (event.type == 'ifChecked') {
               console.log('check');
                $(current_job).removeClass('display_none');
                $(date_out1).addClass('display_none');
                $(date_out2).addClass('display_none');

            }  else {
                console.log('uncheck');
                $(current_job).addClass('display_none');
                $(date_out1).removeClass('display_none');
                $(date_out2).removeClass('display_none');
            }
        });

        $(document).on('click', '.remove-addition-info-form', function () {
            var formClass = $(this).data('class');
            var divIndex = $(this).data('index');
            var count = $('.' + formClass).length;
            if (count == 1) {
                resetForm(formClass);
            } else {
                $(this).parents('div')[divIndex].remove();
            }
        });

        function resetForm(formClass) {
            // reset input, text area
            $('.' + formClass).find("input[type=text], textarea").val("");
            // reset select2
            $('.' + formClass + ' select').select2('val', '')
        }

    });
</script>