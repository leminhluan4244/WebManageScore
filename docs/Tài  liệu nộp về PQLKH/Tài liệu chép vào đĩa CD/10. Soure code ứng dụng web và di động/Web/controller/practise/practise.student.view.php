<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 16/10/2017
 * Time: 2:34 PM
 */
if (!defined("IN_PT_MAN"))
    die("Bad request!");

if (!(getInfo("permission") == "Quản lý chi hội" || getInfo("permission") == "Sinh viên"))
    redirect("main.php");
$studentId = getLoggedAccountId();
?>
<h4 class="text-center text-primary">Danh sách điểm rèn luyện đã chấm</h4>

<?php require_once '../controller/practise/practise.detail.view.php'; ?>