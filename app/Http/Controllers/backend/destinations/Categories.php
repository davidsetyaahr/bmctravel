<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Destination_categories;
use App\Gallery_model;
use \App\Gallery_categories_model;

class Categories extends Controller
{
    function index()
    {

        // $categories = Destination_categories::orderBy('id_category', 'DESC')->get();
        $categories = DB::table('destination_categories')
        ->join('gallery','gallery.id_gallery','destination_categories.id_gallery')
        ->select('destination_categories.id_category','destination_categories.category_name','gallery.img')->get();
        return view('backend.destinations.categories.list-categories', ['destination_categories' => $categories]);
    }
    function create()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.destinations.categories.add-categories',['gallery' => $gallery, 'categories' => $gallery_categories]);
    }
    function store(Request $request)
    {
        //validasi
        $request->validate([
            'category_name' => 'required',
            'id_gallery' => 'required'
        ]);
        // insert
        DB::table('destination_categories')->insert([
        'category_name' => $request->category_name,
        'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/destinations/categories')->with('status', 'Kategori berhasil ditambahkan');

    }
    function edit($id){
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $categories = DB::table('destination_categories')->where('id_category',$id)->get();
        return view('backend.destinations.categories.edit-categories',['gallery' => $gallery, 'categories' => $gallery_categories, 'destination_categories' => $categories]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'id_gallery' => 'required'
        ]);

        DB::table('destination_categories')->where('id_category',$request->id)->update([
            'category_name' => $request->category_name,
            'id_gallery' => $request->id_gallery
        ]);
        return redirect('/admin/destinations/categories')->with('status', 'Kategori berhasil di Update');
   }
}
