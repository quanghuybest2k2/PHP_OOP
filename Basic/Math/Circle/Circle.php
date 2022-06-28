<?php

namespace Math\Circle;
use Math\Constant;
use DateTime;
require_once __DIR__.'/../Constant.php';

class Circle
{
    public function getAreaCircle($radius){
        return Constant::Pi*$radius*$radius;
    }
    public function getTimestamp(){
        $dateTime = new DateTime();
        return $dateTime->getTimestamp();
    }
}