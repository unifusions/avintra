<?php

namespace App\Http\Controllers;

use App\Models\Division;
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
        return view ('division.public', compact('division'));
    }
}
