<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 9/11/2017
 * Time: 6:56 PM
 */
if (empty($imgMod))
	$imgMod = new ImageMod();

#chỉ có sinh viên mới có quyền upload
if (isSubmit('remove-image')){
    $img = getPOSTValue('img-value');
    $accountId = getLoggedAccountId();
    if ($imgMod->removeImage($accountId, $img)){
        $path = "../upload/$img";
        if (file_exists($path))
			unlink($path);
		showMessage("Xóa thành công");
    }
}

$images = [];
if (!empty($studentId))
    $images = $imgMod->getImages($studentId);
?>


<div class="container container-no-height" id="minh-chung">
	<h4 class="text-center text-primary">Danh sách minh chứng</h4>
	<?php if ($privilege == STUDENT) { ?>
        <div class="text-center">
            <a class="btn btn-primary btn-sm" id="btn-add-new-evidence">Thêm mới minh chứng</a>
        </div>
        <br>
    <?php } ?>
	<!--End filter table-->
	<div class="table-view">
		<!--Start buttun filter-->
		<table class="table table-bordered table-condensed" id="table-manage-evidence-img">

			<thead>
			<tr>
				<th>STT</th>
				<th>Mục điểm xác nhận</th>
				<th style="min-width: 140px;">Hành động</th>
			</tr>
			</thead>
			<tbody class="text-center">
			<?php foreach ($images as $order => $image) { ?>
                <tr>
                    <td><?php echo $order + 1; ?></td>
                    <td class="text-left"><?php echo $image['transcriptName']; ?></td>
                    <td>
                        <form method="post">
                            <a target="_blank" href="../upload/<?php echo $image['img']; ?>"
                               class="btn btn-sm btn-primary">
                                Xem
                            </a>
                            <?php if ($privilege === STUDENT) { ?>
                                <input type="hidden" value="remove-image" name="requestName">
                                <input type="hidden" value="<?php echo $image['img']; ?>" name="img-value">
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Xác nhận xóa?');">
                                    Xóa
                                </button>
                            <?php } ?>
                        </form>
                    </td>
                </tr>
            <?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script>
	$('#btn-add-new-evidence').click(function () {
	    $('#upload-image').slideToggle(100);
		return false;
    });
</script>
