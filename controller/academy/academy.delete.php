<!--Start delete Academy-->
<div id="deleteAcademy" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa khoa viện!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                <form action="academy.manage.php" method="post">
                    <div class="modal-footer">
                        <input type="hidden" name="deleteAcademy" id="deleteAcademy">
                        <button type="submit" name="deleteYes" class="btn btn-danger">Đồng ý</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End delete Academy-->