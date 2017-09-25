
<?php
require_once "../model/Link.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Điểm Rèn Luyệṇ</title>
    <title>Quản Lý Điểm rèn luyện Sinh viên</title>
    <script src="../public/bootstrap/jquery-3.2.1.min.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../public/style/style.css">
    <link rel="icon" href="../public/img/logo.gif">
<!-- phan trang -->
    <style type="text/css">
        #pagination{width:700px; margin-top:15px; text-align:center}
        #pagination a, span.current{ text-decoration:none; padding:0px 10px; border:1px solid #CCC; border-radius:3px; margin-right:3px; color:#090;font-size:13px}
        span.current{ color:#F00; font-weight:bold}
        .red{color:#F00}
    </style>
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
    </div>
</div>
<!--End button top right-->

<!--->
