<?php

namespace App\Enum;

enum MorphologyStatus: string
{
    case A = 'Pyramide';             // Hanches plus larges que les épaules
    case V = 'Pyramide inversée';     // Épaules plus larges que les hanches
    case X = 'Sablier';               // Taille marquée, épaules et hanches alignées
    case H = 'Rectangle';             // Épaules, taille et hanches alignées

    public function getMorphology(): string
    {
        return match ($this) {
            self::A => 'Pyramide',
            self::V => 'Pyramide inversée',
            self::X => 'Sablier',
            self::H => 'Rectangle',
        };
    }
}