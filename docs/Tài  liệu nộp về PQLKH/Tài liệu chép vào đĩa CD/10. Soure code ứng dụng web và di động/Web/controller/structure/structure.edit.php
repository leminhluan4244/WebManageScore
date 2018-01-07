<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 19/9/2017
 * Time: 11:11 PM
 */
if (!defined("IN_STR"))
	die("Bad request!!!");

$id = getGETValue("id");
if (!empty($id)) {
	if (!preg_match("/^[A-Za-z][a-zA-Z0-9.]*$/", $id))
		redirect("structure.editor.php");
	$struct = $model->getStructure($id);
	if (empty($struct))
		$struct = new StructureObj();
	$structures = $tree->getData();
} else redirect("structure.editor.php");

if (isSubmit('save')) {
    $error = false;
	$idItem = getPOSTValue('idItem');
	$itemName = getPOSTValue('itemName');
	$score = (int)getPOSTValue('score');
	$idParent = getPOSTValue('idParent');
	$scoreDefault = (int)getPOSTValue('scoreDefault');

	$structObj = new StructureObj();
	$structObj->setStructureObj($idItem, $itemName, $score, "", $idParent, $scoreDefault);
	if (trim($idItem, " ") == "" || empty(trim($itemName, " ")) || trim($idParent, " ") == ""){
	    $error = true;
		showMessage("Hãy điền đầy đủ thông tin!");
	} else if ($tree->isAncestor($idItem, $idParent)){
	    showMessage("Mục cha đang chọn là mục con của mục đang chỉnh sửa");
	    $error = true;
	}

	if ($scoreDefault > $score){
		$error = true;
		showMessage("Điểm mặc định không được lớn hơn điểm quy định");
	}

	if ($idParent != ST_ROOT){
		$parentNode = $structures[$idParent];
		$maxScoreAllowed = $structures[$tree->getHighestAncestor($parentNode)]["scores"];
	} else {
		$maxScoreAllowed = $model->getMaxScore() - 1;
	}

	if ($score > $maxScoreAllowed){
		$error = true;
		showMessage("Điểm số của mục này không được lớn hơn quy định là $maxScoreAllowed");
	}
	
    if (!$error) {
		if ($model->updateStructure($structObj)) {
			showMessage("Cập nhật thành công!!");
		} else
			showMessage("Cập nhật thất bại, thử lại sau!!");
		softRedirect("structure.editor.php");
    }
}
?>
<div class="structure-edit-item container">
    <h4 class="text-center text-primary">Chỉnh sửa mục điểm</h4>
    <hr>
    <div class="col-sm-offset-2 col-sm-8">
        <form method="post">
            <div class="form-group">
                <label>Mã mục điểm</label>
                <input readonly required value="<?php echo $id; ?>" name="idItem" class="form-control">
            </div>
            <div class="form-group">
                <label>Tên mục điểm</label>
                <textarea class="form-control" required name="itemName" rows="5"><?php
					echo $struct->getItemName();
					?></textarea>
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
                <input type="number" name="score" required class="form-control" min="0" max="100"
                       value="<?php echo $struct->getScores(); ?>">
            </div>
            <div class="form-group">
                <label>Điểm mặc định</label>
                <input type="number" name="scoreDefault" required class="form-control" min="0" max="100"
                       value="<?php echo $struct->getScoreDefault(); ?>">
            </div>
            <div class="form-group text-right">
                <input type="hidden" name="requestName" value="save">
                <button class="btn btn-primary">Lưu lại</button>
                <a href="structure.editor.php" class="btn btn-default">Quay về</a>
            </div>
        </form>
    </div>
</div>
<script>
    $(function(){
        $('option').removeAttr('selected');
        $('option[value="<?php echo $struct->getIdParent(); ?>"]').attr("selected", true);
    });
</script>
