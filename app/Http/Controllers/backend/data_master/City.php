<?php

namespace App\Http\Controllers\backend\data_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class City extends Controller
{
    function index()
    {
        return view('backend.data_master.city.index');
    }
    function add()
    {
        return view('backend.data_master.city.add-city');
    }
}
