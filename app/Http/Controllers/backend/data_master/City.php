<?php

namespace App\Http\Controllers\backend\data_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Province_model;
use App\City_model;


class City extends Controller
{
    function index()
    {
        $cit = DB::table('city')->get();
        return view('backend.data_master.city.index', ['city' => $cit]);
        //return view('backend.data_master.city.index');
    }
    function add()
    {
        $prov = Province_model::all();
        return view('backend.data_master.city.add-city' , ['id_province' => $prov]);
    }
    function store(Request $request)
    {
        //insert


        DB::table('city')->insert([
            'province_id' => $request->province_id,
            'city_name' => $request->city_name,
        ]);


        return redirect('/admin/data-master/city');
    }
}

