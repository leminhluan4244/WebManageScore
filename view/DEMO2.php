
<?php
require_once "../controller/header.php";
require_once "../helper/common.helper.php";
require_once "../helper/form.helper.php";
$accountObj = new AccountObj();
$accountMod = new AccountMod();
$academyObj = new AcademyObj();
$academyMod = new AcademyMod();
$classObj = new ClassObj();
$classMod = new ClassMod();
$perObj = new PermissionObj();
$perMod = new PermissionMod();
?>
<?php
$idLogin = getLoggedAccountId();
$power = new PermissionMod();
$power->getPermissionByAccount($idLogin);
foreach ($power as $key => $value){
    if($value->getPower()!='Thêm bảng điểm cộng trừ cho khoa' && $value->getSelected()==1) {
        echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
    }
    if($value->getPower()!='Thêm bảng điểm cộng trừ cho lớp' && $value->getSelected()==1) {
        echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
    }
    if($value->getPower()!='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội' && $value->getSelected()==1) {
        echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
    }

}
?>
<?php

$scoreAddObj = new ScoresAddObj();
$scoreAddMod = new ScoresAddMod();
$idLogin = getLoggedAccountId();
/**
 * Gửi dữ liệu qua bên này
 */
#Khoi tao di tuong chua
$power = new PermissionMod();
$power->getPermissionByAccount($idLogin);
#Kiem tra xe thuoc phan quyen nao
$number1=false;
$number2=false;
$number3=false;
foreach ($power as $key => $value){
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho khoa' && $value->getSelected()==1) {
        $number1 =true;
    }
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho lớp' && $value->getSelected()==1) {
        $number2 =true;
    }
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội' && $value->getSelected()==1) {
        $number3 =true;
    }

}
#la quan ly khoa thi cho xem danh sach hoc sinh khoa
if($number1){
    $tempid = $accountM->getAcademyId($idLogin);
    $temp1 = $accountM->getAccountStudentByAcademy($tempid);

}else $temp1=false;
#la quan ly chi hoi cho xem danh sach chi hoi va khong co nut loc theo lop
if($number2){
    $tempid = $accountM->getCLassId($idLogin);
    $temp2 = $accountM->getAccountStudentByClass($tempid);

} else $temp2=false;
#la quan ly lop hoc cho xem danh sach cac lop
if($number3) {
    $tempid = $accountM->getBrachId($idLogin);
    $temp3 = $accountM->getAccountStudentByBranch($tempid);
} else $temp3=false;
$k=0;
$temp = array();
if($temp1)
    foreach ($temp1 as $key =>$value){
        $temp[$k]=$value;
        $k++;
    }
if($temp2)
    foreach ($temp2 as $key =>$value){
        $temp[$k]=$value;
        $k++;
    }
if($temp3)
    foreach ($temp3 as $key =>$value){
        $temp[$k]=$value;
        $k++;
    }
?>
<div class="container-fluid">
    <!--Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list">

            <h4>Danh sách sinh viên chịu tác động bởi bảng điểm</h4>
            <div class="">
                <div id="student-manage-wrapper">
                    <form action="student.manage.php" method="post" id="manageForm">
                        <table class="table table-bordered table-condensed" id="table-manage-student">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>MSSV</th>
                                <th>Họ và tên</th>
                                <th>Tất cả <br/><input type="checkbox" onClick="toggle(this)"></th>
                            </tr>
                            </thead>
                            <tbody class="text-center align-self-center">
                            <?php

                            foreach ($temp as $order => $student) { ?>
                                <tr>
                                    <td><?php echo $order + 1; ?></td>
                                    <td>
                                        <a href="<?php echo $url . 'id=' . $student->getIdAccount(); ?>">
                                            <?php echo $student->getIdAccount(); ?>
                                        </a>
                                    </td>
                                    <td><?php echo $student->getAccountName(); ?></td>
                                    <td><input type="checkbox" name="xoa[]" id="<?php echo $student->getIdAccount(); ?>"
                                               value="<?php echo $student->getIdAccount(); ?>"/></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </form>
                </div>
                <script language="JavaScript">
                    function toggle(checkall) {
                        checkboxes = document.getElementsByName('xoa[]');
                        for (var i = 0, n = checkboxes.length; i < n; i++) {
                            checkboxes[i].checked = checkall.checked;
                        }
                    }

                    $('#table-manage-student').DataTable();
                </script>
                <!--End list student>

                <!--Start student add button-->
                <div class="text-center">
                    <form action="" class="form-inline">
                        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#saveStudent">
                            <span class="glyphicon glyphicon-ok"></span> Lưu lại
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../public/js/student_action.js"></script>
<?php
require_once "../controller/footer.php";
?>

