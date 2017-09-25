<!--Start combobox class for student-->
<div class="col-sm-4 form-group">
    <select id="select-student-class" name="class" class="form-control">
        <?php
        $classObj = new ClassObj();
        $classMod = new ClassMod();
        $listClass = $classMod->getClass();
        ?>
        <option value ="NullClass">-- Chọn theo lớp --</option>
        <?php
        foreach ($listClass as $key=>$value){
            echo ' <option value="'.$value->getIdClass().'">'.$value->getClassName().'</option>';
        }

        ?>
    </select>
</div>
<!--End combobox class for student-->