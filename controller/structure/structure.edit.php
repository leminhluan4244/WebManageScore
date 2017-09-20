<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 19/9/2017
 * Time: 11:11 PM
 */

$id = getGETValue("id");
if (!empty($id)) {
	if (!preg_match("/^[a-zA-Z0-9.]+$/", $id))
		redirect("structure.editor.php");
	$struct = $model->getStructure($id);
	if (empty($struct))
		$struct = new StructureObj();
	$structures = $tree->getData();
} else redirect("structure.editor.php");

if (isSubmit('save')) {
	$idItem = getPOSTValue('idItem');
	$itemName = getPOSTValue('itemName');
	$score = getPOSTValue('score');
	$idParent = getPOSTValue('idParent');
	$structObj = new StructureObj();
	$structObj->setStructureObj($idItem, $itemName, $score, "", $idParent);
	if ($model->updateStructure($structObj)) {
		showMessage("Cập nhật thành công!!");
	} else
		showMessage("Cập nhật thất bại, thử lại sau!!");
	softRedirect("structure.editor.php");
}
?>
<div class="structure-edit-item container">
    <h4 class="text-center text-primary">Chỉnh sửa mục điểm</h4>
    <hr>
    <div class="col-sm-offset-2 col-sm-8">
        <form method="post">
            <div class="form-group">
                <label>Mã mục điểm</label>
                <input readonly value="<?php echo $id; ?>" name="idItem" class="form-control">
            </div>
            <div class="form-group">
                <label>Tên mục điểm</label>
                <textarea class="form-control" name="itemName" rows="5"><?php
					echo $struct->getItemName();
					?></textarea>
            </div>
            <div class="form-group">
                <label>Mục cha của mục điểm này</label>
                <select name="idParent" class="form-control">
                    <option value="0">Không có</option>
					<?php foreach ($structures as $structure) { ?>
                        <option value="<?php echo $structure['idItem']; ?>"><?php echo $structure['itemName']; ?></option>
					<?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Mức điểm</label>
                <input type="number" name="score" class="form-control" min="0" max="100"
                       value="<?php echo $struct->getScores(); ?>">
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
