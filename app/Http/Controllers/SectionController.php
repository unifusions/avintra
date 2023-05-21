<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionRequest;
use App\Models\Division;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('division.section')->with(['divisions' => Division::all(), 'sections' => Section::all()]);
    }
    public function create()
    {
     
    }
    public function store(StoreSectionRequest $request)
    {

        $section = Section::create([
            'name' => $request->input('section_name'),
            'slug' => str()->slug($request->input('section_name')),
            'description' => $request->input('description'),
            'division_id' => $request->input('division_id'),
        ]);
        return redirect()->route('section.index')->with('success', 'New Section ' . $section->name .' has been created successfully');
    }

    
    public function show(Section $section)
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
