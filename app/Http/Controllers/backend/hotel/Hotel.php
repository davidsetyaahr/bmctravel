<?php

namespace App\Http\Controllers\backend\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use\App\Hotels;

class Hotel extends Controller
{
    function index()
    {
        $hotel = Hotels::all();
        return view('backend.hotel.hotel.list-hotel', ['hotels' => $hotel]);
    }
    function add(Request $req){
        return view('backend.tour_package.price_categories.add-price');
    }
}
