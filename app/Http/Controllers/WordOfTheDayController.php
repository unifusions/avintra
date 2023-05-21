<?php

namespace App\Http\Controllers;

use App\Models\TodayWord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WordOfTheDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = TodayWord::orderBy('created_at', 'desc')->paginate(15);
        return view('wordoftheday.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wordoftheday.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file = $request->file('word_audio_file');
        $fileName = $file->getClientOriginalName();
        $fileType = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();
        $upload = Storage::putFileAs("wordoftheday", $file, $fileName);

        TodayWord::create([
            'word_english' => $request->word_english,
            'word_tamil'=>$request->word_tamil,
            'word_hindi' => $request->word_hindi,
            'word_audio_file' => $upload,
            'slug' => str()->slug($request->word_english),
        ]);

        return redirect()->route('wordoftheday.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
