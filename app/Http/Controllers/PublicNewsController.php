<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PublicNewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $news =   News::orderBy('created_at', 'desc')->paginate(15);
        return view('news.public', compact('news'));
    }
}
