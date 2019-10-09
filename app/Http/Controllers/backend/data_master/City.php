<?php

namespace App\Http\Controllers\backend\data_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\City_model;

class City extends Controller
{
    function index()
    {
        $city = City_model::all();
        return view('backend.data_master.city.index', ['city' => $city]);
    }
    function add()
    {
        return view('backend.data_master.city.add-city');
    }
}
