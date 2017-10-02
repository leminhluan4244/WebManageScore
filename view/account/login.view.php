<?php
/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 9/11/17
 * Time: 2:34 PM
 */
?>

<div class="container-fluid">
	<div class="col-sm-5 div-login">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<span class="panel-title"><strong>Đăng nhập</strong></span>
			</div>
			<div class="panel-body">
				<form method="post" id="form-login">
					<div class="form-group input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
						<input name="username" required placeholder="Tên đăng nhập" class="form-control">
					</div>
					<div class="form-group input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
						<input type="password" required name="password" placeholder="Mật khẩu" class="form-control">
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="input-group">

                            <span class="input-group-addon">
                            <i class=" glyphicon glyphicon-eye-open"></i>
                        </span>
								<input name="captcha" required placeholder="Mã xác nhận" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<img src="../../controller/account/security/captcha.img.php" alt="Captcha" title="Click vào để đổi" data-toggle="tooltip" id="captcha">
						</div>
					</div>
					<br>
					<div class="row text-center">
						<button class="btn btn-primary">Đăng nhập</button>
						<input type="hidden" name="requestName" value="login">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-7 div-news">
		<div class="news-header text-center">
			<span><strong>Tin tức</strong></span>
		</div>
		<div class="news-body">
      <?php
			 require_once("../../model/ConnectToSQL.php");
			 require_once("../../model/PermissionObj.php");
			 require_once("../../model/PermissionMod.php");
			 require_once("../../model/CalendarScoringMod.php");
			 require_once("../../model/CalendarScoringObj.php");
			 $permissionArr = (new PermissionMod())->getPermission();
			 $today = date("d/m/Y");
			 foreach ($permissionArr as $key => $value) {
				 $arr = (new CalendarScoringMod())->getCalendarWithPermissionPosition($value->getPosition());
				 if(!empty($arr)){
					 $open = date("d/m/Y", strtotime($arr['openDate']));
					 $close = date("d/m/Y", strtotime($arr['closeDate']));
					 if(!($today < $open || $today > $close)){
						 echo '<div class="alert alert-info">'.$open;
 						 echo '- Đã mở đợt chấm điểm rèn luyện cho '.$arr['Permission_position'];
 						 echo '</div>';
					 }
				 }
			 }
			?>
		</div>
	</div>
</div>
