<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use \App\Tour_categories;
use \App\Tour_Durations;
use \App\Tour_type;
use \App\Hotels;
use \App\Room_hotels;
use \App\Informations;
use Illuminate\Support\Facades\DB;


class TourPackage extends Controller
{
    function index()
    {
        return view('backend.tour_package.tour_package.list');
    }
    function add()
    {
        $gallery = Gallery_model::orderBy("id_gallery","desc")->get();
        $gallery_categories = Gallery_categories_model::orderBy("id_category","desc")->get();
        $category = Tour_categories::orderBy("id_category","desc")->get();
        $categoryAll = Tour_categories::orderBy("id_category","desc")->get();
        $durations = Tour_durations::orderBy("id_duration","desc")->get();
        $include = DB::table('informations')->where('type','0')->get();
        $exclude = DB::table('informations')->where('type','1')->get();
        $pack = DB::table('informations')->where('type','2')->get();
        $type = Tour_type::all();
        
        $param = array(
            "gallery" => $gallery,
            "categories" => $gallery_categories,
            "tour_categories" => $category,
            "durations" => $durations,
            "type" => $type,
            "include" =>$include,
            "exclude" =>$exclude,
            "pack" =>$pack
            
        );
        return view('backend.tour_package.tour_package.add-tour-package', $param);
    }
    
    function stepbystep(Request $request)
    {
        if ($request->step == '1')
        {
            $array['stepbystep']['step1'] = array(
                'id_tour' => $request->id_tour,
                'tour_name' => $request->tour_name,
                'id_category' => $request->id_category,
                'id_type' => $request->id_type,
                'id_duration' => $request->id_duration,
                'overview' => $request->overview,
                'id_gallery' => $request->id_gallery
            );
            $request->session()->put($array);
            return redirect('/admin/tour-package/add-tour-package?page=2');
        }
        else if ($request->step == '2')
        {
            $array['stepbystep']['step2']=$_POST;
            $request->session()->put($array);
            return redirect('/admin/tour-package/add-tour-package?page=3');
            }
        else if ($request->step == '4')
        {
            $array['stepbystep']['step4']=$_POST;
            $request->session()->put($array);

            return redirect('/admin/tour-package/add-tour-package?page=5');
            }
        else if ($request->step == '5')
        {
            $array['stepbystep']['step5']=$_POST;
            $request->session()->put($array);
            }
            
            
    }
    
    function page()
    {
        $hotel = Hotels::all();
        $array = array(
            "hotel" => $hotel
        );
        return view('backend.tour_package.tour_package.add-package3', $array);
    }

    function kodehotel()
    {
        $kode = Input::get('kode');
        echo $kode;
        // $roomhotel = DB::table("room_hotels")
        //              ->select("*")
        //              ->where("id_hotel", "=", $kode)
        //              ->get();
        //             //  ->toJson();
        // $array = array();
        // foreach ($roomhotel as $val) {
        //     $array = array(
        //         "id_room_hotel" => $val->id_room_hotel,
        //         "room_name" => $val->room_name,
        //     );
        // }
        // return response()->json($array);
    }
}
