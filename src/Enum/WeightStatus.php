<?php


namespace App\Enum;

use phpDocumentor\Reflection\Types\Integer;

enum WeightStatus: int
{
    case VERY_LIGHT = 50;
    case LIGHT = 60;
    case AVERAGE = 75;
    case HEAVY = 90;
    case VERY_HEAVY = 100;

    public function getWeight(): int
    {
        return match ($this) {
            self::VERY_LIGHT => 50,
            self::LIGHT => 60,
            self::AVERAGE => 75,
            self::HEAVY => 90,
            self::VERY_HEAVY => 100,
        };
    }
}