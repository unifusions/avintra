<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodayWord extends Model
{
    use HasFactory;

    protected $fillable = [
        'word_english',
        'word_tamil',
        'word_hindi',
        'word_audio_file',
        'word_meaning',
        'slug'
    ];
}
