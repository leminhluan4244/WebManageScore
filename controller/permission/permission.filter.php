<?php
  $permissionArr = (new PermissionMod())->getPermission();
  $academyArr = (new AcademyMod())->getAcademy();
  $classArr = (new ClassMod())->getClass();
  $branchArr = (new BranchMod())->getBranch();
?>
  <form action="#" method="post">
    <div class="academy-action-menu btn-group">
      <select class="thumbnail btn" name="" style="margin-right:6px">
      <option selected hidden>-- Chọn theo phân quyền --</option>
      <option selected disabled>-- Chọn theo phân quyền --</option>
        <?php
          foreach ($permissionArr as $key => $value) {
            echo '<option value="">'.$permissionArr[$key]->getPosition().'</option>';
          }
        ?>
    </select>
      <select class="thumbnail btn" name="" style="margin-right:6px">
        <option selected hidden>-- Chọn theo khoa --</option>
        <option selected disabled>-- Chọn theo khoa --</option>
        <?php
          foreach ($academyArr as $key => $value) {
            echo '<option value="">'.$academyArr[$key]->getAcademyName().'</option>';
          }
        ?>
      </select>
      <select class="thumbnail btn" name="" style="margin-right:6px">
       <option selected hidden>-- Chọn theo lớp --</option>
        <option selected disabled>-- Chọn theo lớp --</option>
           <?php
                 foreach ($classArr as $key => $value) {
                   echo '<option value="">'.$classArr[$key]->getClassName().'</option>';
                 }
               ?>
           </select>
      <select class="thumbnail btn" name="" style="margin-right:6px">
               <option selected hidden>-- Chọn theo chi hội --</option>
               <option selected disabled>-- Chọn theo chi hội --</option>
               <?php
                 foreach ($branchArr as $key => $value) {
                   echo '<option value="">'.$branchArr[$key]->getBranchName().'</option>';
                 }
               ?>
             </select>
      <button type="submit" class="center-block btn btn-primary" style="margin-top:-3px">Lọc</button>
    </div>
  </form>
