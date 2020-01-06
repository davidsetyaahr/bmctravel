<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Information extends Controller
{
    function index()
    {
        return view('backend.tour_package.information.list-information');
    }
    function add()
    {
        return view('backend.tour_package.information.add-information');
    }
}
