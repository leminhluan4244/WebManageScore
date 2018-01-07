<?php
require_once "../model/Link.php";
require_once "../helper/account.helper.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Điểm Rèn Luyện</title>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" type="text/css" href="../public/style/dataTables.bootstrap.min.css">
    <script type="text/javascript" src="../public/bootstrap/jquery-3.2.1.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="../public/js/jquery.dataTables.min_2.js"></script>
    <script src="../public/js/dataTables.bootstrap.min.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../public/style/style.css">
    <link rel="icon" href="../public/img/logo.gif">

</head>
<!-- phan trang -->


<body>

<!--Start All body-->
<div class="banner container-fluid">
    <!---->
    <!--Start Logo-->
    <div class="col-sm-2 logo">
        <img src="../public/img/logo.gif" width="70" alt="">
    </div>
    <!--End Logo-->
    <!---->
    <!--Start Name-->
    <div class="banner-title col-sm-8">
        <h4><strong>TRƯỜNG ĐẠI HỌC CẦN THƠ</strong></h4>
        <p><strong>Hệ thống chấm điểm rèn luyện</strong></p>
    </div>
    <!--End Name-->
    <!---->
    <!--Start button top right-->
    <div class="banner-action col-sm-2 text-right">
        <a href="main.php" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-home"></span> Trang chủ</a>
        <a href="../controller/account/account.logout.php" class="btn btn-warning btn-sm">
            <span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>
        <p id="accountInfo"><?php echo getLoggedAccountName() . " (" . getLoggedAccountId() . ")"; ?></p>
    </div>

</div>
<!--End button top right-->

<!--->
