<?php

namespace App\Http\Controllers\backend\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Hotel extends Controller
{
    function index()
    {
        return view('backend.hotel.hotel.list-hotel');
    }
    function add(){
        return view('backend.hotel.hotel.add-hotel');
    }
}
