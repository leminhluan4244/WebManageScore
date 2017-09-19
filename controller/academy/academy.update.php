<!-- Start add academy-->
<div id="updateAcademy" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật khoa viện</h4>
            </div>
            <div class="modal-body ">
                <form action="academy.mamage.php" method="post">

                    <fieldset class="form-group">
                        <p class="text-left "><b>Tên khoa - viện</b></p>
                        <input type="text" class="form-control" name="updateAcademyName" id="updateAcademyName"
                               placeholder="Nhập tên khoa - viện">

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mã khoa - viện</b></p>
                        <input type="text" class="form-control" name="updateIdAcademy" id="updateIdAcademy"
                               placeholder="Nhập mã khoa viện">
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnUpdate">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End add academy-->