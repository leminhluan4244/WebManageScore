<?php
if(isset($_POST['save'])) {
    $staffO = new AccountObj();
    $staffM = new AccountMod();
    $staffO->setAccountObj($_POST['addIdAccount'], $_POST['addAccountName'], $_POST['addBirthday'], $_POST['addAddress'], $_POST['addSex'], $_POST['addPhone'], $_POST['addEmail'],'123', $_POST['addPermission_position']);
    $staffM->updateAccount($staffO);
    echo'<META http-equiv="refresh" content="0;URL=staff.manage.php">';


}

$staffM = new AccountMod();
$list = $staffM->getAllAccount();
$idStaff =isset($_GET['idAccount']) ? $_GET['idAccount'] : false;
if($idStaff){
    $staffO = new AccountObj();
    $staffO = $staffM->findStaffByID($idStaff);

}

function checkO($stringA, $temp)
{
    if ($stringA == $temp) {
        return 'selected="selected"';
    }
    return "";
}
if (!empty($staffO)) {
    echo '
<div id="updateStaff" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sửa cán bộ</h4>
            </div>
            <div class="modal-body">
                <form method="post">

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mã Chi Hội</b></p>
                        <input type="text" class="form-control" name="idStaff" id="idStaff"
                               value="' . $staffO->getIdAccount() . '" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên Chi Hội</b></p>
                        <input type="text" class="form-control" name="staffName" id="staffName"
                               value="' . $staffO->getAccountName() . '">
                    </fieldset>
                    
                     <fieldset class="form-group">
                        <p class="text-left"><b>Ngày sinh</b></p>
                        <input type="text" class="form-control" name="birthday" id="birthay"
                               value="' . $staffO->getBirthday() . '">
                    </fieldset>
                    
                     <fieldset class="form-group">
                        <p class="text-left"><b>Địa chỉ</b></p>
                        <input type="text" class="form-control" name="address" id="address"
                               value="' . $staffO->getAddress() . '">
                    </fieldset>
                    <fieldset class="form-group">
                        <p class="text-left"><b>Giới tính</b></p>
                        <input type="text" class="form-control" name="sex" id="sex"
                               value="' . $staffO->getSex() . '">
                    </fieldset>
                    
                     <fieldset class="form-group">
                        <p class="text-left"><b>Số điện thoại</b></p>
                        <input type="text" class="form-control" name="phone" id="phone"
                               value="' . $staffO->getPhone() . '">
                    </fieldset>
                    
                      <fieldset class="form-group">
                        <p class="text-left"><b>Email</b></p>
                        <input type="text" class="form-control" name="email" id="email"
                               value="' . $staffO->getEmail() . '">
                    </fieldset>
                    </fieldset>
                    
                      <fieldset class="form-group">
                        <p class="text-left"><b>Phân quyền</b></p>
                        <input type="text" class="form-control" name="permission" id="permission"
                               value="' . $staffO->getPermission_position() . '">
                    </fieldset>
                
                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="save" ">Sửa</button>
                    </div>
                    
                        
                       
                </form>
            </div>

        </div>
    </div>
</div>';

}
?>
<script>
    $(function () {
        $('#updateStaff').modal('toggle');
        window.history.pushState({path: 'staff.manage.php'}, '', 'staff.manage.php');
    });
</script>
