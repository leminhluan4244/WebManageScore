<?php
if(isset($_POST['btnAdd'])) {

    $studentO = new AccountObj();
    $studentM = new AccountMod();
    $studentO->setAccountObj($_POST['addIdAccount'], $_POST['addAccountName'], $_POST['addBirthday'], $_POST['addAddress'], $_POST['addSex'], $_POST['addPhone'], $_POST['addEmail'],'123', $_POST['addPermission_position']);
    $studentM->addAccount($studentO);
    echo'<META http-equiv="refresh" content="0;URL=student.manage.php">';
}
?>
                <!-- Start add student-->
                <div id="addStudent" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới sinh viên</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="student.manage.php" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Họ và Tên</b></p>
                                        <input type="text" class="form-control" name="addAccountName" id="addAccountName"
                                               placeholder="Nhập tên sinh viên">

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>MSSV</b></p>
                                        <input type="text" class="form-control" name="addIdAccount" id="addIdAccount"
                                               placeholder="Nhập mã số sinh viên">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Ngày Sinh</b></p>
                                        <input type="date" class="form-control" name="addBirthday" id="addBirthday"
                                               placeholder="Ngày Sinh">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Địa chỉ</b></p>
                                        <input type="text" class="form-control" name="addAddress" id="addAddress"
                                               placeholder="Địa chỉ">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Giới tính</b></p>
                                        <select class="form-control" name="addSex" id="addSex">
                                            <option value="male">Nam</option>
                                            <option value="female">Nữ</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Điện thoại</b></p>
                                        <input type="number" class="form-control" name="addPhone" id="addPhone"
                                               placeholder="Nhập số điện thoại">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Email</b></p>
                                        <input type="mail" class="form-control" name="addEmail" id="addEmail"
                                               placeholder="Nhập email" value="@student.ctu.edu.vn">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Khoa - Viện</b></p>
                                        <select class="form-control" name="addAcademyName" id="addAcademyName">
                                            <option value="NoneAcademy">--Chọn khoa--</option>
                                            <?php
                                                $listAcademy = array();
                                                $listAcademy = $academyMod->getAcademy();
                                                foreach ($list as $key => $value){
                                                    echo'<option value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
                                                }
                                            ?>
                                        </select>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Lớp</b></p>
                                        <select class="form-control" name="addClassName" id="addClassName">
                                            <option value="NoneClass">--Chọn Lớp--</option>
                                            <?php
                                            $listClass = array();
                                            $listClass = $classMod->getClass();
                                            foreach ($listClass as $key => $value){
                                                echo'<option value="'.$value->getIdClass().'">'.$value->getClassName().'</option>';
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
                                        <button type="submit" class="btn btn-primary" name="btnAdd">Thêm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End add student-->
<?php echo "<script>var baseUrl = '$baseUrl';</script>"; ?>
<script src="<?php echo $baseUrl ?>/public/js/student_action.js"></script>
