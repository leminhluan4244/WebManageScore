<!--Start delete student-->
<?php
if(isset($_POST['deleteYes'])) {

    $branchO = new BranchObj();
    $branchM = new BranchMod();
    $branchO->setBranchObj($_POST['IdBranch'], $_POST['branchName'], $_POST['city']);
    $branchM->deleteBranch($branchO);
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
                <form action="student.manage.php" method="post">
                    <div class="modal-footer">
                        <input type="hidden" name="deleteStudent" id="deleteStudent">
                        <button type="submit" name="deleteYes" class="btn btn-danger">Đồng ý</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End delete student-->
<!-- Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('idBranch');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = checkall.checked;
        }
    }
    /*
     //xóa 1 chi hội
     $('#deleteYes').on('show.bs.modal', function(e) {
     var product = $(e.relatedTarget).value('id');
     $("#deleteBranch").val(product);
     });
     */
</script>
<!-- Kết thúc Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->