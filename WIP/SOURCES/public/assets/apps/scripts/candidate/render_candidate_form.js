$( document ).ready(function() {
    $('#add-more-experience').on('click', function(e) {
        var template = $('#experience-template').html();
        var index = +$('#experience-count').val() + 1;
        $('#experience-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#experience-list" ).append($(rendered));
    });

    $('#add-more-certificate').on('click', function(e) {
        var template = $('#certificate-template').html();
        var index = +$('#certificate-count').val() + 1;
        $('#certificate-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#certificate-list" ).append($(rendered));
    });

    $('#add-more-languages').on('click', function(e) {
        var template = $('#language-template').html();
        var index = +$('#language-count').val() + 1;
        $('#language-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#language-list" ).append($(rendered));
    });
});