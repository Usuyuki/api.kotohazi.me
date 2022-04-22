<?php

declare(strict_types=1);

namespace App\Enums;

enum ReleaseNoteGenre: int
{
    case feat = 1;
    case bugFix = 2;
    case other = 3;


    public function label(): string
    {
        return match ($this) {
            self::feat => "新機能",
            self::bugFix => "バグ修正",
            self::other => "その他",
        };
    }
    public function value(): int
    {
        return match ($this) {
            self::feat => 1,
            self::bugFix => 2,
            self::other => 3,
        };
    }
}