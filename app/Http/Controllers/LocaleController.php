<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        
        session()->put('lang', $request->lang);
        app()->setLocale(session()->get('lang'));

        return redirect()->back();
    }
}
