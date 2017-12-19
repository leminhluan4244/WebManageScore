<?php
/**
 * Lớp chi hội: mô tả việc trao đổi dữ liệu với mysql
 * Coder: Lê Minh Luân
 * Date: 05/08/2017
 * Trạng thái: đã test
 */

class BranchMod
{
    //Tạo ra một đối tượng cho phép dùng nó để giao tiếp với MySQL
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectToSQL();
    }
    //*****************************************************
    // Hàm đếm số sinh viên trong một chi hội có bao nhiêu sinh viên
    public function countAccount($branch)
    {
        $sql = "SELECT count(*) FROM Account_has_Branch WHERE Branch_idBranch='" . $branch->getBranch_idBranch() . "' ";
        // Thực thi truy vấn
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //Cho vào list đối tượng
                //   echo $row["count(*)"];
                return $row["count(*)"];
            }
        } else {
            //  echo "error count account in Branch";
            return 0;
        }

        //Ngắt kết nối
        $this->conn->Stop();
    }
    //Đếm số chi hội hiện có
    public function countBranch()
    {
        $sql = "SELECT count(*) FROM Branch ";
        // Thực thi truy vấn
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //Cho vào list đối tượng
                //   echo $row["count(*)"];
                return $row["count(*)"];
            }
        } else {
            //  echo "error count account in Branch";
            return 0;
        }

        //Ngắt kết nối
        $this->conn->Stop();
    }
    //******************************************************
    // Hàm trả về danh sách các sinh viên hiện có trong chi hội
    public function getListAccount($branch)
    {
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT idAccount,accountName,birthday,address,sex,phone,email,Permission_position
                FROM Account,Account_has_Branch
                WHERE Branch_idBranch='" . $branch . "' and  Account.idAccount = Account_has_Branch.Account_idAccount;";
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);

        // Kiểm tra số lượng kết quả trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            $k = 0;
            //Tạo một đối tượng chứa
            while ($row = $result->fetch_assoc()) {
                $account = new AccountObj();
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
            //Ngắt kết nối
            $this->conn->Stop();
            // echo "Không có kết quả nào";
            return 0;
        }
        //Ngắt kết nối
        $this->conn->Stop();
        //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
        return $list;
    }
    //*********************************************************
    //Hàm tìm kiếm một chi hội theo mã
    /* Người sử dụng
    Hoàng Thơ
    * */
    public function findBranchByID($branchS)
    {
        $sql = "SELECT * FROM Branch WHERE idBranch='" . $branchS . "';";
        // Thực thi truy vấn
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
        if ($result->num_rows > 0) {
            // Nếu có thì trả về đối tượng đó
            $branch = new BranchObj();
            while ($row = $result->fetch_assoc()) {

                //Cho vào list đối tượng
                $branch->setidBranch($row["idBranch"]);
                $branch->setBranchName($row["branchName"]);
                $branch->setCity($row["city"]);
            }
        } else {
            //Báo rỗng
            return 0;
        }
        return $branch;
        //Ngắt kết nối
        $this->conn->Stop();
    }
    #Tìm kiếm chi hội theo tỉnh
    /* Người sử dụng
    Hoàng Thơ
    * */
    public function findBranchByCity($branchC)
    {
        $sql = "SELECT * FROM Branch WHERE city='" . $branchC . "';";
        // Thực thi truy vấn
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
        if ($result->num_rows > 0) {
            $k=0;
            $list = array();
            // Nếu có thì trả về đối tượng đó

            while ($row = $result->fetch_assoc()) {
                $branch = new BranchObj();
                //Cho vào list đối tượng
                $branch->setidBranch($row["idBranch"]);
                $branch->setBranchName($row["branchName"]);
                $branch->setCity($row["city"]);
                $list[$k] = $branch;
                $k++;
            }
        } else {
            //Báo rỗng
            return 0;
        }
        return $list;
        //Ngắt kết nối
        $this->conn->Stop();
    }
    //Hàm tìm kiếm một chi hội theo tên
    public function findBranchByName($branch)
    {
        $sql = "SELECT * FROM Branch WHERE branchName=N'" . $branch->getBranchName() . "';";
        // Thực thi truy vấn
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        $list = array();
        // Kiểm tra số lượng kết trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
        if ($result->num_rows > 0) {
            // Nếu có thì trả về đối tượng đó
            $branch = new BranchObj();

            $k = 0;
            while ($row = $result->fetch_assoc()) {

                //Cho vào list đối tượng
                $branch->setIdBranch($row["idBranch"]);
                $branch->setBranchName($row["branchName"]);
                $list[$k] = $branch;
                $k++;
            }
        } else {
            //Báo rỗng
        }
        return $list;
        //Ngắt kết nối
        $this->conn->Stop();
    }
    public function countStudent($branch)
    {
        $sql = "SELECT count(*) FROM Account_has_Branch WHERE Branch_idBranch='".$branch->getIdBranch()."';";
        // Thực thi truy vấn
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả, num_rows xem như biến chứa kết quả sau khi trả về
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                //Cho vào list đối tượng
                //  echo $row["count(*)"];
                return $row["count(*)"];
            }
        } else {
            // echo "error count student in Branch";
            return -1;
        }

        //Ngắt kết nối
        $this->conn->Stop();
    }

    #Trả về danh sách chi hội theo ID
    /* Người sử dụng
    Hoàng Thơ
    * */
    public function getBranchId($i){
        $sql = "SELECT * FROM `Branch` WHERE `idBranch` = '".$i."'";
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        $this->conn->Stop();
        $row = $result->fetch_row();
        return new BranchObj($row[0], $row[1], $row[2]);
    }
    // Hàm trả về danh sách các chi hội hiện có
    /* Người sử dụng
    Hoàng Thơ
    * */
    public function getBranch()
    {
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM Branch";
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết quả trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            $k = 0;
            //Tạo một đối tượng chứa

            while ($row = $result->fetch_assoc()) {
                $branch = new BranchObj();
                //Cho vào list đối tượng
                $branch->setidBranch($row["idBranch"]);
                $branch->setBranchName($row["branchName"]);
                $branch->setCity($row["city"]);
                $list[$k] = $branch;
                $k++;
            }
        } else {
            return 0;
            //echo "Không có kết quả nào";
        }
        //Ngắt kết nối
        $this->conn->Stop();
        //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
        return $list;
    }
    public function getBranchLimit( $start, $limit)
    {
        // Tạo ra một mảng lưu trữ tên list, mặc định bang đầu rỗng
        $list = array();
        // Đẩy câu lệnh vào string
        $sql = "SELECT * FROM Branch LIMIT ".$start.",".$limit;
        $this->conn->Connect();
        $result = $this->conn->conn->query($sql);
        // Kiểm tra số lượng kết quả trả về có lơn hơn 0
        // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            $k = 0;
            //Tạo một đối tượng chứa

            while ($row = $result->fetch_assoc()) {
                $branch = new BranchObj();
                //Cho vào list đối tượng
                $branch->setidBranch($row["idBranch"]);
                $branch->setBranchName($row["branchName"]);
                $branch->setCity($row["city"]);
                $list[$k] = $branch;
                $k++;
            }
        } else {
            return 0;
            //echo "Không có kết quả nào";
        }
        //Ngắt kết nối
        $this->conn->Stop();
        //Trả đối tượng đi, sau này lớp control sẽ sử dụng mảng này để truy xuất
        return $list;
    }

    //Hàm thêm một chi hội
    /* Người sử dụng
          Hoàng Thơ
   * */
    public function addBranch($branch)
    {
        // Đẩy câu lệnh vào string
        $sql = "INSERT INTO Branch(idBranch, branchName,city) VALUES('". $branch->getIdBranch() ."','".$branch->getBranchName() ."','".$branch->getCity()."');";
        // Thực thi câu lệnh
        $this->conn->Connect();
        if ($this->conn->conn->multi_query($sql) === true) {
            //echo "Thêm thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            // echo "Lỗi addbranch";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }

    }

    //Hàm xóa một chi hội
    /* Người sử dụng
      Hoàng Thơ
    * */
    public function deleteBranch($branch)
    {
        // Đẩy câu lệnh vào string

        $sql1 = "DELETE FROM Account_has_Branch 
						WHERE Branch_idBranch='" . $branch->getIdBranch() . "';";
        $sql2 = "DELETE FROM Branch 
						WHERE idBranch='" . $branch->getIdBranch() . "';";
        // Thực thi câu lệnh
        // Thực hiện câu truy vấn
        $this->conn->Connect();
        if ($this->conn->conn->multi_query($sql1) === true && $this->conn->conn->multi_query($sql2)===true) {
            //echo "Xóa thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            // echo "Lỗi deletebranch";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }
    }

    //Hàm cập nhật một chi hội
    /* Người sử dụng
    Hoàng Thơ
    * */
    public function updateBranch($branch)
    {
        // Đẩy câu lệnh vào string
        $sql = "UPDATE Branch SET branchName = '".$branch->getBranchName(). "' , city = '".$branch->getCity()."' WHERE idBranch='" . $branch->getIdBranch() . "';";
        // Thực thi câu lệnh
        // Thực hiện câu truy vấn
        $this->conn->Connect();
        if ($this->conn->conn->query($sql) === true) {
            // echo "Cập nhật thành công";
            //Ngắt kết nối
            $this->conn->Stop();
            return true;
        } else {
            // echo "Lỗi updatebranch";
            //Ngắt kết nối
            $this->conn->Stop();
            return false;
        }
    }

}

////test từng gái trị hàm ở đây
//$obj = new BranchObj();
//$obj->setBranchObj('CTDT', 'Châu Thành Đông Tháp','Đồng Tháp');
//$mod = new BranchMod();
//echo '<br>';
//$mod->addBranch($obj);


//echo '<br>';
//$obj->setBranchObj('CTDT', 'Châu Thành Đồng Tháp','ĐT');
//$mod->updateBranch($obj);
//echo '<br>';
//
//$id = array();
//$id = $mod->findBranchByID($obj);
//foreach ($id as $key => $value) {
//    echo $key . "->" . $value->getIdBranch() . " vs" . $value->getBranchName()." vs ".$value->getCity();
//}
//echo '<br>';
//$name = array();
//$name = $mod->findBranchByName($obj);
//foreach ($name as $key => $value) {
//    echo $key . "->" . $value->getIdBranch() . " vs" . $value->getBranchName()." vs ".$value->getCity();
//}
//echo '<br>';
//$mod = new BranchMod();
//$getlist = array();
//$getlist = $mod->getBranch();
//foreach ($getlist as $key => $value) {
//  echo $key . "->" . $value->getIdBranch() . " vs" . $value->getBranchName()." vs ".$value->getCity();
//}
//$obj->setBranchObj('ABC', 'aaaaa','adasdasd');
//echo '<br>Đếm số học sinh trong chi hội';
//$mod->countStudent($obj);
//echo '<br> Danh sách tài khoản của chi hội';
//$getlistaccount = $mod->getListAccount($obj);
//foreach ($getlistaccount as $key => $account) {
//    echo $key . "->" . $account->getIdAccount() . ' - ' .
//        $account->getAccountName() . ' - ' .
//        $account->getBirthday() . ' - ' .
//        $account->getAddress() . ' - ' .
//        $account->getSex() . ' - ' .
//        $account->getPhone() . ' - ' .
//        $account->getEmail() . ' - ' .
//        $account->getPermission_position() . ' - ' .
//        $account->getAcademy_idAcademy() . '<br>';
//}
//echo "<br> Xóa một chi hội";
//$obj->setBranchObj('CTDT', 'Châu Thành Đồng Tháp','ĐT');
//$mod->deleteBranch($obj);


?>
