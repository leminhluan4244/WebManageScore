<?php
require_once("../../model/ConnectToSQL.php");
require_once("../../model/PermissionObj.php");
require_once("../../model/PermissionMod.php");
require_once("../../model/CalendarScoringMod.php");
require_once("../../model/CalendarScoringObj.php");
if(empty($_POST['select']) || empty($_POST['txt-date-open']) || empty($_POST['txt-date-close'])){
  echo '<script>
    alert("Lỗi ngày cập nhật lịch chấm");
  </script>';
  echo '<script>window.location.assign("../../view/calendarScoring.php")</script>';
}
switch ($_POST['btn-submit']) {
  case 'save':
    if ($_POST['txt-date-open'] >= $_POST['txt-date-close']){
      echo '<script>
        alert("Lỗi ngày cập nhật lịch chấm");
      </script>';
      echo '<script>window.location.assign("../../view/calendarScoring.php")</script>';
      break;
    }
    $newDate = new CalendarScoringObj(date("Y-m-d", strtotime($_POST['txt-date-open'])), date("Y-m-d", strtotime($_POST['txt-date-close'])), $_POST['select']);
    $newCalendar = new CalendarScoringMod();
    $newCalendar->updateCalendar($newDate);
    require_once("../../android/RequestMessage.php");
    break;
  default:
    break;
}
echo '<script>window.location.assign("../../view/calendarScoring.php")</script>';
?>
