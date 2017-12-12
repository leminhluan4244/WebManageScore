<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 18/9/2017
 * Time: 9:42 PM
 */
?>
<?php require_once '../controller/header.php'; ?>
<?php require_once '../controller/permission/function.display.php'; ?>
<?php
if (empty(getSession("userToken")['permission']))
	redirect("../controller/account/account.login.php");
?>
<div class="container main-container">
	<?php require_once '../controller/main/main.user.info.php'; ?>
	<?php require_once '../controller/main/main.panel.php'; ?>
	<?php
	if (getSession("userToken")['permission'] == 'Sinh viên' || getSession("userToken")['permission'] == 'Quản lý chi hội') {
		?>
        <div class="row">
            <div class="col-sm-12 well well-lg">
                <div class="table-view">
                    <!--Start buttun filter-->
                    <table class="table table-bordered table-condensed" id="table-manage-scoreAdd">

                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên bảng điểm</th>
                            <th>Mục tác động</th>
                            <th>Số điểm</th>
                            <th>Cán bộ thực hiện</th>
                        </tr>
                        </thead>
                        <tbody class="text-center align-self-center">
						<?php
						$studentId = getLoggedAccountId();
						$tempMod = new ScoresAddMod();
						$transMod = new TranscriptMod();
						$scoreTable = $tempMod->getScoresForStudent($studentId);
						$i = 0;
						if ($scoreTable) {
							foreach ($scoreTable as $key => $value) { ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td class="text-left"><?php echo $value->getScoreName(); ?></td>
                                    <td class="text-left"><?php
										$name = $transMod->getTranscriptName($studentId, $value->getTranscript_idItem());
										$a = "<a data-toggle='popover' data-trigger='hover'
   		                                    data-content='$name' href='#' onclick='return false;'
   		                                    data-placement='top'>Xem</a>";
										echo substr($name, 0, 65) . " ..." . $a;
										?></td>
                                    <td><?php echo $value->getScores(); ?></td>
                                    <td><?php
										$tempMD = new AccountMod();
										$tempAcc = $tempMD->findAccountByID($value->getIdAccountManage());
										echo $tempAcc['accountName'];
										?></td>
                                </tr>
							<?php }
						} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		<?php
	}
	?>
</div>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>
<?php require_once '../controller/footer.php'; ?>

