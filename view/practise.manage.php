<?php
require_once '../helper/account.helper.php';
require_once '../helper/common.helper.php';
require_once '../helper/form.helper.php';
if (!isLogged()) {
    redirect("../controller/account/account.login.php");
}
define("IN_PT_MAN", true);
require_once "../controller/header.php";
?>

<?php
if (getInfo("permission") == "Quản lý chi hội" || getInfo("permission") == "Sinh viên")
    require_once '../controller/practise/practise.student.view.php';
?>

<?php
if (getInfo("permission") == "Cố vấn học tập")
    require_once '../controller/practise/practise.adviser.view.php';
?>

<?php
if (getInfo("permission") == "Quản lý khoa")
    require_once '../controller/practise/practise.acad.view.php';
?>

<?php require_once "../controller/footer.php"; ?>
