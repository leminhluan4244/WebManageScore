/**
 * Created by TanPhat on 21/8/2017.
 */
$(function () {
    $('.academy-action-menu').find('a').on('click', function () {
        $('.academy-action-menu').find('a').removeClass('active');
        $(this).addClass('active');
    });
    $('#btn-list-academy').click(function () {
        $('.academy-action-add').hide();
        $('.academy-action-list').show();
    });

    $('#btn-add-new-academy').click(function () {
        $('.academy-action-list').hide();
        $('.academy-action-add').show();
        return false;
    });
});