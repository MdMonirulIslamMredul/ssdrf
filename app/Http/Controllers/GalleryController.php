<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function tech_web_add_gallery()
    {
        return view('admin.gallery.gallery',[
            'galleries'=>Gallery::get()
        ]);

    }

    public function tech_web_store_gallery(Request $request)
    {
        // dd($request->all());
        Gallery::save_gallery($request);
        return back()->with('message','gallery added successfully');
    }

    public function tech_web_edit_gallery($id)
    {
        return view('admin.gallery.edit_gallery',[
            'gallery'=>Gallery::find($id),
        ]);
    }

    public function tech_web_update_gallery(Request $request)
    {


        Gallery::update_gallery($request);
        return back()->with('message','gallery update successfully');
    }


    public function tech_web_video_gallery()
    {
        return view('admin.gallery.video_gallery',[
            'galleries'=>Gallery::get()
        ]);

    }


}
