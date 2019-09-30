<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Destinations extends Controller
{
    function index()
    {
        return view('backend.destinations.destinations.list');
    }
    function add()
    {
        return view('backend.destinations.destinations.add-destination');
    }
}
