<?php
require_once("../../model/ConnectToSQL.php");
require_once("../../model/AccountObj.php");
require_once("../../model/AccountMod.php");
require_once("../../model/PermissionObj.php");
require_once("../../model/PermissionMod.php");
switch ($_POST['btn-submit']) {
  case 'add':
    $newPermissionObj = new PermissionObj();
    $newPermissionMod = new PermissionMod();
    $newPermissionObj->setPermissionObj($_POST['txt-namePermission'], 'EMPTY', 0);
    $newPermissionMod->addPermission($newPermissionObj);
    break;
  case 'delete':
  if(!empty($_POST['checkbox'])){
    $checkbox = $_POST['checkbox'];
    if(is_array($checkbox)){
      foreach ($checkbox as $key => $value) {
        $arr = (new AccountMod())->findAccountByID($value);
        $accountMod = (new AccountMod())->updateAccount(new AccountObj($arr['idAccount'], $arr['accountName'], $arr['birthday'], $arr['address'], $arr['sex'], $arr['phone'], $arr['email'], $arr['password'], 'default'));
      }
    }
  }
    break;
  default:
   $newPermissionObj = new PermissionObj();
   $newPermissionMod = new PermissionMod();
   #var_dump($_POST['btn-submit']);
   var_dump($_POST['btn-submit']);
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
