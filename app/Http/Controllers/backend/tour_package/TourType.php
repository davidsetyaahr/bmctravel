<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourType extends Controller
{
    function index()
    {
        return view('backend.tour_package.tour_type.index');
    }
}