<?php
  require_once "../controller/header.php"
?>
<?php
 if(getSession("userToken")['permission'] != 'Admin'){
  echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
 }
?>
  <?php
  $permissionArr = (new PermissionMod())->getPermission();
?>
    <?php
  if(!empty($_POST['btn-submit']) && !empty($_POST['select']) && $_POST['btn-submit'] == 'view'){
    $newPermissionObj = new PermissionObj();
    $newPermissionMod = new PermissionMod();
    $arr = $newPermissionMod->selectPower($_POST['select']);
    echo '<script>
    $(document).ready(function() {
      $("#select").val("'.$_POST['select'].'");';
      foreach ($arr as $key => $value) {
      if(strcmp($value, "Chấm điểm rèn luyện cá nhân sinh viên") == 0){
        echo '$("#id_0").prop("checked", true);';
        continue;
      }
      if(strcmp($value, "Chấm điểm cho một lớp") == 0){
        echo '$("#id_1").prop("checked", true);';
        continue;
      }
      if(strcmp($value, "Chấm điểm rèn luyện cho cả khoa") == 0){
        echo '$("#id_2").prop("checked", true);';
        continue;
      }
      if(strcmp($value, "Thêm bảng điểm cộng trừ cho sinh viên theo chi hội") == 0){
        echo '$("#id_3").prop("checked", true);';
        continue;
      }
      if(strcmp($value, "Thêm bảng điểm cộng trừ cho lớp") == 0){
        echo '$("#id_4").prop("checked", true);';
        continue;
      }
      if(strcmp($value, "Thêm bảng điểm cộng trừ cho khoa") == 0){
        echo '$("#id_5").prop("checked", true);';
        continue;
      }
      if(strcmp($value, "Thêm thành viên cho chi hội") == 0){
        echo '$("#id_6").prop("checked", true);';
        continue;
      }
    }
    echo "});";
    echo'</script>';
  }
 ?>
      <script>
        $(document).ready(function() {
          //$("#tbl-delete").DataTable();
          $("#btn-person-group").addClass("active");
          $("#div-person-group").show();
          $("#div-add-permission").hide();
          $("#div-delete-permission").hide();
          $("#btn-person-group").click(function() {
            $("#btn-person-group").addClass("active");
            $("#btn-add-permission").removeClass("active");
            $("#div-delete-permission").removeClass("active");
            $("#div-person-group").show();
            $("#div-add-permission").hide();
            $("#div-delete-permission").hide();
          });
          $("#btn-add-permission").click(function() {
            $("#btn-person-group").removeClass("active");
            $("#btn-add-permission").addClass("active");
            $("#div-delete-permission").removeClass("active");
            $("#div-person-group").hide();
            $("#div-add-permission").show();
            $("#div-delete-permission").hide();
          });
          $("#btn-delete-permission").click(function() {
            $("#btn-person-group").removeClass("active");
            $("#btn-add-permission").removeClass("active");
            $("#div-delete-permission").addClass("active");
            $("#div-person-group").hide();
            $("#div-add-permission").hide();
            $("#div-delete-permission").show();
          });
          $("#btn-edit").prop("value", $("#select").val());
          $("#select").change(function() {
            $("#btn-edit").prop("value", $("#select").val());
            console.log($("#btn-edit").val());
          });
          var bool = false;
          $("#checkAll").change(function() {
            bool = !bool;
            if(bool){
              $(".isCheck").prop("checked", true);
            } else{
              $(".isCheck").prop("checked", false);
            }
          });
        });
      </script>
      <div id="div-main" class="container main-academy-container">
        <br />
        <div class="btn-group">
          <button id="btn-person-group" class="btn btn-primary">Cài đặt phân quyền theo nhóm người dùng</button>
          <button id="btn-add-permission" class="btn btn-primary">Thêm mới phân quyền theo nhóm người dùng</button>
          <button id="btn-delete-permission" class="btn btn-primary">Xóa phân quyền theo nhóm người dùng</button>
        </div>
        <div id="div-person-group" class="academy-action-list">
          <div class="row">
            <div class="col-sm-12">
              <h4>Chọn nhóm quyền người dùng trong hệ thống</h4>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <form action="#" method="post">
                  <select id="select" class="form-control" name="select">
                  <option selected hidden>-- Chọn một phân quyền người dùng --</option>
                  <option selected disabled>-- Chọn một phân quyền người dùng --</option>
                  <?php
                    foreach ($permissionArr as $key => $value) {
                      echo '<option value="'.$permissionArr[$key]->getPosition().'">'.$permissionArr[$key]->getPosition().'</option>';
                    }
                   ?>
                </select>
                </div>
                <div class="col-sm-1">
                  <button id="btn-view" type="submit" name="btn-submit" value="view" class="center-block btn btn-primary">
                              <span class="glyphicon glyphicon-th-list"></span> Xem
                          </button>
                </div>
                </form>
              </div>
              <br />
              <form id="frm-detail" action="../controller/permission/permission.manage.update.php" method="post">
                <div class="row">
                  <div class="col-sm-3">
                    <label class="text-left"><input type="checkbox" id="id_0" name="checkbox[]" value="Chấm điểm rèn luyện cá nhân sinh viên">&nbsp; Chấm điểm rèn luyện cá nhân</label>
                    </div>
          <div class="col-sm-3">
            <label><input type="checkbox" id="id_1" name="checkbox[]" value="Chấm điểm cho một lớp">&nbsp;Chấm điểm cho một lớp</label>
                  </div>
                  <div class="col-sm-3">
                    <label><input type="checkbox" id="id_2" name="checkbox[]" value="Chấm điểm rèn luyện cho cả khoa">&nbsp;Chấm điểm rèn luyện cho cả khoa</label>
                  </div>
                  <div class="col-sm-3">
                    <label><input type="checkbox" id="id_3" name="checkbox[]" value="Thêm bảng điểm cộng trừ cho sinh viên theo chi hội">&nbsp;Thêm bảng điểm cộng trừ cho sinh viên theo chi hội</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3 col-sm-offset-3">
                    <label><input type="checkbox" id="id_4" name="checkbox[]" value="Thêm bảng điểm cộng trừ cho lớp">&nbsp;Thêm bảng điểm cộng trừ cho lớp</label>
                  </div>
                  <div class="col-sm-3">
                    <label><input type="checkbox" id="id_5" name="checkbox[]" value="Thêm bảng điểm cộng trừ cho khoa">&nbsp;Thêm bảng điểm cộng trừ cho khoa</label>
                  </div>
                  <div class="col-sm-3">
                    <label><input type="checkbox" id="id_6" name="checkbox[]" value="Thêm thành viên cho chi hội">&nbsp;Thêm thành viên cho chi hội</label>
                  </div>
                </div>
                <br />
                <div class="row">
                  <div class="form-group text-right">
                    <button id="btn-edit" type="submit" name="btn-submit" class="center-block btn btn-success">
                <span class="glyphicon glyphicon-ok"></span> Lưu lại
            </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div id="div-add-permission" class="academy-action-list" style="display: none;">
          <div class="row">
            <div class="col-sm-12">
              <h4>Thêm mới nhóm quyền người dùng vào hệ thống</h4>
              <hr>
              <form action="../controller/permission/permission.manage.update.php" method="post">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <fieldset class="form-group">
                      <p class="text-left"><b>Tên phân quyền</b></p>
                      <input class="form-control" name="txt-namePermission" placeholder="Nhập tên tên phân quyền" required type="text">
                    </fieldset>
                    <div class="row">
                      <div class="form-group text-right">
                        <button type="submit" name="btn-submit" value="add" class="center-block btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Lưu lại
                    </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div id="div-delete-permission" class="academy-action-list" style="display: none;">
          <div class="row">
            <div class="col-sm-12">
              <h4>Xóa nhóm quyền người dùng vào hệ thống</h4>
              <hr>
              <form action="../controller/permission/permission.manage.update.php" method="post">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <table id="tbl-delete" class="table table-hover table-condensed table-bordered">
                      <thead>
                        <tr>
                          <th>Phân quyền<br /><label></label></th>
                          <th>
                              Xóa
                              <br />
                              <label><input style="margin-left:0px" type="checkbox" id="checkAll"></label>
                            </th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <?php
                         foreach ($permissionArr as $key => $value) {
                           echo '<tr>';
                           echo '<td>'.$permissionArr[$key]->getPosition().'</td>';
                           if(strcmp($permissionArr[$key]->getPosition(), 'Admin') == 0){
                            echo '<td><label><input disabled type="checkbox" ></label></td>';
                            echo '</tr>';
                            continue;
                           }
                           if(strcmp($permissionArr[$key]->getPosition(), 'Cố vấn học tập') == 0){
                            echo '<td><label><input disabled type="checkbox" ></label></td>';
                            echo '</tr>';
                            continue;
                           }
                           if(strcmp($permissionArr[$key]->getPosition(), 'Default') == 0){
                            echo '<td><label><input disabled type="checkbox" ></label></td>';
                            echo '</tr>';
                            continue;
                           }
                           if(strcmp($permissionArr[$key]->getPosition(), 'Quản lý chi hội') == 0){
                            echo '<td><label><input disabled type="checkbox" ></label></td>';
                            echo '</tr>';
                            continue;
                           }
                           if(strcmp($permissionArr[$key]->getPosition(), 'Quản lý khoa') == 0){
                            echo '<td><label><input disabled type="checkbox" ></label></td>';
                            echo '</tr>';
                            continue;
                           }
                           if(strcmp($permissionArr[$key]->getPosition(), 'Sinh viên') == 0){
                            echo '<td><label><input disabled type="checkbox" ></label></td>';
                            echo '</tr>';
                            continue;
                           }
                           echo '<td><label><input id="'.$permissionArr[$key]->getPosition().'" class="isCheck" type="checkbox" value="'.$permissionArr[$key]->getPosition().'" name="checkbox[]"></label></td>';
                           echo '</tr>';
                         }
                         ?>
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="form-group text-right">
                        <button type="submit" name="btn-submit" value="delete" class="center-block btn btn-danger">
                                      <span class="glyphicon glyphicon-trash"></span> Xóa
                                  </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
  	require_once "../controller/footer.php";
  ?>
