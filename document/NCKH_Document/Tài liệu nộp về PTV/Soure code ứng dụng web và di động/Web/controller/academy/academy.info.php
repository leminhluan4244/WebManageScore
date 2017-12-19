
<?php
//Khởi tạo giá trị lấy dự liệu cho thông tin sinh viên
//$accountObj=$accountMod->getAccount($_GET['id']);
//$row =$student_mod->getAccountOnAcademy('B1400704');

?>
<div id="infoStudent" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thông tin sinh viên</h4>
            </div>
            <div class="modal-body ">
                <form action="#" method="post">
                    <fieldset class="form-group">
                        <p class="text-left "><b>Họ và Tên</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getAccountName().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>MSSV</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getIdAccount().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Ngày Sinh</b></p>
                        <?php //echo '<p class="text-left form-control"><b>'.$accountObj->getBrithday().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Địa chỉ</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getAddress().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Giới tính</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getSex().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Điện thoại</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getPhone().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Email</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getEmail().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Khoa - Viện</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Lớp</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Chi hội</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Phân quyền</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$accountObj->getPermission_position().'</b></p>' ?>
                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>