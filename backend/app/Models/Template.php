<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id", "name", "description", "comment_title", "rating_emoji", "good_name", "bad_name", "after_comment", "is_open", "pass", "open_at", "close_at"
    ];
    /**
     * 日付の登録(format使えるために)
     *
     * @var array
     */
    protected $dates = ['open_at', 'close_at'];
}