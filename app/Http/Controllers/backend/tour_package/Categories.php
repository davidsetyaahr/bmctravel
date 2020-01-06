<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;

use App\Tour_categories;
use App\Gallery_model;
use App\Gallery_categories_model;


class Categories extends Controller
{
    public function index()
    {
        // $category = Tour_categories::orderBy('id_category', 'DESC')->get();
        $category = DB::table('destination_categories')
        ->join('gallery','gallery.id_gallery','destination_categories.id_gallery')
        ->select('destination_categories.id_category','destination_categories.category_name','gallery.img')->get();
        return view('backend.tour_package.categories.list-categories' , ['tour_categories' => $category]);
    }


    public function add()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.tour_package.categories.add-categories' , ['gallery' => $gallery, 'categories' => $gallery_categories]);
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'category_name' => 'required',
            'id_gallery' => 'required'
        ]);

        //insert
        DB::table('tour_categories')->insert([
            'category_name' => $request->category_name,
            'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/tour-package/categories')->with('status', 'Kategori tour berhasil ditambahkan');
    }

    public function edit ($id)
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $category = DB::table('tour_categories')->where('id_category',$id)->get();
        return view('backend.tour_package.categories.edit-categories', ['gallery' => $gallery, 'categories' => $gallery_categories, 'tour_categories' => $category]);
    }

    public function update(Request $request)
    {
        DB::table('tour_categories')->where('id_category',$request->id)->update([
            'category_name' => $request->category_name,
            'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/tour-package/categories')->with('status', 'Kategori tour berhasil diupdate');
    }
}
