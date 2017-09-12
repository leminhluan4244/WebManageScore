<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 11/9/2017
 * Time: 2:06 PM
 */
require_once '../../helper/form.helper.php';
session_start();
if (isSubmit('login')){
	$error = false;
	$username = getPOSTValue('username');
	if (strlen($username) < 4 || !preg_match("/^[a-zA-Z0-9]+$/", $username)){
		$error = true;
		showMessage("Tài khoản không hợp lệ");
	}

	$password = getPOSTValue('password');
	if (strlen($password) < 4){
		$error = true;
		showMessage("Mật khẩu phải ít nhất 4 ký tự");
	}

	$captcha = getPOSTValue('captcha');
	if (strlen($captcha) < 5 || $captcha !== $_SESSION['captcha']){
		$error = true;
		showMessage("Mã xác nhận không đúng");
	}

	if (!$error){
		require_once '../../model/ConnectToSQL.php';
		require_once '../../model/AccountMod.php';
		$accountMod = new AccountMod();
		echo "$username, $password";
		if (!$accountMod->checkLogin($username, $password)){
			showMessage('Đăng nhập thất bại');
		} else {
//					redirect()
			echo "Đăng nhập Ok";
		}
	}
}

?>

<?php require_once '../../view/account/login.header.php'?>
<?php require_once '../../view/account/login.view.php'?>
<?php require_once '../../view/account/login.footer.php'?>
