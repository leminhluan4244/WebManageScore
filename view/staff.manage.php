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

            <h4>Danh sách cán bộ</h4>
            <div class="form-group">
                <form id="form-filter-teacher"  method="get" action="staff.manage.php">
                    <div class="row">
                        <!--Start combobox academy for student-->
						<?php
						require "../controller/staff/staff.filter.academy.php";
						?>
                        <!--End combobox academy for student-->

                        <!---->
                        <!--Start combobox class for student-->

                        <!--End combobox class for student-->
                        <!---->
                        <!--Start buttun filter-->
                        <button class="btn btn-primary col-sm-1" name="btnfilter">Lọc</button>

                        <!--End buttun filter-->
                    </div>

                </form>
            </div>
            <!--End filter table-->

			<?php
			require_once "../controller/staff/staff.content.php";
			?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<script src="../public/js/student_action.js"></script>
<!--<script>-->
<!--//    $('#form-filter-student').submit(function(){-->
<!--//        var classId = $('#select-student-class').val();-->
<!--//        return /^[a-zA-Z0-9]+4/.test(classId);-->
<!--//    });-->
<!--</script>-->
<?php
require_once "../controller/footer.php";
?>
