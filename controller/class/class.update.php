<?php
if(isset($_POST['btnUpdate'])) {
    $classO = new classObj();
    $classM = new ClassMod();
    $classO->setClassObj($_POST['updateIdClass'], $_POST['updateClassName'],$_POST['updateSchoolYear'], $_POST['updateAcademy']);
    $classM->updateClass($classO);
    echo'<META http-equiv="refresh" content="0;URL=class.manage.php">';
}
$classM = new ClassMod();
$list = $classM->getClass();
$idClass = isset($_GET['idClass']) ? $_GET['idClass'] : false;
if ($idClass) {
    $classO = new ClassObj();
    $classO = $classM->findClassByID($idClass);
}


function checkO($stringA, $temp)
{
    if ($stringA == $temp) {
        return 'selected="selected"';
    }
    return "";
}
if (!empty($classO)) {
    echo '
<div id="updateClass" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật lớp</h4>
            </div>
            <div class="modal-body ">
                <form action="class.manage.php" method="post">
                
                    <fieldset class="form-group">
                        <p class="text-left"><b>Mã lớp</b></p>
                        <input type="text" class="form-control" name="updateIdClass" id="updateIdClass"
                               placeholder="Nhập mã lớp" value="' . $classO->getIdClass() . '" readonly required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Tên lớp</b></p>
                        <input type="text" class="form-control" name="updateClassName" id="updateClassName"
                               placeholder="Nhập tên lớp" value="' . $classO->getClassName() . '" required autofocus>

                    </fieldset>
                    
                    <fieldset class="form-group">
                        <p class="text-left"><b>Niên khóa</b></p>
                        <input type="text" class="form-control" name="updateSchoolYear" id="updateSchoolYear"
                               placeholder="Nhập mã niên khóa" value="' . $classO->getSchoolYear() . '" required autofocus>
                    </fieldset>
                    
                    <fieldset class="form-group">
                        <p class="text-left"><b>Khoa - viện</b></p>
                        <select class="form-control" name="updateAcademy" id="updateAcademy">';
                            $listAcademy = array();
                            $academyMod = new AcademyMod();
                            $academyMod = new AcademyMod();
                            $listAcademy = $academyMod->getAcademy();
                            foreach ($listAcademy as $key => $value){
                                echo'<option '.checkO($value->getIdAcademy(), $classO->getAcademy_idAcademy()).' value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
                            }
                       echo' </select>
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
        $('#updateClass').modal('toggle');
        window.history.pushState({path: 'class.manage.php'}, '', 'class.manage.php');
    });
</script>
