<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Employee;
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

        $employees = Employee::orderBy('name', 'asc')->paginate(25);
        if ($request->search)
            $employees = Employee::search($request->search);
        return view('pages.directory')->with([
            'employees' =>  $employees
        ]);
    }
}
