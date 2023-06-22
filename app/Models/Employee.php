<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [''];

    protected $casts = [
        'date_of_birth'     => 'date',
        'date_of_joining' => 'date',
        'date_of_retirement' => 'date'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' . $search . '%')->paginate(25)
            ->through(
                function ($row) use ($search) {
                    
                    $row->name = preg_replace('/(' . $search . ')/i', '<span class="search-highlight">$1</span>', $row->name);

                    return $row;
                }
            );
    }



}

