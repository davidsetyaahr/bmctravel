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
    function create()
    {
        return view('backend.tour_package.price_categories.add-price');
    }
    function store(Request $request)
    {
        //validasi
        $request->validate([
            'start_pax' => 'required',
            'end_pax' => 'required'
        ]);
        // insert
        DB::table('price_categories')->insert([
        'start_pax' => $request->start_pax,
        'end_pax' => $request->end_pax
        ]);
        return redirect('/admin/tour-package/price-categories')->with('status', 'Kategori harga berhasil ditambahkan');

    }
    public function edit($id)
    {
        return view('backend.tour_package.price_categories.edit-price-categories');
    }

}
