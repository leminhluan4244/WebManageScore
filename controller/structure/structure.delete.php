<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 19/9/2017
 * Time: 10:58 PM
 */

require_once '../../helper/common.helper.php';
require_once '../../helper/form.helper.php';
require_once '../../model/StructureMod.php';
require_once '../../model/ConnectToSQL.php';
require_once 'StructureTree.php';
$model = new StructureMod();
$tree = new StructureTree($model->getEntireStructureTable());
if (isSubmit("delete")){
	$id = getPOSTValue('id');
	$listId = [];
	$tree->PreOrderTreeToGetAllChildIdOf($id, $listId);
	$result = true;
	foreach ($listId as $itemId) {
		$result = $model->deleteStructure($itemId);
	}
	if ($result){
		showMessage("Xóa thành công!");
	} else {
		showMessage("Xóa thất bại, hãy thử lại sau!");
	}
	softRedirect("../../view/structure.editor.php");
}