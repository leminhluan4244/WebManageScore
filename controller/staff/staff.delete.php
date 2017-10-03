<!--Start delete staff-->
<?php
if(isset($_POST['xoa'])) {
    $stO = new AccountObj();
    $stM = new AccountMod();
    foreach ($_POST['xoa'] as $key=> $value){
        $stO->setIdAccount($value);
        $stM->deleteAccount($stO);
        echo'<META http-equiv="refresh" content="0;URL=staff.manage.php">';
    }

}
?>
<div id="deleteTeacher" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa cán bộ!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                <div class="modal-footer">
                    <input type="hidden" name="deleteTeacher" id="deleteStaff">
                    <button type="submit" name="xoa" onclick="submitform();" class="btn btn-danger">Đồng ý</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End delete staff-->
<!-- Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->
<script>
    function submitform() {
        $('#manageForm').submit();
    }
</script>
<!-- Kết thúc Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->