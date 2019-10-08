<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Destination_categories;

class Categories extends Controller
{
    function index()
    {
        $categories = Destination_categories::all();
        return view('backend.destinations.categories.list-categories', ['destination_categories' => $categories]);
    }
    function create()
    {
        return view('backend.destinations.categories.add-categories');
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
        $categories = DB::table('destination_categories')->where('id_category',$id)->get();
        return view('backend.destinations.categories.edit-categories',['destination_categories' => $categories]);
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
        return redirect('/admin/destinations/categories');
   }
}
