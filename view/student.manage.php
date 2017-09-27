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
<div class="container-fluid">
    <!--Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list">

            <h4>Danh sách sinh viên</h4>
            <div class="form-group">
                <form action="" method="get">
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
                        <input type="submit" value="Lọc" class="btn btn-primary col-sm-1">

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
