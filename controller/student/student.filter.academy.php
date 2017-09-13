<!--Start combobox academy for student-->
<div class="col-sm-4">
    <select name="academy"  class="form-control">
        <option value="Công nghệ thông tin và truyền thông">--Chọn theo khoa--
        </option>
        <?php
            $acdemyM = new AcademyMod();
            $list = array();
            $list = $acdemyM->getAcademy();
            foreach ($list as $key=>$value) {
                echo '
                 <option value="'.$value->getIdAcademy().'">'.$value->getAcademyName().'</option>
            ';
            }
        ?>
    </select>
</div>
<!--End combobox academy for student-->