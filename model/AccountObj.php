<?php
/**
 * Lớp Tài Khoản: Bao gồm thuộc tính và phương thức của đối tượng tài khoản
 * Coder: Đoàn Minh Nhựt
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 * Trạng thái: đã test thành công
 */
 class AccountObj{
	 private $idAccount;
	 private $accountName;
	 private $birthday;
	 private $address;
   private $sex;
   private $phone;
	 private $email;
   private $password;
   private $Permission_position;
   private $Academy_idAcademy;
   private $Class_idClass;
   function __construct(
    $idAccount = 'unknow',
    $accountName = 'unknow',
    $birthday = 'unknow',
    $address = 'unknow',
    $sex = 'unknow',
    $phone = 0,
    $email = 'unknow',
    $password = 'unknow',
    $Permission_position = 'unknow',
    $Academy_idAcademy = 'unknow',
    $Class_idClass = 'unknow'){
     $this->idAccount = $idAccount;
  	 $this->accountName = $accountName;
  	 $this->birthday = $birthday;
  	 $this->address = $address;
     $this->sex = $sex;
     $this->phone = $phone;
  	 $this->email = $email;
  	 $this->password = $password;
     $this->Permission_position = $Permission_position;
     $this->Academy_idAcademy = $Academy_idAcademy;
     $this->Class_idClass = $Class_idClass;
	 }
   public function getAccountObj() {
     return $this;
   }
   public function getIdAccount(){
     return $this->idAccount;
   }
   public function getAccountName(){
     return $this->accountName;
   }
   public function getBirthday(){
     return $this->birthday;
   }
   public function getAddress(){
     return $this->address;
   }
   public function getSex(){
     return $this->sex;
   }
   public function getPhone(){
     return $this->phone;
   }
   public function getEmail(){
     return $this->email;
   }
   public function getPassword(){
     return $this->password;
   }
   public function getPermission_position(){
     return $this->Permission_position;
   }
   public function getAcademy_idAcademy(){
     return $this->Academy_idAcademy;
   }
   public function getClass_idClass(){
     return $this->Class_idClass;
   }
   public function setAccountObj($idAccount, $accountName, $birthday, $address, $sex, $phone, $email, $password, $Permission_position, $Academy_idAcademy, $Class_idClass){
     $this->idAccount = $idAccount;
  	 $this->accountName = $accountName;
  	 $this->birthday = $birthday;
  	 $this->address = $address;
     $this->sex = $sex;
     $this->phone = $phone;
  	 $this->email = $email;
  	 $this->password = $password;
     $this->Permission_position = $Permission_position;
     $this->Academy_idAcademy = $Academy_idAcademy;
     $this->Class_idClass = $Class_idClass;
	 }
   public function setIdAccount($idAccount){
     $this->idAccount = $idAccount;
   }
   public function setAccountName($accountName){
     $this->accountName = $accountName;
   }
   public function setBirthday($birthday){
     $this->birthday = $birthday;
   }
   public function setAddress($address){
     $this->address = $address;
   }
   public function setSex($sex){
     $this->sex = $sex;
   }
   public function setPhone($phone){
     $this->phone = $phone;
   }
   public function setEmail($email){
     $this->email = $email;
   }
   public function setPassword($password){
     $this->password = $password;
   }
   public function setPermission_position($Permission_position){
     $this->Permission_position = $Permission_position;
   }
   public function setAcademy_idAcademy($Academy_idAcademy){
     $this->Academy_idAcademy = $Academy_idAcademy;
   }
   public function setClass_idClass($Class_idClass){
     $this->Class_idClass = $Class_idClass;
   }
 }
 #$newStudent = new AccountObj();
 #var_dump($newStudent->get());
 ?>
