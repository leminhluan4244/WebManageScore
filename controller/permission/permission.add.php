<?php
require_once("../../model/ConnectToSQL.php");
require_once("../../model/PermissionObj.php");
require_once("../../model/PermissionMod.php");
$newPermissionMod = new PermissionMod();
$newPermissionObj = new PermissionObj();
$newPermissionObj->setPermissionObj($_POST['txt-namePermission'], 'EMPTY');
$newPermissionMod->addPermission($newPermissionObj);
echo'<META http-equiv="refresh" content="0;URL=../../view/permission.manage.php">';
?>
