<?php

/**
 *Lớp đói tượng liên kết , cho biết xem sinh viên nào thuộc chi hội nào
 *Coder: Lê Minh Luân
 *Date: 04/08/2017
 */
class AccountHasBranchObj
{

    private $Account_idAccount;
    private $Branch_idBranch;

    //Thêm một dữ liệu kiểu chuổi vào trong trường mã account
    public function setAccount_idAccount($Account_idAccount)
    {
        $this->Account_idAccount = $Account_idAccount;
    }

    //Trả ra dữ liệu kiểu chuỗi của trường mã account
    public function getAccount_idAccount()
    {
        return $this->Account_idAccount;
    }

    //Thêm một dữ liệu kiểu chuỗi  vào trường mã chi hội
    public function setBranch_idBranch($Branch_idBranch)
    {
        $this->Branch_idBranch = $Branch_idBranch;
    }

    //Trả ra dữ liệu kiểu chuỗi từ trường mã chi hội
    public function getBranch_idBranch()
    {
        return $this->Branch_idBranch;
    }

    //Nhận dữ liệu cho tất cả các trường của bảng liên kết sinh viên và chi hội
    public function setAcademyObj($Account_idAccount, $Branch_idBranch)
    {
        $this->setAccount_idAccount($Account_idAccount);
        $this->setBranch_idBranch($Branch_idBranch);
    }

    //Trả về dữ liệu kiểu đối tượng
    public function getAcademyObj()
    {
        return $this;
    }
}

?>