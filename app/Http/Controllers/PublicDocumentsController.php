<?php

namespace App\Http\Controllers;
use App\Models\Document;

use Illuminate\Http\Request;

class PublicDocumentsController extends Controller
{
    public function __invoke(Request $request)
    {
        $documents = Document::orderBy('created_at', 'desc')->paginate(3);
        return view('documents.public', compact('documents'));
    }
}
