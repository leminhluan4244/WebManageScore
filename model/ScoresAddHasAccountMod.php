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

    public function addTable($scores, $idaccount)
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
    public function getCheckTable($scores, $idaccount)
    {
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM `ScoresAdd_has_Account`
						WHERE ScoresAdd_idScore = '".$scores."' AND  Account_idAccount = '".$idaccount."';";
        // Thực thi câu lệnh
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        $this->conn->Stop();
        if ($result->num_rows > 0) {
            return true;

        } else {
            // echo "The result of information processing is data false";
            return false;
        }

    }
    public function getNameTable($scores)
    {
        // Đẩy câu lệnh vào string
        $sql = "SELECT ScoresAdd.scoreName FROM ScoresAdd
						WHERE ScoresAdd.idScore = '".$scores."';";
        // Thực thi câu lệnh
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        $this->conn->Stop();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["scoreName"];
            }

        } else {
            // echo "The result of information processing is data false";
            return false;
        }

    }
    //Hàm xóa một sinh viên khỏi chi hội
    public function deleteTable($scores, $idaccount)
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
    public function deleteTableAll()
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM ScoresAdd_has_Account WHERE 1";
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
    public function deleteAll($scores)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM ScoresAdd_has_Account 
						WHERE ScoresAdd_idScore='" . $scores. "' 
						;";
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