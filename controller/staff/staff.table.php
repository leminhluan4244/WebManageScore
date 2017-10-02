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

<div id="staff-manage-wrapper">
    <h4 class="text-primary text-center">Danh sách cán bộ</h4>
    <form action="staff.manage.php" method="post" id="manageForm">
        <table class="table table-bordered table-condensed " id="table-manage-staff">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã CB</th>
                <th>Tên CB</th>
                <th>Tùy Chỉnh</th>
                <th>Chọn tất cả<br>
                    <input type="checkbox" onClick="toggle(this)"></th>
            </tr>
            </thead>
            <tbody class="text-center align-self-center">
            <?php
            $i=0;
            if($arrayStaff<=0) echo 'Không có dữ liệu';
            else
                foreach ($arrayStaff as $key => $value) {
                    $i++;
                    echo '
    
                <tr>
                    <td>'.$i.'</td>
                   
                    <td>
                        ' .  $value->getIdAccount() . '
                    </td>
                    <td>
                        ' . $value->getAccountName() . '
                    </td>
               
                    <td>
                        <a href="?idAccount='.$value->getIdAccount().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                    <td>
                        <input type="checkbox" name="xoa[]" id="'.$value->getIdAccount().'" value="'.$value->getIdAccount().'"/>
                    </td>
                </tr>';
                }

            ?>
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