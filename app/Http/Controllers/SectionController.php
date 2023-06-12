<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionRequest;
use App\Models\Division;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct()
    {
      $this->authorizeResource(Section::class, ['section', 'user']);
       
    }    public function index()
    {
        return view('division.section')->with(['divisions' => Division::all(), 'sections' => Section::all()]);
    }
    public function create()
    {
     
    }
    public function store(StoreSectionRequest $request)
    {

        $section = Section::create($request->validated());
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

    
    public function destroy(Section $section)
    {
        if(count($section->documents)>0)
        return redirect()->route('section.index')->with('error', 'Section ' . $section->name .' has documents. Please delete documents before deleting sections');

        $section->delete();
        return redirect()->route('section.index')->with('success', 'Section ' . $section->name .' has been deleted successfully');
    
    }
}
