<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 20/9/2017
 * Time: 3:13 PM
 */
if (!defined("IN_STR"))
    die("Bad request!!!");

$maxScoreAllowed = $model->getMaxScore() - 1;

$idItem = '';
$itemName = '';
$score = 0;
$idParent = '';
$scoreDefault = 0;

$structures = $tree->getData();
if (isSubmit('save')){
    $error = false;
	$idItem = getPOSTValue('idItem');
	$itemName = getPOSTValue('itemName');
	$score = (int)getPOSTValue('score');
	$idParent = getPOSTValue('idParent');
	$scoreDefault = (int)getPOSTValue('scoreDefault');
	if (!preg_match('/^[A-Za-z][A-Za-z0-9.]*$/', $idItem)){
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
                <span class="help-block" style="font-weight: bold; font-size: 12px; color: green">
                    (Bắt đầu bằng ký tự; chỉ chứa số, ký tự đấu chấm (.). Ví dụ: I.1)
                </span>
				<input class="form-control" required name="idItem" pattern="[A-Za-z][a-zA-Z0-9.]*"
                    value="<?php echo $idItem; ?>">
			</div>
			<div class="form-group">
				<label>Tên mục điểm</label>
				<textarea class="form-control" required rows="5" name="itemName"><?php
                    echo $itemName;
                ?></textarea>
			</div>
			<div class="form-group">
				<label>Mục cha của mục điểm này</label>
				<select name="idParent" required class="form-control">
					<option value="0">Không có</option>
					<?php foreach ($structures as $structure) { ?>
						<option value="<?php echo $structure['idItem']; ?>"
                            <?php echo ($structure['idItem'] == $idParent) ? "selected": "" ?>>
                            <?php echo $structure['itemName']; ?>
                        </option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Mức điểm</label>
				<input type="number" name="score" required class="form-control" min="0" max="<?php echo $maxScoreAllowed; ?>"
                       value="<?php echo $score; ?>">
			</div>
            <div class="form-group">
                <label>Điểm mặc định</label>
                <input type="number" name="scoreDefault" required class="form-control" min="0" max="<?php echo $maxScoreAllowed; ?>"
                       value="<?php echo $scoreDefault; ?>">
            </div>
			<div class="form-group text-right">
				<input type="hidden" name="requestName" value="save">
				<button class="btn btn-primary">Lưu lại</button>
				<a href="structure.editor.php" class="btn btn-default">Quay về</a>
			</div>
		</form>
	</div>
</div>
