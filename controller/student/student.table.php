<?php
    $classId = getGETValue('class');
    $studentList = array();
    if (!empty($classId)){
        $classMod = new ClassMod();
        $classObj = new ClassObj();
        $classObj->setIdClass($classId);
		$studentList = $classMod->getListStudent($classObj);
    }
    if (!is_array($studentList))
        $studentList = array();
    $url = getCurrentUrl();
    $url = preg_replace("/&id.+/", '', $url);
    $url = strpos($url, "?") ? "$url&": "$url?";
?>
<?php
    $listTable = $accountMod->getStudentAll();
?>
<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>STT</th>
        <th>MSSV</th>
        <th>Họ và tên</th>
        <th>Chọn</th>
    </tr>
    </thead>
    <tbody class="text-center align-self-center">
    <?php foreach ($listTable as $order => $student) { ?>
        <tr>
            <td><?php echo $order + 1; ?></td>
            <td>
                <a href="<?php echo $url . 'id=' . $student->getIdAccount(); ?>">
                    <?php echo $student->getIdAccount(); ?>
                </a>
            </td>
            <td><?php echo $student->getAccountName(); ?></td>
            <td><input type="checkbox"></td>
        </tr>
    <?php } ?>
    </tbody>
</table>