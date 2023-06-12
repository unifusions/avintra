<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\LeadershipRequest;
use App\Models\Leadership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadershipPageSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderships = Leadership::paginate(15);
        return view('setting.leadership.index', compact('leaderships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setting.leadership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeadershipRequest $request)
    {
        Leadership::create(array_merge(
            $request->validated(),
            [

                'image_path' => Storage::putFileAs("leadership", $request->leader_image, $request->leader_image->getClientOriginalName()),
            ]
        ));
        return redirect()->route('leadership.index')->with('success', 'New leader has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Leadership $leadership)
    {

        return view('setting.leadership.edit', compact('leadership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeadershipRequest $request, Leadership $leadership)
    {

        $data = $request->validated();
        if ($request->leader_image) {

            $data = array_merge(
                $data,
                [
                    'image_path' => Storage::putFileAs("leadership", $request->leader_image, $request->leader_image->getClientOriginalName()),
                ]
            );
        }
        $leadership->fill($data);
        $leadership->save();
        return redirect()->route('leadership.index')->with('success', 'Profile has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
