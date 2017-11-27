<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 06/08/2017
 * Time: 13:55 CH

 */

class PermissionMod
{
    private $connSql;

    function __construct()
    {
        $this->connSql = new ConnectToSQL();
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    // 1. Hàm thêm một phân quyền
    public function addPermission($permission)
    {
        $sql = "INSERT INTO Permission(position,power,selected)
						VALUES('".$permission->getPosition()."',
						'".$permission->getPower()."','".$permission->getSelected()."')";
        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
          //  echo "Addition is successful! ";
        } else {
          //  echo "Addition is not successful! " . $this->connSql->error;
        }
        $this->connSql->Stop();
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    //2. Hàm cập nhật một phân quyền
    public function updatePermission($permission)
    {
        $sql = "UPDATE Permission
					SET power= '".$permission->getPower()."',
					selected= '".$permission->getSecleted()."'
			        WHERE position='".$permission->getPosition()."'";
        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === true) {
           // echo "Updation is successful!";
        } else {
           // echo "Updation is not successful!" . $this->connSql->error;
        }
        $this->connSql->Stop();
    }
    /**
    # Đoàn Minh Nhựt
    */
    //3. Hàm xóa một lớp học
    public function deletePermission($permission)
    {

        $sql = "DELETE FROM Permission
						WHERE position ='".$permission->getPosition()."'";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
           // echo "Deletion is successful! ";
        } else {
          //  echo "Deletion is not successful! " . $this->connSql->error;
        }
        $this->connSql->Stop();
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    //4. Hàm trả về danh sách các phân quyền hiện có
    /* Người sử dụng
          Hoàng Thơ
   * */
    public function getPermission()
    {
        $sql = "SELECT DISTINCT * FROM Permission GROUP BY position";
        $this->connSql->Connect();
        $result = $this->connSql->conn->query($sql);

        if ($result->num_rows > 0) {
            $k = 0;
            $list = array();
            while ($row = $result->fetch_assoc()) {
                $permission = new PermissionObj();
                $permission->setPosition($row["position"]);
                $permission->setPower($row["power"]);
                $permission->setSelected($row["selected"]);
                $list[$k] = $permission;
                $k++;
            }

        } else {
             //echo "The result of information processing is data false";
             return [];
        }

        $this->connSql->Stop();
        return $list;
    }
    public function getPermissionByAccount($acc)
    {
        $sql = "SELECT * FROM Permission,Account WHERE Account.Permission_position = Permission.position and Account.idAccount = '".$acc."'";
        $this->connSql->Connect();
        $result = $this->connSql->conn->query($sql);

        if ($result->num_rows > 0) {
            $k = 0;
            $list = array();
            while ($row = $result->fetch_assoc()) {
                $permission = new PermissionObj();
                $permission->setPosition($row["position"]);
                $permission->setPower($row["power"]);
                $permission->setSelected($row["selected"]);
                $list[$k] = $permission;
                $k++;
            }
        } else {
            //echo "The result of information processing is data false";
            return [];
        }

        $this->connSql->Stop();
        return $list;
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function selectPower($selected)
    {
        $sql = "SELECT `power` FROM `Permission` WHERE `position` = '".$selected."' AND `selected` = 1";
        $this->connSql->Connect();
        $result = $this->connSql->conn->query($sql);
        if ($result->num_rows > 0) {
            $k = 0;
            $list = array();
            while ($row = $result->fetch_assoc()) {
                $list[$k] = $row["power"];
                $k++;
            }

        } else {
             //echo "The result of information processing is data false";
             return [];
        }

        $this->connSql->Stop();
        return $list;
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
     public function setAllDisplay($namePermission, $num){
       $sql = "UPDATE `Permission` SET `selected`= $num WHERE `position` = '".$namePermission."'";
       #var_dump($sql);
       $this->connSql->Connect();
       if ($this->connSql->conn->query($sql) === true) {
          // echo "Updation is successful!";
       } else {
          // echo "Updation is not successful!" . $this->connSql->error;
       }
       $this->connSql->Stop();
    }
    /**
  	# Đoàn Minh Nhựt
  	*/
    public function setDisplay($namePermission, $num, $power){
      $sql = "UPDATE `Permission` SET `selected`= $num WHERE `position` = '".$namePermission."' AND `power` = '".$power."'";
      #var_dump($sql);
      $this->connSql->Connect();
      if ($this->connSql->conn->query($sql) === true) {
         // echo "Updation is successful!";
      } else {
         // echo "Updation is not successful!" . $this->connSql->error;
      }
      $this->connSql->Stop();
   }
    }


    /* Kiểm tra hàm có viết đúng hay không ?
    1. Hàm thêm
    require_once 'ConnectToSQL.php';
    require_once 'PermissionObj.php';
    $permission_mod = new PermissionMod();
    $permission_obj = new PermissionObj();
    $permission_obj->setPermissionObj('PQ1', 'Admin');
    $permission_mod->addPermission($permission_obj);
    2. Hàm cập nhật
    $permission_mod = new PermissionMod();
    $permission_obj = new PermissionObj();
    $permission_obj->setPermissionObj('PQ1', 'stu');
    $permission_mod->updatePermission($permission_obj);
    3. Hàm xóa
    $permission_mod = new PermissionMod();
    $permission_obj = new PermissionObj();
    $permission_obj->setPermissionObj('PQ1', 'stu');
    $permission_mod->deletePermission($permission_obj);
     4.. Hàm trả về danh sách phân quyền hiện có ?
    $permission_obj = new PermissionObj();
    $permission_mod = new PermissionMod();
    $getlist = array();
    $getlist = $permission_mod->getPermission();
    foreach ($getlist as $key => $value) {
    echo $key . "->" . $value->getPosition() . " " . $value->getPower(); }
*/
?>
