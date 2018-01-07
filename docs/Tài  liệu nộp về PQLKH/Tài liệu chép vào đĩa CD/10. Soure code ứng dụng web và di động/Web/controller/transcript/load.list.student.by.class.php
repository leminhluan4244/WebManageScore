<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 20/10/2017
 * Time: 12:07 AM
 */
if (!defined("IN_TRS"))
	die("Bad request!!!");
if (!($privilege == ADVISER || $privilege == ACA_ADMIN))
	redirect("main.php");

$clsMod = new ClassMod();
$listClass = [];
if ($privilege == ADVISER)
	$listClass = $clsMod->getListClassOfAdviser(getLoggedAccountId());
else {
	$academyObj = new AcademyObj();
	$academyObj->setIdAcademy($acaAdminId);
	$listClass = $acaMod->getListClass($academyObj);
}

$classId = getPOSTValue("classId");
if (empty($classId))
	$classId = getSession("gradingClass");
else setSession("gradingClass", $classId);

if (!empty($classId)){
	$listStudent = $clsMod->getListStudentInClass($classId);
}
?>
<div class="container">
    <h4>Chọn một lớp</h4>
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-sm-5">
                <select name="classId" class="form-control">
                    <option value="none">Chọn một lớp</option>
					<?php
					foreach ($listClass as $class) { ?>
						<option value="<?php echo $class->getIdClass(); ?>"
                            <?php
                            if ($class->getIdClass() == $classId) {
								echo "selected";
								$className = $class->getClassName();
							}
							?>
                        >
                            <?php echo $class->getClassName() . " - Khóa " . $class->getSchoolYear(); ?>
                        </option>;
					<?php } ?>
                </select>
            </div>
            <div class="form-group col-sm-1">
                <button class="btn btn-primary">Liệt kê</button>
            </div>
        </div>
    </form>
</div>