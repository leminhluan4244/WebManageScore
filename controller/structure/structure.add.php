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
	$idItem = getPOSTValue('idItem');
	$itemName = getPOSTValue('itemName');
	$score = (int)getPOSTValue('score');
	$idParent = getPOSTValue('idParent');
	$scoreDefault = (int)getPOSTValue('scoreDefault');
	if (trim($idItem, " ") == "" ||
            empty(trim($itemName, " ")) || trim($idParent, " ") == ""){
	    showMessage("Hãy điền đầy đủ thông tin!");
    } else {
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
				<label>Mã mục điểm</label>
				<input class="form-control" required name="idItem">
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
