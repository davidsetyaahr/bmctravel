<?php

namespace App\Http\Controllers\backend\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use \App\Hotels;
use \App\Gallery_model;
use \App\Gallery_categories_model;

class Hotel extends Controller
{
    function index()
    {
        $hotel = Hotels::all();
        return view('backend.hotel.hotel.list-hotel', ['hotels' => $hotel]);
    }
    function create(){
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.hotel.hotel.add-hotel', ['gallery' => $gallery, 'categories' => $gallery_categories]);
    }
    function store(Request $request)
    {
        //validasi
        $request->validate([
            'hotel_name' => 'required',
            'id_gallery' => 'required',
            'map' => 'required',
            'overview' => 'required'
        ]);
        // insert
        DB::table('hotels')->insert([
        'hotel_name' => $request->hotel_name,
        'id_gallery' => $request->id_gallery,
        'map' =>$request->map,
        'overview' =>$request->overview
        ]);
        return redirect('/admin/hotel/hotel')->with('status', 'Kategori hotel berhasil ditambahkan');

    }
    function edit($id){
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $hotel = DB::table('hotels')->where('id_hotel',$id)->get();
        return view('backend.hotel.hotel.edit-hotel', ['gallery' => $gallery, 'categories' => $gallery_categories, 'hotels' => $hotel]);
    }
    public function update(Request $request)
    {
        DB::table('hotels')->where('id_hotel',$request->id)->update([
            'hotel_name' => $request->hotel_name,
            'id_gallery' => $request->id_gallery,
            'map' => $request->map,
            'overview' => $request->overview
        ]);
        return redirect('/admin/hotel/hotel');
   }
}
