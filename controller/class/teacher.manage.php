<?php
if(isset($_POST['btnTeacher'])) {
    $classM = new AccountHasClassMod();
    $classM->changeTeacher();
    echo'<META http-equiv="refresh" content="0;URL=class.manage.php">';
}
$classM = new ClassMod();
$list = $classM->getClass();
$idClass = isset($_GET['changeTeacher']) ? $_GET['changeTeacher'] : false;
if ($idClass) {
    $classO = new ClassObj();
    $classO = $classM->findClassByID($idClass);
}
?>
<div id="updateClass" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật cố vấn</h4>
            </div>
            <div class="modal-body ">
                <form action="class.manage.php" method="post">

                    <fieldset class="form-group">
                        <p class="text-left"><b>Lớp</b></p>
                        <input type="text" class="form-control" name="updateIdClass" id="updateIdClass"
                                value="<?php echo $classO->getIdClass(); ?>" readonly>
                        <input type="text" class="form-control" name="updateClassName" id="updateClassName"
                                value="<?php echo $classO->getClassName(); ?>" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên cố vấn</b></p>
                        <select class="form-control" name="updateIdTeacher" id="updateIdTeacher">';
                            $listTeacher = array();
                            $ = new AcademyMod();
                            $academyMod = new AcademyMod();
                            $listAcademy = $academyMod->getAcademy();
                            foreach ($listAcademy as $key => $value){
                            echo'<option '.checkO($value->getIdAcademy(), $classO->getAcademy_idAcademy()).' value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
                            }
                            echo' </select>
                    </fieldset>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnTeacher">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#updateClass').modal('toggle');
        window.history.pushState({path: 'class.manage.php'}, '', 'class.manage.php');
    });
</script>
