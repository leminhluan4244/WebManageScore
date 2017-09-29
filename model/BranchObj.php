<?php

/**
 * Lớp chi hội: Mô tả cấu trúc một chi hội hoặc đơn vị tương đương, không bao gồm chi hội sinh viên
 * Coder; Lê Minh Luân
 * Date; 04/08/2017
 */
class BranchObj
{
    private $idBranch;
    private $branchName;
    private $city;

    //Thêm một dữ liệu kiểu chuổi vào trong mã chi hội
    public function setIdBranch($idBranch)
    {
        $this->idBranch = $idBranch;
    }

    //Trả ra dữ liệu kiểu chuỗi của id chi hội
    public function getIdBranch()
    {
        return $this->idBranch;
    }

    //Thêm một dữ liệu kiểu chuỗi tên chi hội
    public function setBranchName($branchName)
    {
        $this->branchName = $branchName;
    }

    //Trả ra dữ liệu kiểu chuỗi tên chi hội
    public function getBranchName()
    {
        return $this->branchName;
    }
    //Thêm một dữ liệu kiểu chuỗi tỉnh
    public function setCity($city)
    {
        $this->city = $city;
    }

    //Trả ra dữ liệu kiểu chuỗi tỉnh
    public function getCity()
    {
        return $this->city;
    }

    //Nhận dữ liệu cho tất cả các trường của chi hội
    public function setBranchObj($idBranch, $branchName,$city)
    {
        $this->setidBranch($idBranch);
        $this->setBranchName($branchName);
        $this->setCity($city);
    }

    //Trả về dữ liệu kiểu đối tượng chi hội
    public function getBranchObj()
    {
        return $this;
    }

}

?>