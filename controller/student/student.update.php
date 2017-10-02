<?php

if(isset($_POST['btnUpdate'])) {
    $studentO = new AccountObj();
    $studentM = new AccountMod();
    $studentO->setAccountObj($_POST['updateIdAccount'], $_POST['updateAccountName'], $_POST['updateBirthday'], $_POST['updateAddress'], $_POST['updateSex'], $_POST['updatePhone'], $_POST['updateEmail'],'123', $_POST['updatePermission_position']);
    $studentM->updateAccount($studentO);
    $academyTemp = new AccountHasAcademyMod();
    $academyTemp->deleteAccountHasAcademy($_POST['updateIdAccount']);
    $academyTemp->addAccountHasAcademy($_POST['updateIdAccount'],$_POST['updateAcademyName']);
    $classTemp = new AccountHasClassMod();
    $classTemp->deleteAccountHasClass($_POST['updateIdAccount']);
    $classTemp->addAccountHasClass($_POST['updateIdAccount'],$_POST['updateClassName']);
    echo'<META http-equiv="refresh" content="0;URL=student.manage.php">';
}
if(isset($_POST['idAcc'])){

    $tempIDAcademy = $studentMT->getAcademy($_POST['idAcc']);
    $studentMT = new AccountMod();
    $studentOT = $studentMT->findAccountByID($_POST['idAcc']);
}


function checkO($stringA, $temp)
{
    if ($stringA == $temp) {
        return 'selected="selected"';
    }
    return "";
}
?>

            <!-- Start update student-->
            <div id="updateStudent" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
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
                                           value="<?php echo $studentOT['accountName']?>">

                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>MSSV</b></p>
                                    <input type="text" class="form-control" name="updateIdAccount" id="updateIdAccount"
                                           value="<?php echo $studentOT['accountName']?>">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Ngày Sinh</b></p>
                                    <input type="date" class="form-control" name="updateBirthday" id="updateBirthday"
                                           placeholder="Ngày Sinh">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Địa chỉ</b></p>
                                    <input type="text" class="form-control" name="updateAddress" id="updateAddress"
                                           placeholder="Ngày Sinh">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Giới tính</b></p>
                                    <select class="form-control" name=updateSex" id="updateSex">
                                        <option value="male">Nam</option>
                                        <option value="female">Nữ</option>
                                    </select>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Điện thoại</b></p>
                                    <input type="number" class="form-control" name="updatePhone" id="updatePhone"
                                           placeholder="Nhập số điện thoại">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Email</b></p>
                                    <input type="mail" class="form-control" name="updateEmail" id="updateEmail"
                                           placeholder="Nhập email" value="@student.ctu.edu.vn">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Khoa - Viện</b></p>
                                    <select class="form-control" name="updateAcademyName" id="updateAcademyName">
                                        <option value="NoneAcademy">--Chọn khoa--</option>
										<?php
										$listAcademy = array();
										$listAcademy = $academyMod->getAcademy();
										foreach ($list as $key => $value){
											echo'<option'.checkO($tempIDAcademy,$value->getIdAcademy()).' value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
										}
										?>
                                    </select>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Lớp</b></p>
                                    <select class="form-control" name="updateClassNamer" id="updateClassName">
                                        <option value="NoneClass">--Chọn theo Lớp--</option>
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
                        getClassByAcademy(acaId, "updateClassName");
                    }) ;
                });
                $(function () {
                    $('#updateStudent').modal('toggle');
                    window.history.pushState({path: 'student.manage.php'}, '', 'student.manage.php');
                });
            </script>