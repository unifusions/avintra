<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Gallery::class, ['gallery', 'user']);
    }

    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(15);
        return view('gallery.index', compact('galleries'));
    }


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
        return redirect()->route('gallery.index')->with('success', 'Gallery ' . $gallery->title . ' has been created successfully');
    }

    public function show($id)
    {
    }

    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }


    public function update(Request $request, Gallery $gallery)
    {
        if ($request->file('featured_image')) {
            $file = $request->file('featured_image');

            $fileName = $file->getClientOriginalName();
            $upload = Storage::putFileAs("gallery/featured", $file, $fileName);
            $gallery->featured_image = $upload;
        }


        $gallery->title = $request->title;
        $gallery->description  = $request->description;
        $gallery->slug = str()->slug($request->title);

        if ($request->hidden_ids)
            foreach ($request->hidden_ids as $hi) {
                $galleryimage = GalleryImage::findorfail($hi);
                $galleryimage->gallery_id = $gallery->id;
                $galleryimage->save();
            }

            $gallery->save();
        return redirect()->route('gallery.index')->with('success', 'Gallery ' . $gallery->title . ' has been modified successfully');
    }



    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with(['status' => 'success']);
    }
}
