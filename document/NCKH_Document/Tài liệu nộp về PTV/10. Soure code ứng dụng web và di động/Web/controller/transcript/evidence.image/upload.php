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
	$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

	if (empty($error) && !preg_match('/(jpg|png|pdf|xlsx|xls)/', $ext)) {
		$error = true;
		showMessage("Chỉ chấp nhận tập tin hình ảnh PNG, JPEG, Excel và PDF");
	}

	$transId = getPOSTValue('evidence-provision');

	if (empty($error)){
		if (preg_match('/(png|jpg)/', $ext))
		    saveImageExt($_FILES['image-evidence']['tmp_name'], $ext, $transId, $fileName, $imgMod);
		else saveOtherExt($_FILES['image-evidence']['tmp_name'], $ext, $transId, $fileName, $imgMod);
	}
}

function saveImageExt($imgData, $ext, $transId, $originalName, $imgMod){
	$img = resize_image($imgData, $ext);
	$fileName = md5($originalName . random_int(1, 10000));
	$fileName = "$fileName.$ext";
	$location = '../upload';
	if ($imgMod->addImage(getLoggedAccountId(), $transId, $fileName)){
		if (!file_exists($location))
			mkdir($location);
		saveImage($img, "$location/$fileName");
		showMessage("Thêm ảnh thành công!!!");
	} else {
		showMessage("Thêm ảnh thất bại, hãy thử lại sau!!!");
	}
}

function saveOtherExt($fileData, $ext, $transId, $originalName, $imgMod){
	$fileName = md5($originalName . random_int(1, 10000));
	$fileName = "$fileName.$ext";
	$location = '../upload';
	if ($imgMod->addImage(getLoggedAccountId(), $transId, $fileName)){
		if (!file_exists($location))
			mkdir($location);
		move_uploaded_file($fileData, "$location/$fileName");
		showMessage("Thêm file thành công!!!");
	} else {
		showMessage("Thêm file thất bại, hãy thử lại sau!!!");
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
				<input type="file" required name="image-evidence" accept="image/png,image/jpeg,application/pdf"
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
