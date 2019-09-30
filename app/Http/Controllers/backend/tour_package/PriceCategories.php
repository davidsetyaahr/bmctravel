<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Price_categories;

class PriceCategories extends Controller
{
    function index()
    {
        $price = Price_categories::all();
        return view('backend.tour_package.price_categories.list-price', ['price_categories' => $price]);
    }
    function add(Request $req){
        return view('backend.tour_package.price_categories.add-price');
    }
}
