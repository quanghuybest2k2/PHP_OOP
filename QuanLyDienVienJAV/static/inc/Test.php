<?php


class Test{
    public static $Ten = "Huy";
    public function set_ten($ten)
    {
        Test::$Ten = $ten;
    }
    public function get_ten()
    {
        return Test::$Ten;
    }
}


?>