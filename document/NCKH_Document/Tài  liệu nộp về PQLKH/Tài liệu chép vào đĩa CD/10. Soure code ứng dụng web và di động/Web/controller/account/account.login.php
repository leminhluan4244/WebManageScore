<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 11/9/2017
 * Time: 2:06 PM
 */

$rootUri = dirname(dirname(__DIR__));
require_once $rootUri . '/helper/common.helper.php';
require_once $rootUri . '/helper/form.helper.php';
require_once $rootUri . '/helper/account.helper.php';
if (isLogged())
	redirect("../../view/main.php");
if (isSubmit('login')){
	$error = false;
	$username = getPOSTValue('username');
	$username = strtolower($username);
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
	$captcha = strtolower($captcha);
	if (strlen($captcha) < 5 || $captcha !== $_SESSION['captcha']){
		$error = true;
		showMessage("Mã xác nhận không đúng");
	}

	if (!$error){
		require_once '../../model/ConnectToSQL.php';
		require_once '../../model/AccountMod.php';
		require_once '../../model/AccountObj.php';
		$accountMod = new AccountMod();
		if (!$accountMod->checkLogin($username, $password)){
			showMessage('Đăng nhập thất bại');
		} else {
			$accountObj = $accountMod->getAccount($username);
			saveAccountInfo($accountObj);
			redirect("../../view/main.php");
		}
	}
}

function saveAccountInfo($account) {
	$info = array(
		"idAccount" => $account->getIdAccount(),
		"name" => $account->getAccountName(),
		"sex" => $account->getSex(),
		"birthday" => $account->getBirthday(),
		"address" => $account->getAddress(),
		"email" => $account->getEmail(),
		"phone" => $account->getPhone(),
		"permission" => $account->getPermission_position()
	);
	login($info);
}

?>

<?php require_once $rootUri . '/view/account/login.header.php'?>
<?php require_once $rootUri . '/view/account/login.view.php'?>
<?php require_once $rootUri . '/view/account/login.footer.php'?>
