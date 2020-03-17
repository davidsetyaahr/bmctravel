<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Tour_categories;

class Home extends Controller
{
    public function index(Request $request)
    {
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression, 0, ',', '.'); ?>";
        });

        $type = DB::table("tour_type AS tp")
            ->join("gallery AS g", "tp.id_gallery", "g.id_gallery")
            ->select("g.img", "tp.*")
            ->get();
        
        $tour_package = DB::table("tour_packages AS tpc")
            ->join("tour_durations AS td", "tpc.id_duration", "td.id_duration")
            ->join("gallery AS g", "tpc.id_gallery", "g.id_gallery")
            ->join("tour_categories AS tc", "tpc.id_category", "tc.id_category")
            ->select("g.img","tpc.id_tour", "tpc.tour_name", "td.day", "td.night", "tc.category_name", "tpc.price")
            ->orderBy("tpc.id_tour","desc")
            ->limit(4)
            ->get();

        $travel_tips = DB::table("travel_tips AS tt")
            ->join("gallery AS g", "tt.id_gallery", "g.id_gallery")
            ->join("admin as a", "tt.id_admin","a.id_admin")
            ->select("tt.title", "g.img", "tt.id_travel_tips","a.firstname","tt.permalink")
            ->get();

        $destination_categories = DB::table("destination_categories AS dc")
            ->join("gallery AS g", "dc.id_gallery", "g.id_gallery")
            ->select("g.img", "dc.*")
            ->get();

        $tour_categories = DB::table("tour_categories")->select("*")->get();
        $tour_durations = DB::table("tour_durations")->select("*")->get();
        $destinations = DB::table("destinations")->select("destination_name","id_destination")->get();

        $attr = array(
            "title" => "BMC Travel Service - Home",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "type" => $type,
            "tour_package" => $tour_package,
            "travel_tips" => $travel_tips,
            "destination_categories" => $destination_categories,
            "tour_categories" => $tour_categories,
            "tour_durations" => $tour_durations,
            "destinations" => $destinations
        );
        return view('frontend.common.home', $attr);
    }
}
