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
    #ok
    public function updateCalendar($CalendarScoring){
      $sql = "DELETE FROM `calendarscoring` WHERE
       `Permission_position`='".$CalendarScoring->getPermission_position()."'";
      $this->conn2sql->Connect();
      $result = $this->conn2sql->conn->query($sql);
      $sql = "INSERT INTO `calendarscoring`(`openDate`, `closeDate`, `Permission_position`) VALUES (
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
    #ok
    public function deleteCalendar($CalendarScoring){
      $sql = "DELETE FROM `calendarscoring` WHERE
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
    #ok
    public function addCalendar($CalendarScoring){
      $sql = "INSERT INTO `calendarscoring`(`openDate`, `closeDate`, `Permission_position`) VALUES (
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
    #ok
    public function checkCalendar($date, $Account){
      $sql = "SELECT `openDate`, `closeDate` FROM `calendarscoring` WHERE
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
    public function getCalendarWithPermissionPosition($Permission_position){
      $sql = "SELECT * FROM `calendarscoring` WHERE `Permission_position` = '".$Permission_position."'";
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
    public function deleteWithPermission($name){
      $sql = "DELETE FROM `calendarscoring` WHERE `Permission_position`='".$name."'";
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
