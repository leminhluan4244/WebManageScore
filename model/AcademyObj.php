<?php

/**
 * Lớp Khoa: Mô tả cấu trúc một khoa hoặc đơn vị tương đương, không bao gồm chi hội sinh viên
 * Coder; Lê Minh Luân
 * Date; 04/08/2017
 */
class AcademyObj
{
    private $idAcademy;
    private $academyName;

    //Thêm một dữ liệu kiểu chuổi vào trong mã khoa
    public function setIdAcademy($idAcademy)
    {
        $this->idAcademy = $idAcademy;
    }

    //Trả ra dữ liệu kiểu chuỗi của id khoa
    public function getIdAcademy()
    {
        return $this->idAcademy;
    }

    //Thêm một dữ liệu kiểu chuỗi tên khoa
    public function setAcademyName($academyName)
    {
        $this->academyName = $academyName;
    }

    //Trả ra dữ liệu kiểu chuỗi tên khoa
    public function getAcademyName()
    {
        return $this->academyName;
    }

    //Nhận dữ liệu cho tất cả các trường của khoa
    public function setAcademyObj($idAcademy, $academyName)
    {
        $this->setIdAcademy($idAcademy);
        $this->setAcademyName($academyName);
    }

    //Trả về dữ liệu kiểu đối tượng khoa
    public function getAcademyObj()
    {
        return $this;
    }

}

?>