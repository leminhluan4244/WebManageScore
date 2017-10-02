<!--Start combobox academy for student-->
<div class="col-sm-4 form-group">
    <select name="a" class="form-control" id="select-student-academy">
        <option value="all">-- Chọn theo khoa --</option>
		<?php
		$academyMod = new AcademyMod();
		$list = array();
		$list = $academyMod->getAcademy();
		foreach ($list as $key => $value) { ?>
            <option value="<?php echo $value->getIdAcademy(); ?>"><?php echo $value->getAcademyName(); ?></option>
		<?php } ?>
    </select>
</div>
<!--End combobox academy for student-->