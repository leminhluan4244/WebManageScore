<?php
$name = '';
if(!isset($_GET['btnfilter'])) {
    $teacherMod = new AccountMod();
    $teacherList = $teacherMod->getAccountStaff();
}
else {
    if($_GET['academy']=='NoneAcademy'){
        $teacherMod = new AccountMod();
        $teacherList = $teacherMod->getAccountStaff();
    }
    else{
        $teacherMod = new AccountMod();
        $teacherList = $teacherMod->getAccountStaffByAcademy($_GET['academy']);
        $academy = new AcademyObj();
        $academyM = new AcademyMod(); $academy=$academyM->findAcademyByID($_GET['academy']);
        $name =  $academy->getAcademyName();
    }
}
?>
<div id="teacher-manage-wrapper">
        <hr>
        <h4 class="text-primary text-center">Danh sách cán bộ <?php echo $name?></h4>
    <form action="teacher.manage.php" method="post" id="manageForm">
        <table class="table table-bordered table-condensed" id="table-manage-teacher">
            <thead>
            <tr>
                <th>STT</th>
                <th>MSSV</th>
                <th>Họ và tên</th>
                <th>Sửa<br/></th>
                <th>Tất cả <br/><input type="checkbox" onClick="toggle(this)"></th>
            </tr>
            </thead>
            <tbody class="text-center align-self-center">
			<?php
            if($teacherList >0)
			foreach ($teacherList as $order => $teacher) { ?>
                <tr>
                    <td><?php echo $order + 1; ?></td>
                    <td>
                        <a href="<?php echo $url . 'id=' . $teacher->getIdAccount(); ?>">
							<?php echo $teacher->getIdAccount(); ?>
                        </a>
                    </td>
                    <td><?php echo $teacher->getAccountName(); ?></td>
                    <td><a class="btn btn-primary btn-sm col align-self-center " data-toggle="modal"
                           data-target="#updateteacher"
                           name="<?php echo $teacher->getIdAccount() ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a></td>
                    <td><input type="checkbox" name="xoa[]" id="<?php echo $teacher->getIdAccount(); ?>"
                               value="<?php echo $teacher->getIdAccount(); ?>"/></td>

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

    $('#table-manage-teacher').DataTable();
</script>