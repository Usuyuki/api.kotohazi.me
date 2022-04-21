<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = [
        "questionnaire_id", "popular_words", "number_of_responses", "distribution_of_evaluations", "emotion"
    ];
}