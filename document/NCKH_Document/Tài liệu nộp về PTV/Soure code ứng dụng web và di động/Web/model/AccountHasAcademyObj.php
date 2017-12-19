<?php

/**
 *Lớp đói tượng liên kết , cho biết xem sinh viên nào thuộc chi hội nào
 *Coder: Lê Minh Luân
 *Date: 11/09/2017
 */
class AccountHasAcademyObj
{

    private $Account_idAccount;
    private $Academy_idAcademy;

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

    //Thêm một dữ liệu kiểu chuỗi  vào trường mã khoa viện
    public function setAcademy_idAcademy($Academy_idAcademy)
    {
        $this->Academy_idAcademy = $Academy_idAcademy;
    }

    //Trả ra dữ liệu kiểu chuỗi từ trường mã khoa viện
    public function getAcademy_idAcademy()
    {
        return $this->Academy_idAcademy;
    }

    //Nhận dữ liệu cho tất cả các trường của bảng liên kết sinh viên và khoa viện
    public function setAcademyObj($Account_idAccount, $Academy_idAcademy)
    {
        $this->setAccount_idAccount($Account_idAccount);
        $this->setAcademy_idAcademy($Academy_idAcademy);
    }

    //Trả về dữ liệu kiểu đối tượng
    public function getAcademyObj()
    {
        return $this;
    }
}

?>