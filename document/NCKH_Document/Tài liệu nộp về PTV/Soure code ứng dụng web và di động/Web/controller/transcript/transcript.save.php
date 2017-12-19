<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 30/9/2017
 * Time: 9:22 PM
 */
if (!defined("IN_TRS"))
	die("Bad request !!!");

if (empty($privilege))
	redirect("grading.php");

#quyền từ dưới client gửi lên
$sentPrivilege = getPOSTValue('privilege');

#xác minh lại
if ($privilege != $sentPrivilege)
	redirect("grading.php");

#lấy các mục có chứa điểm
$structureMod = new StructureMod();
$stTree = new StructureTree($structureMod->getEntireStructureTable());
$listId = $stTree->getAllNodeIdStoreScore("_");
$scoreList = [];
foreach ($listId as $id) {
	$score = getPOSTValue($id);
	$id = str_replace("_", ".", $id);
	$scoreList[$id] = empty($score) ? 0: $score;
}

#kiểm tra cột cần cập nhật dựa trên privilege
$updateCol = COL_STUDENT_SCORE;
$accountId = getLoggedAccountId();
if ($privilege == ADVISER){
	$updateCol = COL_ADVISER_SCORE;
	$accountId = getSession('stdId');
}
if ($privilege == ACA_ADMIN) {
	$updateCol = COL_FINAL_SCORE;
	$accountId = getSession('stdId');
}

if (empty($accountId))
	redirect("grading.php");

#bắt đầu cập nhật điểm
$transcriptMod = new TranscriptMod();

$transcriptMod->resetSummaryScore($accountId, $updateCol);
$complete = true;
$eachSummaryScore = 0;
$finalScore = 0;
$ancestorId = "";
foreach ($scoreList as $id => $score) {
	$ancId = $stTree->getHighestAncestor($stTree->getData()[$id]);
	if ($ancestorId != $ancId){
	    $struct = $structureMod->getStructure($ancestorId);
//		$complete = $transcriptMod->updateTranscriptScore($accountId, $ancestorId, $eachSummaryScore, $updateCol);
		$ancestorId = $ancId;
		$maxScore = $struct->getScores();
		$finalScore += ($eachSummaryScore > $maxScore ? $maxScore: $eachSummaryScore);
		$eachSummaryScore = 0;
	}
	$complete = $transcriptMod->updateTranscriptScore($accountId, $id, $score, $updateCol);
	$eachSummaryScore += $score;
}
//$complete = $transcriptMod->updateTranscriptScore($accountId, $ancestorId, $eachSummaryScore, $updateCol);
#the last item
$struct = $structureMod->getStructure($ancestorId);
$maxScore = $struct->getScores();
$finalScore += ($eachSummaryScore > $maxScore ? $maxScore: $eachSummaryScore);

if (!$complete){
	showMessage("Có thể có lỗi trong lúc lưu lại!!");
}
if ($privilege == ACA_ADMIN)
    require_once '../controller/transcript/transcript.acad.update.final.score.php';