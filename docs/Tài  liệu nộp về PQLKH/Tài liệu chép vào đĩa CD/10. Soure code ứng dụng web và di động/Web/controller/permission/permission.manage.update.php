<?php
require_once("../../model/ConnectToSQL.php");
require_once("../../model/AccountObj.php");
require_once("../../model/AccountMod.php");
require_once("../../model/PermissionObj.php");
require_once("../../model/PermissionMod.php");
require_once("../../model/CalendarScoringMod.php");
switch ($_POST['btn-submit']) {
  case 'add':
    define("PATTERN_NAME", "/^[a-zA-Z 0-9àảãáạằẳẵắặầẩẫấậèẻẽéẹềểễếệìỉĩíịòỏõóọồổỗốộờởỡớợùủũúụừửữứựỳỷỹýỵoôơđưăâê]+$/i");
    define("SQL_STR", "/(select|insert|update|delete|from|where|into|and|or|values|order by)/i");
    if(preg_match(PATTERN_NAME, $_POST['txt-namePermission']) && !preg_match(SQL_STR, $_POST['txt-namePermission'])){
      $newPermissionObj = new PermissionObj();
      $newPermissionMod = new PermissionMod();
      $newPermissionObj->setPermissionObj($_POST['txt-namePermission'], 'EMPTY', 0);
      $newPermissionMod->addPermission($newPermissionObj);
    } else {
      echo "<script>alert('Lỗi tên phân quyền không hợp lệ')</script>";
    }
    break;
  case 'delete':
  if(!empty($_POST['checkbox'])){
    $checkbox = $_POST['checkbox'];
    if(is_array($checkbox)){
      foreach ($checkbox as $key => $value) {
        $arr = (new AccountMod())->getAllPermission($value);
        foreach ($arr as $key => $val) {
          $acc = (new AccountMod())->findAccountByID($val->getIdAccount());
          $accountMod = (new AccountMod())->updateAccount(new AccountObj($acc['idAccount'], $acc['accountName'], $acc['birthday'], $acc['address'], $acc['sex'], $acc['phone'], $acc['email'], $acc['password'], 'Default'));
        }
        $newCalendar = new CalendarScoringMod();
        $newCalendar->deleteWithPermission($value);
        $newPermissionObj = new PermissionObj();
        $newPermissionObj->setPermissionObj($value, 'EMPTY', 0);
        $newPermissionMod = new PermissionMod();
        $newPermissionMod->setAllDisplay($value, 0);
        $newPermissionMod->deletePermission($newPermissionObj);
      }
    }
  }
    break;
  default:
   $newPermissionObj = new PermissionObj();
   $newPermissionMod = new PermissionMod();
   $newPermissionMod->setAllDisplay($_POST['btn-submit'], 0);
   if(!empty($_POST['checkbox'])){
     $checkbox = $_POST['checkbox'];
     if(is_array($checkbox)){
       foreach ($checkbox as $key => $value) {
         $newPermissionObj = new PermissionObj();
         $newPermissionMod = new PermissionMod();
         $newPermissionObj->setPermissionObj($_POST['btn-submit'], $value, 1);
         $newPermissionMod->addPermission($newPermissionObj);
         $newPermissionMod->setDisplay($_POST['btn-submit'], 1, $value);
       }
     }
   }
  break;
}
echo '<script>window.location.assign("../../view/permission.manage.php")</script>';
?>
