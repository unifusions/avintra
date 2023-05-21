<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(15);
        return view('gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {

        $file = $request->file('featured_image');

        $fileName = $file->getClientOriginalName();
        $upload = Storage::putFileAs("gallery/featured", $file, $fileName);
            
        $gallery = Gallery::create([
            'title' => $request->title,
            'featured_image' => $upload,
            'description' => $request->description,
            'slug' => str()->slug($request->title),
        ]);
        if ($request->hidden_ids)
            foreach ($request->hidden_ids as $hi) {
                $galleryimage = GalleryImage::findorfail($hi);
                $galleryimage->gallery_id = $gallery->id;
                $galleryimage->save();
            }
        return redirect()->route('gallery.index')->with(['status' => 'success']);
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
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        dd($request);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with(['status' => 'success']);
    }
}
