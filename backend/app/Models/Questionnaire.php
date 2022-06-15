<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;


    protected $fillable = [
        "user_id", "uuid", "title", "description", "evaluation_title",  "impression_title", "evaluation_emoji", "good_name", "bad_name", "after_answering", "is_open", "pass", "open_at", "close_at"
    ];
    /**
     * 日付の登録(format使えるために)
     *
     * @var array
     */
    protected $dates = ['open_at', 'close_at'];
}