<?php
if(isset($_POST['btnAdd'])) {

    $academyO = new AcademyObj();
    $academyM = new AcademyMod();
    $academyO->setAcademyObj($_POST['addIdAcademy'], $_POST['addAcademyName']);
    $academyM->addAcademy($academyO);
    echo'<META http-equiv="refresh" content="0;URL=academy.manage.php">';
}
?>
                <!-- Start add academy-->
                <div id="addAcademy" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới khoa viện</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="academy.manage.php" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Tên khoa - viện</b></p>
                                        <input type="text" class="form-control" name="addAcademyName" id="addAcademyName"
                                               placeholder="Nhập tên khoa - viện" required autofocus>

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Mã khoa - viện</b></p>
                                        <input type="text" class="form-control" name="addIdAcademy" id="addIdAcademy"
                                               placeholder="Nhập mã khoa viện" required autofocus>
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
                <!-- End add academy-->