<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Tour_packages;
use \App\Tour_type;
use \App\Tour_durations;
use \App\Trip_activities;
use \App\Destination_categories;

class TourPackage extends Controller
{
    public function index()
    {   
        $category = Destination_categories::select('id_category','category_name')->get();
        $tour_type = DB::table('tour_type as tt')->select('tt.type_name', 'g.img', 'tt.id_type')->join('gallery as g', 'tt.id_gallery', 'g.id_gallery')->get();
        $activities = Trip_activities::select('id_activities','activities')->get();
        $durations = Tour_durations::all();
        $packages = DB::table('tour_packages as tp')
        ->join('tour_categories as tc','tp.id_category','tc.id_category')
        ->join('tour_durations as td','tp.id_duration','td.id_duration')
        ->select('tp.*','tc.category_name', 'td.day', 'td.night')
        ->get();

        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package",
            "tour_type" => $tour_type,
            "activities" => $activities,
            "category" => $category,
            "durations" => $durations,
            "packages" => $packages,
        );

        return view('frontend.tour-package.list-tour-package', $attr);
    }
    public function detail($id)
    {
        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package"
        );

        return view('frontend.tour-package.detail-tour-package', $attr);
    }
    public function booking($id)
    {
            $attr = array(
                "title" => "BMC Travel Service - Travel Package",
                "desc" => "Our awesome travel package"
            );
    
            return view('frontend.booking.stepbystep', $attr);
    }
    public function attach()
    {
    }
}
