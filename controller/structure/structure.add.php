<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 20/9/2017
 * Time: 3:13 PM
 */
if (!defined("IN_STR"))
    die("Bad request!!!");
$structures = $tree->getData();
if (isSubmit('save')){
    $error = false;
	$idItem = getPOSTValue('idItem');
	$itemName = getPOSTValue('itemName');
	$score = (int)getPOSTValue('score');
	$idParent = getPOSTValue('idParent');
	$scoreDefault = (int)getPOSTValue('scoreDefault');
	if (!preg_match('/[A-Za-z0-9._]+/', $idItem)){
	    $error = true;
	    showMessage("Mã mục điểm không hợp lệ!");
    }
	if (trim($idItem, " ") == "" ||
		empty(trim($itemName, " ")) || trim($idParent, " ") == ""){
	    $error = true;
		showMessage("Hãy điền đầy đủ thông tin!");
	}

	if ($scoreDefault > $score){
	    $error = true;
	    showMessage("Điểm mặc định không được lớn hơn điểm quy định");
    }

    if ($idParent != ST_ROOT){
		$parentNode = $structures[$idParent];
		$maxScoreAllowed = $structures[$tree->getHighestAncestor($parentNode)]["scores"];
    } else {
        $maxScoreAllowed = 100;
    }
	if ($score > $maxScoreAllowed){
		$error = true;
		showMessage("Điểm số của mục này không được lớn hơn quy định là $maxScoreAllowed");
	}
	if (empty($error)){
		$structObj = new StructureObj();
		$structObj->setStructureObj($idItem, $itemName, $score, "", $idParent, $scoreDefault);
		if ($model->addStructure($structObj)) {
			showMessage("Thêm thành công!!");
		} else
			showMessage("Thêm thất bại, thử lại sau!!");
		softRedirect("structure.editor.php");
	}
}
?>
<div class="structure-edit-item container">
	<h4 class="text-center">Thêm mới một mục điểm</h4>
	<hr>
	<div class="col-sm-offset-2 col-sm-8">
		<form method="post">
			<div class="form-group">
				<label>Mã mục điểm </label>
                <span class="help-block">(Chỉ chấp nhận ký tự số, chữ, đấu chấm (.) và gạch dưới (_))</span>
				<input class="form-control" required name="idItem" pattern="[a-zA-Z0-9._]+">
			</div>
			<div class="form-group">
				<label>Tên mục điểm</label>
				<textarea class="form-control" required rows="5" name="itemName"></textarea>
			</div>
			<div class="form-group">
				<label>Mục cha của mục điểm này</label>
				<select name="idParent" required class="form-control">
					<option value="0">Không có</option>
					<?php foreach ($structures as $structure) { ?>
						<option value="<?php echo $structure['idItem']; ?>"><?php echo $structure['itemName']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Mức điểm</label>
				<input type="number" name="score" required class="form-control" min="0" max="100" value="0">
			</div>
            <div class="form-group">
                <label>Điểm mặc định</label>
                <input type="number" name="scoreDefault" required class="form-control" min="0" max="100" value="0">
            </div>
			<div class="form-group text-right">
				<input type="hidden" name="requestName" value="save">
				<button class="btn btn-primary">Lưu lại</button>
				<a href="structure.editor.php" class="btn btn-default">Quay về</a>
			</div>
		</form>
	</div>
</div>
