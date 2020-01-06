<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Information extends Controller
{
    function index()
    {
        return view('backend.tour_package.information.list-information');
    }
    function add()
    {
        return view('backend.tour_package.information.add-information');
    }
    public function store(Request $request)
    {
        $request->validate([
            "information" => "required",
            "type" => "required"
        ]);

        DB::table("informations")->insert([
            "text" => $request->text,
            "type" => $request->type
        ]);

        return redirect('admin.tour-package.information.list-information')->with('status', 'Informartion berhasil ditambahkan');

    }
}
