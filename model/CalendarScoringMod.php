<?php
/**
 * Lớp Thời hạn chấm điểm theo phân quyền: Mô tả việc tương tác với cơ sở dữ liệu của đối tượng thời hạn chấm điểm
 * Coder: Đoàn Minh Nhựt
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 * Trạng thái: đã test thành công
 */
  class CalendarScoringMod{
    function __construct(){
      $this->conn2sql = new ConnectToSQL();
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function updateCalendar($CalendarScoring){
      $sql = "DELETE FROM `CalendarScoring` WHERE
       `Permission_position`='".$CalendarScoring->getPermission_position()."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $sql = "INSERT INTO `CalendarScoring`(`openDate`, `closeDate`, `Permission_position`) VALUES (
       '".$CalendarScoring->getOpenDate()."',
       '".$CalendarScoring->getCloseDate()."',
       '".$CalendarScoring->getPermission_position()."')";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result){
        return true;
      } else {
        return false;
      }
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function deleteCalendar($CalendarScoring){
      $sql = "DELETE FROM `CalendarScoring` WHERE
       `openDate` = '".$CalendarScoring->getOpenDate()."' AND
       `closeDate` = '".$CalendarScoring->getCloseDate()."' AND
       `Permission_position`='".$CalendarScoring->getPermission_position()."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      #var_dump($sql);
      if($result) {
         return true;
      }else {
         return false;
      }
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function addCalendar($CalendarScoring){
      $sql = "INSERT INTO `CalendarScoring`(`openDate`, `closeDate`, `Permission_position`) VALUES (
       '".$CalendarScoring->getOpenDate()."',
       '".$CalendarScoring->getCloseDate()."',
       '".$CalendarScoring->getPermission_position()."')";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      if($result){
        return true;
      } else {
        return false;
      }
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function checkCalendar($date, $Account){
      $sql = "SELECT `openDate`, `closeDate` FROM `CalendarScoring` WHERE
       `Permission_position` = '".$Account->getPermission_position()."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      if($date >= $row[0] && $date <= $row[1]){
        return true;
      } else {
        return false;
      }
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function getCalendarWithPermissionPosition($Permission_position){
      $sql = "SELECT * FROM `CalendarScoring` WHERE `Permission_position` = '".$Permission_position."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      if(empty($result)){
        return [];
      }
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $row = $result->fetch_row();
      if($result->num_rows == 0){
        return [];
      }
      $i = 0;
      $arr = array(
        'openDate'=> $row[$i++],
        'closeDate'=> $row[$i++],
        'Permission_position'=> $row[$i++]
      );
      return $arr;
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function deleteWithPermission($name){
      $sql = "DELETE FROM `CalendarScoring` WHERE `Permission_position`='".$name."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      #var_dump($sql);
      if($result) {
         return true;
      }else {
         return false;
      }
    }

    /**
    # Phạm Hoài An
    */
    public function getAllCalendar(){
      $Calendar = array();
      $sql = "SELECT * FROM `CalendarScoring`";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      if (!empty($result)){
        while ($row = $result->fetch_assoc()){
          $respone = new CalendarScoringObj();
          $respone->setCalendarScoringObj(
            $row['openDate'],
            $row['closeDate'],
            $row['Permission_position']);
          $Calendar[] = $respone;
        }
      }
      return $Calendar;
  }

  public function getCriticalDate(){
      $sql = "SELECT min(openDate) as min, max(closeDate) as max FROM `CalendarScoring`";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $this->conn2sql->Stop();
      $criticalDate = [];
      if (!empty($result) && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        $criticalDate['min'] = $row['min'];
        $criticalDate['max'] = $row['max'];
      }
      return $criticalDate;

  }


  #$newCalendar = new CalendarScoringMod();
  #$newDate = new CalendarScoringObj('2017-08-30', '2017-09-04', 'Student');
  #$newPerson = new AccountObj();
  #$newPerson->setPermission_position('Student');
  #var_dump($newCalendar->updateCalendar($newDate));
  #var_dump($newCalendar->addCalendar($newDate));
  #var_dump($newCalendar->deleteCalendar(new CalendarScoringObj('2017-08-30', '2017-09-02', 'Student')));
  #var_dump($newCalendar->checkCalendar('2017-08-10', $newPerson));
 ?>
