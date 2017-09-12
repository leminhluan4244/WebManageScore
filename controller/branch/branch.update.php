<!-- Start update branch-->
<div id="updateBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm mới Chi Hội</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mã Chi Hội</b></p>
                        <input type="text" class="form-control" name="idBranch" id="idBranch"
                               placeholder="Nhập mã chi hội">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên Chi Hội</b></p>
                        <input type="text" class="form-control" name="branchName" id="branchName"
                               placeholder="Nhập tên chi hội">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tỉnh Thành</b></p>
                        <select class="form-control" name="city" id="city">
                            <option value="CH01">Hậu Giang</option>
                            <option value="CH02">Cần Thơ</option>
                            <option value="CH03">Vĩnh Long</option>
                            <option value="CH04">Sóc Trăng</option>
                            <option value="CH05">Cà Mau</option>
                            <option value="CH06">Trà Vinh</option>

                        </select>
                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="addNewMember">Thêm</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- End add branch-->