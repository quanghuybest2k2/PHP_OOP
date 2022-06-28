<?php
// Dùng dấu :: để gọi hàm static thông qua class vd: DienVien::YuaMikami()
// Đối với biên thì DienVien::$Age
class DienVien
{
    public static $Age = 29;
    public static function YuaMikami()
    {
        return "I am Yua Mikami và tôi " . self::$Age . " tuổi";
    }
}
//echo DienVien::$Age;
echo DienVien::YuaMikami();