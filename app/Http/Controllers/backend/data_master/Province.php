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
    public function edit($id)
    {
        $prov = DB::table('province')->where('id_province',$id)->get();
        return view('backend.data_master.province.edit-province',['province' => $prov]);
         //return view('backend.data-master.province.edit-province', compact('prov'));
    }
    public function update(Request $request)
    {
        $request->validate([
         /*name dari form */ 'province_name' => 'required',
        ]);
        DB::table('province')->where(/*nama field database*/'id_province', /*name dari form*/ $request->id_province)->update([
           /*nama field database */ 'province_name' => /*name dari form */ $request->province_name,
        ]);
        return redirect('/admin/data-master/province');
   }
}
