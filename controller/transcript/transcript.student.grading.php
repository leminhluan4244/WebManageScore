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
	require_once '../controller/structure/StructureTree.php';
	require_once '../controller/transcript/transcript.save.php';
}

#phải kiểm tra xem có bảng điểm của sinh viên đó chưa rồi mới load lên
if (!$transcriptMod->isTranscriptExist($accountId))
	$transcriptMod->generateTranscript($accountId, $structureMod->getEntireStructureTable());

$saMod = new ScoresAddMod();
$addScoreList = $saMod->getListScoreOfStudent($accountId);

$trTree = new TranscriptTree($transcriptMod->getEntireTranscript($accountId));
$trTree->setPrivilege(STUDENT);
$trTree->setAddScoreList($addScoreList);

$root = $trTree->getRoot();
$trTree->PreOderTreeToHtml($root, 0);

?>

<h4 class="text-center text-primary">Chấm điểm rèn luyện cá nhân</h4>

<?php require_once '../controller/transcript/transcript.view.php'; ?>