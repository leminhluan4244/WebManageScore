<?php
if (isset($_POST['btnTeacher'])) {
    $classTemp = new AccountHasClassMod();
    $teacher = $classTemp->getTeacher($_POST['updateIdClass']);
    if(gettype($teacher)!='integer')
    {
        $classM = new AccountHasClassMod();
        $classM->changeTeacher($_POST['updateIdTeacher'],$teacher->getIdAccount(),$_POST['updateIdClass']);
    } else{
        $classM = new AccountHasClassMod();
        $classM->addAccountHasClass($_POST['updateIdTeacher'],$_POST['updateIdClass']);
    }

      echo'<META http-equiv="refresh" content="0;URL=class.manage.php">';
}

$idClass = isset($_GET['changeTeacher']) ? $_GET['changeTeacher'] : false;
if ($idClass) {
    $classO = $classM->findClassByID($idClass);
    echo "<script>
    $(function () {
        $('#updateTeacher').modal('toggle');
        window.history.pushState({path: 'class.manage.php'}, '', 'class.manage.php');
    });
    </script>";
    if ($classO) {
        echo '
<div id="updateTeacher" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
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
                                value="' . $classO->getIdClass() . '" readonly>
                        <input type="text" class="form-control" name="updateClassName" id="updateClassName"
                                value="' . $classO->getClassName() . '" readonly>
                    </fieldset>
                    
                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên cố vấn</b></p>
                        <select class="form-control" name="updateIdTeacher" id="updateIdTeacher">';
        $classTemp = new AccountHasClassMod();
        $teacher = $classTemp->getTeacher($classO->getIdClass());
        $academyTemp = new AcademyMod();
        $listTeacher = $academyTemp->getListTeacher($classO->getAcademy_idAcademy());
        if ($listTeacher > 0) {
            if(gettype($teacher)!='integer')
            foreach ($listTeacher as $key => $value) {

                if ($value->getIdAccount() == $teacher->getIdAccount())
                    echo '<option selected="selected" value="' . $value->getIdAccount() . '">' . $value->getAccountName() . '</option>';
                else echo '<option   value="' . $value->getIdAccount() . '">' . $value->getAccountName() . '</option>';
            }
            else foreach ($listTeacher as $key => $value) {

                 echo '<option   value="' . $value->getIdAccount() . '">' . $value->getAccountName() . '</option>';
            }
        }
        echo '
                            </select>
                    </fieldset>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnTeacher">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>';
    }
}
?>

