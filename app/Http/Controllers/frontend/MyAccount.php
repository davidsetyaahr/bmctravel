<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bookings;
use App\Bank_options;
use App\Users;

class MyAccount extends Controller
{
    public function index()
    {
        $session = session()->all();
        $profile = DB::table('users')->where("id_user",$session['user']['id_user'])->get();
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "user" => $profile[0],
        );
        return view('frontend.myAccount.dashboard',$attr);
    }

    public function notification()
    {
        $session = session()->all();
        DB::table('notif_user as nu')
        ->join("payment as p","nu.id_payment","p.id_payment")
        ->join("bookings as b","p.id_booking","b.id_booking")
        ->where('b.id_user',$session['user']['id_user'])->update(["view" => "1"]);
        $profile = DB::table('users')->where("id_user",$session['user']['id_user'])->get();
        $notif = DB::table('notif_user as nu')
        ->join("payment as p","nu.id_payment","p.id_payment")
        ->join("bookings as b","p.id_booking","b.id_booking")
        ->join("tour_packages as tp","b.id_tour","tp.id_tour")
        ->select("tp.tour_name", "nu.status","nu.datetime")
        ->where("b.id_user",$session['user']['id_user'])
        ->orderBy("nu.id_notif","desc")
        ->get();

        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "user" => $profile[0],
            "notif" => $notif
        );
        return view('frontend.myAccount.notifications', $attr);
    }

    public function booking()
    {
        $session = session()->all();
        $profile = DB::table('users')->where("id_user",$session['user']['id_user'])->get();
        $book = DB::table('bookings')
        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('tour_durations as d', 'tour_packages.id_duration','d.id_duration')
        ->join('users','users.id_user','bookings.id_user')
        ->select('bookings.id_tour','bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.travel_date','bookings.pax','bookings.price','d.day','bookings.status')
        ->where('bookings.id_user',$profile[0]->id_user)
        ->get();

        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "user" => $profile[0],
            'bookings' => $book
        );


        return view('frontend.myAccount.booking',$attr);
    }
    public function detailbooking($id)
    {
        $session = session()->all();
        $profile = DB::table('users')->where("id_user",$session['user']['id_user'])->get();
        $book = DB::table('bookings')
        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('tour_durations as d', 'tour_packages.id_duration','d.id_duration')
        ->join('tour_type as ty',"tour_packages.id_type","ty.id_type")
        ->select('bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.travel_date','bookings.pax','bookings.price','d.night','d.day','bookings.status','bookings.identity_card',"ty.type_name")
        ->where('bookings.id_user',$profile[0]->id_user)
        ->where('bookings.id_booking',$id)
        ->get();

        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "user" => $profile[0],
            'booking' => $book[0]
        );

        return view('frontend.myAccount.detail-booking',$attr);
    }

    public function changepass()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        return view('frontend.myAccount.changepass', $attr);
    }
    public function payment($id)
    {
        $session = session()->all();
        $profile = DB::table('users')->where("id_user",$session['user']['id_user'])->get();
        $bank = Bank_options::all();
        $book = DB::table('bookings')
        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('tour_durations as d', 'tour_packages.id_duration','d.id_duration')
        ->join('tour_type as ty',"tour_packages.id_type","ty.id_type")
        ->select('bookings.status','bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.pax','bookings.price','d.night','d.day','bookings.identity_card',"ty.type_name")
        ->where('bookings.id_user',$profile[0]->id_user)
        ->where('bookings.id_booking',$id)
        ->get();

        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "user" => $profile[0],
            'booking' => $book[0],
            'bank' => $bank
        );

        return view('frontend.myAccount.payment',$attr);
    }

    public function paymentaction(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        $booking = DB::table('bookings')
        ->select('price')
        ->where('id_booking',$_POST['id_booking'])
        ->get()[0];
        //mengambil informasi
        $img = $request->file('attach');

        // nama file
        $namefile = $img->getClientOriginalName();

        // upload file
        $time = time();
        $newName = substr($time, strlen($time) - 5, 5) . "." . $img->getClientOriginalExtension();
        $tujuan_upload = 'images/attach';
        $img->move($tujuan_upload, $newName);
        $cek = DB::table('payment')
        ->select('id_payment')
        ->where('id_booking',$_POST['id_booking'])
        ->get()
        ->toArray();
        if($_POST['payment_option']==50 || $_POST['payment_option']==100){

            $status = $_POST['payment_option']==100 ? '22' : '11';
            $update = array(
                'status' => $status
            );
            $payment = array(
                "id_booking" => $_POST['id_booking'],
                "nominal" => $_POST['payment_option']==100 ? $booking->price : $booking->price/2,
                "payment_date" => date("Y-m-d H:i:s"),
                "attachment" => $newName,
            );
            DB::table('bookings')->where('id_booking',$payment['id_booking'])->update($update);

            if(count($cek)==0){
                DB::table('payment')->insert($payment);
                $idPayment = DB::getPDO()->lastInsertId();
            }
            else{
                $idPayment = $cek[0]->id_payment;
                DB::table('payment')->where('id_payment',$idPayment)->update($payment);
            }

            $notif = array(
                'id_payment' => $idPayment,
                'status' => $status,
                'view' => '0'
            );

            DB::table('notif_admin')->insert($notif);
        }
        else{

            $payment = array(
                "id_booking" => $_POST['id_booking'],
                "nominal" => $booking->price/2,
                "payment_date" => date("Y-m-d H:i:s"),
                "attachment" => $newName,
            );

            if(count($cek)==2){
                $getId = DB::table('payment')
                ->select('id_payment')
                ->where('id_booking', $_POST['id_booking'])
                ->orderBy('id_payment','desc')
                ->limit(1)
                ->get();

        $cek = DB::table('payment as p')
        ->join("bookings as b","p.id_booking","b.id_booking")
        ->where("p.id_booking", $payment['id_booking'])
        ->where("b.status", $payment['id_booking']);
                DB::table('payment')->where('id_payment', $getId[0]->id_payment)->update($payment);
                $idPayment = $getId[0]->id_payment;
            }
            else{
                DB::table('payment')->insert($payment);
                $idPayment = DB::getPDO()->lastInsertId();
            }

            DB::table('bookings')->where('id_booking', $payment['id_booking'])->update(['status' => '222']);
            $notif = array(
                'id_payment' => $idPayment,
                'status' => '222',
                'view' => '0'
            );

            DB::table('notif_admin')->insert($notif);
        }

       return redirect('my-account/booking')->with('status', 'Upload success. Wait for a moment, we will check your uploaded file ');
    }

    public function getnotif()
    {
        $countNotif = DB::table('notif_user')
        ->select("status")
        ->where('view','0')
        ->get()->toArray();

        echo count($countNotif);
    }
    public function review()
    {
        $session = session()->all();
        $profile = DB::table('users')->where("id_user",$session['user']['id_user'])->get();
        $review = DB::table('review as r')
        ->join("tour_packages as tp","r.id_tour","tp.id_tour")
        ->select("r.*","tp.tour_name")
        ->where('r.id_user',$session['user']['id_user'])
        ->orderBy('r.id_review',"desc")->get();
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution",
            "user" => $profile[0],
            "review" => $review
        );
        return view('frontend.myAccount.review', $attr);
    }
}








