<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicDocumentSingleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Document $document)
    {
        if ($document->document_path)
            return response()->file(Storage::path($document->document_path));
        else
            return back()->with('error', 'No valid file found to view');
    }
}
