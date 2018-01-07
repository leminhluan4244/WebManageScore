<?php

/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 06/08/2017
 * Time: 7:55 SA
 */
class ClassMod {
	private $connSql;

	function __construct() {
		$this->connSql = new ConnectToSQL();
	}

	// 1. Hàm thêm một lớp học
	public function addClass($class) {
		$sql = "INSERT INTO Class(idClass, className, schoolYear, Academy_idAcademy) 
						VALUES('" . $class->getIdClass() . "',
						'" . $class->getClassName() . "',
						'" . $class->getSchoolYear() . "',
						'" . $class->getAcademy_idAcademy() . "');";
		$this->connSql->Connect();
		if ($this->connSql->conn->query($sql) === TRUE) {
			// echo "Addition is successful! ";
		} else {
			//  echo "Addition is not successful! " . $this->connSql->error;
		}
		$this->connSql->Stop();
	}

	//2. Hàm cập nhật một lớp học
	public function updateClass($class) {
		$sql = "UPDATE Class SET 
                        className='" . $class->getClassName() . "',
                        schoolYear='" . $class->getSchoolYear() . "',
                         Academy_idAcademy='" . $class->getAcademy_idAcademy() . "'
                        WHERE idClass='" . $class->getIdClass() . "'";
		$this->connSql->Connect();
		if ($this->connSql->conn->query($sql) === true) {
			//  echo "Updation is successful!";
		} else {
			//echo "Updation is not successful!" . $this->connSql->error;
		}
		$this->connSql->Stop();
	}

	//3. Hàm xóa một lớp học
	public function deleteClass($class) {
		// Đẩy câu lệnh vào string

		$sql1 = "DELETE FROM Account_has_Class 
						WHERE Class_idClass='" . $class->getIdClass() . "';";
		$sql2 = "DELETE FROM Class 
						WHERE idClass='" . $class->getIdClass() . "';";
		// Thực thi câu lệnh
		// Thực hiện câu truy vấn
		$this->connSql->Connect();
		if ($this->connSql->conn->query($sql1) === true && $this->connSql->conn->query($sql2) === true) {
			//echo "Xóa thành công";
			//Ngắt kết nối
			$this->connSql->Stop();
			return true;
		} else {
			// echo "Lỗi deletebranch";
			//Ngắt kết nối
			$this->connSql->Stop();
			return false;
		}
	}

	//4. Hàm đếm số sinh viên trong một lớp học
	public function countAccount($class) {
		$this->conn = new ConnectToSQL();
		$sql = "SELECT count(*) FROM Account WHERE Class_idClass='" . $class->getIdClass() . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// echo $row["count(*)"];
				return $row["count(*)"];
			}
		} else {
			// echo 'error ';
			return -1;
		}
		$this->connSql->Stop();
	}

	//5. Hàm trả về danh sách các lớp hiện có
	public function getClass() {
		$sql = "SELECT * FROM Class";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$list = array();

		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$classobj = new ClassObj();
				$classobj->setIdClass($row["idClass"]);
				$classobj->setClassName($row["className"]);
				$classobj->setSchoolYear($row["schoolYear"]);
				$classobj->setAcademy_idAcademy($row["Academy_idAcademy"]);
				$list[$k] = $classobj;
				$k++;
			}

		} else {
			// echo "The result of information processing is data false";
		}

		$this->connSql->Stop();
		return $list;
	}

	//5. Hàm trả về danh sách các lớp hiện có
	public function getClassNameOf($classId) {
		$sql = "SELECT className FROM Class where idClass = '$classId'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$this->connSql->Stop();
		$className = "";
		if (!empty($result) && $result->num_rows > 0) {
			$className = $result->fetch_assoc()['className'];
		}
		return $className;
	}

	//6. Hàm trả về danh sách các tài khoản sinh viên hiện có trong một lớp học
	public function getListStudent($class) {

		$sql = "SELECT * FROM Account,Account_has_Class WHERE Account.idAccount = Account_has_Class.Account_idAccount AND Account_has_Class.Class_idClass = '" . $class->getIdClass() . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);

		$list = array();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$account = new AccountObj;
				$account->setIdAccount($row["idAccount"]);
				$account->setAccountName($row["accountName"]);
				$account->setBirthday($row["birthday"]);
				$account->setAddress($row["address"]);
				$account->setSex($row["sex"]);
				$account->setPhone($row["phone"]);
				$account->setEmail($row["email"]);
				$account->setPassword($row["password"]);
				$account->setPermission_position($row["Permission_position"]);
				if ($account->getPermission_position() == 'Sinh viên' or $account->getPermission_position() == 'Quản lý chi hội') {
					$list[$k] = $account;
					$k++;
				}

			}
		} else {
			// echo "The result of information processing is data false";
		}
		$this->connSql->Stop();
		return $list;
	}

	public function getListTeacher($class) {

		$sql = "SELECT * FROM Account,Account_has_Class WHERE Account_has_Class.Class_idClass = '" . $class->getIdClass() . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		if ($result->num_rows > 0) {
			$k = 0;
			$list = array();
			while ($row = $result->fetch_assoc()) {
				$account = new AccountObj;
				$account->setIdAccount($row["idAccount"]);
				$account->setAccountName($row["accountName"]);
				$account->setBirthday($row["birthday"]);
				$account->setAddress($row["address"]);
				$account->setSex($row["sex"]);
				$account->setPhone($row["phone"]);
				$account->setEmail($row["email"]);
				$account->setPassword($row["password"]);
				$account->setPermission_position($row["permission_position"]);
				if ($account->getPermission_position() == 'Cố vấn học tập') {
					$list[$k] = $account;
					$k++;
				}
			}
		} else {
            $this->connSql->Stop();
            return 0;
			// echo "The result of information processing is data false";
		}
		$this->connSql->Stop();
		return $list;
	}

	//7. Hàm tìm kiếm một lớp theo mã lớp hoc
	public function findClassByID($classID) {

		$sql = "SELECT * FROM Class WHERE idClass='" . $classID . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$class = new ClassObj;
				$class->setIdClass($row["idClass"]);
				$class->setClassName($row["className"]);
				$class->setSchoolYear($row["schoolYear"]);
				$class->setAcademy_idAcademy($row["Academy_idAcademy"]);
			}
		} else {
            $this->connSql->Stop();
			// echo "Not Found";
			return 0;
		}
		$this->connSql->Stop();
		return $class;
	}

	//8. Hàm tìm kiếm một lớp theo tên lớp
	public function findClassByName($class) {

		$sql = "SELECT * FROM Class WHERE className='" . $class->getClassName() . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		if ($result->num_rows > 0) {
			$list = array();
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$class = new ClassObj;
				$class->setIdClass($row["idClass"]);
				$class->setClassName($row["className"]);
				$class->setSchoolYear($row["schoolYear"]);
				$class->setAcademy_idAcademy($row["Academy_idAcademy"]);
				$list[$k] = $class;
				$k++;
			}
		} else {
			// echo "Not Found";
		}

		$this->connSql->Stop();
		return $list;
	}

	public function getListStudentInClass($classId) {
		$sql = "select * from Account inner JOIN Account_has_Class 
                  on Account.idAccount = Account_has_Class.Account_idAccount
	              where Account_has_Class.Class_idClass = '{$classId}' 
	                    and (Account.Permission_position = 'Sinh viên' 
	                          or Account.Permission_position = 'Quản lý chi hội')";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$this->connSql->Stop();
		$listStudent = [];
		if (!empty($result))
			while ($row = $result->fetch_assoc()) {
				$account = new AccountObj;
				$account->setIdAccount($row["idAccount"]);
				$account->setAccountName($row["accountName"]);
				$account->setBirthday($row["birthday"]);
				$account->setAddress($row["address"]);
				$account->setSex($row["sex"]);
				$account->setPhone($row["phone"]);
				$account->setEmail($row["email"]);
				$account->setPermission_position($row["Permission_position"]);
				$listStudent[] = $account;
			}
		return $listStudent;
	}

	# có thể không dùng
	public function getListClassIdOfAdviser($adviserId){
		$sql = "select Class_idClass as classId from Account_has_Class
				WHERE Account_idAccount = '$adviserId'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$this->connSql->Stop();
		$listCLassId = [];
		if (!empty($result))
			while ($row = $result->fetch_assoc()){
				$listCLassId[] = $row["classId"];
			}
		return $listCLassId;
	}

	# có thể không dùng
	public function getListStudentManagedByAdviser($adviserId){
		$listClassId = $this->getListClassIdOfAdviser($adviserId);
		$listStudent = [];
		foreach ($listClassId as $classId) {
			$listStudent = array_merge($listStudent, $this->getListStudentInClass($classId));
		}
		return $listStudent;
	}

	public function getListClassOfAdviser($adviserId){
		$sql = "select idClass, className, schoolYear from Account_has_Class ac inner join Class c 
				on ac.Class_idClass = c.idClass
				where ac.Account_idAccount = '$adviserId';";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$this->connSql->Stop();
		$output = [];
		if (!empty($result))
			while ($row = $result->fetch_assoc()){
				$class = new ClassObj();
				$class->setIdClass($row["idClass"]);
				$class->setClassName($row["className"]);
				$class->setSchoolYear($row["schoolYear"]);
				$output[] = $class;
			}
		return $output;
	}
}

/* Kiểm tra hàm có viết đúng hay không ?
1. Hàm thêm
$class_mod = new ClassMod();
$class_obj = new ClassObj();
$class_obj->setClassObj('DY001', 'Mạng máy tính', '39', 'TS');
$class_mod->addClass($class_obj);

2. Hàm cập nhật
$class_mod = new ClassMod();
$class_obj = new ClassObj();
$class_obj->setClassObj('DY001', 'Mạng TH', '39', 'TS');
$class_mod->updateClass($class_obj);

3. Hàm xóa
$class_mod = new ClassMod();
$class_obj = new ClassObj();
$class_obj->setClassObj('DY001', 'Mạng TH', '39', 'TS');
$class_mod->deleteClass($class_obj);

4. Hàm điếm số sinh viên trong một lớp học
$class_obj = new ClassObj();
$class_mod = new ClassMod();
$class_obj->setClassObj('DI1496A1', 'Kỹ thuật phần mềm 1', '40', 'ID');
echo "Trong lop nay co bao nhieu sinh vien: ";
$class_mod->countAccount($class_obj);

5. Hàm trả về danh sách lớp học hiện có ?
$class_obj = new ClassObj();
$class_mod = new ClassMod();
$getlist = array();
$getlist = $class_mod->getClass();
foreach ($getlist as $key => $value) {
	 echo $key . "->" . $value->getIdClass() . " - " . $value->getClassName(); }
6. Hàm trả về danh sách các tài khoản sinh viên thuộc một lớp học
 $class_mod = new ClassMod();
 $class_obj = new ClassObj();
 $getlist = array();
 $getlist = $class_mod->getListAccount($class_obj);
 foreach ($getlist as $key => $value){
  echo $key . "->" . $value->getIdAccount()." - ".
	$value->getAccountName()." - ".
	$value->getBirthday()." - ".
	$value->getAddress()." - ".
	$value->getSex()." - ".
	$value->getPhone()." - ".
	$value->getEmail()." - ".
	$value->getPassword()." - ".
	$value->getPermission_position()." - ".
	$value->getAcademy_idAcademy()." <br>"; }
7. Hàm tìm lớp học theo mã
$class_mod = new ClassMod();
$class_obj = new ClassObj();
$id = array();
$id = $class_mod->findClassByID($class_obj);
foreach ($id as $key => $value) {
	echo $key . "-" . $value->getIdClass() . "-" . $value->getClassName(); }
8. Hàm tìm kiếm lớp học theo tên
$class_mod = new ClassMod();
$class_obj = new ClassObj();
$ten = array();
$ten = $class_mod->findClassByName($class_obj);
foreach ($ten as $key => $value) {
	echo $key . "-" . $value->getIdClass() . "-" . $value->getClassName(); }
*/
?>
