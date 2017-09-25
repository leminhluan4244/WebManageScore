<?php
/**
 * Lớp Khoa: mô tả việc trao đổi dữ liệu với mysql
 * Coder: Lê Minh Luân
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 */
class ImageMod
{
    //Tạo ra một đối tượng cho phép dùng nó để giao tiếp với MySQL
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectToSQL();
    }

    // Hàm trả về danh sách các khoa hiện có
    public function getImage()
    {
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM Image";
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
    public function addAcademy($academy)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO Academy(idAcademy, AcademyName) 
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
    public function deleteAcademy($academy)
    {
        // Đẩy câu lệnh vào string
        $sql = "DELETE FROM Academy 
						WHERE idAcademy='" . $academy->getIdAcademy() . "';";
        // Thực thi câu lệnh
        $this->conn->Connect();
        // Thực hiện câu truy vấn
        if ($this->conn->conn->query($sql) === true) {
          //  echo "Xóa thành công";
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

    //Hàm cập nhật một khoa
    public function updateAcademy($academy)
    {
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
