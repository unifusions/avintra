<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\News;
use App\Models\TodayWord;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        return view('dashboard')->with([
            'documents_count' => Document::count(),
            'news_count' => News::count(),
            'words_count' => TodayWord::count()
        ]);
    }
}
