<?php
if(isset($_POST['btnAdd'])) {

    $classO = new classObj();
    $classM = new classMod();
    $classO->setclassObj($_POST['addIdClass'], $_POST['addClassName'], $_POST['addSchoolYear'],$_POST['addAcademyName']);
    $classM->addClass($classO);
    echo'<META http-equiv="refresh" content="0;URL=class.manage.php">';
}
?>
                <!-- Start add Class-->
                <div id="addClass" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới lớp</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="class.manage.php" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Tên lớp</b></p>
                                        <input type="text" class="form-control" name="addClassName" id="addClassName"
                                               placeholder="Nhập tên lớp" required autofocus>

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Mã lớp</b></p>
                                        <input type="text" class="form-control" name="addIdClass" id="addIdClass"
                                               placeholder="Nhập mã lớp" required autofocus>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Niên khóa</b></p>
                                        <input type="text" class="form-control" name="addSchoolYear" id="addSchoolYear"
                                               placeholder="Nhập niên khóa cho lớp" required autofocus>

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Khoa - Viện</b></p>
                                        <select class="form-control" name="addAcademyName" id="addAcademyName">
                                            <option value="NoneAcademy">--Chọn khoa--</option>
                                            <?php
                                            $listAcademy = array();
                                            $academyMod = new AcademyMod();
                                            $academyMod = new AcademyMod();
                                            $listAcademy = $academyMod->getAcademy();
                                            foreach ($listAcademy as $key => $value){
                                                echo'<option value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
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
                <!-- End add Class-->