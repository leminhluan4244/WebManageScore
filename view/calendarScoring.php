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
    $("#select").change(function() {
      $("#date-open").prop('disabled', false);
      $("#date-close").prop('disabled', false);
    });
  });
</script>
<div id="div-main" class="container main-academy-container">
<div id="div-edit-permission" class="academy-action-list">
  <div class="row">
    <div class="col-sm-12">
      <h4>Cập nhật lịch chấm điểm theo phân quyền</h4>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-4">
                    <fieldset class="form-group col-6">
                        <p class="text-left"><b>Học kỳ</b></p>
                        <input type="text" class="form-control" name="branchName" id="addbranchName"
                               placeholder="Nhập học kỳ" required autofocus>
                    </fieldset>
                </div>
                <div class="col-sm-4">
                    <fieldset class="form-group col-6">
                        <p class="text-left"><b>Năm học</b></p>
                        <input type="text" class="form-control" name="branchName" id="addbranchName"
                               placeholder="Nhập niên khóa" required autofocus>
                    </fieldset>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-right">
                        <p></p>
                        <br />
                        <button type="submit" name="btn-submit" value="save" class="center-block btn btn-danger">
                            <span class="glyphicon glyphicon-ok"></span> Lưu điểm và tái cấu trúc dữ liệu
                        </button>
                    </div>
                </div>
            </div>



        </form>

      <hr>
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
             $permissionArr = (new PermissionMod())->getPermission();
             foreach ($permissionArr as $key => $value) {
               $arr = (new CalendarScoringMod())->getCalendarWithPermissionPosition($value->getPosition());
               if(!empty($arr)){
                 echo '<tr>';
                 echo '<td>'.$arr['Permission_position'].'</td>';
                 echo '<td>'.date("d-m-Y", strtotime($arr['openDate'])).'</td>';
                 echo '<td>'.date("d-m-Y", strtotime($arr['closeDate'])).'</td>';
                 echo '</tr>';
               }
             }
             ?>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-4">
            <form action="../controller/calendar/calendar.update.php" method="post">
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
