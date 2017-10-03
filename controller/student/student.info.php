<?php
$id = getGETValue('id');
if (!empty($id)) {
	$accountObj = $accountMod->getAccount($id);
	?>

    <div id="infoStudent" class="modal text-left" tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Thông tin sinh viên</h4>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Họ và tên: </label>
                            <span class="form-control-static"><?php echo $accountObj->getAccountName(); ?></span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>MSSV: </label>
                            <span class="form-control-static"><?php echo $accountObj->getIdAccount(); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Ngày Sinh: </label>
                            <span class="form-control-static"><?php echo $accountObj->getBirthday(); ?></span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Địa chỉ: </label>
                            <span class="form-control-static"><?php echo $accountObj->getAddress(); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Giới tính: </label>
                            <span class="form-control-static"><?php echo $accountObj->getSex(); ?></span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Điện thoại: </label>
                            <span class="form-control-static"><?php echo $accountObj->getPhone(); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Email: </label>
                            <span class="form-control-static"><?php echo $accountObj->getEmail(); ?></span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Khoa - Viện: </label>
                            <span class="form-control-static">
                                <?php
                                $listInfoAcademy = $accountMod->getAcademy($accountObj->getIdAccount());
                                foreach ($listInfoAcademy as $key=> $value){
                                   echo '<br />'.$value ;
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Lớp: </label>
                            <span class="form-control-static">
                            <?php
                            $listInfoClass = $accountMod->getClass($accountObj->getIdAccount());
                            foreach ($listInfoClass as $key=> $value){
                                echo '<br />'.$value ;
                            }
                            ?>
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Chi hội: </label>
                            <span class="form-control-static">
                            <?php
                            $listInfoBranch = $accountMod->getBranch($accountObj->getIdAccount());
                            foreach ($listInfoBranch as $key=> $value){
                                echo '<br />'.$value ;
                            }
                            ?>

                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Phân quyền: </label>
                            <span class="form-control-static"><?php echo $accountObj->getPermission_position(); ?></span>
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