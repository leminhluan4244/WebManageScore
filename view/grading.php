<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 25/9/2017
 * Time: 10:40 AM
 */
?>


<link rel="stylesheet" href="../public/style/score.board.css">
<?php require_once '../controller/header.php'; ?>
<?php require_once '../controller/permission.find.php'; ?>
<?php require_once '../helper/form.helper.php'; ?>

<?php
require_once '../controller/transcript/TranscriptTree.php';
$privilege = -1;
$lvStudent = false;
$lvAdviser = false;
$lvAcaAdmin = false;
foreach ($power as $pow) {
    if ($pow == "Chấm điểm rèn luyện cá nhân sinh viên")
        $lvStudent = true;
	if ($pow == "Chấm điểm cho một lớp")
		$lvAdviser = true;
	if ($pow == "Chấm điểm rèn luyện cho cả khoa")
		$lvAcaAdmin = true;
}
if ($lvStudent){
    $privilege = STUDENT;
    if ($lvAdviser)
        $privilege = ADVISER;
    if ($lvAcaAdmin)
        $privilege = ACA_ADMIN;
}

if ($privilege < 0){
    showMessage("Bạn không có quyền chấm điểm !!!");
    softRedirect("main.php");
}

$structureMod = new StructureMod();
$transcriptMod = new TranscriptMod();

#lưu điểm
if (isSubmit("saveTranscript")){
	require_once '../controller/structure/StructureTree.php';
	require_once '../controller/transcript/transcript.save.php';
}

$accountId = getLoggedAccountId();

if ($privilege == STUDENT){
    #phải kiểm tra xem có bảng điểm của sinh viên đó chưa rồi mới load lên
	if (!$transcriptMod->isTranscriptExist($accountId))
		$transcriptMod->generateTranscript($accountId, $structureMod->getEntireStructureTable());
	$trTree = new TranscriptTree($transcriptMod->getEntireTranscript($accountId));
	$trTree->setPrivilege(STUDENT);
} else {
    #ông này là cố vấn hoặc quản lý khoa
    $studentId = getGETValue('sid');
    $stdTranscript = $transcriptMod->getEntireTranscript($studentId);
    if (!empty($stdTranscript)){
        $trTree = new TranscriptTree($stdTranscript);
		$trTree->setPrivilege($privilege);
    } else {
		showMessage("Không có sinh viên này!!!");
		softRedirect("main.php");
    }
}

if (empty($trTree)){
    showMessage("Bạn không có quyền chấm điểm!!!");
    softRedirect("main.php");
}

$root = $trTree->getRoot();
$trTree->PreOderTreeToHtml($root, 0);

?>

<h4 class="text-center text-primary">Chấm điểm rèn luyện</h4>

<?php require_once '../controller/transcript/transcript.view.php'; ?>

<?php require_once '../controller/footer.php'; ?>