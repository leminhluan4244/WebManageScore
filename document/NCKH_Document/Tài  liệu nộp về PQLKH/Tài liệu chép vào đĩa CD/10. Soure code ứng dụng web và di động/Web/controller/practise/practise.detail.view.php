<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 16/10/2017
 * Time: 3:24 PM
 */
if (!defined("IN_PT_MAN"))
    die("Bad request!");
$psm = new PractiseScoresMod();
$listScore = $psm->getListAllScores($studentId);
?>
<div class="container">
    <div class="table-view">
        <table class="table table-condensed table-bordered  table-striped" id="table-view-scores-graded">
            <thead>
            <tr>
                <th>STT</th>
                <th>Học kỳ</th>
                <th>Năm học</th>
                <th>Số điểm</th>
                <th>Ngày chấm</th>
            </tr>
            </thead>
            <tbody class=" text-center">
            <?php
            foreach ($listScore as $idx => $item) { ?>
                <tr>
                    <td><?php echo $idx + 1; ?></td>
                    <td><?php echo $item["semester"]; ?></td>
                    <td><?php echo $item["years"]; ?></td>
                    <td><?php echo $item["scores"]; ?></td>
                    <td><?php echo date("d-m-Y", strtotime($item["beginDate"])); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    if (!(getInfo("permission") == "Quản lý chi hội" || getInfo("permission") == "Sinh viên")) { ?>
        <div class="text-right">
            <a href="practise.manage.php" class="btn btn-default">
                <span class="glyphicon glyphicon-backward"></span>
                Quay về
            </a>
        </div>
    <?php } ?>
</div>
<script>
    $('#table-view-scores-graded').dataTable();
</script>
