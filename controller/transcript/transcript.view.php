<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 30/9/2017
 * Time: 5:03 PM
 */

if (empty($trTree))
	return;
?>
<h4 class="text-center text-primary">Chấm điểm rèn luyện</h4>
<div class="form-grading">
    <form method="post">
        <div class="table-score-wrapper">
            <table id="table-score" class="table-bordered table-responsive table-condensed table-grading">
                <thead>
                <tr>
                    <th><strong>Nội dung đánh giá (Thông tư 16)</strong></th>
                    <th><strong>Mức điểm</strong></th>
                    <th><strong>SV tự chấm</strong></th>
                    <th><strong>CVHT chấm</strong></th>
                    <th><strong>Quản lý khoa chấm</strong></th>
                </tr>
                </thead>
                <tbody class="text-center">
				<?php echo $trTree->getHtmlText(); ?>
                </tbody>
            </table>
        </div>
        <div>
            <input type="hidden" name="privilege" value="<?php echo $privilege; ?>">
            <input type="hidden" name="requestName" value="saveTranscript">
        </div>
        <br>
        <div class="text-right div-btn-grading">
            <button class="btn btn-primary">
                <span class="glyphicon glyphicon-ok"></span>
                Lưu lại
            </button>
            <a class="btn btn-default" href="main.php">
                <span class="glyphicon glyphicon-backward"></span>
                Quay về
            </a>
        </div>
    </form>
</div>