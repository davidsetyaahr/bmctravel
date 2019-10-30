<?php

namespace App\Http\Controllers\backend\travel_tips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use \App\Traveltip;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use Carbon\Carbon;

class TravelTips extends Controller
{
    function index()
    {
        $trvltips = Traveltip::orderBy('id_travel_tips', 'DESC')->get();
        return view('backend.travel_tips.travel_tips.list', ['travel_tips' => $trvltips]);
    }
    function create()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.travel_tips.travel_tips.add-travel-tips',['gallery' => $gallery, 'categories' => $gallery_categories]);
    }
    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'permalink' => 'required'
        ]);

        Traveltip::create([
            'title' => $request->title,
            'id_admin' => 1,
            'id_gallery' => $request->id_gallery,
            'content' => $request->content,
            'permalink' => $request->permalink,
            'insert_date'=> Carbon::now(),
            'update_date'=> Carbon::now()
        ]);

         return redirect('/admin/travel-tips/travel-tips/list')->with('status', 'Travel Tips berhasil ditambahkan');
    }
    public function edit($id)
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $trvltips = DB::table('travel_tips')->where('id_travel_tips',$id)->get();
        return view('backend.travel_tips.travel_tips.edit-travel-tips',['gallery' => $gallery, 'categories' => $gallery_categories,'travel_tips' => $trvltips]);
    }
    public function update(Request $request)
    {

        DB::table('travel_tips')->where('id_travel_tips',$request->id)->update([
            'title' => $request->title,
            'id_admin' => 1,
            'id_gallery' => $request->id_gallery,
            'content' => $request->content,
            'permalink' => $request->permalink,
            'update_date' => Carbon::now()
        ]);
        return redirect('/admin/travel-tips/travel-tips/list')->with('status', 'Travel Tips berhasil diupdate');

    }
}
