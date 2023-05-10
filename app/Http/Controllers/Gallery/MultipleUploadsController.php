<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MultipleUploadsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        $file = $request->file('gallery-image');
        $fileName = $file->getClientOriginalName();
        $fileType = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();
        $upload = Storage::putFileAs("public/gallery/images", $file, $fileName);
        

        
        $galleryimage = GalleryImage::create([

            'file_name' => $fileName,
            'image_path' => $upload,
            'file_size' => $fileSize,
            'file_extension' => $fileType


        ]);
        return response()->json(['id' => $galleryimage->id]);

        // return response()->json(['id' => str()->random(6)]);
    }
}
