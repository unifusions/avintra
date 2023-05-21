<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWordoftheDay;
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
    public function store(StoreWordoftheDay $request)
    {
        

        $todayword = TodayWord::create(
            array_merge( $request->validated(),
            [
                'file_size' =>  $request->word_audio_file->getSize(),
                'file_name' =>  $request->word_audio_file->getClientOriginalName(),
                'file_type' =>  $request->word_audio_file->getClientOriginalExtension(),
                'word_path' => Storage::putFileAs("wordoftheday", $request->word_audio_file, $request->word_audio_file->getClientOriginalName()),
            ]
            )
           );

        return redirect()->route('wordoftheday.index')->with('success', 'Word of the day: ' . $todayword->word_english . ' has been created successfully'); 
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
