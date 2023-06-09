<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'division_id','description'
    ];

    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function documents(){
        return $this->hasMany(Document::class);
    }
}
