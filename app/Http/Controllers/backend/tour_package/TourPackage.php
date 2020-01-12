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
use \App\Destination;
use \App\Tour_packages;
use Illuminate\Support\Facades\DB;


class TourPackage extends Controller
{
    function index()
    {
        $tourpackage = DB::table('tour_packages')
        ->join('tour_categories','tour_categories.id_category','tour_packages.id_Category')
        ->join('tour_type','tour_type.id_type','tour_packages.id_type')
        ->join('tour_durations','tour_durations.id_duration','tour_packages.id_duration')
        ->join('gallery','gallery.id_gallery','tour_packages.id_gallery')
        ->select('tour_packages.id_tour','tour_packages.tour_name','tour_categories.category_name','tour_type.type_name','tour_durations.day','tour_durations.night','tour_packages.overview','gallery.img','tour_packages.price','tour_packages.sale','tour_packages.meeting_point')->get();
        return view('backend.tour_package.tour_package.list', ['tour_packages' => $tourpackage]);
    }
    function add()
    {
        $session = session()->all();
        if(!isset($_GET['page']) || $_GET['page']==1){
            $gallery = Gallery_model::orderBy("id_gallery","desc")->get();
            $gallery_categories = Gallery_categories_model::orderBy("id_category","desc")->get();
            $category = Tour_categories::orderBy("id_category","desc")->get();
            $durations = Tour_durations::orderBy("id_duration","desc")->get();
            $type = Tour_type::all();
            $param = array(
                "gallery" => $gallery,
                "categories" => $gallery_categories,
                "tour_categories" => $category,
                "durations" => $durations,
                "type" => $type,
            );
        }
        else{
            $prev = $_GET['page']-1;
            if(empty($session['stepbystep']['step'.$prev])){
                return redirect('/admin/tour-package/add-tour-package?page='.$prev);
            }
            else{
                if($_GET['page']==2){
                    $param = array(
                        'destination' => Destination::select('id_destination','destination_name')
                        ->orderBy('id_destination','asc')
                        ->get(),
                    );
                }
                else if($_GET['page']==3){
                    $param = array(
                        'include' => Informations::where('type','0')->get(),
                        'exclude' => Informations::where('type','1')->get(),
                        'pack' => Informations::where('type','2')->get(),
                    );
                }
                else if($_GET['page']==4){
                    $param = [];
                }

            }
        }
        
        return view('backend.tour_package.tour_package.add-tour-package', $param);
    }

    function stepbystep(Request $request)
    {
        if ($request->step == '1')
        {
            $request->session()->put('stepbystep.step1', $_POST);
            return redirect('/admin/tour-package/add-tour-package?page=2');
        }
        else if ($request->step == '2')
        {   
            $request->session()->put('stepbystep.step2', $_POST);
            return redirect('/admin/tour-package/add-tour-package?page=3');
        }
        else if ($request->step == '3')
        {
            $request->session()->put('stepbystep.step3', $_POST);
            return redirect('/admin/tour-package/add-tour-package?page=4');
        }
        else if ($request->step == '4')
        {
            $request->session()->put('stepbystep.step4', $_POST);
            $session = session()->all()['stepbystep'];
            unset($session['step1']['step']);
            unset($session['step1']['_token']);
            unset($session['step4']['step']);
            unset($session['step4']['_token']);
            $insert['tour_packages'] = $session['step1'];
            $insert['tour_packages'] = array_merge($insert['tour_packages'],$session['step4']);
            $insert['tour_packages']['meeting_point'] = $insert['tour_packages']['meeting'];
            date_default_timezone_set("Asia/Jakarta");
            $insert['tour_packages']['date_created'] = date("Y-m-d");
            unset($insert['tour_packages']['meeting']);
            DB::table('tour_packages')->insert($insert['tour_packages']);
            $lastIdTourPackages = DB::getPDO()->lastInsertId();

            $insert['itinerary'] = [];
            $insert['detailItinerary'] = [];
            $day = 1;
            $insert['hotel_when_tour'] = [];
            foreach ($session['step2']['overview'] as $key => $value) {
                $arr = array(
                    'id_tour' => $lastIdTourPackages,
                    'day' => $day,
                    'overview' => $value
                );
                array_push($insert['itinerary'],$arr);
                DB::table('itinerary')->insert($arr);
                $lastIdItinerary = DB::getPDO()->lastInsertId();
    
                $trip = 1;
                foreach ($session['step2']['timestart'][$day] as $index => $val) {
                    $detailItinerary = array(
                        'id_itinerary' => $lastIdItinerary,
                        'id_destination' => $session['step2']['destinations'][$day][$index],
                        'time_start' => $val,
                        'time_end' => $session['step2']['timeend'][$day][$index],
                        'caption' => $session['step2']['activities'][$day][$index]
                    );
                    array_push($insert['detailItinerary'], $detailItinerary);

                    DB::table('detail_itinerary')->insert($detailItinerary);
                    $lastIdDetailItinerary = DB::getPDO()->lastInsertId();

                    if($detailItinerary['id_destination']==1){
                        $arrHotel = array(
                            'id_detail_itinerary' => $lastIdDetailItinerary,
                            'id_room_hotel' => $session['step2']['room_hotel'][$day][$trip]
                        );
                        array_push($insert['hotel_when_tour'], $arrHotel);

                        DB::table('hotel_when_tour')->insert($arrHotel);
                    }
                    $trip++;
                }
                $day++;
            }

            $mergeInformation = array_merge($session['step3']['include'],$session['step3']['exclude'],$session['step3']['pack']);

            $insert['tour_information'] = [];
            foreach ($mergeInformation as $key => $value) {
                $arr = array(
                    'id_tour' => $lastIdTourPackages,
                    'id_information' => $value,
                );

                array_push($insert['tour_information'], $arr);

                DB::table('tour_informations')->insert($arr);
            }

            $request->session()->forget('stepbystep');
            return redirect('/admin/tour-package/tour-package')->with('status', 'Insert success');
        }

    }
    public function newtrip()
    {
        $param = array(
            'destination' => Destination::select('id_destination','destination_name')
            ->orderBy('id_destination','asc')
            ->get(),
        );
        return view('backend.tour_package.tour_package.new-trip', $param);
    }

    function page()
    {
        $hotel = Hotels::all();
        $array = array(
            "hotel" => $hotel
        );
        return view('backend.tour_package.tour_package.add-package3', $array);
    }
    
    public function getHotel()
    {
        $hotel = Hotels::all();
        
        return view('backend.room_hotel.changeRoom', ['hotel' => $hotel]);
    }

    function kodehotel()
    {
        $roomhotel = DB::table("room_hotels")
                     ->select("*")
                     ->where("id_hotel", $_GET['id_hotel'])
                     ->get();
        return response()->json($roomhotel);

/*         $kode = Input::get('kode');
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
 */    }

    public function review()
    {
        $review = DB::table('review as r')
        ->join("tour_packages as tp","r.id_tour","tp.id_tour")
        ->join("users as u","r.id_user","u.id_user")
        ->select("r.*","tp.tour_name","u.firstname","u.lastname")
        ->orderBy('r.id_review',"desc")->get();

        $param = array(
            "review" => $review
        );
        return view('backend.tour_package.tour_package.list-review', $param);
    }
    public function reviewaction($id)
    {
        DB::table('review')->where("id_review",$id)->update(['status' => $_GET['status']]);
        return redirect('/admin/review')->with('status', 'Update Success');
    }
}
