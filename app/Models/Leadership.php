<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'bio',
        'address',
        'email',
        'image_path',
        'display_order',
    ];
}
