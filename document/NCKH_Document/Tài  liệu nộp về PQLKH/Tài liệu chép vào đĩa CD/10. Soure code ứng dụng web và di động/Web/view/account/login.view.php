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
						<div class="col-sm-6" id="captcha-img">
							<img src="../../controller/account/security/captcha.img.php" alt="Captcha" title="Click vào để đổi" data-toggle="tooltip" id="captcha">
						</div>
					</div>
					<br>

                    <label>Admin01 - Test Admin</label><br>
                    <label>AAAA - Test Student</label><br>
                    <label>NNNN - Test Branch Manage</label><br>
                    <label>CB101 - Test Staff</label><br>
                    <label>QL101 - Test Academy </label><br>
                    <label>PASS ALL ACCOUNT  - 1234 </label><br>

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
			 $today = date("Y-m-d");
			 foreach ($permissionArr as $key => $value) {
				 $arr = (new CalendarScoringMod())->getCalendarWithPermissionPosition($value->getPosition());
         if(!empty($arr)){
					#Cố vấn học tập, Quản lý chi hội, Quản lý khoa, Sinh viên và phân quyền mới (nếu có)
					if(strcmp($arr['Permission_position'], "Admin") == 0 && strcmp($arr['Permission_position'], "Default") == 0){
						continue;
				  }
					$open = date("d/m/Y", strtotime($arr['openDate']));
					if(!($today < $arr['openDate'] || $today > $arr['closeDate'])){
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
