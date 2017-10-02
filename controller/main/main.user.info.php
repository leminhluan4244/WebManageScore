<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 18/9/2017
 * Time: 10:15 PM
 */
$rootUri = dirname(dirname(__DIR__));
require_once "$rootUri/helper/account.helper.php";
$loggedAccount = getLoggedAccountInfo();
?>
<div class="col-sm-5 div-user-info">
	<table class="table">
		<thead>
		<tr>
			<th colspan="2" class="text-center">Thông tin người dùng <a href="#user-info" data-toggle="collapse"
																		class="close">&raquo;</a></th>
		</tr>
		</thead>
		<tbody id="user-info">
		<?php if (!empty($loggedAccount)){ ?>
			<tr>
				<td>Mã SV/CB</td>
				<td><?php echo $loggedAccount["idAccount"]; ?></td>
			</tr>
			<tr>
				<td>Họ tên</td>
				<td><?php echo $loggedAccount["name"]; ?></td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td><?php echo $loggedAccount["birthday"]; ?></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td><?php echo $loggedAccount["sex"]; ?></td>
			</tr>
			<tr>
				<td>Nơi công tác</td>
				<td><?php echo $loggedAccount["address"]; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php
   if(getSession("userToken")['permission'] == 'Sinh viên'){
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
 		      $studentId = getSession("stdId");
 		    $tempMod = new ScoresAddMod();
 		    $transMod = new TranscriptMod();
 		    $scoreTable = $tempMod->getScoresForStudent($studentId);
 		      $i = 0;
 		      if ($scoreTable > 0) {
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
 		      <?php } } ?>
 		            </tbody>
 		        </table>
 		    </div>
 		  </div>
 		</div>
 <?php
   }
  ?>
</div>
