<?php

namespace App\Http\Controllers\backend\data_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Province_model;

class Province extends Controller
{
    function index()
    
    {
        // $prov = DB::table('province')->get();
        $province = Province_model::all();
        return view('backend.data_master.province.list-province', ['province' => $province]);
    }
    public function create()
    {
        return view('backend.data_master.province.add-province');
    }
    function store(Request $request)
    {
        //insert
        
        
        DB::table('province')->insert([
            'province_name' => $request->province_name
        ]);
        
        return redirect('admin/data-master/province');
    }
}
