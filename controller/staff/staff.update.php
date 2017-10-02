<?php

if(isset($_POST['btnUpdate'])) {
    $staffO = new AccountObj();
    $staffM = new AccountMod();

    $staffO->setAccountObj($_POST['updateIdAccount'], $_POST['updateAccountName'], $_POST['updateBirthday'], $_POST['updateAddress'], $_POST['updateSex'], $_POST['updatePhone'], $_POST['updateEmail'],'123', $_POST['updatePermission_position']);
    $staffM->updateStaff($staffO);
    var_dump($staffO);
    $academyTemp = new AccountHasAcademyMod();
    $academyTemp->deleteAccountHasAcademy($_POST['updateIdAccount']);
    $academyTemp->addAccountHasAcademy($_POST['updateIdAccount'],$_POST['updateAcademyName']);


    // echo'<META http-equiv="refresh" content="0;URL=student.manage.php">';
}
if(isset($_GET['idAcc'])){
    $staffMT = new AccountMod();
    $staffOT = $staffMT->findAccountByID($_GET['idAcc']);

    $tempIDAcademy = $staffMT->getAcademyId($_GET['idAcc']);
    $tempIDPermission = $staffMT->getPermission($_GET['idAcc']);
    echo "
    <script> 
        $(function() {
            $('#updateStaff').modal('toggle');
        });
    </script>";
}


function checkO($stringA, $temp)
{
    if ($stringA == $temp) {
        return 'selected="selected"';
    }
    return "";
}
?>
<div id="updateStaff" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật sinh viên</h4>
            </div>
            <div class="modal-body ">
                <form action="#" method="post">

                    <fieldset class="form-group">
                        <p class="text-left "><b>Họ và Tên</b></p>
                        <input type="text" class="form-control" name="updateAccountName" id="updateAccountName"
                               value="<?php echo $staffOT['accountName']?>">

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>MSSV</b></p>
                        <input type="text" class="form-control" name="updateIdAccount" id="updateIdAccount"
                               value="<?php echo $staffOT['idAccount']?>" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Ngày Sinh</b></p>
                        <input type="date" class="form-control" name="updateBirthday" id="updateBirthday"
                               placeholder="Ngày Sinh" value="<?php echo $staffOT['birthday']?>">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Địa chỉ</b></p>
                        <input type="text" class="form-control" name="updateAddress" id="updateAddress"
                               placeholder="Ngày Sinh" value="<?php echo $staffOT['address']?>">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Giới tính</b></p>
                        <select class="form-control" name=updateSex" id="updateSex">
                            <option <?php if($staffOT['sex']=='Nam') echo 'selected="selected"'; ?> value="Nam" >Nam</option>
                            <option <?php if($staffOT['sex']=='Nữ'); echo 'selected="selected"'?> value="Nữ">Nữ</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Điện thoại</b></p>
                        <input type="number" class="form-control" name="updatePhone" id="updatePhone"
                               placeholder="Nhập số điện thoại" value="<?php echo $staffOT['phone']; ?>">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Email</b></p>
                        <input type="mail" class="form-control" name="updateEmail" id="updateEmail"
                               placeholder="Nhập email" value="<?php echo $staffOT['email']; ?>">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Khoa - Viện</b></p>
                        <select class="form-control" name="updateAcademyName" id="updateAcademyName">
                            <option value="NoneAcademy">--Chọn khoa--</option>
                            <?php
                            $listAcademy = array();
                            $listAcademy = $academyMod->getAcademy();
                            foreach ($listAcademy as $key => $value){

                                echo'<option'.checkO($tempIDAcademy, $value->getIdAcademy()).' value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <p class="text-left"><b>Phân quyền</b></p>
                        <select class="form-control" name="addPermission_position" id="addPermission_position">
                            <option value="NonePer">--Chọn phân quyền--</option>
                            <?php
                            $listPermissionM = array();
                            $listPermissionM = $perMod->getPermission();
                            foreach ($listPermissionM as $key => $value){
                                echo'<option value="'.$value->getPosition().'">'.$value->getPosition().'</option>';
                            }
                            ?>
                        </select>
                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-warning" name="btnUpdate">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End update student-->

<script>
    $(function(){
        $('#updateAcademyName').change(function(){
            var acaId = $(this).val();
//            getClassByAcademy(acaId, "updateClassName");
        }) ;
    });
    $(function () {
        window.history.pushState({path: 'staff.manage.php'}, '', 'staff.manage.php');
    });
</script>