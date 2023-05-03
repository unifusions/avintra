<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable =[

        'news_title',
        'news_content',
        'news_category_id',
        'slug',
        'excerpt'
    ];

    public function news_category(){
        return $this->belongsTo(NewsCategory::class);
    }

}
