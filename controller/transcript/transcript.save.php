<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 30/9/2017
 * Time: 9:22 PM
 */
$stTree = new StructureTree($structureMod->getEntireStructureTable());
$listId = $stTree->getAllNodeStoreScore("_");
$scoreList = [];
foreach ($listId as $id) {
	$score = getPOSTValue($id);
	$id = str_replace("_", ".", $id);
	$scoreList[$id] = empty($score) ? 0: $score;
}

$privilege = getPOSTValue('privilege');
$updateCol = COL_STUDENT_SCORE;
$accountId = getLoggedAccountId();
if ($privilege == ADVISER){
	$updateCol = COL_ADVISER_SCORE;
	$accountId = "xử lý sau";
}
if ($privilege == ACA_ADMIN) {
	$updateCol = COL_FINAL_SCORE;
	$accountId = "xử lý sau";
}
#bắt đầu cập nhật điểm
$transcriptMod = new TranscriptMod();

$transcriptMod->resetSummaryScore($accountId, $updateCol);
$complete = true;
$summaryScore = 0;
$ancestorId = "";
foreach ($scoreList as $id => $score) {
	$ancId = $stTree->getHighetAncestor($stTree->getData()[$id]);
	if ($ancestorId != $ancId){
		$complete = $transcriptMod->updateTranscriptScore($accountId, $ancestorId, $summaryScore, $updateCol);
		$ancestorId = $ancId;
		$summaryScore = 0;
	}
	$complete = $transcriptMod->updateTranscriptScore($accountId, $id, $score, $updateCol);
	$summaryScore += $score;
}
$complete = $transcriptMod->updateTranscriptScore($accountId, $ancestorId, $summaryScore, $updateCol);
if (!$complete){
	showMessage("Có thể có lỗi trong lúc lưu lại!!");
}