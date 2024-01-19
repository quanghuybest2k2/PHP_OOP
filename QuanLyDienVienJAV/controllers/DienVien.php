<?php
/*
- Dùng từ khóa $this->không có dấu $ cho biến vd:$this->HoTen;
- Gọi Constant dùng dấu :: vd: DienVien::Title;
 */

namespace controllers;

class DienVien
{
    const Title = "<center>Quản lý các diễn viên JAV</center>";

    public $HoTen;
    public $NamSinh;
    public $GioiTinh;
    public $ChieuCao;
    public $CanNang;
    public $QuocTich;

    public function __construct($hoten, $namsinh, $gioitinh, $chieucao, $cannang, $quoctich)
    {
        $this->HoTen = $hoten;
        $this->NamSinh = $namsinh;
        $this->GioiTinh = $gioitinh;
        $this->ChieuCao = $chieucao;
        $this->CanNang = $cannang;
        $this->QuocTich = $quoctich;
    }
    ///tra ve gia tri
    public function GetName()
    {
        return $this->HoTen;
    }
    public function GetBirth()
    {
        return $this->NamSinh;
    }
    public function GetGender()
    {
        return $this->GioiTinh;
    }
    public function GetHeight()
    {
        return $this->ChieuCao;
    }
    public function GetWeight()
    {
        return $this->CanNang;
    }
    public function GetNationality()
    {
        return $this->QuocTich;
    }
    public function SetName(string $name)
    {
        return $this->HoTen = $name;
    }
}

// $dv = new DienVien("Tokuda", 1803, "Nam", 158, 57, "Nhật Bản");
// echo DienVien::Title . "<br/>";
// echo "Diễn viên: " . $dv->GetName() . "<br/>Sinh năm: " . $dv->GetBirth() . "<br/>Giới tính: " . $dv->GetGender() . "<br/>Chiều cao: " . $dv->GetHeight() . "<br/>Cân nặng: " . $dv->GetWeight() . "<br/>Quốc tịch: " . $dv->GetNationality();
// echo $dv->HoTen;
// echo $dv->ChieuCao;