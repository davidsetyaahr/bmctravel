<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Destination;
use \App\Gallery;
use \App\City_model;

class Destinations extends Controller
{
    public function index()
    {
        $destination = DB::table('destinations')
        ->join('destination_categories','destination_categories.id_category','destinations.id_category')
        ->join('city','destinations.id_city','city.id_city')
        ->join('province','city.province_id','province.id_province')
        ->select('destinations.id_destination','destinations.destination_name','city.city_name','destinations.gallery','province.province_name', 'destination_categories.category_name')
        ->get();
        return view('frontend.destinations.list-destinations', ['destinations' => $destination]);
    }
    
    public function detail($id)
    {
        $destination = DB::table('destinations')->where('id_destination',$id)
        ->join('destination_categories','destination_categories.id_category','destinations.id_category')
        ->join('city','destinations.id_city','city.id_city')
        ->join('province','city.province_id','province.id_province')
        ->select('destinations.id_destination','destinations.destination_name','destinations.overview','destinations.information','city.city_name','destinations.gallery','province.province_name', 'destination_categories.category_name')
        ->get();
        return view('frontend.destinations.detail-destinations', ['destinations' => $destination]);
    }
}
