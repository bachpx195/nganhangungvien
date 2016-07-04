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

                    var items = $('.job-list').find('.breaking-news').length;
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

        $(document).on('click', '.remove-addition-info-form', function () {
            var formClass = $(this).data('class');
            var divIndex = $(this).data('index');
            var countId = $(this).data('count-id');
            var count = $('.' + formClass).length;
            console.log('countId: ' + countId);
            console.log($('#' + countId).val());
            if (count == 1) {
                resetForm(formClass);
                $('#' + countId).val(count);
            } else {
                $(this).parents('div')[divIndex].remove();
                $('#' + countId).val(count - 1);
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