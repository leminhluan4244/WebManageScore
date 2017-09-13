<!--Start combobox class for student-->
<div class="col-sm-4">
    <select name="class" class="form-control">
        <option value="Công nghệ thông tin và truyền thông">--Chọn theo lớp--
        </option>
        <?php
        $classM = new ClassMod();
        $list = array();
        $list = $classM->getClass();
        foreach ($list as $key=>$value) {
            echo '
                 <option value="'.$value->getIdClass().'">'.$value->getClassName().'</option>
            ';
        }
        ?>
    </select>
</div>
<!--End combobox class for student-->