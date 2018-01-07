<?php
/**
 *Lớp liên kết giữa tài khoản và chi hội
 *Coder: Lê Minh Luân
 *Date:04/08/2017
 * Chỉnh sửa:2108/2017
 */

class AccountHasAcademyMod
{

    //Hàm thêm một sinh viên vào chi hội
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectToSQL();
    }

    #Thêm tài khoản các bộ vào khoa
    /* Người sử dụng
       Hoàng Thơ
        * */
    public function addStaffHasAcademy($account, $Academy)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) 
						VALUES('" . $account->getIdAccount() . "','" . $Academy->getIdAcademy() . "');";
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
    #Thêm tài khoản thuộc khoa
    /* Người sử dụng
          Hoàng Thơ
   * */
    public function addAccountHasAcademy($account, $Academy)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) 
						VALUES('" . $account. "','" . $Academy. "');";
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
    /* Người sử dụng
          Hoàng Thơ
   * */
    public function deleteAccountHasAcademy($account)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM Account_has_Academy 
						WHERE Account_idAccount='" . $account . "';";
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