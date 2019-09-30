<?php

namespace App\Http\Controllers\backend\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class Hotel extends Controller
{
    function index()
    {
        $hotel = DB::table('hotels')->get();
        return view('backend.hotel.hotel.list-hotel', ['hotels' => $hotel]);
    }
    function add(){
        return view('backend.hotel.hotel.add-hotel');
    }
}
