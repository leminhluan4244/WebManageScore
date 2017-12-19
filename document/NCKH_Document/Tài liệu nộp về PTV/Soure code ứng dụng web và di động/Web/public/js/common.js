$(function () {
    if ($(window).width() <= 768){
        $('#user-info').hide();
    }
    $(window).resize(function () {
        if ($(window).width() <= 768){
            $('#user-info').hide();
        } else
            $('#user-info').show();
    });

    $('#toggle-user-info').click(function () {
        $('#user-info').fadeToggle(100);
        return false;
    });
});