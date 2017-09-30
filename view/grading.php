<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 25/9/2017
 * Time: 10:40 AM
 */
require_once '../helper/account.helper.php';
require_once '../helper/common.helper.php';
if (!isLogged()) {
	redirect('../controller/account/account.login.php');
}

require_once '../model/Link.php';
require_once '../controller/transcript/TranscriptTree.php';
$structureMod = new StructureMod();
$transcriptMod = new TranscriptMod();

$accountId = getLoggedAccountId();

#phải kiểm tra xem có bảng điểm của sinh viên đó chưa rồi mới load lên

if (!$transcriptMod->isTranscriptExist($accountId))
    $transcriptMod->generateTranscript($accountId, $structureMod->getEntireStructureTable());

$trTree = new TranscriptTree($transcriptMod->getEntireTranscript(getLoggedAccountId()));
$trTree->setPrivilege(STUDENT);

$root = $trTree->getRoot();
$trTree->PreOderTreeToHtml($root, 0);

?>
<link rel="stylesheet" href="../public/style/score.board.css">
<?php require_once '../controller/header.php'; ?>

<?php require_once '../controller/transcript/transcript.view.php'; ?>

<?php require_once '../controller/footer.php'; ?>
