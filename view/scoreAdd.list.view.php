<?php
$idScore = getSession("stdId");
if (empty($idSocre))
	$idScore = $accountId;
$tempMod = new ScoresAddMod();
$scoreTable = $tempMod->getScoresForStudent($idScore);
?>

<hr>
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
			foreach ($scoreTable as $key => $value) {
				echo '<tr>
                                <td>' . ++$i . '</td>
                                <td>
                                    ' . $value->getScoreName() . '
                                </td>
                                <td>
                                    ' . $value->getTranscript_idItem() . '
                                </td>
                                <td>
                                    ' . $value->getScores() . '
                                </td>
                                <td>
                                    ' . $value->getIdAccountManage() . '
                                </td>     
                            </tr>';
			}
		}

		?>
        </tbody>
    </table>
</div>
