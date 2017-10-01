<?php
  require_once "../controller/header.php"
?>
<div id="div-main" class="container main-academy-container">
<div id="div-edit-permission" class="academy-action-list">
  <div class="row">
    <div class="col-sm-12">
      <h4>Cập nhật lịch chấm điểm theo phân quyền</h4>
      <hr>
      <form action="../controller/permission/permission.update.php" method="post">
        <table id="tbl-edit" class="table table-hover table-condensed table-bordered">
          <thead>
            <tr>
              <th>Phân quyền</th>
              <th>Ngày mở</th>
              <th>Ngày đóng</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
             $permissionArr = (new PermissionMod())->getPermission();
               echo '<tr>';
               echo '<td></td>';
               echo '<td></td>';
               echo '<td>';
               echo '</td>';
               echo '</tr>';
             ?>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-4">
            <select>

            </select>
          </div>
          <div class="col-sm-4">
            <input />
          </div>
          <div class="col-sm-4">
            <input />
          </div>
        </div>
      </div>
        <div class="form-group text-right">
          <br />
          <button type="submit" name="btn-submit" value="save" class="center-block btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span> Lưu lại
                    </button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  require_once "../controller/footer.php";
?>
<!--
echo '<select name="'.$accountArr[$key]->getIdAccount().'" class="thumbnail center-block" style="margin-top: -1px; margin-bottom: 1px">';
   foreach ($permissionArr as $keyOption => $valueOption) {
    if($permissionArr[$keyOption]->getPosition() == $accountArr[$key]->getPermission_position()){
     echo '<option selected disabled value="'.$permissionArr[$keyOption]->getPosition().'">'.$permissionArr[$keyOption]->getPosition().'</option>';
    } else {
     echo '<option value="'.$permissionArr[$keyOption]->getPosition().'">'.$permissionArr[$keyOption]->getPosition().'</option>';
    }
   }
echo '</select>';
