$( document ).ready(function() {
    $('#add-more-experience').on('click', function(e) {
        var template = $('#experience-template').html();
        var index = +$('#experience-count').val() + 1;
        $('#experience-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#experience-list" ).append($(rendered));

        setTimeout(function(){
            $('.candidate-front [name="day_in_month_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="day_in_year_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="day_out_month_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="day_out_year_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="experience_salary_' + index + '"]').select2().addClass('select-style');
        },0);
    });

    $('#add-more-certificate').on('click', function(e) {
        var template = $('#certificate-template').html();
        var index = +$('#certificate-count').val() + 1;
        $('#certificate-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#certificate-list" ).append($(rendered));

        setTimeout(function(){
            $('.candidate-front [name="started_at_month_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="started_at_year_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="ended_at_month_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="ended_at_year_' + index + '"]').select2().addClass('select-style');
            $('.candidate-front [name="graduation_type_' + index + '"]').select2().addClass('select-style');
        },0);
    });

    $('#add-more-languages').on('click', function(e) {
        var template = $('#language-template').html();
        var index = +$('#language-count').val() + 1;
        $('#language-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#language-list" ).append($(rendered));

        setTimeout(function(){
            $('.candidate-front [name="language_id_' + index + '"]').select2().addClass('select-style');
        },0);
    });

    $('#add-more-contact-person').on('click', function(e) {
        var template = $('#contact-person-template').html();
        var index = +$('#contact-person-count').val() + 1;
        $('#contact-person-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#contact-person-list" ).append($(rendered));
    });
});