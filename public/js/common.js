$(function () {
    if ($(window).width() <= 768){
        $('#user-info').addClass('collapse');
    }
    $(window).resize(function () {
        if ($(window).width() <= 768){
            $('#user-info').addClass('collapse');
        } else
            $('#user-info').removeClass('collapse');
    });
});