<?php

namespace App\Http\Controllers\backend\data_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\ProvinceModel;

class Province extends Controller
{
    function index()
    
    {
        // $prov = DB::table('province')->get();
        $province = ProvinceModel::all();
        return view('backend.data_master.province.list-province', ['province' => $prov]);
    }
    public function add()
    {
        return view('backend.data_master.province.add-province');
    }
}
