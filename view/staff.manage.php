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
?>
<?php
if(getSession("userToken")['permission'] != 'Admin'){
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
?>
<div class="container-fluid">
    <!--Start content manage staff-->
    <div class="container main-academy-container">
        <div class="academy-action-list">
            <br />
            <div class="form-group">
                <form id="form-filter-teacher"  method="get" action="staff.manage.php">
                    <div class="row">
                        <!--Start combobox academy for staff-->
						<?php
						require "../controller/staff/staff.filter.academy.php";
						?>
                        <!--End combobox academy for staff-->

                        <!---->
                        <!--Start combobox class for staff-->

                        <!--End combobox class for staff-->
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
    <!--End content manage staff-->
</div>

<!--<script src="../public/js/student_action.js"></script>-->
<!--<script>-->
<!--//    $('#form-filter-staff').submit(function(){-->
<!--//        var classId = $('#select-staff-class').val();-->
<!--//        return /^[a-zA-Z0-9]+4/.test(classId);-->
<!--//    });-->
<!--</script>-->
<?php
require_once "../controller/footer.php";
?>
