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
			<th colspan="2" class="text-center">Thông tin người dùng <a href="" id="toggle-user-info" class="close">&raquo;</a></th>
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
</div>
