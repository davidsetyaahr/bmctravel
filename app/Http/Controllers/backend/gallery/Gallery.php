<?php

namespace App\Http\Controllers\backend\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gallery_categories_model;
use App\Gallery_model;

class Gallery extends Controller
{
    function index()
    {
        $galeri = Gallery_model::all();
        return view('backend.gallery.gallery.list-gallery' ,  ['id_gallery' => $galeri]);
    }

    function add()
    {
        $id_category = Gallery_categories_model::all();
        return view('backend.gallery.gallery.add-gallery' , ['id_category' => $id_category]);
    }

    function store(Request $request)
    {
                //validasi
                $request->validate([
                    'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
                ]);
                //mengambil informasi
                $img = $request->file('img');

                // nama file
                $namefile = $img->getClientOriginalName();

                // upload file
                $tujuan_upload = 'images/gallery';
                $img->move($tujuan_upload,$img->getClientOriginalName());

                // insert
                DB::table('gallery')->insert([
                    'img' => $namefile,
                    'id_category' => $request->id_category,
                    // menyimpan data file yang diupload ke variabel $file
                ]);
                    return redirect('/admin/gallery/gallery');
                }

    function edit($id)
    {
        $galeri["galeri"] = DB::table('gallery')->where('id_gallery',$id)->get();
        $galeri["id_kategori"] = DB::table('gallery_categories')->where('id_category',$id)->get();
	    return view('backend.gallery.gallery.edit-gallery',['id_category' => $galeri]);
    }

    function update(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'id_category' => 'required'
        ]);

        DB::table('gallery')->where('id_gallery',$request->id)->update([
            'img' => $request->img,
            'id_category' => $request->id_category
        ]);
        return redirect('/admin/gallery/gallery');
    }
}
