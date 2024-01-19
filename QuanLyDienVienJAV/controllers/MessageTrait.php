<?php

/**
 * Dùng tử khóa use để gọi trait
 */

namespace controllers;

trait MessageTrait
{
    public function printMessage($msg): string
    {
        return "Thông báo: {$msg}";
    }
}
