<?php
if(!isset($_GET['btnfilter'])) {
    $staffMod = new AccountMod();
    $arrayStaff = array();
    $arrayStaff = $staffMod->getAccountStaff();
}
else {
    if($_GET['academy']=='NoneAcademy'){
        $staffMod = new AccountMod();
        $arrayStaff = array();
        $arrayStaff = $staffMod->getAccountStaff();
    }
    else{
        $staffMod = new AccountMod();
        $arrayStaff = $staffMod->getAccountStaffByAcademy($_GET['academy']);
    }
}

?>
<!-- end loc-->

<div id="staff-manage-wrapper">
    <h4 class="text-primary text-center">Danh sách cán bộ</h4>
    <form action="staff.manage.php" method="post" id="manageForm">
        <table class="table table-bordered table-condensed" id="table-manage-staff">
            <thead>
            <tr>
                <th>STT</th>
                <th>MSCB</th>
                <th>Họ và tên</th>
                <th>Sửa<br/></th>
                <th>Tất cả <br/><input type="checkbox" onClick="toggle(this)"></th>
            </tr>
            </thead>
            <tbody class="text-center align-self-center">
            <?php

            foreach ($arrayStaff as $order => $value) { ?>
                <tr>
                    <td><?php echo $order + 1; ?></td>
                    <td>
                        <a href="<?php echo 'staff.manage.php?idStaff=' . $value->getIdAccount(); ?>">
                            <?php echo $value->getIdAccount(); ?>
                        </a>
                    </td>
                    <td><?php echo $value->getAccountName(); ?></td>


                    <td><a href="?idAcc=<?php echo $value->getIdAccount(); ?>" class="btn btn-primary btn-sm col align-self-center " data-toggle="modal">
                            <span class=" glyphicon glyphicon-pencil"></span>
                        </a></td>
                    <td><input type="checkbox" name="xoa[]" id="<?php echo $value->getIdAccount(); ?>"
                               value="<?php echo $value->getIdAccount(); ?>"/></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </form>
</div>



<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = checkall.checked;
        }
    }

    $('#table-manage-staff').DataTable();
</script>