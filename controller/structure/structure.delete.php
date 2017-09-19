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
	if (count($tree->getAllDirectChildOf($id)) > 0){
		showMessage("Mục này vẫn còn các mục con, hãy xóa các mục con trước!!");
		softRedirect("../../view/structure.editor.php");
	}
	if ($model->deleteStructure($id)){
		showMessage("Xóa thành công!");
	} else {
		showMessage("Xóa thất bại, hãy thử lại sau!");
	}
	softRedirect("../../view/structure.editor.php");
}