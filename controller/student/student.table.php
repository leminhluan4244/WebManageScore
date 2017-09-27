<?php
$classId = getGETValue('class');
$className = "";
$studentList = array();
if (preg_match("/^[a-zA-Z0-9]+$/", $classId)) {
	$classMod = new ClassMod();
	$classObj = new ClassObj();
	$classObj->setIdClass($classId);
	$className = $classMod->getClassNameOf($classId);
	$studentList = $classMod->getListStudent($classObj);
}
if (!is_array($studentList))
	$studentList = array();
$url = getCurrentUrl();
$url = preg_replace("/&id.+/", '', $url);
$url = strpos($url, "?") ? "$url&" : "$url?";
?>

<div id="student-manage-wrapper">
    <?php if (!empty($classId)) {?>
        <hr>
        <h4 class="text-primary text-center">Danh sách sinh viên lớp: <?php echo $className; ?></h4>
    <?php } ?>

    <form action="student.manage.php" method="post" id="manageForm">
        <table class="table table-bordered table-condensed" id="table-manage-student">
            <thead>
            <tr>
                <th>STT</th>
                <th>MSSV</th>
                <th>Họ và tên</th>
                <th>Tất cả <br/><input type="checkbox" onClick="toggle(this)"></th>
                <th>Sửa<br/></th>
            </tr>
            </thead>
            <tbody class="text-center align-self-center">
			<?php

			foreach ($studentList as $order => $student) { ?>
                <tr>
                    <td><?php echo $order + 1; ?></td>
                    <td>
                        <a href="<?php echo $url . 'id=' . $student->getIdAccount(); ?>">
							<?php echo $student->getIdAccount(); ?>
                        </a>
                    </td>
                    <td><?php echo $student->getAccountName(); ?></td>
                    <td><input type="checkbox" name="xoa[]" id="<?php echo $student->getIdAccount(); ?>"
                               value="<?php echo $student->getIdAccount(); ?>"/></td>
                    <td><a class="btn btn-danger btn-sm col align-self-center " data-toggle="modal"
                           data-target="#updateStudent"
                           name="<?php echo $student->getIdAccount() ?>">
                            <span class=" glyphicon glyphicon-trash"></span> Sửa
                        </a></td>
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

    $('#table-manage-student').DataTable();
</script>