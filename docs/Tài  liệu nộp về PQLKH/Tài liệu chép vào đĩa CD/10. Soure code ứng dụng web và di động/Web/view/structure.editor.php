<?php
/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 16/09/2017
 * Time: 21:06
 */
define("IN_STR", true);
require_once '../helper/account.helper.php';
require_once '../helper/common.helper.php';
if (!isLogged()) {
	redirect('../controller/account/account.login.php');
}

$privilege = getInfo("permission");
if ($privilege !== "Admin"){
	redirect('../controller/account/account.login.php');
}

$a = empty($_GET['a']) ? 'editor.view': $_GET['a'];

$canModify = true;

$path = "../controller/structure/structure.$a.php";
?>

<?php require_once '../controller/header.php'; ?>
<link rel="stylesheet" href="../public/style/score.board.css">

<?php
if (file_exists($path)){
	require_once '../model/Link.php';
	require_once '../controller/structure/modify.check.php';
	require_once '../helper/form.helper.php';
	require_once '../helper/common.helper.php';
	require_once '../controller/structure/StructureTree.php';
	if (!$canModify && $a !== "editor.view"){
		showMessage($reasonMsg);
		softRedirect('structure.editor.php');
		die();
	}
	$model = new StructureMod();
	$tree = new StructureTree($model->getEntireStructureTable());
	$root = $tree->getRoot();
	$tree->PreOderTreeToHtml($root, 0, $tree->getEditMode());
	require_once $path;
}
?>

<?php require_once '../controller/footer.php'; ?>