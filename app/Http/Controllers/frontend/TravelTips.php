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
        ->select('travel_tips.permalink','travel_tips.id_travel_tips','travel_tips.title','travel_tips.id_admin','travel_tips.id_gallery','gallery.img','travel_tips.content')
        ->get();
        
        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package",
            "travel_tips" => $trvltips
        );
        return view('frontend.travel-tips.list-travel-tips', $attr);
    }
    
    public function search(Request $request)
    { 
        
        // return view('frontend.travel-tips.list-travel-tips', $attr);
    }
    
    public function detail($id)
    {
        $traveltips = DB::table('travel_tips')
        ->join('gallery','gallery.id_gallery','travel_tips.id_gallery')
        ->join('admin','travel_tips.id_admin','admin.id_admin')
        ->select('travel_tips.insert_date','travel_tips.permalink','travel_tips.id_travel_tips','travel_tips.title','travel_tips.id_admin','admin.firstname','travel_tips.id_gallery','gallery.img','travel_tips.content')
        ->where("travel_tips.permalink", "!=", $id)
        ->get();

        $trvltips = DB::table('travel_tips')->where('permalink',$id)
            ->join('gallery','gallery.id_gallery','travel_tips.id_gallery')
            ->select('travel_tips.id_travel_tips','travel_tips.title','travel_tips.id_admin','travel_tips.id_gallery','gallery.img','travel_tips.content')
            ->get();

        $tags = DB::table('tags AS t')
            ->select("*")
            ->get();
        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package",
            "travel_tips_all" => $traveltips,
            "travel_tips" => $trvltips,
            "tags" => $tags
        );
        return view('frontend.travel-tips.detail-travel',$attr);
        // return view('frontend\travel-tips\detail-travel',['travel_tips' => $trvltips]);
    }
}
