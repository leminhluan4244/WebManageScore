<?php
if(isset($_POST['btnAdd_staff'])) {

    $stO = new AccountObj();
    $stM = new AccountMod();
    $stO->setAccountObj($_POST['addIdAccount'], $_POST['addAccountName'], $_POST['addBirthday'], $_POST['addAddress'], $_POST['addSex'], $_POST['addPhone'], $_POST['addEmail'],'1234', $_POST['addPermission_position']);
    $stM->addAccount($stO);

    $objAcademy = new AcademyObj();
    $objAcademy->setIdAcademy($_POST['addAcademyName']);
    $mod = new AccountHasAcademyMod();
    $mod->addStaffHasAcademy($stO,$objAcademy);
    echo'<META http-equiv="refresh" content="0;URL=staff.manage.php">';




}
?>
<!-- Start add staff-->
<div id="addStaff" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm mới cán bộ</h4>
            </div>
            <div class="modal-body ">
                <form action="staff.manage.php" method="post">

                    <fieldset class="form-group">
                        <p class="text-left"><b>MSCB</b></p>
                        <input type="text" class="form-control" name="addIdAccount" id="addIdAccount"
                               placeholder="Nhập mã số cán bộ" required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Họ và Tên</b></p>
                        <input type="text" class="form-control" name="addAccountName" id="addAccountName"
                               placeholder="Nhập tên cán bộ" required autofocus>

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Ngày Sinh</b></p>
                        <input type="date" class="form-control" name="addBirthday" id="addBirthday"
                               placeholder="Ngày Sinh" required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Địa chỉ</b></p>
                        <input type="text" class="form-control" name="addAddress" id="addAddress"
                               placeholder="Địa chỉ" required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Giới tính</b></p>
                        <select class="form-control" name="addSex" id="addSex">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Điện thoại</b></p>
                        <input type="number" class="form-control" name="addPhone" id="addPhone"
                               placeholder="Nhập số điện thoại" required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Email</b></p>
                        <input type="mail" class="form-control" name="addEmail" id="addEmail"
                               placeholder="Nhập email" value="@ctu.edu.vn" required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Khoa - Viện</b></p>
                        <select class="form-control" name="addAcademyName" id="addAcademyName">
                            <option value="NoneAcademy">--Chọn khoa--</option>
                            <?php
                            $academyObj = new AcademyObj();
                            $academyMod = new AcademyMod();
                            $listAcademy = $academyMod->getAcademy();
                            if(gettype($listAcademy)!='integer')
                            foreach ($list as $key => $value){
                                echo'<option value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
                            }
                            ?>
                        </select>
                    </fieldset>


                    <fieldset class="form-group">
                        <p class="text-left"><b>Phân quyền</b></p>
                        <select class="form-control" name="addPermission_position" id="addPermission_position" >
                            <option value="NonePer">--Chọn phân quyền--</option>
                            <?php
                            $perOT = new PermissionObj();
                            $perMT = new PermissionMod();
                            $listPermissionM = $perMT->getPermission();
                            foreach ($listPermissionM as $key => $value){
                                echo'<option value="'.$value->getPosition().'">'.$value->getPosition().'</option>';
                            }

                            ?>
                        </select>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnAdd_staff">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End add staff-->
<script src="../public/js/staff_action.js"></script>
