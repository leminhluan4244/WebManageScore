<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 9/11/2017
 * Time: 6:56 PM
 */

if (empty($transcriptListScore))
    return;

$imgMod = new ImageMod();

if (isSubmit("upload-img")){
	require_once __DIR__ . '/img.util.php';
	$error = false;
	if (!isset($_FILES['image-evidence'])){
	    $error = true;
	    showMessage("Chưa chọn file upload!!");
    }

	if (empty($error) && !empty($_FILES['image-evidence']['error'])){
		$error = true;
		showMessage('Upload thất bại, hãy thử lại!!');
	}

	$fileName = $_FILES['image-evidence']['name'];

	if (empty($error) && (!preg_match('/(jpg|png|PNG|JPG)/', $fileName, $matches) || empty($matches[1]))) {
		$error = true;
		showMessage("Chỉ chấp nhận tập tin hình ảnh PNG hoặc JPEG");
	}

	$transId = getPOSTValue('evidence-provision');

	if (empty($error)){
		$img = resize_image($_FILES['image-evidence']['tmp_name'], $matches[1]);
		$fileName = md5($fileName . random_int(1, 10000));
		$location = '../upload';
		if ($imgMod->addImage(getLoggedAccountId(), $transId, $fileName)){
		    if (!file_exists($location))
		        mkdir($location);
		    saveImage($img, "$location/$fileName.jpg");
			showMessage("Thêm ảnh thành công!!!");
		} else {
		    showMessage("Thêm ảnh thất bại, hãy thử lại sau!!!");
        }
	}
}

?>

<hr>
<div class="container-fluid" id="upload-image" style="display: none;">
	<h4 class="text-center text-primary">Upload hình ảnh minh chứng</h4>
	<div class="col-sm-offset-3 col-sm-6">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Chọn hình ảnh</label>
                <span class="help-block"><i>(Hình ảnh dung lượng dưới 2 Megabytes)</i></span>
				<input type="file" required name="image-evidence" accept="image/png,image/jpeg"
					class="form-control">
			</div>
			<div class="form-group">
				<label>Mục cần xác nhận</label>
				<select required name="evidence-provision" id="evd-prov" class="form-control">
                <?php foreach ($transcriptListScore as $key => $item) {?>
                    <option value="<?php echo $key; ?>">
                        <?php echo str_replace("-", "", $item['itemName']); ?>
                    </option>
                <?php } ?>
				</select>
			</div>
			<div class="form-group text-right">
				<input type="hidden" value="upload-img" name="requestName">
				<button class="btn btn-primary btn-sm">Lưu lại</button>
				<button type="button" id="btn-cancel-upload" class="btn btn-default btn-sm">
					Bỏ qua
				</button>
			</div>
		</form>
	</div>
</div>
<script>
	$('#btn-cancel-upload').click(function () {
		$('#upload-image').slideToggle(100);
    });
</script>
