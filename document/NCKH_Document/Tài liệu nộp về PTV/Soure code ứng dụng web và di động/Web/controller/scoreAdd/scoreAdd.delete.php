
<?php
if(isset($_POST['xoa'])) {
    $scoresdeleteMT = new ScoresAddMod();
foreach ($_POST['xoa'] as $key=> $value) {
    $scoresdeleteOT = new ScoresAddObj();
    $scoresdeleteOT->setIdScore($value);
    $scoresdeleteMT->deleteScoresAdd($scoresdeleteOT);
}
    echo'<META http-equiv="refresh" content="0;URL=scoreAdd.php">';
}
?>
<!--Start delete Class-->
<div id="deleteScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa lớp!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                <div class="modal-footer">
                    <input type="hidden" name="deleteClass" id="deleteClass">
                    <button type="submit" name="deleteYes" onclick="submitform();" class="btn btn-danger">Đồng ý</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function submitform() {
        $('#manageForm').submit();
    }
</script>
<!--End delete Class-->