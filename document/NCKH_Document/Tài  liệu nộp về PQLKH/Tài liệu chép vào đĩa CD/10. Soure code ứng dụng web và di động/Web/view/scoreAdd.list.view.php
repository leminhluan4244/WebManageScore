<?php
if (!defined("IN_TRS"))
    die("Bad request!");
if ($privilege == STUDENT)
	$studentId = $accountId;
else
	$studentId = getSession("stdId");
$tempMod = new ScoresAddMod();
$transMod = new TranscriptMod();
$scoreTable = $tempMod->getScoresForStudent($studentId);
?>

<hr>
<div class="container container-no-height" id="diem-cong">
    <h4 class="text-center text-primary">Danh sách các mục điểm cộng trừ</h4>
    <!--End filter table-->
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
			$i = 0;
			if ($scoreTable > 0) {
			foreach ($scoreTable as $key => $value) { ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td class="text-left"><?php echo $value->getScoreName(); ?></td>
                    <td class="text-left"><?php
						$name = $transMod->getTranscriptName($studentId, $value->getTranscript_idItem());
                        if (strlen($name) < 65)
                            echo  $name;
                        else {
							$a = "<a data-toggle='popover' data-trigger='hover' 
                                    data-content='$name' href='#' onclick='return false;'
                                    data-placement='top'>Xem</a>";
							echo substr($name, 0, 65) . " ..." . $a;
                        }
                        ?></td>
                    <td><?php echo $value->getScores(); ?></td>
                    <td><?php
                        $tempMD = new AccountMod();
                        $tempAcc = $tempMD->findAccountByID($value->getIdAccountManage());
                        echo $tempAcc['accountName'];
                        ?></td>
                </tr>
			<?php } } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>
