<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;

use App\Tour_categories;
use App\Gallery;
use App\Gallery_categories;


class Categories extends Controller
{
    public function index()
    {
        $category = Tour_categories::all();
        return view('backend.tour_package.categories.list-categories' , ['tour_categories' => $category]);
    }


    public function add()
    {
        $gallery = Gallery::all();
        $gallery_categories = Gallery_categories::all();
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
        return redirect('/admin/tour-package/categories')->with('status', 'Kategori hotel berhasil ditambahkan');
    }

    public function edit ($id)
    {
        $gallery = Gallery::all();
        $gallery_categories = Gallery_categories::all();
        $category = DB::table('tour_categories')->where('id_category',$id)->get();
        return view('backend.tour_package.categories.edit-categories', ['gallery' => $gallery, 'categories' => $gallery_categories, 'tour_categories' => $category]);
    }

    public function update(Request $request)
    {
        DB::table('tour_categories')->where('id_category',$request->id)->update([
            'category_name' => $request->category_name,
            'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/tour-package/categories');
    }
}
