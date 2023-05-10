<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class PublicNewsSingleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, News $news)
    {
        $latestnews = News::latest()->whereNotIn('id',[ $news->id])->take(5)->get();
        $news_categories = NewsCategory::all();
        return view('news.single', compact('news', 'latestnews', 'news_categories'));
    }
}
