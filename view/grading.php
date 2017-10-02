<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 25/9/2017
 * Time: 10:40 AM
 */
define("IN_TRS", true);

?>

<link rel="stylesheet" href="../public/style/score.board.css">
<?php require_once '../controller/header.php'; ?>
<?php require_once '../controller/permission.find.php'; ?>
<?php require_once '../helper/form.helper.php'; ?>

<?php
if (!isLogged())
	redirect("../controller/account/account.login.php");

require_once("../model/CalendarScoringMod.php");
$today = date("Y-m-d");
$arr = (new CalendarScoringMod())->getCalendarWithPermissionPosition(getSession("userToken")['permission']);
if($today < $arr['openDate'] || $today > $arr['closeDate']){
	showMessage("Hệ thống chấm điểm chưa mở");
	softRedirect("main.php");
	die();
}

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
if ($lvStudent) {
	$privilege = STUDENT;
	if ($lvAdviser)
		$privilege = ADVISER;
	if ($lvAcaAdmin)
		$privilege = ACA_ADMIN;
}

$permission = getInfo("permission");
$isStudent = $permission == "Sinh viên" || $permission == "Quản lý chi hội";

# CHỈ có quyền chấm điểm cho sinh viên nhưng ko phải là sinh viên
if ($privilege < 0 || ($privilege == STUDENT && !$isStudent)) {
	showMessage("Bạn không có quyền chấm điểm !!!");
	softRedirect("main.php");
}

$structureMod = new StructureMod();
$transcriptMod = new TranscriptMod();

$accountId = getLoggedAccountId();

if ($privilege == STUDENT) {
	require_once '../controller/transcript/transcript.student.grading.php';
	require_once 'scoreAdd.list.view.php';
} else {
	#ông này là cố vấn hoặc quản lý khoa
	$action = isset($_GET['a']) ? $_GET['a'] : 'view';
	if (!preg_match("/^[a-zA-Z]+$/", $action))
		$action = 'view';
	$type = $privilege == ADVISER ? 'adviser' : 'acad';
	$path = "../controller/transcript/transcript.$type.$action.php";
	if (file_exists($path))
		require_once $path;
	else
		redirect('main.php');
}
?>

    <div class="navigator" id="nav">
        <a href="#viewScoreAdd" class="link-nav">Điểm cộng</a>
    </div>

    <script>
        $(function(){
            $('[data-toggle="tooltip]').tooltip();
            var provisions = $('.section-1');
            var html = "";
            $.each(provisions, function(i, provision){
                if (provision.id !== "")
                    html += '<a href="#' + provision.id + '" class="link-nav">' + toNumber(provision.id) + '</a>';
            });
            $('#nav').prepend(html);
        });
        function toNumber(str){
            var number = {
                I: 4,
                II: 5,
                III: 6,
                IV: 7,
                V: 8
            };
            return number[str];
        }
    </script>

<?php require_once '../controller/footer.php'; ?>