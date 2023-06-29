<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Document;
use Illuminate\Http\Request;

class PublicDivisionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Division $division)
    {
        return view ('division.public')->with(
            [
                'divisions' => Division::all(),
                'division' => $division,
                'documents' => Document::where('division_id', $division->id)->orderBy('created_at', 'desc')->paginate(15),
            ]
        );
    }
}
