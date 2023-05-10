<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Document;
use App\Models\TodayWord;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        return view('welcome')->with([
            'news' => News::latest()->take(5)->get(),
            'documents' => Document::latest()->take(5)->get(),
            'todayword' => TodayWord::latest()->first(),
        ]);
    }
}
