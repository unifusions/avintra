<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'document_no',
        'document_path',
        'user_id',
        'division_id',
        'section_id',
        'file_size',
        'file_type',
        'file_name',

    ];

  
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
