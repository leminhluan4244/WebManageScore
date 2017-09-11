<?php
/**
 *Lớp liên kết giữa tài khoản và chi hội
 *Coder: Lê Minh Luân
 *Date:04/08/2017
 * Chỉnh sửa:2108/2017
 */
require_once("AccountObj.php");
require_once("BranchObj.php");
require_once("ConnectToSQl.php");

class AccountHasBranchMod
{

    //Hàm thêm một sinh viên vào chi hội
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectToSQL();
    }

    public function addAccountHasBranch($account, $branch)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) 
						VALUES('" . $account->getIdAccount() . "','" . $branch->getIdBranch() . "');";
        // Thực thi câu lệnh
        $this->conn->Connect();
        if ($this->conn->conn->multi_query($sql) === true) {
            echo "Thêm thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            echo "Lỗi add Account to Branch";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }

    }

    //Hàm xóa một sinh viên khỏi chi hội
    public function deleteAccountHasBranch($account, $branch)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM Account_Has_Branch 
						WHERE Account_idAccount='" . $account->getIdAccount() . "' 
						and Branch_idBranch='" . $branch->getIdBranch() . "';";
        // Thực thi câu lệnh
        // Thực hiện câu truy vấn
        $this->conn->Connect();
        if ($this->conn->conn->query($sql) === true) {
            echo "Xóa thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            echo "Lỗi deleteAcademy";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }
    }
}

//$objAccount = new AccountObj();
//$objAccount->setIdAccount('B1400704');
//$objBranch = new BranchObj();
//$objBranch->setIdBranch('CTHG');
//$mod = new AccountHasBranchMod();
//echo 'Hàm thêm <br>';
//$mod->addAccountHasBranch($objAccount,$objBranch);
//echo 'Hàm xóa <br>';
//$mod->deleteAccountHasBranch($objAccount,$objBranch);


?>