<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class PriceCategories extends Controller
{
    function index()
    {
        $price = DB::table('price_categories')->get();
        return view('backend.tour_package.price_categories.list-price', ['price_categories' => $price]);
    }
    function add(){
        return view('backend.tour_package.price_categories.add-price');
    }
}
