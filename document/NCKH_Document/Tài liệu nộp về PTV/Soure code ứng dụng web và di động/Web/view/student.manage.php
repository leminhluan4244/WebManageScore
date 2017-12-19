<?php
require_once "../controller/header.php";
require_once "../helper/common.helper.php";
require_once "../helper/form.helper.php";
$accountObj = new AccountObj();
$accountMod = new AccountMod();
$academyObj = new AcademyObj();
$academyMod = new AcademyMod();
$classObj = new ClassObj();
$classMod = new ClassMod();
$perObj = new PermissionObj();
$perMod = new PermissionMod();
?>
<?php
if(getSession("userToken")['permission'] != 'Admin'){
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
?>
<div class="container-fluid">
    <!--Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list">

            <h4>Danh sách sinh viên</h4>
            <div class="form-group">
                <form id="form-filter-student">
                    <div class="row">
                        <!--Start combobox academy for student-->
						<?php
						require "../controller/student/student.filter.academy.php";
						?>
                        <!--End combobox academy for student-->

                        <!---->
                        <!--Start combobox class for student-->
						<?php
						require "../controller/student/student.filter.class.php";
						?>
                        <!--End combobox class for student-->
                        <!---->
                        <!--Start buttun filter-->
                        <button class="btn btn-primary col-sm-1">Lọc</button>

                        <!--End buttun filter-->
                    </div>

                </form>
            </div>
            <!--End filter table-->
            <!--Begin table-->
			<?php
			require_once "../controller/student/student.content.php";
			?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<script src="../public/js/student_action.js"></script>
<?php
require_once "../controller/footer.php";
?>
