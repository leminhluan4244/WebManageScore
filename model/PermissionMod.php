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
    // 1. Hàm thêm một phân quyền
    public function addPermission($permission)
    {
        $sql = "INSERT INTO Permission(position,power) 
						VALUES('".$permission->getPosition()."',
						'".$permission->getPower()."')";
        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
            echo "Addition is successful! ";
        } else {
            echo "Addition is not successful! " . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

    //2. Hàm cập nhật một phân quyền
    public function updatePermission($permission)
    {
        $sql = "UPDATE Permission 
					SET power= '".$permission->getPower()."'
			        WHERE position='".$permission->getPosition()."'";
        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === true) {
            echo "Updation is successful!";
        } else {
            echo "Updation is not successful!" . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

    //3. Hàm xóa một lớp học
    public function deletePermission($permission)
    {

        $sql = "DELETE FROM Permission  
						WHERE position ='".$permission->getPosition()."'";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
            echo "Deletion is successful! ";
        } else {
            echo "Deletion is not successful! " . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

    //4. Hàm trả về danh sách các phân quyền hiện có
    public function getPermission()
    {
        $sql = "SELECT * FROM Permission";
        $this->connSql->Connect();
        $result = $this->connSql->conn->query($sql);

        if ($result->num_rows > 0) {
            $k = 0;
            $permission = new PermissionObj();
            $list = array();
            while ($row = $result->fetch_assoc()) {

                $permission->setPosition($row["position"]);
                $permission->getPower($row["power"]);
                $list[$k] = $permission;
                $k++;
            }

        } else {
            echo "The result of information processing is data false";
        }

        $this->connSql->Stop();
        return $list;
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