<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        $id = json_decode($request->getContent())->id;
        $model = GalleryImage::find($id);

        // $model->image_path;
        
        Storage::delete($model->image_path);
        $model->delete();
        return response()->json(['success' => 'success'], 200);

    }
}
