<?php

namespace App\Http\Controllers\backend\room_hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use \App\Room_hotels;
use \App\Hotels;
use \App\Gallery_model;
use \App\Gallery_categories_model;

class Room extends Controller
{
    function index()
    {
        $room = DB::table('room_hotels')

        ->join('hotels','hotels.id_hotel','room_hotels.id_hotel')
        ->join('gallery','gallery.id_gallery','room_hotels.gallery')
        ->select('room_hotels.id_room_hotel','hotels.hotel_name','room_hotels.room_name','gallery.img')
        ->orderBy('id_room_hotel', 'desc')
        ->get();
        return view('backend.room_hotel.list-room-hotel', ['room_hotels' => $room]);
    }
    function create(){
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $htl = Hotels::all(['id_hotel','hotel_name']);
        return view('backend.room_hotel.add-room-hotel', ['gallery' => $gallery, 'categories' => $gallery_categories,'hotels' => $htl]);
    }
    function store(Request $request)
    {
        //validasi
        $request->validate([
            'id_hotel' => 'required',
            'room_name' => 'required'
        ]);
        // insert
        DB::table('room_hotels')->insert([
        'id_hotel' => $request->id_hotel,
        'room_name' =>$request->room_name,
        'gallery' =>$request->id_gallery
        ]);
        return redirect('/admin/hotel/room-hotel')->with('status', 'Kategori Room hotel berhasil ditambahkan');

    }
    function edit($id){
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $htl = Hotels::all(['id_hotel','hotel_name']);
        $room = DB::table('room_hotels')
            // ->join('hotels','hotels.id_hotels','room_hotels.id_hotels')
            // // ->join('')
            // ->select('room_hotels.room_name','hotels.hotel_name','room_hotels.id_room_hotel')
            ->where('id_room_hotel',$id)->get();
        return view('backend.room_hotel.edit-room-hotel', ['gallery' => $gallery, 'categories' => $gallery_categories, 'room_hotels' => $room,'hotels' => $htl]);
    }
    public function update(Request $request)
    {
        DB::table('room_hotels')->where('id_room_hotel',$request->id)->update([
            'id_hotel' => $request->id_hotel,
            'room_name' => $request->room_name,
            'gallery' => $request->id_gallery
        ]);
        return redirect('/admin/hotel/room-hotel')->with('status', 'Kategori Room hotel berhasil diupdate');
   }
}
