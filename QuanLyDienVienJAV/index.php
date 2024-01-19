<?php
include './controllers/DienVien.php';

use controllers\DienVien;
//include './controllers/trait.php';
//use controllers\AgeTokuda;

$dv = new DienVien("Tokuda", 1803, "Nam", 158, 57, "Nhật Bản");
echo DienVien::Title . "<br/>";
echo nl2br("Diễn viên: {$dv->GetName()}\n
Sinh năm: {$dv->GetBirth()}\n
Giới tính: {$dv->GetGender()}\n
Chiều cao: {$dv->GetHeight()}\n
Cân nặng: {$dv->GetWeight()}\n
Quốc tịch: {$dv->GetNationality()}\n");
// ========================== tên sau khi thay đổi
echo "<hr/>";
$dv->SetName("Sashimi Ken");
echo $dv->GetName();
