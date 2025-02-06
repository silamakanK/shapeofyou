<?php

namespace App\Enum;

use phpDocumentor\Reflection\Types\Integer;

enum HeightStatus: int
{
    case VERY_SHORT = 150;
    case SHORT = 160;
    case AVERAGE = 170;
    case TALL = 180;
    case VERY_TALL = 190;

    public function getHeight(): int
    {
        return match ($this) {
            self::VERY_SHORT => 150,
            self::SHORT => 160,
            self::AVERAGE => 170,
            self::TALL => 180,
            self::VERY_TALL => 190,
        };
    }
}