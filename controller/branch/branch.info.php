<?php
if(isset($_GET['id']))
$id = $_GET['id'];
if (!empty($id)) {
    $branchObj = $branchMod->getBranchId($id);
    ?>

    <div id="infoBranch" class="modal text-left" tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Thông tin chi hội</h4>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Tên chi hội:  </label>
                            <span class="form-control-static"><?php echo $branchObj->getBranchName(); ?></span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Mã chi hội: </label>
                            <span class="form-control-static"><?php echo $branchObj->getidBranch(); ?></span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Tỉnh thành: </label>
                            <span class="form-control-static"><?php echo $branchObj->getCity(); ?></span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('#infoStudent').modal('toggle');
            var url = window.location.href;
            url = url.replace(/\?.+/, '');
            window.history.pushState({path: url}, '', url);
        });
    </script>
<?php } ?>