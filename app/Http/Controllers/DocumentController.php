<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Document;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $documents = Document::orderBy('created_at', 'desc')->paginate(15);
        if ($request->search) {
            $documents = Document::query()->when($request->search, function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('document_no', 'like', '%' . $request->search . '%');
            })->paginate(15);

            // return back()->with('data' , $documents);
        }

        // dd($request->input());
        if ($request->sort_by) {

            switch ($request->sort_by) {
                case 'recency':
                    $documents = Document::orderBy('created_at', 'ASC')->paginate(15);
                    break;
                case 'type':
                    $documents = Document::orderBy('document_no', 'ASC')->paginate(15);
                    break;
            }

            return view('documents.index')->with([
                'documents' => $documents,
                'divisions' => Division::all(),
                'sort_by' => $request->sort_by,
            ]);
        }
        return view('documents.index')->with([
            'documents' => $documents,
            'divisions' => Division::all(),
            'sort_by' => ''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('documents.create')->with(['divisions' => Division::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function fetchSection(Request $request)
    {
        $data['sections'] = Section::where("division_id", $request->division_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function store(Request $request)
    {



        $file = $request->file('document_file');
        $fileName = $file->getClientOriginalName();
        $fileType = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();
        $upload = Storage::putFileAs("documents", $file, $fileName);

        Document::create([

            'title' => $request->title,
            'document_no' => $request->document_no,
            'document_path' => $upload,
            'user_id' => auth()->user()->id,
            'division_id' => $request->division_id,
            'section_id' => $request->section_id,
            'file_name' => $fileName,
            'file_size' => $fileSize,
            'file_type' => $fileType


        ]);

        return redirect()->route('documents.index');
    }

    public function archive()
    {
        return view('documents.archive')->with('documents', Document::where('created_at', '<', Carbon::now()->subYears(1))->orderBy('created_at', 'desc')->paginate(15));
    }


    public function trash()
    {
        return view('documents.trash')->with('documents', Document::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(15));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        
    }
    

    public function download(Document $document)
    {
   

            return response()->file(Storage::path($document->document_path));
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('documents.edit')->with([
            'document' => $document,
            'divisions' => Division::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $document->title = $request->title;
        $document->document_no = $request->document_no;
        $document->division_id = $request->division_id;
        $document->section_id = $request->section_id;
        $document->save();
        return redirect()->route('documents.index')->with('status', 'Document Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
