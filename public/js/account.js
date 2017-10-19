$(function () {
    $('#form-login').submit(function () {
        var username = $('[name="username"]');
        if ($(username).val().trim().length < 4 ||
            !/^[a-zA-Z0-9]+$/.test($(username).val())){
            alert("Tên đăng nhập phải tối thiểu 4 ký tự số hoặc chữ cái");
            $(username).focus();
            return false;
        }
        var password = $('[name="password"]');
        if ($(password).val().trim().length < 4){
            alert("Mật khẩu phải tối thiểu 4 ký tự");
            $(password).focus();
            return false;
        }
        var captcha = $('[name="captcha"]');
        if ($(captcha).val().trim().length < 5){
            alert("Hãy nhập đúng mã xác nhận");
            $(captcha).focus();
            return false;
        }
        return true;
    });
    $('#captcha').click(function () {
        $(this).attr('src', '../../controller/account/security/captcha.img.php?a=' + Math.random());
    });
});