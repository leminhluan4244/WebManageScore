<?php
/**
 * Lớp Thời hạn chấm điểm theo phân quyền: Bao gồm thuộc tính và phương thức của đối tượng thời hạn chấm điểm theo phân quyền
 * Coder: Đoàn Minh Nhựt
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 * Trạng thái: đã test thành công
 */
  class CalendarScoringObj implements \JsonSerializable{
    private $openDate;
    private $closeDate;
    private $Permission_position;
    function __construct(
     $openDate = 'unknow',
     $closeDate = 'unknow',
     $Permission_position = 'unknow'){
      $this->openDate = $openDate;
      $this->closeDate = $closeDate;
      $this->Permission_position = $Permission_position;
    }
    public function getCalendarScoringObj(){
      return $this;
    }
    public function getOpenDate(){
      return $this->openDate;
    }
    public function getCloseDate(){
      return $this->closeDate;
    }
    public function getPermission_position(){
      return $this->Permission_position;
    }
    public function setCalendarScoringObj($openDate, $closeDate, $Permission_position){
      $this->openDate = $openDate;
      $this->closeDate = $closeDate;
      $this->Permission_position = $Permission_position;
    }
    public function setOpenDate($openDate){
      $this->openDate = $openDate;
    }
    public function setCloseDate($closeDate){
      $this->closeDate = $closeDate;
    }
    public function setPermission_position($Permission_position){
      $this->Permission_position = $Permission_position;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }
  }
  #$newCalendar = new CalendarScoringObj();
  #var_dump($newCalendar->get());
 ?>
