<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Document;
use App\Models\Section;
use Illuminate\Http\Request;

class PublicDocumentsController extends Controller
{
    public function __invoke(Request $request)
    {
        $divisions = Division::all();
        $sections = Section::all();
        $documents = Document::orderBy('created_at', 'desc')->paginate(15);
        if ($request->search)
            $documents = Document::search($request->search);


       
        return view('documents.public', compact(['documents', 'divisions', 'sections']));
    }
}
