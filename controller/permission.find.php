<?php
    #kiểm tra xem một người đăng nhập chưa
	require_once '../helper/account.helper.php';
	require_once '../helper/common.helper.php';

	#chưa thì bắt đăng nhập
	if (!isLogged())
		redirect("../controller/account/account.login.php");

    #nếu đăng nhập rồi thì đem đi xét phân quyền
        {
           $permissionMod = new PermissionMod();
           $power = $permissionMod->selectPower(getLoggedAccountInfo()["permission"]);
           $idLogin = getLoggedAccountId();
//          var_dump($power);
        }
// Lưu ý : để sử dụng được phần này thì các trang phải đặt id tài khoản đăng nhập vào với tên là $idLogin, khi gọi đến trang khác thì truyền nó đi theo bằng post
?>