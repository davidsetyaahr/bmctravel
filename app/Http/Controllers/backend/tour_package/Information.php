<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Informations;

class Information extends Controller
{
    function index()
    {
        $info = Informations::orderBy('id_informations', 'DESC')->get();
        return view('backend.tour_package.information.list-information' ,  ['id_informations' => $info]);
    }
    function add()
    {
        return view('backend.tour_package.information.add-information');
    }
    public function store(Request $request)
    {
        $request->validate([
            "text" => "required",
            "type" => "required"
        ]);

        DB::table("informations")->insert([
            "text" => $request->text,
            "type" => $request->type
        ]);

        return redirect('admin/tour-package/information')->with('status', 'Informartion berhasil ditambahkan');

    }
    public function edit($id)
    {
        $info = DB::table('informations')->where('id_informations', $id)->get();
        return view('backend.tour_package.information.edit-information', ['informations' => $info]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'type' => 'required'
        ]);

        DB::table('informations')->where('id_informations',$request->id)->update([
            'text' => $request->text,
            "type" => $request->type
        ]);
        return redirect('/admin/tour-package/information')->with('status', 'Update berhasil');
    }
}
