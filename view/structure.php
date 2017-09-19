<?php
/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 16/09/2017
 * Time: 21:06
 */
require_once '../model/Link.php';
require_once '../controller/structure/StructureTree.php';
$md = new StructureMod();
$tree = new StructureTree($md->getEntireStructureTable());
//var_dump($tree->getNextSiblingOf($tree->getLeftMostChildOf($tree->getRoot())));
$root = $tree->getRoot();
$tree->PreOderTreeToHtml($root, 0);
?>

<?php require_once '../controller/header.php'; ?>

	<link rel="stylesheet" href="../public/style/score.board.css">

<?php require_once '../controller/structure/score.board.view.php'?>

<?php require_once '../controller/footer.php'; ?>