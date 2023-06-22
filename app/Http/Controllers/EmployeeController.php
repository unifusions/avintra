<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Employee::class, ['employee', 'user']);
    }
    public function index(Request $request)
    {
        $employees = Employee::orderBy('name', 'asc')->paginate(25);
        if ($request->search)
            $employees = Employee::search($request->search);


        return view('employee.index')->with([
            'employees' =>  $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store(Request $request)
    {
       
    }

   
    public function show($id)
    {
       
    }

   
    public function edit($id)
    {
      
    }

    
    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
       
    }
}
