<?php

/**
 * Lớp Khoa: Mô tả cấu trúc một khoa hoặc đơn vị tương đương, không bao gồm chi hội sinh viên
 * Coder; Lê Minh Luân
 * Date; 21/08/2017
 */
class ImageObj
{
    private $Image;
    private $Account_idAccount;
    private $Structure_idItem;

    //Thêm một hình ảnh vào trường hình ảnh
    public function setImage($Image)
    {
        $this->Image = $Image;
    }

    //Trả ra hình ảnh
    public function getImage()
    {
        return $this->Image;
    }

    //Thêm dữ liệu cho trường mã sinh viên
    public function setAccount_idAccount($id)
    {
        $this->Account_idAccount = $id;
    }

    //Trả ra dữ liệu kiểu chuỗi trường mã sinh viên
    public function getAccount_idAccount()
    {
        return $this->Account_idAccount;
    }
    //Thêm dữ liệu kiểu chuỗi cho trường mục điểm
    public function setStructure_idItem($id)
    {
        $this->Structure_idItem = $id;
    }

    //Trả ra dữ liệu kiểu chuỗi cho trường mục điểm
    public function getStructure_idItem()
    {
        return $this->Structure_idItem;
    }

    //Nhận dữ liệu cho tất cả các trường của ảnh
    public function setImageObj($Image, $Account_idAccount, $Structure_idItem)
    {
        $this->setImage($Image);
        $this->setAccount_idAccount($Account_idAccount);
        $this->setStructure_idItem($Structure_idItem);
    }

    //Trả về dữ liệu kiểu đối tượng ảnh
    public function getIamgeObj()
    {
        return $this;
    }

}

?>