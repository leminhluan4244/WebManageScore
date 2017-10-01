<?php
  require_once "../controller/header.php"
?>
<?php
 if(getSession("userToken")['permission'] != 'Admin'){
  echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
 }
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(document).ready(function() {
    $("#date-open").prop('disabled', true);
    $("#date-close").prop('disabled', true);
    $("#date-open").datepicker({dateFormat: 'dd-mm-yy'}).val();
    $("#date-open").datepicker();
    $("#date-close").datepicker({dateFormat: 'dd-mm-yy'}).val();
    $("#date-close").datepicker();
    //var json = '';
    $("#select").change(function() {
      $("#date-open").prop('disabled', false);
      $("#date-close").prop('disabled', false);
      json = JSON.stringify($("#select").val());
      document.cookie = "json=" + json;
      <?php
      $arr = (new CalendarScoringMod())->getCalendarWithPermissionPosition(json_decode($_COOKIE['json']));
      $js_array = json_encode($arr);
      echo "var arrJS = ". $js_array .";\n";
      ?>
    });
  });
</script>
<div id="div-main" class="container main-academy-container">
<div id="div-edit-permission" class="academy-action-list">
  <div class="row">
    <div class="col-sm-12">
      <h4>Cập nhật lịch chấm điểm theo phân quyền</h4>
      <hr>
      <form action="#" method="post">
        <table id="tbl-edit" class="table table-hover table-condensed table-bordered">
          <thead>
            <tr>
              <th>Phân quyền</th>
              <th>Ngày mở</th>
              <th>Ngày đóng</th>
            </tr>
          </thead>
          <tbody class="text-center">
          <tr>
            <?php
             echo '<td>'.$arr['Permission_position'].'</td>';
             echo '<td>'.$arr['openDate'].'</td>';
             echo '<td>'.$arr['closeDate'].'</td>';
             ?>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-4">
              <fieldset class="form-group">
                <p class="text-left"><b>Tên phân quyền</b></p>
                <select id="select" class="form-control" name="select">
                <option selected hidden>-- Chọn một phân quyền người dùng --</option>
                <option selected disabled>-- Chọn một phân quyền người dùng --</option>
                <?php
                $permissionArr = (new PermissionMod())->getPermission();
                  foreach ($permissionArr as $key => $value) {
                    echo '<option value="'.$permissionArr[$key]->getPosition().'">'.$permissionArr[$key]->getPosition().'</option>';
                  }
                 ?>
              </select>
              </fieldset>
          </div>
          <div class="col-sm-4">
            <fieldset class="form-group">
              <p class="text-left"><b>Ngày mở</b></p>
              <input id="date-open" class="form-control" name="txt-date-open" placeholder="Chọn ngày mở" required type="text">
            </fieldset>
          </div>
          <div class="col-sm-4">
            <fieldset class="form-group">
              <p class="text-left"><b>Ngày đóng</b></p>
              <input id="date-close" class="form-control" name="txt-date-close" placeholder="Chọn ngày đóng" required type="text">
            </fieldset>
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
