<?php

declare(strict_types=1);

namespace App\Enums;

enum LoginProvider: int
{
    case google = 1;
    case github = 2;
    case line = 3;


    public function label(): string
    {
        return match ($this) {
            self::google => "Google",
            self::github => "GitHub",
            self::line => "LINE",
        };
    }
    public function value(): int
    {
        return match ($this) {
            self::google => 1,
            self::github => 2,
            self::line => 3,
        };
    }
}