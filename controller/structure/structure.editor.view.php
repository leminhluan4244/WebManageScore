<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 19/9/2017
 * Time: 10:32 PM
 */
if (empty($tree))
	return;
?>

<div class="table-score-wrapper">
    <h4 class="text-center text-primary">
        Danh sách mục điểm của bảng điểm hiện tại
        <a href="?a=add" class="btn btn-primary btn-sm">Thêm mục mới</a>
    </h4>

	<table id="table-score" class="table-bordered table-responsive table-condensed  table-score-editor">
		<thead>
		<tr>
			<th><strong>Nội dung đánh giá (Thông tư 16)</strong></th>
			<th><strong>Mức điểm</strong></th>
			<th><strong>Thao tác</strong></th>
		</tr>
		</thead>
		<tbody>
		<?php echo $tree->getHtmlText(); ?>
		</tbody>
	</table>
</div>