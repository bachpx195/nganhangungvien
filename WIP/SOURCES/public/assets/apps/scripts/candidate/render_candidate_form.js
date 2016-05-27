$( document ).ready(function() {
    $('#add-more-experience').on('click', function(e) {
        var template = $('#experience-template').html();
        var index = +$('#experience-count').val() + 1;
        $('#experience-count').val(index);
        Mustache.parse(template);   // optional, speeds up future uses

        var rendered = Mustache.render(template, {index: index});
        $( "#experience-list" ).append($(rendered));
    });
});