<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Section;
use Illuminate\Http\Request;

class PublicDirectoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $divisions = Division::all();
        $sections = Section::all();
        return view('pages.directory', compact(['divisions', 'sections']));
    }
}
