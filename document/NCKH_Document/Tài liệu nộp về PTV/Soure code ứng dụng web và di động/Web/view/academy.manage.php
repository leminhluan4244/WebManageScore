

<?php
    require_once "../controller/header.php";
    $academyObj = new AcademyObj();
    $academyMod = new AcademyMod();

?>
<?php
if(getSession("userToken")['permission'] != 'Admin'){
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
?>
<div class="container-fluid">
    <!--Start content manage accademy -->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách khoa viện</h4>
            <!--End filter table-->
            <!--Begin table-->
            <?php
                require_once "../controller/academy/academy.content.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>
