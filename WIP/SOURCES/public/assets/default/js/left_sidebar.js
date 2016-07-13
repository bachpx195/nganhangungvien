$(document).ready(function () {
    $(document).scroll(function () {
        var y = $(document).scrollTop(),
            header = $("#left-sidebar");

        if (y >= 300) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
        }
    });
});