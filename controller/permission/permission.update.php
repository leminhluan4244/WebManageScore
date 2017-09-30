<?php
require_once("../../model/ConnectToSQL.php");
require_once("../../model/AccountObj.php");
require_once("../../model/AccountMod.php");
require_once("../../model/PermissionObj.php");
require_once("../../model/PermissionMod.php");

switch ($_POST['btn-submit']) {
  case 'save':
    $accountArr = (new AccountMod())->getAllAccount();
    foreach ($accountArr as $key => $value) {
      if(!empty($_POST[$accountArr[$key]->getIdAccount()])){
        $accountMod = (new AccountMod)->updateAccount(new AccountObj($accountArr[$key]->getIdAccount(), $accountArr[$key]->getAccountName(), $accountArr[$key]->getBirthday(), $accountArr[$key]->getAddress(), $accountArr[$key]->getSex(), $accountArr[$key]->getPhone(), $accountArr[$key]->getEmail(), $accountArr[$key]->getPassword(), $_POST[$accountArr[$key]->getIdAccount()]));
      } else {
        continue;
      }
    }
    break;
  case 'delete':
    if(!empty($_POST['checkbox'])){
      $checkbox = $_POST['checkbox'];
      if(is_array($checkbox)){
        foreach ($checkbox as $key => $value) {
          $arr = (new AccountMod())->findAccountByID($value);
          $accountMod = (new AccountMod())->updateAccount(new AccountObj($arr['idAccount'], $arr['accountName'], $arr['birthday'], $arr['address'], $arr['sex'], $arr['phone'], $arr['email'], $arr['password'], 'Default'));
        }
      }
    }
    break;
}
echo '<script>window.location.assign("../../view/permission.php")</script>';
?>
