<?php
/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 16/09/2017
 * Time: 21:41
 */
if (empty($tree))
	return;
?>

<div class="table-score-wrapper">
    <table id="table-score" class="table-bordered table-responsive table-condensed table-grading">
        <thead>
        <tr>
            <th><strong>Nội dung đánh giá (Thông tư 16)</strong></th>
            <th><strong>Mức điểm</strong></th>
            <th><strong>SV tự chấm</strong></th>
            <th><strong>CVHT chấm</strong></th>
            <th><strong>COl5</strong></th>
        </tr>
        </thead>
        <tbody class="text-center">
		<?php echo $tree->getHtmlText(); ?>
        </tbody>
    </table>
</div>
