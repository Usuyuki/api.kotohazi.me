<?php

namespace App\Models;

use App\Enums\ReleaseNoteGenre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReleaseNote extends Model
{
    use HasFactory;

    protected $fillable = [
        "genre", "title", "description", "date"
    ];
    /**
     * 日付の登録(format使えるために)
     *
     * @var array
     */
    protected $dates = ['date'];
    /**
     * Enumキャスト
     *
     * @var array
     */
    protected $casts = [
        'genre' => ReleaseNoteGenre::class,
    ];
}