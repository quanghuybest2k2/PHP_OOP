<?php

/**
 * Dùng tử khóa use để gọi trait
 */

namespace controllers;

trait HelloWorld
{
    public function Hello()
    {
        echo "Hello World!";
    }
}
trait Tokuda
{
    public $Age;
    public function __construct($age)
    {
        $this->Age = $age;
    }
    public function getAge()
    {
        return $this->Age;
    }
}
class Welcome
{
    use HelloWorld;
}
class AgeTokuda
{
    use Tokuda;
}
$sayHello = new Welcome();
echo $sayHello->Hello();

$TuoiTokuda = new AgeTokuda(84);
echo $TuoiTokuda->getAge();
