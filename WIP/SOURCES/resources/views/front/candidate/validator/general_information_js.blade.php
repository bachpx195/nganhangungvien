<script>
    var validator = new FormValidator('general_information', [{
        name: 'cv_title',
        display: 'required',
        rules: 'required',
    }, {
        name: 'email',
        rules: 'required|valid_email'
    }, {
        name: 'full_name',
        rules: 'required'
    }, {
        name: 'phone_number',
        rules: 'required|alpha_numeric'
    }, {
        name: 'current_rank',
        rules: 'required'
    }, {
        name: 'expect_rank',
        rules: 'required'
    }, {
        name: 'job',
        rules: 'required'
    }, {
        name: 'province_id',
        rules: 'required'
    }, {
        name: 'level',
        rules: 'required'
    }, {
        name: 'experience_years',
        rules: 'required'
    }, {
        name: 'employment_status',
        rules: 'required'
    }, {
        name: 'expect_salary',
        rules: 'required'
    }, {
        name: 'exigency',
        rules: 'required'
    }, {
        name: 'job_goal',
        rules: 'required'
    },{
        name: 'birthday_year',
        rules: 'required'
    }, {
        name: 'birthday_month',
        rules: 'required'
    }, {
        name: 'birthday_day',
        rules: 'required'
    }], function(errors, event) {
        //Hidden all validate messages
        $('#general-infomation .validator-message').addClass('display_none');
        var birthday = ['birthday_year', 'birthday_month', 'birthday_day'];
        if (errors.length > 0) {
            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                $("#general-infomation .validator-message[data-name='" + errors[i].name +"']").removeClass('display_none');
                if (birthday.indexOf(errors[i].name) > -1) {
                    console.log('errors[i].name----');
                    console.log(errors[i].name);
                    console.log(birthday);
                    $("#general-infomation .validator-message[data-name='birthday']").removeClass('display_none');
                }
            }
        }
    });
</script>