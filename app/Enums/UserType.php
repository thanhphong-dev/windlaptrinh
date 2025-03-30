<?php

namespace App\Enums;

enum UserType: int
{
    case ROOT = 0;
    case USER = 1;

    public function lable(): string
    {
        return match ($this) {
            self::ROOT => 'Quản trị hệ thống',
            self::USER => 'Nhân viên',
        };
    }
}
