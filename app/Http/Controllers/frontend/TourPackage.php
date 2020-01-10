<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Tour_packages;
use \App\Tour_type;
use \App\Tour_categories;
use \App\Tour_durations;
use \App\Destination;
use \App\Gallery_model;
use \App\City_model;

class TourPackage extends Controller
{
    public function index()
    {   
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression, 0, ',', '.'); ?>";
        });
        $type = DB::table("tour_type AS tp")
            ->join("gallery AS g", "tp.id_gallery", "g.id_gallery")
            ->select("g.img", "tp.*")
            ->get();

        $tour_package = DB::table("tour_packages AS tp")
            ->join("tour_categories AS tpc", "tp.id_category", "tpc.id_category")
            ->join("tour_durations AS tpd", "tp.id_duration", "tpd.id_duration")
            ->join("tour_price AS tppc", "tp.id_tour", "tppc.id_tour")
            ->join("tour_informations AS ti", "tp.id_tour", "ti.id_tour")
            ->join("informations AS i", "ti.id_information", "i.id_informations")
            ->select("tp.*", "tpc.category_name", "tpd.*", "tppc.*", "i.text", "ti.id_information")
            ->get();
        
        foreach ($tour_package as $val) {
                $begin_discount = $val->price * $val->discount / 100;
                $final_discount = $val->price - $begin_discount;
                $id_tour = $val->id_tour;
        }
        
        $itinerary = DB::table("itinerary AS it")
            ->join("detail_itinerary AS dit", "it.id_itinerary", "dit.id_itinerary")
            ->join("destinations AS dest", "dit.id_destination", "dest.id_destination")
            ->join("destination_categories AS dtc", "dest.id_category", "dtc.id_category")
            ->join("destination_activities AS dta", "dit.id_destination", "dta.id_destination")
            ->join("trip_activities AS ta", "dta.id_activities", "ta.id_activities")
            // di where untuk nampilkan honey moon dll, susah note: fathan kayaknya sih dari tabelnya butuh tabel tambahan, ya kayaknya aja, dk usah di ambil hati :)
            ->where([["it.id_tour", "=" ,$id_tour], ["dta.id_destination","=", "ta.id_destination"]])
            ->select("it.*", "dit.*", "dest.id_destination", "dest.destination_name")
            ->get();
        
        $tour_type = Tour_type::all();

        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package",
            "tourp" => $tour_package,
            "discount" => $final_discount,
            "itinerary" => $itinerary,
            "type" => $type,
            "tour_type" => $tour_type,
            "category" => $category
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
