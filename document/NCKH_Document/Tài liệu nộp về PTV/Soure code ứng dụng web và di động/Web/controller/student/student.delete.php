<!--Start delete student-->
<?php
if(isset($_POST['xoa'])) {
    $studentO = new AccountObj();
    $studentM = new AccountMod();
    foreach ($_POST['xoa'] as $key=> $value){
        $studentO->setIdAccount($value);
        $studentM->deleteAccount($studentO);
        $academyTemp = new AccountHasAcademyMod();
        $academyTemp->deleteAccountHasAcademy($studentO->getIdAccount());
        $classTemp = new AccountHasClassMod();
        $classTemp->deleteAccountHasClass($studentO->getIdAccount());
        echo'<META http-equiv="refresh" content="0;URL=student.manage.php">';
    }

}
?>
<div id="deleteStudent" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa sinh viên!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                    <div class="modal-footer">
                        <input type="hidden" name="deleteStudent" id="deleteStudent">
                        <button type="submit" name="deleteYes" onclick="submitform();" class="btn btn-danger">Đồng ý</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--End delete student-->
<!-- Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->
<script>
    function submitform() {
        $('#manageForm').submit();
    }
</script>
<!-- Kết thúc Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->