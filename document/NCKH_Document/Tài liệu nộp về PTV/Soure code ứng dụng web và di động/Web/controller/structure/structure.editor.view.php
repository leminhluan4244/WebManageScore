<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 19/9/2017
 * Time: 10:32 PM
 */
if (!defined("IN_STR"))
	die("Bad request!!!");
if (empty($tree))
	return;
?>

<div class="table-score-wrapper">
    <h4 class="text-center text-primary">
        Danh sách mục điểm của bảng điểm hiện tại
    </h4>
    <div class="row text-center">
        <a href="?a=add" class="btn btn-primary btn-sm">Thêm mục mới</a>
    </div>
    <hr>
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
<div class="modal fade" id="modal-confirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title text-primary text-center">Xác nhận xóa
                    <a data-dismiss="modal" href="#modal-confirm" class="close">&times;</a></h4>
            </div>
            <div class="modal-body text-center">
                <h4 class="text-primary">Xóa mục này, cùng với tất cả mục con của nó. Không thể hoàn tác!!!</h4>
                <p>Hãy kiểm tra cẩn thận!</p>
            </div>
            <div class="modal-footer text-right">
                <button type="button" id="btn-confirm" class="btn btn-danger">Đồng ý</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" href="#modal-confirm">Không</button>
            </div>
        </div>
    </div>
</div>
<script>
    var form;
    $('.btn-del-struct').click(function(){
        $('#modal-confirm').modal("toggle");
        form = $(this).parent();
        return false;
    });

    $('#btn-confirm').click(function(){
        $('#modal-confirm').modal("toggle");
        form.submit();
    });
</script>