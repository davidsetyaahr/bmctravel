<?php

namespace App\Http\Controllers\backend\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use \App\Hotels;
use \App\Gallery;
use \App\Gallery_categories;

class Hotel extends Controller
{
    function index()
    {
        $hotel = Hotels::all();
        return view('backend.hotel.hotel.list-hotel', ['hotels' => $hotel]);
    }
    function create(){
        $gallery = Gallery::all();
        $gallery_categories = Gallery_categories::all();
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
        $gallery = Gallery::all();
        $gallery_categories = Gallery_categories::all();
        return view('backend.hotel.hotel.edit-hotel', ['gallery' => $gallery, 'categories' => $gallery_categories]);
    }
}
