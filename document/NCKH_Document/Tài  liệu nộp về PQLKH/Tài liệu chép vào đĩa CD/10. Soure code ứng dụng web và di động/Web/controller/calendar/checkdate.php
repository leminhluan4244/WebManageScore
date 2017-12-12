<?php
 require_once("../../model/ConnectToSQL.php");
 require_once("../../helper/session.helper.php");
 require_once("../../model/CalendarScoringMod.php");
?>
<?php
 $today = date("Y-m-d");
 $arr = (new CalendarScoringMod())->getCalendarWithPermissionPosition(getSession("userToken")['permission']);
 if($today < $arr['openDate'] || $today > $arr['closeDate']){
   echo '<script>
     alert("Hệ thống chấm điểm chưa mở");
   </script>';
   echo '<script>window.location.assign("../../view/main.php")</script>';
 }
 ?>
