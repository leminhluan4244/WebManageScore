<?php
#echo $_POST['txt-namePermission'];
$permission_mod = new PermissionMod();
$permission_obj = new PermissionObj();
$permission_obj->setPermissionObj('PQ1', 'Admin');
$permission_mod->addPermission($permission_obj);
#echo'<META http-equiv="refresh" content="0;URL=view/permission.manage.php">';
?>
