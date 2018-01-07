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
<?php
$now = getdate();
$year= (int)$now["year"];
$month=(int)$now["mon"];
?>
<div id="div-main" class="container main-academy-container">
<div id="div-edit-permission" class="academy-action-list">
  <div class="row">
    <div class="col-sm-12">
        <!-- Start restructure-->
        <div id="reStructure" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Cảnh báo</h4>
                    </div>
                    <div class="modal-body ">
                        <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                        <p>Bạn sấp chốt điểm rèn luyện cuối học kỳ đã chọn cho tất cả sinh viên. Đồng thời toàn bô dữ liệu hiện tại sẽ tái cấu trúc cho học kỳ tiếp theo</p>
                        <p>Hành động này không thể hoàn tác !!! Vui lòng nhập tên đăng nhập và mật khẩu của bạn để thực hiện hành động này</p>
                        <form action="calendarScoring.php" method="post">
                            <div class="row">
                                <div class="col-sm-4">
                                    <fieldset class="form-group col-6">
                                        <?php
                                        function func_HK($month_input){
                                            if(($month_input>=11 && $month_input<=12)|| ($month_input>=1 && $month_input<=3)){
                                                echo '<option selected="selected" value="I">Học kỳ I</option>';
                                                echo'<option value="II">Học kỳ II</option>';
                                            }
                                            else if($month_input>=4 && $month_input<=10){
                                                echo '<option  value="I">Học kỳ I</option>';
                                                echo'<option selected="selected" value="II">Học kỳ II</option>';
                                            }
                                        }
                                        function func_NK($month_input,$year_1,$year_2){
                                            $now = getdate();
                                            $year= (int)$now["year"];
                                            if(($month_input>=11 && $month_input<=12)){
                                                $year_begin=$year;
                                                $year_end = $year+1;
                                            }
                                            else if(($month_input>=1 && $month_input<=3)){
                                                $year_begin=$year-1;
                                                $year_end = $year;
                                            }
                                            else if($month_input>=4 && $month_input<=10){
                                                $year_begin=$year-1;
                                                $year_end = $year;
                                            }
                                            if($year_1==$year_begin && $year_2==$year_end){
                                                echo 'selected="selected"';
                                            }
                                        }
                                        ?>
                                        <p class="text-left"><b>Học kỳ</b></p>
                                        <select id="HK" class="form-control" name="HK">
                                            <?php func_HK($month);?>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-sm-4">
                                    <fieldset class="form-group col-6">
                                        <p class="text-left"><b>Năm học</b></p>
                                        <select id="NH" class="form-control" name="NH">
                                            <?php
                                            $i=0;
                                            while ($i<=11){
                                                echo '<option '; func_NK($month,$year+$i-6,$year+$i-5); echo 'value="'.($year+$i-6).' - '.($year+$i-5).'">'.($year+$i-6).' - '.($year+$i -5).'</option>';
                                                $i++;
                                            }
                                            ?>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <p class="text-left"><b>Tên đăng nhập</b></p>
                                <input type="text" class="form-control" name="nameLogin" id="nameLogin"
                                       placeholder="Tên đăng nhập của bạn" required autofocus>
                            </fieldset>
                            <fieldset class="form-group">
                                <p class="text-left"><b>Mật khẩu</b></p>
                                <input type="text" class="form-control" name="passLogin" id="passLogin"
                                       placeholder="Mật khẩu của bạn" required autofocus>
                            </fieldset>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-danger" name="btnGet">Thực hiện</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End restructure-->
            <?php
            if(isset($_POST['btnGet'])) {
                $LoginCheck = new AccountMod();
                if($LoginCheck->checkLogin($_POST['nameLogin'], $_POST['passLogin'])){
                    if(isset($_POST['HK']) && isset($_POST['NH'])){
                        $timeO = new yearsSemesterObj();
                        $timeM = new yearsSemesterMod();
                        $timeO->setYearsSemesterObj($_POST['HK'],$_POST['NH']);
                        $timeM->deleteDataAll();
                        $timeM->addData($timeO);
                        $deleteIMG = new ImageMod();
                        $deleteScore_has_Acc = new ScoresAddHasAccountMod();
                        $deleteScore = new ScoresAddMod();
                        $deleteTrans = new TranscriptMod();
                        $deleteIMG->deleteImageAll();
                        $deleteScore_has_Acc->deleteTableAll();
                        $deleteScore->deleteScoresAddAll();
                        $deleteTrans->deleteTranscriptAll();
                    }
                }
                echo'<META http-equiv="refresh" content="0;URL=calendarScoring.php">';
            }
            ?>
        <script>
            $(function () {
                $('#reStructure').modal('toggle');
                window.history.pushState({path: 'calendarScoring.php'}, '', 'calendarScoring.php');
            });
        </script>

      <hr>
        <h4>Cập nhật lịch chấm điểm theo phân quyền</h4>
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
      <div class="row text-center">
          <button type="submit" name="btn-submit" value="save" class=" btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span> Lưu lại
                    </button>
              <a class="btn btn-danger " data-toggle="modal" data-target="#reStructure">
                  <span class="glyphicon glyphicon-warning-sign"></span> Tái cấu trúc dữ liệu
              </a>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
  require_once "../controller/footer.php";
?>
