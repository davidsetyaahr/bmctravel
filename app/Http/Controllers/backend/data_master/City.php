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
        $city = City_model::all();
        return view('backend.data_master.city.index', ['city' => $city]);
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
    public function edit($id)
    {
        $prov = Province_model::all();
        // return view('backend.data_master.city.edit-city' , ['pr' => $prov]);
        $cit = DB::table('city')->where('id_city',$id)->get();
        return view('backend.data_master.city.edit-city',['city' => $cit], ['prov' => $prov]);
         //return view('backend.data-master.city.-city', compact('cit'));
    }
    public function update(Request $request)
    {
        $request->validate([
         /*name dari form */ 'city_name' => 'required',
        ]);
        DB::table('city')->where(/*nama field database*/'id_city', /*name dari form*/ $request->id_city)->update([
           /*nama field database */ 'city_name' => /*name dari form */ $request->city_name,
        ]);
        return redirect('/admin/data-master/city');
   }
}

