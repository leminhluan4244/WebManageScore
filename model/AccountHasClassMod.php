<?php
/**
 *Lớp liên kết giữa tài khoản và chi hội
 *Coder: Lê Minh Luân
 *Date:04/08/2017
 * Chỉnh sửa:2108/2017
 */

class AccountHasClassMod
{

    //Hàm thêm một sinh viên vào chi hội
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectToSQL();
    }

    public function addAccountHasClass($account, $Class)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) 
						VALUES('" . $account . "','" . $Class . "');";
        // Thực thi câu lệnh
        $this->conn->Connect();
        if ($this->conn->conn->multi_query($sql) === true) {
           // echo "Thêm thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
          //  echo "Lỗi add Account to Class";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }

    }

    //Hàm xóa một sinh viên khỏi chi hội
    public function deleteAccountHasClass($account)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM Account_Has_Class 
						WHERE Account_idAccount='" . $account. "';";
        // Thực thi câu lệnh
        // Thực hiện câu truy vấn
        $this->conn->Connect();
        if ($this->conn->conn->query($sql) === true) {
           // echo "Xóa thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
          //  echo "Lỗi deleteClass";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }
    }

    public function changeTeacher($account, $Class)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM Account_Has_Class 
						WHERE Class_idClass='" . $account. "';".
                "INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) 
						VALUES('" . $account . "','" . $Class . "');";
        // Thực thi câu lệnh
        $this->conn->Connect();
        if ($this->conn->conn->multi_query($sql) === true) {
            // echo "Thêm thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            //  echo "Lỗi add Account to Class";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }

    }
}

//$objAccount = new AccountObj();
//$objAccount->setIdAccount('B1400704');
//$objClass = new ClassObj();
//$objClass->setIdClass('CTHG');
//$mod = new AccountHasClassMod();
//echo 'Hàm thêm <br>';
//$mod->addAccountHasClass($objAccount,$objClass);
//echo 'Hàm xóa <br>';
//$mod->deleteAccountHasClass($objAccount,$objClass);


?>