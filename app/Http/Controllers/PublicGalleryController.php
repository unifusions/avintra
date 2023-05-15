<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Section;
use App\Models\Gallery;

use Illuminate\Http\Request;

class PublicGalleryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        $divisions = Division::all();
        $sections = Section::all();
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(15);
        return view('gallery.public', compact(['galleries', 'divisions', 'sections']));

        
    }
}
