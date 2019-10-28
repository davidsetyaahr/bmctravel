<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Tour_type;
use App\Gallery_model;
use App\Gallery_categories_model;


class TourType extends Controller
{
    public function index()
    {
        $type = Tour_type::all();
        return view('backend.tour_package.tour_type.list-tour-type' , ['tour_type' => $type]);
    }

    public function add()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.tour_package.tour_type.add-tour-type' , ['gallery' => $gallery, 'categories' => $gallery_categories]);
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'type_name' => 'required',
            'id_gallery' => 'required'
        ]);

        //insert
        DB::table('tour_type')->insert([
            'type_name' => $request->type_name,
            'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/tour-package/tour-type')->with('status', 'Kategori hotel berhasil ditambahkan');
    }

    public function edit ($id)
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $type = DB::table('tour_type')->where('id_type',$id)->get();
        return view('backend.tour_package.tour_type.edit-tour-type', ['gallery' => $gallery, 'categories' => $gallery_categories, 'tour_type' => $type]);
    }

    public function update(Request $request)
    {
        DB::table('tour_type')->where('id_type',$request->id)->update([
            'type_name' => $request->type_name,
            'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/tour-package/tour-type');
    }
}
