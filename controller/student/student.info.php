
<?php
//Khởi tạo giá trị lấy dự liệu cho thông tin sinh viên
$student_obj = new AccountObj();
$student_mod = new AccountMod();
$student_obj=$student_mod->getAccount('B1400704');
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
                        <?php echo '<p class="text-left form-control"><b>'.$student_obj->getAccountName().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>MSSV</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_obj->getIdAccount().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Ngày Sinh</b></p>
                        <?php //echo '<p class="text-left form-control"><b>'.$student_obj->getBrithday().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Địa chỉ</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_obj->getAddress().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Giới tính</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_obj->getSex().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Điện thoại</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_obj->getPhone().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Email</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_mod->getEmail().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Khoa - Viện</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_mod->getAccountOnAcademy().'</b></p>' ?>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Lớp</b></p>
                        <?php echo '<p class="text-left form-control"><b>'.$student_mod->getAccountOnClass().'</b></p>' ?>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>