<?php

namespace App\Enum;

enum UserStatus: string
{
    case CLIENT = 'client';
    case ADMIN = 'admin';
    case MODERATOR = 'moderator';

    public function getRole(): string
    {
        return match ($this) {
            self::CLIENT => 'ROLE_CLIENT',
            self::ADMIN => 'ROLE_ADMIN',
            self::MODERATOR => 'ROLE_MODERATOR',
        };
    }

}