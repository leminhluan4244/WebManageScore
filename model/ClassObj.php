<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 07/08/2017
 * Time: 8:34 SA
 */
class ClassObj
{

	private $idClass;
	private $className;
	private $schoolYear;
	private $Academy_idAcademy;

		// Thêm một dữ liệu kiểu chuỗi vao trong mã lớp

	public function setIdClass($idClass){

		$this->idClass = $idClass;
	}
	
		// Trả ra dữ liệu kiểu chuỗi của mã lớp
	public function getIdClass(){

		return $this->idClass;
	}

		// Thêm một dữ liệu kiểu chuỗi vào trong tên lớp

 	public function setClassName($className){
 		$this->className = $className;
 	}
   		 // Trả ra kiểu dữ liệu kiểu chuỗi của tên lớp
    public function getClassName(){
 		return $this->className;
    }


   		 // Thêm một dữ liệu kiểu chuỗi vao trong năm học

	public function setSchoolYear($schoolYear){

		$this->schoolYear = $schoolYear;
	}
	public function getSchoolYear(){

		return $this->schoolYear;
	}

		//  Thêm một kiểu dữ liệu kiểu chuỗi vào trong thuộc tính mã khoa
    public function setAcademy_idAcademy($Academy_idAcademy){		
			$this->Academy_idAcademy = $Academy_idAcademy;
		}
		// Trả ra kiểu dữ liệu kiểu chuỗi  vào trong mã khoa
		public function getAcademy_idAcademy(){
			return $this->Academy_idAcademy;
		}	

		// Nhận dữ liệu cho tất cả các trường của Lớp học
		public function setClassObj($idClass,$className,$schoolYear,$Academy_idAcademy){
			$this->setIdClass($idClass);
			$this->setClassName($className);
			$this->setSchoolYear($schoolYear);
			$this->setAcademy_idAcademy($Academy_idAcademy);

		}
		// Trả ra dữ liệu đối tượng của lớp
		public function getClassObject(){
			return $this;
		}

	}
?>