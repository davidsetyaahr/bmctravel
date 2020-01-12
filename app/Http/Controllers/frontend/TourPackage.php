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
use Session;
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
        ->join('gallery as g','tp.id_gallery','g.id_gallery')
        ->select('tp.*','tc.category_name', 'td.day', 'td.night','g.img')
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
        $packages = DB::table('tour_packages as tp')
        ->join('tour_categories as tc','tp.id_category','tc.id_category')
        ->join('tour_durations as td','tp.id_duration','td.id_duration')
        ->join('gallery as g','tp.id_gallery','g.id_gallery')
        ->select('tp.*','tc.category_name', 'td.day', 'td.night','g.img')
        ->where('id_tour',$id)
        ->get();

        $reviews = DB::table("review as r")
        ->join("users as u","r.id_user","u.id_user")
        ->select("r.*","u.firstname","u.lastname","u.avatar")
        ->where('r.status','1')
        ->orderBy('r.id_review',"desc")->get()->toArray();

        $average = DB::table('review')
        ->where("status",'1')
        ->avg('rate');

        $progresBar = array(
            "fantastic" => DB::table("review")
                            ->select(array(DB::raw('count(id_review) as ttl')))
                            ->where("status","1")
                            ->where("rate",5)
                            ->get(),
            "verygood" => DB::table("review")
                            ->select(array(DB::raw('count(id_review) as ttl')))
                            ->where("status","1")
                            ->where("rate",4)
                            ->get(),
            "satisfying" => DB::table("review")
                            ->select(array(DB::raw('count(id_review) as ttl')))
                            ->where("status","1")
                            ->where("rate",3)
                            ->get(),
            "average" => DB::table("review")
                            ->select(array(DB::raw('count(id_review) as ttl')))
                            ->where("status","1")
                            ->where("rate",2)
                            ->get(),
            "poor" => DB::table("review")
                            ->select(array(DB::raw('count(id_review) as ttl')))
                            ->where("status","1")
                            ->where("rate",1)
                            ->get(),
        );
        $rev['fantastic'] = ($progresBar['fantastic'][0]->ttl/count($reviews)) * 100;
        $rev['verygood'] = ($progresBar['verygood'][0]->ttl/count($reviews)) * 100;
        $rev['satisfying'] = ($progresBar['satisfying'][0]->ttl/count($reviews)) * 100;
        $rev['average'] = ($progresBar['average'][0]->ttl/count($reviews)) * 100;
        $rev['poor'] = ($progresBar['poor'][0]->ttl/count($reviews)) * 100;

        $information = array(
            "include" => DB::table('tour_informations as ti')
                        ->join("informations as i","ti.id_information","i.id_informations")
                        ->select("text")
                        ->where("type","0")
                        ->where("id_tour",$packages[0]->id_tour)
                        ->get(),
            "exclude" => DB::table('tour_informations as ti')
                        ->join("informations as i","ti.id_information","i.id_informations")
                        ->select("text")
                        ->where("type","1")
                        ->where("id_tour",$packages[0]->id_tour)
                        ->get(),
            "pack" => DB::table('tour_informations as ti')
                        ->join("informations as i","ti.id_information","i.id_informations")
                        ->select("text")
                        ->where("type","2")
                        ->where("id_tour",$packages[0]->id_tour)
                        ->get(),
        );

        $anotherPackages = DB::table('tour_packages as tp')
        ->join('tour_type as tt','tp.id_type','tt.id_type')
        ->join('gallery as g','tp.id_gallery','g.id_gallery')
        ->select('tp.id_tour','tp.tour_name','tt.type_name','tp.price','g.img')
        ->where('id_duration',$packages[0]->id_duration)
        ->get();

        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package",
            'packages' => $packages[0],
            'informations' => $information,
            'another_packages' => $anotherPackages,
            "progress" => $progresBar,
            "reviews" => $reviews,
            "rev" => $rev,
            "average" => $average
        );
        return view('frontend.tour-package.detail-tour-package', $attr);
    }
    public function booking($id)
    {
        if(empty(session()->all()['user'])){
            return redirect('/signin');
        }
        else{
            $packages = DB::table('tour_packages as tp')
            ->select('tp.id_tour','tp.tour_name','tp.meeting_point','tp.date_created',"td.day","td.night","tp.price","tp.sale","tt.type_name")
            ->join("tour_durations as td","tp.id_duration","td.id_duration")
            ->join("tour_type as tt","tp.id_type","tt.id_type")
            ->where('id_tour',$id)
            ->get();
    
            $attr = array(
                "title" => "BMC Travel Service - Travel Package",
                "desc" => "Our awesome travel package",
                "packages" => $packages[0]
            );
    
            return view('frontend.booking.stepbystep', $attr);
        }
    }
    public function stepbystep()
    {
        $session = session()->all()['user'];
        if(empty($_GET['page'])){
            $json['msg'] = "error";
        }
        else{
            if($_GET['page']==2){
                //jangan lpa check id sama start date
                if($_GET['tour']=="" || $_GET['start_date']==""){
                    $json['msg'] = "empty";
                }
                else{
                    $put = array(
                        "id_tour" => $_GET['tour'],
                        "start_date" => $_GET['start_date']
                    );
                    Session::put("booking.".$session['id_user'].".step2", $put);
                    $json['msg'] = "success";
                }
            }
            else if($_GET['page']==3){
                //jangan lpa check id sama start date
                if($_GET['pax']<=0){
                    $json['msg'] = "empty";
                }
                else{
                    $put = array(
                        "pax" => $_GET['pax'],
                    );
                    Session::put("booking.".$session['id_user'].".step3", $put);
                    $json['msg'] = "success";
                }
            }
            else{
                $json['msg'] = "error";
            }
        }
        return response()->json($json);
    }
    public function attach(Request $request)
    {
        $session = session()->all()['user'];
        
        $img = $request->file('attach');
        $time = time();
        $newName = substr($time, strlen($time) - 5, 5) . "." . $img->getClientOriginalExtension();
        $tujuan_upload = 'images/attach';
        $img->move($tujuan_upload, $newName);
        
        Session::put("booking.".$session['id_user'].".step4", ['attach' => $newName]);
        return response()->json(['msg' => 'success']);
    }
    public function bookingtrue()
    {
        date_default_timezone_set("Asia/Jakarta");
        $session = session()->all();
        $booking = $session['booking'][$session['user']['id_user']];
        $package = DB::table('tour_packages as tp')
        ->select("td.day","tp.price","tp.sale")
        ->join("tour_durations as td","tp.id_duration","td.id_duration")
        ->where('id_tour',$booking['step2']['id_tour'])
        ->get();
        $sale = $package[0]->sale*$package[0]->price/100;
        $price = $package[0]->price-$sale;

        $arr = array(
            "id_tour" => $booking['step2']['id_tour'],
            "booking_date" => date("Y-m-d H:i:s"),
            "travel_date" => $booking['step2']['start_date'],
            "day" => $package[0]->day,
            "id_user" => $session['user']['id_user'],
            "pax" => $booking['step3']['pax'],
            "price" => $price * $booking['step3']['pax'],
            "identity_card" => $booking['step4']['attach'],
            "status" => "0"
        );
        DB::table('bookings')->insert($arr);
        Session::forget('booking');
        return redirect('tour-package/booking/booking-success');
    }
    public function bookingsuccess()
    {
        return view('frontend.booking.success');
    }
    public function rate(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        $session = session()->all();
        $arr = array(
            "id_tour" => $_POST['id_tour'],
            "id_user" => $session['user']['id_user'],
            "rate" => $_POST['rate'],
            "comment" => $_POST['comment'],
            "datetime" => date("Y-m-d H:i:s"),
            "status" => "0"
        );
        
        DB::table('review')->insert($arr);
        return redirect('my-account/review');
    }
}
