<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 18/9/2017
 * Time: 9:42 PM
 */
?>
<?php require_once '../controller/header.php'; ?>
<?php require_once '../controller/permission/function.display.php'; ?>
<?php
 if(empty(getSession("userToken")['permission'])){
  echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
 }
?>
<div class="container main-container">
    <?php require_once '../controller/main/main.user.info.php'; ?>
    <?php require_once '../controller/main/main.panel.php'; ?>
</div>
<?php require_once '../controller/footer.php'; ?>
