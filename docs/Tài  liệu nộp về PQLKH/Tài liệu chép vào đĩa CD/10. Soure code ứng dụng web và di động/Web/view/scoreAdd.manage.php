
<?php
require_once "../controller/header.php";
require_once "../helper/common.helper.php";
require_once "../helper/form.helper.php";
?>
<?php
if(isset($_POST['luu'])) {
    $ScoreId=$_GET['idScore'];
    $scoresdeleteMT = new ScoresAddHasAccountMod();
    $scoresdeleteMT->deleteAll($ScoreId);
    foreach ($_POST['luu'] as $key=> $value) {
        $scoresdeleteMT->addTable($ScoreId,$value);
    }
    echo'<META http-equiv="refresh" content="0;URL=scoreAdd.php">';
}
?>
<?php
    if(isset($_GET['idScore'])){
        $ScoreId =  $_GET['idScore'];
    }
    else {
        echo '<script>window.location.assign("scoreAdd.php")</script>';
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
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
#la quan ly khoa thi cho xem danh sach hoc sinh khoa
$accountM = new AccountMod();
$accountO = new AccountObj();
if($number1){
    $tempid1 = $accountM->getAcademyId($idLogin);
    $temp1 = $accountM->getAccountStudentByAcademy($tempid1);
}else $temp1=false;
#la quan ly chi hoi cho xem danh sach chi hoi va khong co nut loc theo lop
if($number2){
    $tempid2 = $accountM->getCLassId($idLogin);
    if($tempid2){
        $temp2= array();
        for($i=0; $i<count($tempid2);$i++){
            $temp2 =  array_merge($temp2,$accountM->getAccountStudentByClass($tempid2[$i]));
        }
    }

} else $temp2=false;
#la quan ly lop hoc cho xem danh sach cac lop
if($number3) {
    $tempid3 = $accountM->getBranchId($idLogin);
    if($tempid3!=0) $temp3 = $accountM->getAccountStudentByBranch($tempid3[0]);
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
<form action="scoreAdd.manage.php?idScore=<?php echo $ScoreId;?>" method="post" id="manageForm">
<div class="container-fluid">
    <!--Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list">
            <h4>Danh sách sinh viên chịu tác động bởi bảng điểm
                <?php $sc= new ScoresAddHasAccountMod();
                    echo $sc->getNameTable($ScoreId);
                ?></h4>
            <div class="">
                <div id="student-manage-wrapper">
                        <table class="table table-bordered table-condensed" id="table-manage-student">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>MSSV</th>
                                <th>Họ và tên</th>
                                <th>Lớp</th>
                                <th>Khóa học</th>
                                <th>Tất cả <br/><input type="checkbox" onClick="toggle(this)"></th>
                            </tr>
                            </thead>
                            <tbody class="text-center align-self-center">
                            <?php

                            foreach ($temp as $order => $student) { ?>
                                <tr>
                                    <td><?php echo $order + 1; ?></td>
                                    <td>
                                            <?php echo $student->getIdAccount(); ?>
                                    </td>
                                    <td><?php echo $student->getAccountName(); ?></td>
                                    <td><?php
                                        $classM = new ClassMod();
                                        $listClass = $accountM->getClassId($student->getIdAccount());
                                        if($listClass>0)
                                        for ($i=0;$i<count($listClass);$i++){
                                            $classO = new ClassObj();
                                            $classO = $classM->findClassByID($listClass[$i]);
                                            echo  $classO->getIdClass()." - ";
                                            echo $classO->getClassName()."<br>";
                                        }
                                       ?></td>
                                    <td><?php
                                    $classM = new ClassMod();
                                    $listClass = $accountM->getClassId($student->getIdAccount());
                                    if($listClass>0)
                                    for ($i=0;$i<count($listClass);$i++){
                                        $classO = new ClassObj();
                                        $classO = $classM->findClassByID($listClass[$i]);
                                        echo $classO->getSchoolYear()."<br>";
                                    }
                                    ?></td>
                                    <td><input type="checkbox" name="luu[]" id="<?php echo $student->getIdAccount(); ?>"
                                               value="<?php echo $student->getIdAccount(); ?>"
                                            <?php
                                            $check =  new ScoresAddHasAccountMod();
                                            if($check->getCheckTable($ScoreId,$student->getIdAccount()))
                                                echo ' checked ';
                                           ?>
                                        />
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('luu[]');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = checkall.checked;
        }
    }

    $('#table-manage-student').DataTable();
</script>
<div class="container main-academy-container">
    <div class="academy-action-list text-center">
    <form action="scoreAdd.manage.php" class="form-inline">
         <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#deleteScore">
                <span class="glyphicon glyphicon-trash"></span> Lưu
         </a>
    </form>
    </div>
</div>

<!--Start save Class-->
<div id="deleteScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Lưu lại danh sách sinh viên cho bảng điểm này</h4>
            </div>
            <div class="modal-body">
                <h4>Bạn muốn thay đổi trạng thái sinh viên chịu tác động bởi bảng điểm!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                <div class="modal-footer">
                    <input type="hidden" name="deleteClass" id="deleteClass">
                    <button type="submit" name="deleteYes" id="deleteYes" onclick="submitform();" class="btn btn-primary">Đồng ý</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function submitform() {
        $('#manageForm').submit();
    }
</script>
<!--End delete Class-->
<script src="../public/js/student_action.js"></script>
<?php
require_once "../controller/footer.php";
?>

