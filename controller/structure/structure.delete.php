<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 19/9/2017
 * Time: 10:58 PM
 */
if (!defined("IN_STR"))
	die("Bad request!!!");
require_once '../helper/common.helper.php';
require_once '../helper/form.helper.php';
require_once '../model/StructureMod.php';
require_once '../model/ConnectToSQL.php';
require_once '../controller/structure/StructureTree.php';
$model = new StructureMod();
$tree = new StructureTree($model->getEntireStructureTable());
if (isSubmit("delete")){
	$id = getPOSTValue('id');
	if ($tree->isLastChildOfRoot($id)){
		showMessage("Mục điểm này chỉ có thể Chỉnh sửa");
		softRedirect("../view/structure.editor.php");
		die();
	}
	$listId = [];
	$tree->PreOrderTreeToGetAllChildIdOf($id, $listId);
	$result = true;
	foreach ($listId as $itemId) {
		$result = $model->deleteStructure($itemId);
	}
	if (!$result){
		showMessage("Xóa thất bại, hãy thử lại sau!");
	} else {
//		showMessage("Xóa thành công!");
	}
	softRedirect("../view/structure.editor.php");
}