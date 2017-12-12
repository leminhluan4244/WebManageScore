<?php
if(isset($_POST['btnUpdate'])) {
    $academyO = new AcademyObj();
    $academyM = new AcademyMod();

    $academyO->setAcademyObj($_POST['updateIdAcademy'], $_POST['updateAcademyName']);
    $academyM->updateAcademy($academyO);
    echo'<META http-equiv="refresh" content="0;URL=academy.manage.php">';
}
$academyM = new AcademyMod();
$list = $academyM->getAcademy();
$idAcademy = isset($_GET['idAcademy']) ? $_GET['idAcademy'] : false;
if ($idAcademy) {
    $academyO = new AcademyObj();
    $academyO = $academyM->findAcademyByID($idAcademy);
}
if (!empty($academyO)) {
    echo '
<div id="updateAcademy" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật khoa viện</h4>
            </div>
            <div class="modal-body ">
                <form action="academy.manage.php" method="post">

                    <fieldset class="form-group">
                        <p class="text-left "><b>Tên khoa - viện</b></p>
                        <input type="text" class="form-control" name="updateAcademyName" id="updateAcademyName"
                               placeholder="Nhập tên khoa - viện" value="' . $academyO->getAcademyName() . '" required autofocus>

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mã khoa - viện</b></p>
                        <input type="text" class="form-control" name="updateIdAcademy" id="updateIdAcademy"
                               placeholder="Nhập mã khoa viện" value="' . $academyO->getIdAcademy() . '" readonly required autofocus>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnUpdate">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>';

}
?>
<script>
    $(function () {
        $('#updateAcademy').modal('toggle');
        window.history.pushState({path: 'academy.manage.php'}, '', 'academy.manage.php');
    });
</script>
