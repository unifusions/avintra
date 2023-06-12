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
        'slug',
        'document_category_id',

    ];


    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function document_category()
    {
        return $this->belongsTo(DocumentCategory::class);
    }

    // public function scopeSearchAndFilter($query, $search,$section, $document_category)
    // {
    //     return $query->where('title', 'like', '%' . $search . '%')
    //         ->orWhere('document_no', 'like', '%' . $search . '%')
    //         ->where('section_id', $section)
    //         ->where('document_category_id', $document_category)->orderBy('title', 'ASC')->paginate(15)
    //         ->through(
    //             function ($row) use ($search) {
    //                 $row->title = preg_replace('/(' . $search . ')/i', '<span class="search-highlight">$1</span>', $row->title);
    //                 $row->document_no = preg_replace('/(' . $search . ')/i', '<span class="search-highlight">$1</span>', $row->document_no);
    //                 return $row;
    //             }
    //         );
    // }
    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', '%' . $search . '%')->orWhere('document_no', 'like', '%' . $search . '%')->paginate(15)
            ->through(
                function ($row) use ($search) {
                    $row->title = preg_replace('/(' . $search . ')/i', '<span class="search-highlight">$1</span>', $row->title);
                    $row->document_no = preg_replace('/(' . $search . ')/i', '<span class="search-highlight">$1</span>', $row->document_no);

                    return $row;
                }
            );
    }

    public function scopeFilterByCategory($query, $document_category)
    {

        if ($document_category != "")
            return $query->where('document_category_id', $document_category)->orderBy('title', 'ASC');
    }
}
