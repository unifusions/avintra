<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(News::class, ['news', 'user']);
    }
    public function index()
    {

        return view('news.index')->with([
            'news' => News::orderBy('created_at', 'desc')->paginate(15),
        ]);
    }

    
    public function create()
    {

        return view('news.create')->with([
            'news_categories' => NewsCategory::all(),
        ]);
    }

    
    public function store(Request $request)
    {
        News::create([
            'news_title' => $request->news_title,
            'excerpt' => $request->news_excerpt,
            'slug' => str()->slug($request->news_title),
            'news_content'  => $request->news_content,
            'news_category_id'  => $request->news_category_id
        ]);
        return redirect()->route('news.index');
    }

    public function show(News $news)
    {
    }

    public function edit(News $news)
    {
        $news_categories = NewsCategory::all();
        return view('news.edit', compact('news', 'news_categories'));
    }

    public function update(Request $request, News $news)
    {
       $news->news_title = $request->news_title;
       $news->excerpt = $request->excerpt;
       $news->slug = str()->slug($request->news_title);
       $news->news_content  = $request->news_content;
       $news->news_category_id  = $request->news_category_id;
       $news->save();
       return redirect()->route('news.index')->with('success', 'News : ' . $news->news_title . ' has been uploaded successfully');
    }

   
    public function destroy($id)
    {
        
    }
}
