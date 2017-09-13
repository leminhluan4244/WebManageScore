<!--
<?php
if(isset($_POST['submitDelete'])) {

    $branchO = new BranchObj();
    $branchM = new BranchMod();
    $branchO->setBranchObj($_POST['IdBranch'], $_POST['branchName'], $_POST['city']);
    $branchM->deleteBranch($branchO);

}
?>
-->
<!--Start delete Branch-->
<div id="deleteBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa Chi Hội!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                <form action="#" method="post">
                    <div class="modal-footer">
                        <input type="hidden" name="deleteBranch" id="delete">
                        <button type="submitDelete" name="deleteYes" class="btn btn-danger">Đồng ý</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End delete Branch-->