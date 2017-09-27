<?php
require_once("../../model/ConnectToSQL.php");
require_once("../../model/PermissionObj.php");
require_once("../../model/PermissionMod.php");
switch ($_POST['btn-submit']) {
  case 'add':
    $newPermissionObj = new PermissionObj();
    $newPermissionMod = new PermissionMod();
    $newPermissionObj->setPermissionObj($_POST['txt-namePermission'], 'EMPTY');
    $newPermissionMod->addPermission($newPermissionObj);
    break;
  default:
   $newPermissionObj = new PermissionObj();
   $newPermissionMod = new PermissionMod();
   $newPermissionMod->delete($_POST['btn-submit']);
   if(!empty($_POST['checkbox'])){
     $checkbox = $_POST['checkbox'];
     if(is_array($checkbox)){
       foreach ($checkbox as $key => $value) {
         $newPermissionObj = new PermissionObj();
         $newPermissionMod = new PermissionMod();
         $newPermissionObj->setPermissionObj($_POST['btn-submit'], $value);
         $newPermissionMod->addPermission($newPermissionObj);
       }
     }
   }else{
     $newPermissionObj->setPermissionObj($_POST['btn-submit'], 'EMPTY');
     $newPermissionMod->addPermission($newPermissionObj);
   }
  break;
}
echo '<script>window.location.assign("../../view/permission.manage.php")</script>';
?>
