<div class="col-sm-4">
    <select name="academy" id="" class="form-control">
        <option value="NoneAcademy">--Chọn lớp--</option>
        <?php
        $listAcademy = array();
        $academyMod = new AcademyMod();
        $academyMod = new AcademyMod();
        $listAcademy = $academyMod->getAcademy();
        foreach ($listAcademy as $key => $value){
            echo'<option value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>';
        }
        ?>
    </select>
</div>
