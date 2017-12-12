<?php

/**
 * Lớp Khoa: mô tả việc trao đổi dữ liệu với mysql
 * Coder: Lê Minh Luân
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 */
class AcademyMod {
	//Tạo ra một đối tượng cho phép dùng nó để giao tiếp với MySQL
	private $conn;

	function __construct() {
		$this->conn = new ConnectToSQL();
	}
	//*****************************************************
	// Hàm đếm số lớp trong một khoa có bao nhiêu lớp
	public function countClass($academy) {
		$this->conn = new ConnectToSQL();
		$sql = "SELECT count(*) FROM Class WHERE Academy_idAcademy='" . $academy->getIdAcademy() . "' ;";
		// Thực thi truy vấn
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {

				//Cho vào list đối tượng
				// echo $row["count(*)"];
				return $row["count(*)"];
			}
		} else {
			echo"<script>alert('Thao tác thất bại')</script>";
			return 0;
		}

		//Ngắt kết nối
		$this->conn->Stop();
	}

	// Hàm đếm số sinh viên trong một khoa có bao nhiêu sinh viên
	public function countStudent($academy) {
		$sql = "SELECT count(*) 
					FROM Account 
					WHERE Academy_idAcademy='" . $academy->getIdAcademy() . "' AND Permission_position ='Sinh viên';";
		// Thực thi truy vấn
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {

				//Cho vào list đối tượng
				//echo $row["count(*)"];
				return $row["count(*)"];
			}
		} else {
			//echo "error count student in academy";
			return -1;
		}

		//Ngắt kết nối
		$this->conn->Stop();
	}

	// Hàm đếm số cán bộ trong một khoa có bao cán bộ
	public function countStaff($academy) {
		$sql = "SELECT count(*) 
					FROM Account 
					WHERE Academy_idAcademy='" . $academy->getIdAcademy() . "' AND Permission_position ='Cố vấn học tập'";
		// Thực thi truy vấn
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {

				//Cho vào list đối tượng
				// echo $row["count(*)"];
				return $row["count(*)"];
			}
		} else {
			//echo "error count cadre in acdemy";
			return -1;
		}

		//Ngắt kết nối
		$this->conn->Stop();
	}

	//******************************************************
	// Hàm trả về danh sách các lớp hiện có trong khoa
	public function getListClass($academy) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Class WHERE Academy_idAcademy='" . $academy->getIdAcademy() . "' ";
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				$class = new ClassObj;
				//Cho vào list đối tượng
				$class->setIdClass($row["idClass"]);
				$class->setClassName($row["className"]);
				$class->setSchoolYear($row["schoolYear"]);
				$class->setAcademy_idAcademy($row["Academy_idAcademy"]);
				$list[$k] = $class;
				$k++;
			}
		} else {
			//echo "Không có kết quả nào";
			return -1;
		}
		//Ngắt kết nối
		$this->conn->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}
	//******************************************************
	// Hàm trả về danh sách các sinh viên hiện có trong khoa
	public function getListAccount($academy) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT *
							 FROM Account 
							 WHERE Academy_idAcademy='" . $academy->getIdAcademy() . "'; 
							 ";
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
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
				$account->setPermission_position($row["Permission_position"]);
				$list[$k] = $account;
				$k++;
			}
		} else {
			return -1;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}
	//*******************************************************
	//Hàm tìm kiếm một khoa theo mã
	public function findAcademyByID($academy) {
		$sql = "SELECT * FROM Academy WHERE idAcademy='" . $academy . "';";
		// Thực thi truy vấn
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
		if ($result->num_rows > 0) {
			// Nếu có thì trả về đối tượng đo
			while ($row = $result->fetch_assoc()) {
				$academytemp = new AcademyObj();
				//Cho vào list đối tượng
				$academytemp->setIdAcademy($row["idAcademy"]);
				$academytemp->setAcademyName($row["academyName"]);
			}
		} else {
			return 0;
			//  echo '0 có ID này';
			//Báo rỗng
		}
		return $academytemp;
		//Ngắt kết nối
		$this->conn->Stop();
	}

	//Hàm tìm kiếm một khoa theo tên
	public function findAcademyByName($academy) {
		$sql = "SELECT * FROM Academy WHERE academyName=N'" . $academy->getAcademyName() . "';";
		// Thực thi truy vấn
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
		if ($result->num_rows > 0) {
			// Nếu có thì trả về đối tượng đó
			$academytemp = new AcademyObj();
			$list = array();
			$k = 0;
			while ($row = $result->fetch_assoc()) {

				//Cho vào list đối tượng
				$academytemp->setIdAcademy($row["idAcademy"]);
				$academytemp->setAcademyName($row["academyName"]);
				$list[$k] = $academytemp;
				$k++;
			}
		} else {
			//Báo rỗng
		}
		return $list;
		//Ngắt kết nối
		$this->conn->Stop();
	}

	// Hàm trả về danh sách các khoa hiện có
    /* Người sử dụng
   		Hoàng Thơ
    * */
	public function getAcademy() {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Academy";
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {

				//Cho vào list đối tượng
				$academy = new AcademyObj;
				$academy->setIdAcademy($row["idAcademy"]);
				$academy->setAcademyName($row["academyName"]);
				$list[$k] = $academy;
				$k++;
			}
		} else {
			// echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	//Hàm thêm một khoa
	public function addAcademy($academy) {
		// Đẩy câu lệnh vào string
		$sql = "INSERT INTO Academy(idAcademy, academyName) 
						VALUES('" . $academy->getIdAcademy() . "','" .
			$academy->getAcademyName() . "');";
		// Thực thi câu lệnh
		$this->conn->Connect();
		if ($this->conn->conn->multi_query($sql) === true) {
			// echo "Thêm thành công";
			//Ngắt kết nối
			$this->conn->Stop();
			return true;
		} else {
			//  echo "Lỗi addAcademy";
			//Ngắt kết nối
			$this->conn->Stop();
			return false;
		}

	}

	//Hàm xóa một khoa
	public function deleteAcademy($academy) {
		// Đẩy câu lệnh vào string
		$class = $this->getListClass($academy);
		var_dump($class);
		if ($class > 0) {
			foreach ($class as $key => $value) {
				$classTemp = new ClassMod();
				$classTemp->deleteClass($value);
			}
		}
		$sql = " DELETE FROM Account_has_Academy 
						    WHERE Academy_idAcademy='" . $academy->getIdAcademy() . "';" .
			" DELETE FROM Academy 
                            WHERE idAcademy='" . $academy->getIdAcademy() . "';";
		// Thực thi câu lệnh
		$this->conn->Connect();
		// Thực hiện câu truy vấn
		$this->conn->Connect();
		if ($this->conn->conn->multi_query($sql) === true) {
			//Ngắt kết nối
			$this->conn->Stop();
			return true;
		} else {
			//Ngắt kết nối
			$this->conn->Stop();
			return false;
		}
	}

	//Hàm cập nhật một khoa
	public function updateAcademy($academy) {
		// Đẩy câu lệnh vào string
		$sql = "UPDATE Academy 
					SET academyName='" . $academy->getAcademyName() .
			"' WHERE idAcademy='" . $academy->getIdAcademy() . "';";
		// Thực thi câu lệnh
		// Thực hiện câu truy vấn
		$this->conn->Connect();
		if ($this->conn->conn->query($sql) === true) {
			// echo "Cập nhật thành công";
			//Ngắt kết nối
			$this->conn->Stop();
			return true;
		} else {
			// echo "Lỗi updateAcademy";
			//Ngắt kết nối
			$this->conn->Stop();
			return false;
		}
	}

	public function getListStudentInAcademy($academyId) {
		$sql = "SELECT * FROM Account_has_Academy aha INNER JOIN Account a
					ON aha.Account_idAccount = a.idAccount
					WHERE aha.Academy_idAcademy = '{$academyId}' 
						  AND (a.Permission_position = 'Sinh viên' 
							  OR a.Permission_position = 'Quản lý chi hội')";
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		$this->conn->Stop();
		$listStudent = [];
		if (!empty($result))
			while ($row = $result->fetch_assoc()){
				$account = new AccountObj();
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

	public function getAcademyIdOfAccount($accountId){
		$sql = "select a.Academy_idAcademy as acaId from account_has_academy a where Account_idAccount = '$accountId'";
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		$this->conn->Stop();
		$acaId = "";
		if (!empty($result) && $result->num_rows > 0){
			$row = $result->fetch_assoc();
			$acaId = $row['acaId'];
		}
		return $acaId;
	}

	public function getAcademyNameOf($academyId){
		$sql = "SELECT academyName FROM Academy where idAcademy = '$academyId'";
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		$this->conn->Stop();
		$acaName = "";
		if (!empty($result) && $result->num_rows > 0) {
			$acaName = $result->fetch_assoc()['academyName'];
		}
		return $acaName;
	}
    public function getListTeacher($academyId) {

        $sql = "SELECT DISTINCT `idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position` 
				FROM Account,Account_has_Academy 
				WHERE Account_has_Academy.Academy_idAcademy = '".$academyId."' AND
				 Account.idAccount = Account_has_Academy.Account_idAccount AND
				  Account.Permission_position='Cố vấn học tập';";
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
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
                $account->setPermission_position($row["Permission_position"]);
                if ($account->getPermission_position() == 'Cố vấn học tập') {
                    $list[$k] = $account;
                    $k++;
                }
            }
        } else {
            $this->conn->Stop();
            return 0;
            // echo "The result of information processing is data false";
        }
        $this->conn->Stop();
        return $list;
    }

}

/* test từng gái trị hàm ở đây
require_once "AcademyObj.php";
require_once "ConnectToSQL.php";
$obj = new AcademyObj();
$obj->setAcademyObj('id1', 'academy');
$mod = new AcademyMod();
echo '<br>';
$mod->addAcademy($obj);
echo '<br>';
$obj->setAcademyObj('id1', 'cademy1');
$mod->updateAcademy($obj);
echo '<br>';

$id = array();
$id = $mod->findAcademyByID($obj);
foreach ($id as $key => $value) {
    echo $key . "->" . $value->getIdAcademy() . " vs" . $value->getAcademyName();
}
echo '<br>';
$name = array();
$name = $mod->findAcademyByName($obj);
foreach ($name as $key => $value) {
    echo $key . "->" . $value->getIdAcademy() . " vs" . $value->getAcademyName();
}
echo '<br>';
$getlist = array();
$getlist = $mod->getAcademy();
foreach ($getlist as $key => $value) {
    echo $key . "->" . $value->getIdAcademy() . " vs" . $value->getAcademyName();
}
$obj->setAcademyObj('CN', 'Công nghệ');
echo ' <br>Đếm số lớp trong khoa';
$mod->countClass($obj);
echo '<br>Đếm số học sinh trong khoa';
$mod->countStudent($obj);
echo '<br> Đếm số cán bộ khoa';
$mod->countStaff($obj);
echo '<br> Danh sách lớp';
$getlistclass = array();
$getlistclass=$mod->getListClass($obj);
foreach ($getlistclass as $key => $value) {
    echo $key . "->" . $value->getIdClass()." - ".$value->getClassName()." - ".$value->getSchoolYear()." - ".$value->getAcademy_idAcademy()." <br>";
}
echo '<br> Danh sách tài khoản';
$getlistaccount = array();
$getlistaccount=$mod->getListAccount($obj);
foreach ($getlistaccount as $key => $account) {
    echo $key . "->" . $account->getIdAccount().' - '.
    $account->getAccountName().' - '.
    $account->getBirthday().' - '.
    $account->getAddress().' - '.
    $account->getSex().' - '.
    $account->getPhone().' - '.
    $account->getEmail().' - '.
    $account->getPermission_position().' - '.'<br>';
}
echo "<br> Xóa một khoa";
$obj->setAcademyObj('id1', 'cademy1');
$mod->deleteAcademy($obj);
*/
?>
