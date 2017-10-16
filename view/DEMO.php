<?php
    require_once "../controller/header.php";
?>
<?php
//if(getSession("userToken")['permission'] != 'Admin'){
//    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
//}
//?>
<div class="container-fluid">
    <!--Start content manage accademy -->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách bảng điểm</h4>
            <?php
                require_once "../controller/DEMO/DEMO.content.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>
