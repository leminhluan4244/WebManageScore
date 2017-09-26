<?php
  require_once "../controller/header.php"
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#btn-list-permission").addClass("active");
      $("#div-list-permission").show();
      $("#div-edit-permission").hide();
      $("#div-delete-permission").hide();
      $("#btn-list-permission").click(function() {
        $("#btn-list-permission").addClass("active");
        $("#btn-edit-permission").removeClass("active");
        $("#btn-delete-permission").removeClass("active");
        $("#div-list-permission").show();
        $("#div-edit-permission").hide();
        $("#div-delete-permission").hide();
      });
      $("#btn-edit-permission").click(function() {
        $("#btn-list-permission").removeClass("active");
        $("#btn-edit-permission").addClass("active");
        $("#btn-delete-permission").removeClass("active");
        $("#div-list-permission").hide();
        $("#div-edit-permission").show();
        $("#div-delete-permission").hide();
      });
      $("#btn-delete-permission").click(function() {
        $("#btn-list-permission").removeClass("active");
        $("#btn-edit-permission").removeClass("active");
        $("#btn-delete-permission").addClass("active");
        $("#div-list-permission").hide();
        $("#div-edit-permission").hide();
        $("#div-delete-permission").show();
      });
      $("#isSelected").change(function() {
        console.log($("#isSelected").val());
      });
    });
  </script>
  <div id="div-main" class="container main-academy-container">
    <br />
    <div class="academy-action-menu btn-group">
      <button id="btn-list-permission" class="btn btn-primary">Hiển thị danh sách các phân quyền</button>
      <button id="btn-edit-permission" class="btn btn-primary">Sửa phân quyền</button>
      <button id="btn-delete-permission" class="btn btn-primary">Xóa phân quyền</button>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <br />
        <?php
          require_once "../controller/permission/permission.filter.php";
        ?>
      </div>
    </div>
    <div id="div-list-permission" class="academy-action-list">
      <div class="row">
        <div class="col-sm-12">
          <h4>Danh sách theo phân quyền của người dùng</h4>
          <hr>
          <form action="#" method="post">
            <table class="table table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th>Mã số</th>
                  <th>Họ tên</th>
                  <th>Phân quyền</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                 $accountArr = (new AccountMod())->getAllAccount();
                 foreach ($accountArr as $key => $value) {
                   echo '<tr>';
                   echo '<td>'.$accountArr[$key]->getIdAccount().'</td>';
                   echo '<td>'.$accountArr[$key]->getAccountName().'</td>';
                   echo '<td>'.$accountArr[$key]->getPermission_position().'</td>';
                   echo '</tr>';
                 }
                 ?>
              </tbody>
            </table>
            <div class="form-group text-right">
              <button type="submit" name="btn-submit" value="list" class="center-block btn btn-primary">
                            <span class="glyphicon glyphicon-repeat"></span> Trở về
                        </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="div-edit-permission" class="academy-action-list" style="display: none;">
      <div class="row">
        <div class="col-sm-12">
          <h4>Cập nhật danh sách theo phân quyền của người dùng</h4>
          <hr>
          <form action="../controller/permission/permission.update.php" method="post">
            <table class="table table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th>Mã số</th>
                  <th>Họ tên</th>
                  <th>Phân quyền</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                 $accountArr = (new AccountMod())->getAllAccount();
                 $permissionArr = (new PermissionMod())->getPermission();
                 foreach ($accountArr as $key => $value) {
                   echo '<tr>';
                   echo '<td>'.$accountArr[$key]->getIdAccount().'</td>';
                   echo '<td>'.$accountArr[$key]->getAccountName().'</td>';
                   echo '<td>';
                   echo '<select name="'.$accountArr[$key]->getIdAccount().'" class="thumbnail center-block" style="margin-top: -1px; margin-bottom: 1px">';
                      foreach ($permissionArr as $keyOption => $valueOption) {
                       if($permissionArr[$keyOption]->getPosition() == $accountArr[$key]->getPermission_position()){
                        echo '<option selected disabled value="'.$permissionArr[$keyOption]->getPosition().'">'.$permissionArr[$keyOption]->getPosition().'</option>';
                       } else {
                        echo '<option value="'.$permissionArr[$keyOption]->getPosition().'">'.$permissionArr[$keyOption]->getPosition().'</option>';
                       }
                      }
                   echo '</select>';
                   echo '</td>';
                   echo '</tr>';
                  }
                 ?>
              </tbody>
            </table>
            <div class="form-group text-right">
              <button type="submit" name="btn-submit" value="save" class="center-block btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span> Lưu lại
                        </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="div-delete-permission" class="academy-action-list" style="display: none;">
      <div class="row">
        <div class="col-sm-12">
          <h4>Xóa phân quyền của người dùng</h4>
          <hr>
          <form action="../controller/permission/permission.update.php" method="post">
            <table class="table table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th>Mã số</th>
                  <th>Họ tên</th>
                  <th>Phân quyền</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                 $accountArr = (new AccountMod())->getAllAccount();
                 foreach ($accountArr as $key => $value) {
                   echo '<tr>';
                   echo '<td>'.$accountArr[$key]->getIdAccount().'</td>';
                   echo '<td>'.$accountArr[$key]->getAccountName().'</td>';
                   echo '<td>'.$accountArr[$key]->getPermission_position().'</td>';
                   echo '<td><label><input type="checkbox" value="'.$accountArr[$key]->getIdAccount().'" name="checkbox[]"></label></td>';
                   echo '</tr>';
                 }
                 ?>
              </tbody>
            </table>
            <div class="form-group text-right">
              <button type="submit" name="btn-submit" value="delete" class="center-block btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Xóa
                        </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  	require_once "../controller/footer.php";
  ?>
