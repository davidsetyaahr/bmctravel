<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use \App\Traveltip;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use Carbon\Carbon;


class TravelTips extends Controller
{
    public function index()
    {
        $trvltips = DB::table('travel_tips')
        ->join('gallery','gallery.id_gallery','travel_tips.id_gallery')
        ->select('travel_tips.id_travel_tips','travel_tips.title','travel_tips.id_admin','travel_tips.id_gallery','gallery.img','travel_tips.content')
        ->get();
        return view('frontend.travel-tips.list-travel-tips',['travel_tips' => $trvltips]);
        // $trvltips = Traveltip::all();
        // return view('frontend.travel-tips.list-travel-tips',['travel_tips' => $trvltips]);
    }

    public function detail($id)
    {
        $trvltips = DB::table('travel_tips')->where('id_travel_tips',$id)
        ->join('gallery','gallery.id_gallery','travel_tips.id_gallery')
        ->select('travel_tips.id_travel_tips','travel_tips.title','travel_tips.id_admin','travel_tips.id_gallery','gallery.img','travel_tips.content')
        ->get();
        return view('frontend.travel-tips.detail-travel',['travel_tips' => $trvltips]);
        // return view('frontend\travel-tips\detail-travel',['travel_tips' => $trvltips]);
    }
}
