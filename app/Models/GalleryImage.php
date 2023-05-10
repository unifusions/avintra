<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'gallery_id',
        'file_name',
        'image_path',
        'file_size',
        'file_extension'
    ];
    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
}
