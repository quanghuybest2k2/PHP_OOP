<?php

include './controllers/DienVien.php';
//include './controllers/trait.php';
use controllers\DienVien;
//use controllers\AgeTokuda;

$dv = new DienVien("Tokuda", 1803, "Nam", 158, 57, "Nhật Bản");
echo DienVien::Title . "<br/>";
echo "Diễn viên: " . $dv->GetName() . "<br/>Sinh năm: " . $dv->GetBirth() . "<br/>Giới tính: " . $dv->GetGender() . "<br/>Chiều cao: " . $dv->GetHeight() . "<br/>Cân nặng: " . $dv->GetWeight() . "<br/>Quốc tịch: " . $dv->GetNationality();
// echo $dv->HoTen;
// echo $dv->ChieuCao;
// $TuoiTokuda = new AgeTokuda(84);
// echo $TuoiTokuda->getAge();