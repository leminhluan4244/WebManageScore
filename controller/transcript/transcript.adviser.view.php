<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 1/10/2017
 * Time: 2:39 PM
 */
if (!defined("IN_TRS"))
	die("Bad request!!!");
if ($privilege != ADVISER)
	redirect("main.php");

$listStudent = [];//$clsMod->getListStudentManagedByAdviser(getLoggedAccountId());
require_once "../controller/transcript/load.list.student.by.class.php";
?>
<div class="container">
    <h4 class="text-center text-primary">Danh sách sinh viên
        <?php echo !empty($className) ? " lớp: " . "<i><strong>$className</strong></i>": "" ?>
    </h4>
    <div class="table-view">
        <table id="table-grading-student-by-adviser" class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th>Chấm điểm</th>
            </tr>
            </thead>
            <tbody>
			<?php foreach ($listStudent as $order => $student) { ?>
                <tr>
                    <td><?php echo $order + 1; ?></td>
                    <td><?php echo $student->getIdAccount(); ?></td>
                    <td><?php echo $student->getAccountName(); ?></td>
                    <td>
                        <form action="?a=grading" method="post" style="margin: 0; padding: 0;">
                            <input type="hidden" name="stdId" value="<?php echo $student->getIdAccount(); ?>">
                            <input type="hidden" name="requestName" value="adviserGrading">
                            <button class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-edit"></span>
                                Chấm
                            </button>
                        </form>
                    </td>
                </tr>
			<?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#table-grading-student-by-adviser').dataTable();
</script>
