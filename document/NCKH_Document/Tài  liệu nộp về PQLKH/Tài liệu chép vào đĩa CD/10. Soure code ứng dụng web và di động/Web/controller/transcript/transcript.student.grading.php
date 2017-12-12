<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 1/10/2017
 * Time: 5:01 PM
 */
if (!defined("IN_TRS"))
	die("Bad request!!!");
if ($privilege != STUDENT)
	redirect("main.php");

#lưu điểm
if (isSubmit("saveTranscript")){
	require_once '../controller/transcript/transcript.save.php';
}

#thêm bảng điểm
if (!$transcriptMod->isTranscriptExist($accountId, $structureLeafs)){
	$transcriptMod->generateTranscript($accountId, $structureLeafs);
//	showMessage("Generated.");
}

$saMod = new ScoresAddMod();
$addScoreList = $saMod->getListScoreOfStudent($accountId);

$transcriptListScore = $transcriptMod->getEntireTranscript($accountId);

$trTree = new TranscriptTree(array_merge($structureNonLeafs, $transcriptListScore));
$trTree->setPrivilege(STUDENT);
$trTree->setAddScoreList($addScoreList);

$root = $trTree->getRoot();
$trTree->PreOderTreeToHtml($root, 0);
$trTree->generateLastChildHTML();

?>

<h4 class="text-center text-primary">Chấm điểm rèn luyện cá nhân</h4>

<?php require_once '../controller/transcript/transcript.view.php'; ?>

<?php require_once 'scoreAdd.list.view.php'; ?>

<?php require_once '../controller/transcript/evidence.image/upload.php'; ?>
<?php require_once '../controller/transcript/evidence.image/view.php'; ?>

