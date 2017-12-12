<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 1/10/2017
 * Time: 5:04 PM
 */
if (!defined("IN_TRS"))
	die("Bad request!!!");
if ($privilege != ACA_ADMIN)
	redirect("main.php");

if (isSubmit('saveTranscript')) {
//	showMessage("Lưu thành công, hệ thống chuyển về trang chấm điểm");
	require_once '../controller/structure/StructureTree.php';
	require_once '../controller/transcript/transcript.save.php';
}

if (isSubmit("finalGrading")) {
	$studentId = getPOSTValue('stdId');
	if (!preg_match('/^[a-zA-Z0-9]+$/', $studentId))
		$studentId = "";
} else
	$studentId = getSession("stdId");


#kiểm tra xem sinh viên được chấm có tồn tại chưa
$md = new AccountMod();
$student = $md->getAccount($studentId);
if (empty($student))
	redirect('grading.php');

#lưu vào session để load lại sau khi chấm xong
setSession("stdId", $studentId);

#thêm bảng điểm
if (!$transcriptMod->isTranscriptExist($studentId, $structureLeafs)){
	$transcriptMod->generateTranscript($studentId, $structureLeafs);
//	showMessage("Generated.");
}

$saMod = new ScoresAddMod();
$addScoreList = $saMod->getListScoreOfStudent($studentId);

$transcriptListScore = $transcriptMod->getEntireTranscript($studentId);

$trTree = new TranscriptTree(array_merge($structureNonLeafs, $transcriptListScore));
$trTree->setPrivilege($privilege);
$trTree->setAddScoreList($addScoreList);

$root = $trTree->getRoot();
$trTree->PreOderTreeToHtml($root, 0);
$trTree->generateLastChildHTML();
?>
	<h4 class="text-center text-primary">
		Chấm điểm rèn luyện cho sinh viên:
		<strong><i><?php echo $student->getAccountName(); ?></i></strong>
	</h4>

<?php require_once '../controller/transcript/transcript.view.php'; ?>

<?php require_once 'scoreAdd.list.view.php'; ?>
<?php require_once '../controller/transcript/evidence.image/view.php'; ?>
