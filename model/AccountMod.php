<?php
/**
 * Lớp Tài Khoản: Mô tả việc tương tác với cơ sở dữ liệu của một tài khoản
 * Coder: Đoàn Minh Nhựt
 * Date: 05/08/2017
 * Cập nhật: 12/09/2017
 * Lý do: Có sự thay đổi về cơ sở dữ liệu
 * Trạng thái: đã test thành công
 */
 require_once "Link.php";
  class AccountMod{
    private $conn2sql;
    function __construct(){
    $this->conn2sql = new ConnectToSQL();
    }

    #Kiểm đăng nhập
    public function checkLogin($idAccount, $password){
      $sql = "SELECT `idAccount` FROM `account` WHERE `idAccount` = '".$idAccount."' AND `password` = '".md5($password)."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if(empty($result)){
        return false;
      }
      if($result->num_rows == 1) {
         return true;
      }else {
         return false;
      }
    }

    #Thêm tài khoản
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
        '".$accountObj->getPermission_position()."'
        )";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result) {
         return true;
      }else {
         return false;
      }
    }

    #Trả về đối tượng tài khoản
    public function getAccount($idAccount){
      $sql = "SELECT * FROM `account` WHERE `idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      return new AccountObj($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
    }

    #Cập nhật thông tin tài khoản
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

    #Xóa tài khoản
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

    #Trả về một mảng chứa tên các lớp
    public function getAccountOnClass($idAccount){
      $sql = "SELECT `Class_idClass` FROM `account_has_class` WHERE `Account_idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      if(empty($result)){
        echo 'EMPTY';
        return [];
      }
      $arr = array();
      $i = 0;
  		if ($result->num_rows > 0){
  			while ($row = $result->fetch_row())
  				$arr[$i++] = $row[0];
  		}
      $className = array();
      for($i = 0; $i < count($arr); $i++) {
        $sql = "SELECT `className` FROM `class` WHERE `idClass` = '".$arr[$i]."'";
        #echo $sql.'<br />';
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        if(!empty($result)){
          $row = $result->fetch_row();
          $className[$i] = $row[0];
        }
      }
      $this->conn2sql->Stop();
      return $className;
    }

    #Trả về một mảng chứa tên các khoa
    public function getAccountOnAcademy($idAccount){
      $sql = "SELECT `Academy_idAcademy` FROM `account_has_academy` WHERE `Account_idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      if(empty($result)){
        echo 'EMPTY';
        return [];
      }
      $arr = array();
      $i = 0;
  		if ($result->num_rows > 0){
  			while ($row = $result->fetch_row())
  				$arr[$i++] = $row[0];
  		}
      $academyName = array();
      for($i = 0; $i < count($arr); $i++) {
        $sql = "SELECT `academyName` FROM `academy` WHERE `idAcademy` = '".$arr[$i]."'";
        #echo $sql.'<br />';
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        if(!empty($result)){
          $row = $result->fetch_row();
          $academyName[$i] = $row[0];
        }
      }
      $this->conn2sql->Stop();
      return $academyName;
    }

    #Trả về một mảng chứa tên các chi hội
    public function getAccountOnBranch($idAccount){
      $sql = "SELECT `Branch_idBranch` FROM `account_has_branch` WHERE `Account_idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      if(empty($result)){
        echo 'EMPTY';
        return [];
      }
      $arr = array();
      $i = 0;
  		if ($result->num_rows > 0){
  			while ($row = $result->fetch_row())
  				$arr[$i++] = $row[0];
  		}
      $branchName = array();
      for($i = 0; $i < count($arr); $i++) {
        $sql = "SELECT `branchName` FROM `branch` WHERE `idBranch` = '".$arr[$i]."'";
        #echo $sql.'<br />';
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        if(!empty($result)){
          $row = $result->fetch_row();
          $branchName[$i] = $row[0];
        }
      }
      $this->conn2sql->Stop();
      return $branchName;
    }

    #Trả về một mảng chứa tên các điểm cộng trừ
    public function getAccountOnScoresAdd($idAccount){
      $sql = "SELECT `ScoresAdd_idScores` FROM `scoresadd_has_account` WHERE `Account_idAccount` = '".$idAccount."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      if(empty($result)){
        echo 'EMPTY';
        return [];
      }
      $arr = array();
      $i = 0;
  		if ($result->num_rows > 0){
  			while ($row = $result->fetch_row())
  				$arr[$i++] = $row[0];
  		}
      $scoresaddName = array();
      for($i = 0; $i < count($arr); $i++) {
        $sql = "SELECT `scores` FROM `scoresadd` WHERE `idScores` = '".$arr[$i]."'";
        #echo $sql.'<br />';
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        if(!empty($result)){
          $row = $result->fetch_row();
          $scoresaddName[$i] = $row[0];
        }
      }
      $this->conn2sql->Stop();
      return $scoresaddName;
    }

    #Kiểm tra tài khoản có thuộc lớp hay không?, bằng mã số
    public function checkAccountOnClass($idAccount, $idClass){
      $sql = "SELECT `Account_idAccount` FROM `account_has_class` WHERE `Account_idAccount` = '".$idAccount."' AND `Class_idClass` = '".$idClass."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if(empty($result)){
        return false;
      }
      if($result->num_rows > 0) {
         return true;
      }else {
         return false;
      }
    }

    #Kiểm tra tài khoản có thuộc khoa hay không?, bằng mã số
    public function checkAccountOnAcademy($idAccount, $idAcademy){
      $sql = "SELECT `Account_idAccount` FROM `account_has_academy` WHERE `Account_idAccount` = '".$idAccount."' AND `Academy_idAcademy` = '".$idAcademy."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if(empty($result)){
        return false;
      }
      if($result->num_rows > 0) {
         return true;
      }else {
         return false;
      }
    }

    #Kiểm tra tài khoản có thuộc khoa hay không?, bằng mã số
    public function checkAccountOnBranch($idAccount, $idBranch){
      $sql = "SELECT `Account_idAccount` FROM `account_has_branch` WHERE `Account_idAccount` = '".$idAccount."' AND `Branch_idBranch` = '".$idBranch."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if(empty($result)){
        return false;
      }
      if($result->num_rows > 0) {
        return true;
      }else {
        return false;
      }
    }

    #Kiểm tra tài khoản có cộng hoặc trừ điểm hay không?, bằng mã số
    public function checkAccountOnScoresAdd($idAccount, $idScoresAdd){
      $sql = "SELECT `Account_idAccount` FROM `scoresadd_has_account` WHERE `Account_idAccount` = '".$idAccount."' AND `ScoresAdd_idScores` = '".$idScoresAdd."'";
      #echo $sql.'<br />';
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if(empty($result)){
        return false;
      }
      if($result->num_rows > 0) {
        return true;
      }else {
        return false;
      }
    }

    #Tìm kiếm tài khoản theo tên,
    #trả về mảng chứa thông tin tài khoản với các khóa là thuộc tính của tài khoản
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

    #Tìm kiếm tài khoản theo mã số,
    #trả về mảng chứa thông tin tài khoản với khóa là thuộc tính của tài khoản
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


  #/*************************************************************************************************************************
  $newStudent = new accountMod();
  #$newPerson = new AccountObj('NoId', 'username', 'unknow', 'VN', 'Male', 113, '_@email.com', 'password', 'Quản lý chi hội');
  #var_dump($newStudent->checkLogin('NoId', 'password'));
  #echo '<br />';
  #var_dump($newStudent->addAccount($newPerson));
  #echo '<br />';
  #var_dump($newStudent->getAccount($newPerson->getIdAccount()));
  #echo '<br />';
  #var_dump($newStudent->updateAccount(new AccountObj('NoId', 'username', 'unknow', 'US', 'male', 9999, '_@email.com', 'password', 'Student', 'ID', 'DI1496A1')));
  #echo '<br />';
  #var_dump($newStudent->deleteAccount($newPerson));
  #echo '<br />';

  #Kiểm tra có trả về đúng tên lớp hay không?
  #var_dump($newStudent->getAccountOnClass('B1400123'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnClass('B1400704'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnClass('B1400713'));
  #echo '<br />';

  #Kiểm tra có trả về đúng tên khoa hay không?
  #var_dump($newStudent->getAccountOnAcademy('B1400713'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnAcademy('B1400704'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnAcademy('B1400123'));
  #echo '<br />';

  #Kiểm tra có trả về đúng tên chi hội hay không?
  #var_dump($newStudent->getAccountOnBranch('B1400713'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnBranch('B1400704'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnBranch('B1400123'));
  #echo '<br />';

  #Kiểm tra có trả về đúng điểm cộng hoặc trừ hay không?
  #var_dump($newStudent->getAccountOnScoresAdd('B1400713'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnScoresAdd('B1400704'));
  #echo '<br />';
  #var_dump($newStudent->getAccountOnScoresAdd('B1400123'));
  #echo '<br />';

  #Kiểm tra tài khoản có thuộc lớp hay không?
  #var_dump($newStudent->checkAccountOnClass('B1400123', 'DI1496A1'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnClass('B1400700', 'DI1496A1'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnClass('B1400704', 'DI1496A1'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnClass('B1400713', 'DI1496A2'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnClass('B1400700', 'DI1496A2'));
  #echo '<br />';

  #Kiểm tra tài khoản có thuộc khoa hay không?
  #var_dump($newStudent->checkAccountOnAcademy('B1400123', 'CN'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnAcademy('B1400123', 'DI'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnAcademy('B1400704', 'DE'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnAcademy('B1400713', 'DI'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnAcademy('B1400789', 'DA'));
  #echo '<br />';

  #Kiểm tra tài khoản có thuộc chi hội hay không?
  #var_dump($newStudent->checkAccountOnBranch('B1400123', 'AG01'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnBranch('B1400123', 'AG02'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnBranch('B1400704', 'AG01'));
  #echo '<br />';

  #Kiểm tra tài khoản có cộng hoặc trừ điểm hay không?
  #var_dump($newStudent->checkAccountOnScoresAdd('B1400713', 'AS001'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnScoresAdd('B1400713', 'AS002'));
  #echo '<br />';
  #var_dump($newStudent->checkAccountOnScoresAdd('B1400123', 'AS001'));
  #echo '<br />';

  #var_dump($newStudent->findAccountByName('Đoàn Minh Nhựt'));
  #var_dump($newStudent->findAccountByID('B1400704'));
  #*************************************************************************************************************************/
  ?>
