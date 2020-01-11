<?php

namespace App\Http\Controllers\backend\transaction\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Payment_models;

class Payment extends Controller
{
    function index()
    {
        $pymnt = DB::table('payment')
        ->join('bookings','bookings.id_booking','payment.id_booking')
        ->select('payment.id_payment','bookings.identity_card','payment.nominal','bookings.price','payment.payment_date','payment.attachment')
        ->orderBy('id_payment', 'desc')
        ->get();
        return view('backend.transaction.payment.list-payment' , ['payment' => $pymnt]);
    }
    public function detail($id)
    {
        $pymnt = DB::table('payment as p')
        ->join("bookings as b","p.id_booking","b.id_booking")
        ->join("users as u","b.id_user","u.id_user")
        ->join('tour_packages as tp','tp.id_tour','b.id_tour')
        ->join('tour_durations as d', 'tp.id_duration','d.id_duration')
        ->join('tour_type as ty',"tp.id_type","ty.id_type")
        ->select('p.id_payment','b.id_booking','tp.tour_name','b.booking_date','b.travel_date','b.pax','b.price','d.night','d.day','b.status','b.identity_card',"ty.type_name","u.email","u.firstname",'u.lastname','b.status','p.attachment')
        ->where('p.id_payment',$id)
        ->get();

        return view('backend.transaction.payment.detail-payment' , ['payment' => $pymnt[0]]);
    }

    public function status($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = DB::table('payment as p')
        ->join("bookings as b","p.id_booking","b.id_booking")
        ->select('p.id_booking',"b.status")->where('p.id_payment',$id)->get();
        
        if($_GET['status']==0){
            $status = $data[0]->status=='11' ? "0" : "1";
            $status2 = $data[0]->status;
        }
        else{
            $status = $data[0]->status=='11' ? "1" : "2";
            $status2 = $status;
        }
        DB::table('bookings')->where('id_booking',$data[0]->id_booking)->update(["status" => $status]);
        $arr = array(
            "id_payment" => $id,
            "status" => $status2,
            "view" => "0",
            "datetime" => date("Y-m-d H:i:s")
        );
  
        DB::table('notif_user')->insert($arr);

        return redirect('/admin/transaction/payment/list-payment');
    }
}
