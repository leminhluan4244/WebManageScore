<?php
    $studentList = $accountMod->getAllAccountByPermission('Sinh viên');
    if (!is_array($studentList))
        $studentList = array();
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
    <?php foreach ($studentList as $order => $student) { ?>
        <tr>
            <td><?php echo $order + 1; ?></td>
            <td>
                <a href="?id=<?php echo $student->getIdAccount(); ?>">
                    <?php echo $student->getIdAccount(); ?>
                </a>
            </td>
            <td><?php echo $student->getAccountName(); ?></td>
            <td><input type="checkbox"></td>
        </tr>
    <?php } ?>
    </tbody>
</table>