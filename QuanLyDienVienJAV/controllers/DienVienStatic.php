<?php

// Dùng dấu :: để gọi hàm static thông qua class vd: DienVien::YuaMikami()
// Đối với biên thì DienVien::$Age

class DienVienStatic
{
    public static $YearofBirth = 1993;

    public static function YuaMikami()
    {
        $Age = date('Y') - self::$YearofBirth;
        return "I là Yua Mikami và tôi sinh năm " . self::$YearofBirth . " và hiện tại tôi {$Age} tuổi";
    }
}
//echo DienVien::$Age;
echo DienVienStatic::YuaMikami();
