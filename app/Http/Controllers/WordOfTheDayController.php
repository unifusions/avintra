<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWordoftheDay;
use App\Http\Requests\UpdateWordoftheDay;
use App\Models\TodayWord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class WordOfTheDayController extends Controller
{
    public function __construct(){
        $this->authorizeResource(TodayWord::class,['wordoftheday', 'user']);
     }
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

    public function show($id)
    {
       
    }


    public function edit(TodayWord $wordoftheday)
    {
        return view('wordoftheday.edit', compact('wordoftheday'));
    }

   
    public function update(UpdateWordoftheDay $request, TodayWord $wordoftheday)
    {
       
        $wordoftheday->fill($request->validated());
        $wordoftheday->save();
        return redirect()->route('wordoftheday.index')->with('success', 'Word of the day: ' . $wordoftheday->word_english . ' has been updated successfully'); 
        
    }

  
    public function destroy(TodayWord $wordoftheday)
    {
        $wordoftheday->delete();
        return redirect()->route('wordoftheday.index')->with('success', 'Word  ' . $wordoftheday->word_english . ' has been deleted successfully');

      
    }

    
}
