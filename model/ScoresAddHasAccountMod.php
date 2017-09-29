<?php
/**
 *Lớp liên kết giữa tài khoản và chi hội
 *Coder: Lê Minh Luân
 *Date:04/08/2017
 * Chỉnh sửa:2108/2017
 */

class ScoresAddHasAccountMod
{

    //Hàm thêm một sinh viên vào chi hội
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectToSQL();
    }

    public function addAccountHasAcademy($scores, $idaccount)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO `ScoresAdd_has_Account` (`ScoresAdd_idScore`, `Account_idAccount`) 
						VALUES('" . $scores. "','" . $idaccount. "');";
        // Thực thi câu lệnh
        $this->conn->Connect();
        if ($this->conn->conn->multi_query($sql) === true) {
            //echo "Thêm thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            //echo "Lỗi add Account to Academy";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }

    }

    //Hàm xóa một sinh viên khỏi chi hội
    public function deleteAccountHasAcademy($scores, $idaccount)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM ScoresAdd_has_Account 
						WHERE ScoresAdd_idScore='" . $scores. "' 
						and Account_idAccount='" . $idaccount. "';";
        // Thực thi câu lệnh
        // Thực hiện câu truy vấn
        $this->conn->Connect();
        if ($this->conn->conn->query($sql) === true) {
           // echo "Xóa thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
           // echo "Lỗi deleteAcademy";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }
    }
}

//$objAccount = new AccountObj();
//$objAccount->setIdAccount('B1400704');
//$objAcademy = new AcademyObj();
//$objAcademy->setIdAcademy('CTHG');
//$mod = new AccountHasAcademyMod();
//echo 'Hàm thêm <br>';
//$mod->addAccountHasAcademy($objAccount,$objAcademy);
//echo 'Hàm xóa <br>';
//$mod->deleteAccountHasAcademy($objAccount,$objAcademy);


?>