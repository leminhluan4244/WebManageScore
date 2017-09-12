<?php
/**
 * Lớp Tài Khoản: Mô tả việc tương tác với cơ sở dữ liệu của một tài khoản
 * Coder: Đoàn Minh Nhựt
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 * Trạng thái: đã test thành công
 */
  class AccountMod{
    private $conn2sql;
    function __construct(){
      $this->conn2sql = new ConnectToSQL();
    }
    #ok
    public function checkLogin($idAccount, $password){
      $sql = "SELECT `idAccount` FROM `account` WHERE `idAccount` = '".$idAccount."' AND `password` = '".md5($password)."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result->num_rows == 1) {
         return true;
      }else {
         return false;
      }
    }
    #ok
    public function addAccount($accountObj){
      $sql = "INSERT INTO `account`(`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) VALUES (
        '".$accountObj->getIdAccount()."',
        '".$accountObj->getAccountName()."',
        '".$accountObj->getBirthday()."',
        '".$accountObj->getAddress()."',
        '".$accountObj->getSex()."',
        '".$accountObj->getPhone()."',
        '".$accountObj->getEmail()."',
        '".md5($accountObj->getPassword())."',
        '".$accountObj->getPermission_position()
        ."')";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result) {
         return true;
      }else {
         return false;
      }
    }
    #ok
    public function getAccount($idAccount){
      $sql = "SELECT * FROM `account` WHERE `idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      return new AccountObj($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
    }
      public function getAllAccount(){
          // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
          $list = array();
          // Đẩy câu lệnh vào string
          $sql = "SELECT * FROM Account ";
          $this->conn2sql->Connect();
          $result = $this->conn2sql->conn->query($sql);
          // Kiểm tra số lượng kết quả trả về có lơn hơn 0
          // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
          if ($result->num_rows > 0) {
              // Sử dụng vòng lặp while để lặp kết quả
              $k = 0;
              //Tạo một đối tượng chứa
              $account = new AccountObj;
              while ($row = $result->fetch_assoc()) {

                  //Cho vào list đối tượng
                  $account->setIdAccount($row["idAccount"]);
                  $account->setAccountName($row["accountName"]);
                  $account->setBirthday($row["birthday"]);
                  $account->setAddress($row["address"]);
                  $account->setSex($row["sex"]);
                  $account->setPhone($row["phone"]);
                  $account->setEmail($row["email"]);
                  $account->setPassword("don't know");
                  $account->setPermission_position($row["Permission_position"]);
                  $list[$k] = $account;
                  $k++;
              }
          } else {
              return -1;
              //echo "Không có kết quả nào";
          }
          //Ngắt kết nối
          $this->conn2sql->Stop();
          //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
          return $list;
      }
    #ok
    public function updateAccount($account){
      $sql = "UPDATE `account` SET
        `accountName`='".$account->getAccountName()."',
        `birthday`='".$account->getBirthday()."',
        `address`='".$account->getAddress()."',
        `sex`='".$account->getSex()."',
        `phone`='".$account->getPhone()."',
        `email`='".$account->getEmail()."',
        `password`='".md5($account->getPassword())."',
        `Permission_position`='".$account->getPermission_position()."'
        WHERE `idAccount`='".$account->getIdAccount()."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result) {
         return true;
      }else {
         return false;
      }
      return true;
    }
    #ok
    public function deleteAccount($account){
      $sql = "DELETE FROM `account` WHERE `idAccount` = '".$account->getIdAccount()."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result) {
         return true;
      }else {
         return false;
      }
    }
    // Update late
    public function getAccountOnAcademy($idAccount){
      $sql = "SELECT `Academy_idAcademys` FROM `Account_has_Academy` WHERE `idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $row = $result->fetch_row();
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      return $row[0];
    }
    #ok
    public function getAccountOnClass($idAccount){
      $sql = "SELECT `Class_idClass` FROM `account` WHERE `idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $row = $result->fetch_row();
      $sql = "SELECT `className` FROM `class` WHERE `idClass` = '".$row[0]."'";
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      return $row[0];
    }
    #ok
    public function findAccountByName($accountName){
      $sql = "SELECT * FROM `account` WHERE `accountName` = '".$accountName."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      if($result->num_rows == 0){
        return array();
      }
      $i = 0;
      $accountArr = array(
        'idAccount'=> $row[$i++],
        'accountName'=> $row[$i++],
        'birthday'=> $row[$i++],
        'address'=> $row[$i++],
        'sex'=> $row[$i++],
        'phone'=> $row[$i++],
        'email'=> $row[$i++],
        'password'=> $row[$i++],
        'permission_position'=> $row[$i++]);
      return $accountArr;
    }
    #ok
    public function findAccountByID($idAccount){
      $this->conn2sql->Connect();
      $sql = "SELECT * FROM `account` WHERE `idAccount` = '".$idAccount."'";
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      if($result->num_rows == 0){
        return array();
      }
      $i = 0;
      $accountArr = array(
        'idAccount'=> $row[$i++],
        'accountName'=> $row[$i++],
        'birthday'=> $row[$i++],
        'address'=> $row[$i++],
        'sex'=> $row[$i++],
        'phone'=> $row[$i++],
        'email'=> $row[$i++],
        'password'=> $row[$i++],
        'permission_position'=> $row[$i++]
        );
      return $accountArr;
    }
  }
  #$newStudent = new accountMod();
  #$newPerson = new AccountObj('NoId', 'username', 'unknow', 'VN', 'male', 9999, '_@email.com', 'password', 'Student', 'ID', 'DI1496A1');
  #var_dump($newStudent->checkLogin('B1400704', '123456789'));
  #var_dump($newStudent->addAccount($newPerson));
  #var_dump($newStudent->getAccount($newPerson->getIdAccount()));
  #var_dump($newStudent->updateAccount(new AccountObj('NoId', 'username', 'unknow', 'US', 'male', 9999, '_@email.com', 'password', 'Student', 'ID', 'DI1496A1')))
  #var_dump($newStudent->deleteAccount($newPerson));
  #var_dump($newStudent->checkAccountOnAcademy('B1400713'));
  #var_dump($newStudent->checkAccountOnClass('B1400713'));
  #var_dump($newStudent->findAccountByName('Đoàn Minh Nhựt'));
  #var_dump($newStudent->findAccountByID('B'));
require_once 'ConnectToSQL.php';
require_once 'AccountObj.php';
    $newacc = new accountMod();
  $row=array();
  $row=$newacc->getAllAccount();
    foreach ($row as $key => $value) {
    echo $key . "->" . $value->getIdAccount()." - ".$value->getAccountName()." <br>";
    }
  ?>
