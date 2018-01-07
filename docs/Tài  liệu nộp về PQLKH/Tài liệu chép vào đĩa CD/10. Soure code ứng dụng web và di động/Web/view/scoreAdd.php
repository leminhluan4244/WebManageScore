<?php
    require_once "../controller/header.php";
?>
<?php
$idLogin = getLoggedAccountId();
/**
 * Gửi dữ liệu qua bên này
 */
#Khoi tao di tuong chua
$power = new PermissionObj();
$powerMod= new PermissionMod();
$power=$powerMod->getPermissionByAccount($idLogin);
#Kiem tra xe thuoc phan quyen nao
$number1=false;
$number2=false;
$number3=false;
foreach ($power as $key => $value){
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho khoa' && $value->getSelected()==1) {
        $number1 =true;
    }
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho lớp' && $value->getSelected()==1) {
        $number2 =true;
    }
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội' && $value->getSelected()==1) {
        $number3 =true;
    }
}
if($number1!=true and $number2!=true and $number3!=true){
//    echo "<script>alert('K có phân quyền')</script>";
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
?>
<div class="container-fluid">
    <!--Start content manage accademy -->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách bảng điểm</h4>
            <?php
                require_once "../controller/scoreAdd/scoreAdd.content.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>
