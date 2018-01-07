<?php

Class ConnectToSQL
{
    public $conn;

    public function Connect()
    {
        // Tạo đối tượng mysqli
        $this->conn = new mysqli('localhost', 'root','', 'managementscore');

        // Kiểm tra kết nối thành công hay thất bại
        // nếu thất bại thì thông báo lỗi
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
        $this->conn->query("set names utf8");
        // Thông báo kết nối thành công
        //echo "Kết nối thành công";

    }

    public function Stop()
    {
        mysqli_close($this->conn);
        //unset($this->conn);
    }
}

?>