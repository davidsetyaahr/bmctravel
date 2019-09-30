<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Destination_categories;

class Categories extends Controller
{
    function index()
    {
        $categories = Destination_categories::all();
        return view('backend.destinations.categories.list-categories', ['destinations_categories' => $categories]);
    }
    function add(Request $req){
        return view('backend.tour_package.price_categories.add-price');
    }
}
