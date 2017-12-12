<?php

/**
 * Lớp Tài Khoản: Mô tả việc tương tác với cơ sở dữ liệu của một tài khoản
 * Coder: Đoàn Minh Nhựt
 * Date: 05/08/2017
 * Cập nhật: 12/09/2017
 * Lý do: Có sự thay đổi về cơ sở dữ liệu
 * Trạng thái: đã test thành công
 */
class AccountMod {
	private $conn2sql;

	function __construct() {
		$this->conn2sql = new ConnectToSQL();
	}

	#Kiểm đăng nhập
	public function checkLogin($idAccount, $password) {
		$sql = "SELECT `idAccount` FROM `Account` WHERE `idAccount` = '" . $idAccount . "' AND `password` = '" . md5($password) . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if (empty($result)) {
			return false;
		}
		if ($result->num_rows == 1) {
			return true;
		} else {
			return false;
		}
	}

	#Thêm tài khoản
    /* Người sử dụng
    Hoàng Thơ

     * */
	public function addAccount($accountObj) {
		$sql = "INSERT INTO `Account`(`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) VALUES (
        '" . $accountObj->getIdAccount() . "',
        '" . $accountObj->getAccountName() . "',
        '" . $accountObj->getBirthday() . "',
        '" . $accountObj->getAddress() . "',
        '" . $accountObj->getSex() . "',
        '" . $accountObj->getPhone() . "',
        '" . $accountObj->getEmail() . "',
        '" . md5($accountObj->getPassword()) . "',
        '" . $accountObj->getPermission_position() . "'
        )";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
	//tho
    public function findStaffByID($id){
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM Account WHERE idAccount='".$id."' and Account.Permission_position <> 'Quản lý chi hội' and Account.Permission_position <> 'Sinh viên' AND Account.Permission_position <> 'Default';";
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        // Kiểm tra số lượng kết quả trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            //Tạo một đối tượng chứa
            while ($row = $result->fetch_assoc()) {
                //Cho vào list đối tượng
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
            }
        } else {
            return 0;
            //echo "Không có kết quả nào";
        }
        //Ngắt kết nối
        $this->conn2sql->Stop();
        //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
        return $account;
    }

    //tho
    public function findSVByID($string){
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM Account WHERE (idAccount='".$string."' OR accountName='".$string."')  and (Account.Permission_position = 'Sinh viên');";
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        // Kiểm tra số lượng kết quả trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            $k = 0;
            //Tạo một đối tượng chứa
            while ($row = $result->fetch_assoc()) {
                //Cho vào list đối tượng
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
                $list[$k] = $account;
                $k++;
            }
        } else {
            $this->conn2sql->Stop();
            return 0;
            //echo "Không có kết quả nào";
        }
        //Ngắt kết nối
        $this->conn2sql->Stop();
        //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
        return $list;
    }
	#Trả về đối tượng tài khoản
    /* Người sử dụng
          Hoàng Thơ

   * */

	/**
	# Đoàn Minh Nhựt
	*/
	public function getAccount($idAccount) {
		$sql = "SELECT * FROM `Account` WHERE `idAccount` = '" . $idAccount . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$row = $result->fetch_row();
		return new AccountObj($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
	}
	/**
	# Đoàn Minh Nhựt
	*/
	public function getAllAccount() {
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
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {

			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	/**
	# Đoàn Minh Nhựt
	*/
	public function getAllAccountByPermission($position) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account WHERE Permission_position='" . $position . "';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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

	#Một nùi luân =-----------------------------------------------------------
	public function getClassId($id) {
		$sql = "SELECT Class.idClass FROM Account,Account_has_Class,Class WHERE Account.idAccount = Account_has_Class.Account_idAccount AND Account_has_Class.Class_idClass = Class.idClass AND Account.idAccount='" . $id . "';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$list[$k] = $row["idClass"];
				$k++;
			}

		} else {
			// echo "The result of information processing is data false";
			return 0;
		}
		return $list;
	}

	#Trả về danh sách khoa theo ID
    /* Người sử dụng
          Hoàng Thơ
   * */
	public function getAcademyId($id) {
		$sql = "SELECT Academy.idAcademy FROM Account,Account_has_Academy,Academy WHERE Account.idAccount = Account_has_Academy.Account_idAccount AND Account_has_Academy.Academy_idAcademy = Academy.idAcademy AND Account.idAccount='" . $id . "';
";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$list = $row["idAcademy"];
			}

		} else {
			// echo "The result of information processing is data false";
		}
		return $list;
	}

	public function getBranchId($id) {
		$sql = "SELECT Branch.idBranch FROM Account,Account_has_Branch,Branch WHERE Account.idAccount = Account_has_Branch.Account_idAccount AND Account_has_Branch.Branch_idBranch = Branch.idBranch AND Account.idAccount='" . $id . "';
";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$list = array();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$list[$k] = $row["idBranch"];
				$k++;
			}

		} else {
			return 0;
			// echo "The result of information processing is data false";
		}
		return $list;
	}
    public function getBranchName($id) {
        $sql = "SELECT Branch.branchName FROM Account,Account_has_Branch,Branch WHERE Account.idAccount = Account_has_Branch.Account_idAccount AND Account_has_Branch.Branch_idBranch = Branch.idBranch AND Account.idAccount='" . $id . "';
";
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        $this->conn2sql->Stop();
        $list = array();
        if ($result->num_rows > 0) {
            $k = 0;
            while ($row = $result->fetch_assoc()) {
                $list[$k] = $row["branchName"];
                $k++;
            }

        } else {
            return 0;
            // echo "The result of information processing is data false";
        }
        return $list;
    }
    public function getTruongChiHoi() {
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM Account WHERE Permission_position='Quản lý chi hội';";
        $this->conn2sql->Connect();
        $result = $this->conn2sql->conn->query($sql);
        // Kiểm tra số lượng kết quả trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            $k = 0;
            //Tạo một đối tượng chứa
            while ($row = $result->fetch_assoc()) {
                //Cho vào list đối tượng
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
                $list[$k] = $account;
                $k++;
            }
        } else {
            return 0;
            //echo "Không có kết quả nào";
        }
        //Ngắt kết nối
        $this->conn2sql->Stop();
        //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
        return $list;
    }

	public function getStudentAll() {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account WHERE Permission_position='Sinh viên' OR Permission_position='Quản lý chi hội';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {
			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	#Trả về danh sách các tài khoản cán bộ
    /* Người sử dụng
              Hoàng Thơ
       * */
	public function getAccountStaff() {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account WHERE Account.Permission_position <> 'Quản lý chi hội' AND Account.Permission_position <> 'Sinh viên' AND Account.Permission_position <> 'Default';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {
			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}
	#Trả về danh sách các tài khoản cán bộ
    /* Người sử dụng
          Hoàng Thơ
   * */
	public function getAccountStaffByAcademy($id) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account, Account_has_Academy
                    WHERE Account.idAccount = Account_has_Academy.Account_idAccount AND
                    Account_has_Academy.Academy_idAcademy = '" . $id . "' AND
                    Account.Permission_position <> 'Quản lý chi hội' AND
                    Account.Permission_position <> 'Sinh viên' AND
                    Account.Permission_position <> 'Default';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {
			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	/**
	 * Lấy danh sách học sinh theo id khoa
	 * @param $id
	 * @return array|int
	 */
	public function getAccountStudentByAcademy($id) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account, Account_has_Academy
                    WHERE Account.idAccount = Account_has_Academy.Account_idAccount AND
                    Account_has_Academy.Academy_idAcademy = '".$id."' AND (
                    Account.Permission_position = 'Quản lý chi hội' OR
                    Account.Permission_position = 'Sinh viên');";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {
			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	/**
	 * Lấy danh sách sinh viên theo lớp
	 * @param $id
	 * @return array|int
	 */
	public function getAccountStudentByClass($id) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account, Account_has_Class
                    WHERE Account.idAccount = Account_has_Class.Account_idAccount AND
                    Account_has_Class.Class_idClass
                     = '" . $id . "' AND (
                     Account.Permission_position = 'Quản lý chi hội' OR
                    Account.Permission_position = 'Sinh viên');";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {
			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	public function getAccountStudentByBranch($id) {
		// Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
		$list = array();
		// Đẩy câu lệnh vào string
		$sql = "SELECT * FROM Account, Account_has_Branch
                    WHERE Account.idAccount = Account_has_Branch.Account_idAccount AND
                    Account_has_Branch.Branch_idBranch
                     = '" . $id . "' AND (
                     Account.Permission_position = 'Quản lý chi hội' OR
                    Account.Permission_position = 'Sinh viên');";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		// Kiểm tra số lượng kết quả trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
		if ($result->num_rows > 0) {
			// Sử dụng vòng lặp while để lặp kết quả
			$k = 0;
			//Tạo một đối tượng chứa
			while ($row = $result->fetch_assoc()) {
				//Cho vào list đối tượng
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
				$list[$k] = $account;
				$k++;
			}
		} else {
			return 0;
			//echo "Không có kết quả nào";
		}
		//Ngắt kết nối
		$this->conn2sql->Stop();
		//Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
		return $list;
	}

	#Cập nhật thông tin tài khoản
    /* Người sử dụng
          Hoàng Thơ
    	  Minh Luân
   	* */
		/**
		# Đoàn Minh Nhựt
		*/
	public function updateAccount($account) {
		$sql = "UPDATE `Account` SET
        `accountName`='" . $account->getAccountName() . "',
        `birthday`='" . $account->getBirthday() . "',
        `address`='" . $account->getAddress() . "',
        `sex`='" . $account->getSex() . "',
        `phone`='" . $account->getPhone() . "',
        `email`='" . $account->getEmail() . "',
        `Permission_position`='" . $account->getPermission_position() . "'
        WHERE `idAccount`='" . $account->getIdAccount() . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if ($result) {
			return true;
		} else {
			return false;
		}
		return true;
	}
//tho
    public function updateStaff($account)
    {
        // Đẩy câu lệnh vào string
        $sql = "UPDATE `Account` SET
        `accountName`='" . $account->getAccountName() . "',
        `birthday`='" . $account->getBirthday() . "',
        `address`='" . $account->getAddress() . "',
        `sex`='" . $account->getSex() . "',
        `phone`='" . $account->getPhone() . "',
        `email`='" . $account->getEmail() . "',
        `password`='" . $account->getPassword() . "',
        `Permission_position`='" . $account->getPermission_position() . "'
        WHERE `idAccount`='" . $account->getIdAccount() . "'";
        // Thực thi câu lệnh
        // Thực hiện câu truy vấn
        $this->conn2sql->Connect();
        if ($this->conn2sql->conn->query($sql) === true) {
            // echo "Cập nhật thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            // echo "Lỗi updatebranch";
            //Ngắt kết nối
            $this->conn2sql->Stop();
            return false;
        }
    }


	#Xóa tài khoản
	/* Người sử dụng
	Minh Luân
	Hoàng Thơ
	 * */
	public function deleteAccount($account) {
		$sql =
			"DELETE FROM `Account_has_Class` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
			. "DELETE FROM `Account_has_Academy` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
			. "DELETE FROM `Account_has_Branch` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
            . "DELETE FROM `Image` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
            . "DELETE FROM `ScoresAdd_has_Account` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
            . "DELETE FROM `Transcript` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
            . "DELETE FROM `PractiseScores` WHERE `Account_idAccount` = '" . $account->getIdAccount() . "';"
			. "DELETE FROM `Account` WHERE `idAccount` = '" . $account->getIdAccount() . "'; ";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->multi_query($sql);
		$this->conn2sql->Stop();
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	#Trả về một mảng chứa tên các lớp
	public function getAccountOnClass($idAccount) {
		$sql = "SELECT `Class_idClass` FROM `Account_has_Class` WHERE `Account_idAccount` = '" . $idAccount . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		if (empty($result)) {
			//echo 'EMPTY';
			return [];
		}
		$arr = array();
		$i = 0;
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_row())
				$arr[$i++] = $row[0];
		}
		$className = array();
		for ($i = 0; $i < count($arr); $i++) {
			$sql = "SELECT `className` FROM `Class` WHERE `idClass` = '" . $arr[$i] . "'";
			#echo $sql.'<br />';
			$this->conn2sql->Connect();
			$result = $this->conn2sql->conn->query($sql);
			if (!empty($result)) {
				$row = $result->fetch_row();
				$className[$i] = $row[0];
			}
		}
		$this->conn2sql->Stop();
		return $className;
	}

	//trả danh sách lớp, khoa , chi hoi
    /* Người sử dụng
          Hoàng Thơ
    	  Minh Luân

   * */
	public function getClass($id) {
		$sql = "SELECT Class.className FROM Account,Account_has_Class,Class WHERE Account.idAccount = Account_has_Class.Account_idAccount AND Account_has_Class.Class_idClass = Class.idClass AND Account.idAccount='" . $id . "';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$list = array();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$list[$k] = $row["className"];
				$k++;
			}

		} else {
			// echo "The result of information processing is data false";
		}
		return $list;
	}
	/**
	# Đoàn Minh Nhựt
	*/
	public function getPermission($id) {
		$sql = "SELECT Permission_position FROM Account WHERE  Account.idAccount='" . $id . "';";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$list = $row["Permission_position"];
			}

		} else {
			// echo "The result of information processing is data false";
		}
		return $list;
	}

    /* Người sử dụng
              Hoàng Thơ

       * */
	public function getAcademy($id) {
		$sql = "SELECT Academy.academyName FROM Account,Account_has_Academy,Academy WHERE Account.idAccount = Account_has_Academy.Account_idAccount AND Account_has_Academy.Academy_idAcademy = Academy.idAcademy AND Account.idAccount='" . $id . "';
";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$list = array();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$list[$k] = $row["academyName"];
				$k++;
			}

		} else {
			// echo "The result of information processing is data false";
		}
		return $list;
	}

    /* Người sử dụng
              Hoàng Thơ

       * */
	public function getBranch($id) {
		$sql = "SELECT Branch.branchName FROM Account,Account_has_Branch,Branch WHERE Account.idAccount = Account_has_Branch.Account_idAccount AND Account_has_Branch.Branch_idBranch = Branch.idBranch AND Account.idAccount='" . $id . "';
";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$list = array();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$list[$k] = $row["branchName"];
				$k++;
			}

		} else {
			// echo "The result of information processing is data false";
		}
		return $list;
	}

	#Trả về một mảng chứa tên các khoa
	public function getAccountOnAcademy($idAccount) {
		$sql = "SELECT `Academy_idAcademy` FROM `Account_has_Academy` WHERE `Account_idAccount` = '" . $idAccount . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		if (empty($result)) {
			echo 'EMPTY';
			return [];
		}
		$arr = array();
		$i = 0;
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_row())
				$arr[$i++] = $row[0];
		}
		$academyName = array();
		for ($i = 0; $i < count($arr); $i++) {
			$sql = "SELECT `academyName` FROM `Academy` WHERE `idAcademy` = '" . $arr[$i] . "'";
			#echo $sql.'<br />';
			$this->conn2sql->Connect();
			$result = $this->conn2sql->conn->query($sql);
			if (!empty($result)) {
				$row = $result->fetch_row();
				$academyName[$i] = $row[0];
			}
		}
		$this->conn2sql->Stop();
		return $academyName;
	}

	#Trả về một mảng chứa tên các chi hội
	public function getAccountOnBranch($idAccount) {
		$sql = "SELECT `Branch_idBranch` FROM `Account_has_Branch` WHERE `Account_idAccount` = '" . $idAccount . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		if (empty($result)) {
			echo 'EMPTY';
			return [];
		}
		$arr = array();
		$i = 0;
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_row())
				$arr[$i++] = $row[0];
		}
		$branchName = array();
		for ($i = 0; $i < count($arr); $i++) {
			$sql = "SELECT `branchName` FROM `Branch` WHERE `idBranch` = '" . $arr[$i] . "'";
			#echo $sql.'<br />';
			$this->conn2sql->Connect();
			$result = $this->conn2sql->conn->query($sql);
			if (!empty($result)) {
				$row = $result->fetch_row();
				$branchName[$i] = $row[0];
			}
		}
		$this->conn2sql->Stop();
		return $branchName;
	}

	#Trả về một mảng chứa tên các điểm cộng trừ
	public function getAccountOnScoresAdd($idAccount) {
		$sql = "SELECT `ScoresAdd_idScore` FROM `ScoresAdd_has_Account` WHERE `Account_idAccount` = '" . $idAccount . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		if (empty($result)) {
			echo 'EMPTY';
			return [];
		}
		$arr = array();
		$i = 0;
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_row())
				$arr[$i++] = $row[0];
		}
		$scoresaddName = array();
		for ($i = 0; $i < count($arr); $i++) {
			$sql = "SELECT `scores` FROM `ScoresAdd` WHERE `idScore` = '" . $arr[$i] . "'";
			#echo $sql.'<br />';
			$this->conn2sql->Connect();
			$result = $this->conn2sql->conn->query($sql);
			if (!empty($result)) {
				$row = $result->fetch_row();
				$scoresaddName[$i] = $row[0];
			}
		}
		$this->conn2sql->Stop();
		return $scoresaddName;
	}

	#Kiểm tra tài khoản có thuộc lớp hay không?, bằng mã số
	public function checkAccountOnClass($idAccount, $idClass) {
		$sql = "SELECT `Account_idAccount` FROM `Account_has_Class` WHERE `Account_idAccount` = '" . $idAccount . "' AND `Class_idClass` = '" . $idClass . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if (empty($result)) {
			return false;
		}
		if ($result->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	#Kiểm tra tài khoản có thuộc khoa hay không?, bằng mã số
	public function checkAccountOnAcademy($idAccount, $idAcademy) {
		$sql = "SELECT `Account_idAccount` FROM `Account_has_Academy` WHERE `Account_idAccount` = '" . $idAccount . "' AND `Academy_idAcademy` = '" . $idAcademy . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if (empty($result)) {
			return false;
		}
		if ($result->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	#Kiểm tra tài khoản có thuộc khoa hay không?, bằng mã số
	public function checkAccountOnBranch($idAccount, $idBranch) {
		$sql = "SELECT `Account_idAccount` FROM `Account_has_Branch` WHERE `Account_idAccount` = '" . $idAccount . "' AND `Branch_idBranch` = '" . $idBranch . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if (empty($result)) {
			return false;
		}
		if ($result->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	#Kiểm tra tài khoản có cộng hoặc trừ điểm hay không?, bằng mã số
	public function checkAccountOnScoresAdd($idAccount, $idScoresAdd) {
		$sql = "SELECT `Account_idAccount` FROM `ScoresAdd_has_Account` WHERE `Account_idAccount` = '" . $idAccount . "' AND `ScoresAdd_idScores` = '" . $idScoresAdd . "'";
		#echo $sql.'<br />';
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if (empty($result)) {
			return false;
		}
		if ($result->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	/**
	# Đoàn Minh Nhựt
	*/
	#Tìm kiếm tài khoản theo tên,
	#trả về mảng chứa thông tin tài khoản với các khóa là thuộc tính của tài khoản
	public function findAccountByName($accountName) {
		$sql = "SELECT * FROM `Account` WHERE `accountName` = '" . $accountName . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$row = $result->fetch_row();
		if ($result->num_rows == 0) {
			return array();
		}
		$i = 0;
		$accountArr = array(
			'idAccount' => $row[$i++],
			'accountName' => $row[$i++],
			'birthday' => $row[$i++],
			'address' => $row[$i++],
			'sex' => $row[$i++],
			'phone' => $row[$i++],
			'email' => $row[$i++],
			'password' => $row[$i++],
			'permission_position' => $row[$i++]);
		return $accountArr;
	}

	#Tìm kiếm tài khoản theo mã số,
	#trả về mảng chứa thông tin tài khoản với khóa là thuộc tính của tài khoản
    /* Người sử dụng
          Hoàng Thơ
   * */
	 /**
 	# Đoàn Minh Nhựt
 	*/
	public function findAccountByID($idAccount) {
		$this->conn2sql->Connect();
		$sql = "SELECT * FROM `Account` WHERE `idAccount` = '" . $idAccount . "'";
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$row = $result->fetch_row();
		if ($result->num_rows == 0) {
			return array();
		}
		$i = 0;
		$accountArr = array(
			'idAccount' => $row[$i++],
			'accountName' => $row[$i++],
			'birthday' => $row[$i++],
			'address' => $row[$i++],
			'sex' => $row[$i++],
			'phone' => $row[$i++],
			'email' => $row[$i++],
			'password' => $row[$i++],
			'permission_position' => $row[$i++]
		);
		return $accountArr;
	}

	public function findAcademy($accountID) {
		$sql = "SELECT Academy.idAcademy, Academy.academyName FROM Academy, Account_has_Academy WHERE Academy.idAcademy = Academy_idAcademy AND Account_idAccount='" . $accountID . "';";
		// Thực thi truy vấn
		$this->conn->Connect();
		$result = $this->conn->conn->query($sql);
		// Kiểm tra số lượng kết trả về có lơn hơn 0
		// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
		if ($result->num_rows > 0) {
			// Nếu có thì trả về đối tượng đo
			$list = array();
			$k = 0;

			while ($row = $result->fetch_assoc()) {
				$academytemp = new AcademyObj();
				//Cho vào list đối tượng
				$academytemp->setIdAcademy($row["idAcademy"]);
				$academytemp->setAcademyName($row["academyName"]);
				$list[$k] = $academytemp;
				$k++;
			}
		} else {
			//  echo '0 có ID này';
			//Báo rỗng
		}
		return $list;
		//Ngắt kết nối
		$this->conn->Stop();
	}
	public function getAllPermission($position) {
		$arr = array();
		$sql = "SELECT * FROM Account WHERE Permission_position='" . $position . "'";
		$this->conn2sql->Connect();
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		if ($result->num_rows > 0) {
			$k = 0;
			while ($row = $result->fetch_assoc()) {
				$account = new AccountObj();
				$account->setIdAccount($row["idAccount"]);
				$account->setAccountName($row["accountName"]);
				$account->setBirthday($row["birthday"]);
				$account->setAddress($row["address"]);
				$account->setSex($row["sex"]);
				$account->setPhone($row["phone"]);
				$account->setEmail($row["email"]);
				$account->setPassword($row["password"]);
				$account->setPermission_position($row["Permission_position"]);
				$arr[$k] = $account;
				$k++;
			}
		} else {
			return [];
		}
		return $arr;
	}

	/*
	* Phương thức findInformationAccountById: 
	* Cung cấp thông tin chi tiết của một Account thông qua idAccount
 	* Coder: Phạm Hoài An
 	* Date: 15/07/2017
 	* Cập nhật: 15/07/2017
 	* Trạng thái: đã test thành công
	*/
	public function findInformationAccountByID($idAccount) {
		$this->conn2sql->Connect();
		$sql = "SELECT DISTINCT ac.idAccount
								,ac.accountName
								,ac.birthday
								,ac.address
								,ac.sex
								,ac.phone
								,ac.email
								,ahc.Class_idClass
								,c.className
								,acm.academyName
								,c.schoolYear 
				from Account ac, Academy acm , Account_has_Class ahc, Class c 
				where ac.idAccount= '" . $idAccount . "' and 
						ahc.Account_idAccount = '" . $idAccount . "' and
						c.idClass = (SELECT Class_idClass 
										from Account_has_Class 
										WHERE Account_idAccount = '" . $idAccount . "') and 
						acm.idAcademy = (SELECT Academy_idAcademy 
											from Account_has_Academy 
											WHERE Account_idAccount = '" . $idAccount . "')";
		$result = $this->conn2sql->conn->query($sql);
		$this->conn2sql->Stop();
		$row = $result->fetch_row();
		if ($result->num_rows == 0) {
			return array();
		}
		$i = 0;
		$accountArr = array(
			'idAccount' => $row[$i++],
			'accountName' => $row[$i++],
			'birthday' => $row[$i++],
			'address' => $row[$i++],
			'sex' => $row[$i++],
			'phone' => $row[$i++],
			'email' => $row[$i++],
			'Class_idClass' => $row[$i++],
			'className' => $row[$i++],
			'academyName' => $row[$i++],
			'schoolYear' => $row[$i++]
		);
		return $accountArr;
	}
}


#*************************************************************************************************************************
#require_once 'ConnectToSQL.php';
#$require_once 'AccountObj.php';
#$newStudent = new accountMod();
#$arr = $newStudent->getAllAccount();
#var_dump(json_encode($newStudent->getArray()));
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

// $newacc = new AccountMod();
// $row=array();
// $row=$newacc->getClass("B1400704");
// foreach ($row as $key => $value) {
//  echo $key . "->" . $value." <br>";
// }

#var_dump($newStudent->findAccountByID('B1400704'));
#*************************************************************************************************************************

?>
