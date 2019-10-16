<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourPackage extends Controller
{
    function index()
    {
        return view('backend.tour_package.tour_package.list');
    }
    function add()
    {
        return view('backend.tour_package.tour_package.add-tour-package');
    }
}
