<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Document;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\TodayWord;
use App\Models\Visitors;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
    

        $sessionId = $request->session()->getId();
        $userIp = $request->ip();
        $visitor = Visitors::where('ip_address', $userIp)->where('session_id', $sessionId)->first();

        if ($visitor === null)
            Visitors::create([
                'ip_address' => $userIp,
                'session_id' => $sessionId,

            ]);
        else {
            $visitor->counter = $visitor->counter + 1;
            $visitor->save();
        }


        return view('welcome')->with([
            'news' => News::latest()->take(5)->get(),
            'documents' => Document::latest()->take(5)->get(),
            'todayword' => TodayWord::latest()->first(),
            'galleries' => Gallery::latest()->take(6)->get(),
            'birthdays' => Employee::whereMonth('date_of_birth', '=', Carbon::now()->format('m'))
                ->whereDay('date_of_birth', '=', Carbon::now()->format('d'))
                ->get(),
            'retirements' => Employee::whereMonth('date_of_retirement', '=', Carbon::now()->format('m'))
            ->whereYear('date_of_retirement', '=', Carbon::now()->format('Y'))
            ->get(),
        ]);
    }
}
