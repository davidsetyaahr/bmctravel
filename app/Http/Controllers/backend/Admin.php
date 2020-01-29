<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Admins;
use Validator;

class Admin extends Controller
{

    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('backend.login');
        }
    }

    function login()
    {
        return view('backend.login');
    }


    public function loginPost(Request $request){


         $email = $request->email;
         $password = md5($request->password);

        $cek = Admins::where("email",$email)->where("password",$password)->get();
        if(empty($cek[0]->id_admin)){
            return redirect('admin')->with('alert','Password atau Email, Salah !');
        }
        else{
            $data["admin"] = array(
                'id_admin' => $cek[0]->id_admin,
                'firstname' => $cek[0]->firstname
            );
            $request->session()->put($data);
            return redirect('admin/dashboard');
        }

        // coba ke 2
        // $cek = Admins::where("email",$request->email)->get();
        // $json['succes'] = 'error';
        // $json['error'] = 'Sign in failed';
        // if(isset($cek[0]->email)){
        //     if(password_verify($request->password, $cek[0]->password)){
        //         $data['admin'] = array(
        //             'id_admin' => $cek[0]->id_admin,
        //             'email' => $cek[0]->email,
        //             'password' => $cek[0]->password
        //         );
        //         $request->session()->put($data);
        //         $json = array(
        //             "success" => "Sign in success.",
        //             "redirect" => url('admin')
        //         );
        //     }
        // }
        // return response()->json($json);
        // return redirect('admin/dashboard');


        // coba ke 3
        // $email = $request->email;
        // $password = md5($request->password);
        // $cek = Admins::where('email',$email)->first();
        // if($cek){ //untuk ngecek email tsb ada apa tidak
        //     if(Hash::check($password, $cek->password)){
        //         Session::put('firstname',$cek->firstname);
        //         Session::put('email',$cek->email);
        //         Session::put('login',TRUE);
        //         return redirect('admin/dashboard');
        //     }
        //     else{
        //         return redirect('admin')->with('alert','Password atau email salah!');
        //     }
        // }
        // else{
        //     return redirect('admin')->with('alert','Password atau email salah!');
        // }

        // coba ke 4
        // $email = $request->email;
        // $password = md5($request->password);

        // $cek = Admins::where('email',$email)->first();
        // if($cek){ //apakah email tersebut ada atau tidak
        //     if(Hash::check($password,$cek->password)){
        //         Session::put('email',$cek->email);
        //         Session::put('login',TRUE);
        //         return redirect('dashboard');
        //     }
        //     else{
        //         return redirect('admin')->with('alert','Password atau Email, Salah !');
        //     }
        // }
        // else{
        //     return redirect('admin')->with('alert','Password atau Email, Salah!');
        // }
    }

    function dashboard()
    {
        // if(!Session::get('loginPost')){
        //     return redirect('admin')->with('alert','login dulu woyyyy');
        // }
        // else{
        //     return view('admin.dashboard');
        // }
        $arr = array(
            "income" => DB::table('payment as p')
                        ->join('bookings as b','p.id_booking','b.id_booking')
                        ->where('b.status','2')
                        ->whereMonth('b.booking_date',date('m'))
                        ->sum('b.price'),
            "count" => DB::table('bookings')
                        ->select(array(DB::raw('count(id_booking) as ttl')))
                        ->where('status','2')
                        ->whereMonth('booking_date',date('m'))
                        ->get(),
            "package" => DB::table("tour_packages")
                        ->select(array(DB::raw('count(id_tour) as ttl')))
                        ->get(),
            "nearest" => DB::table('bookings as b')
                        ->join('tour_packages as tp',"b.id_tour","tp.id_tour")
                        ->join('tour_durations as td',"tp.id_duration",'td.id_duration')
                        ->join('users as u',"b.id_user",'u.id_user')
                        ->select("tp.tour_name","b.travel_date",'td.day','td.night','u.firstname','u.lastname')
                        ->where('b.travel_date','>=',date("Y-m-d"))
                        ->where('b.status','2')
                        ->get(),
                        "best" => DB::table('bookings as b')
                        ->join("tour_packages as tp","b.id_tour","tp.id_tour")
                        ->select(array('b.id_tour','tp.tour_name',DB::raw('count(b.id_booking) as ttl')))
                        ->groupBy("b.id_tour",'tp.tour_name')
                        ->orderBy("ttl","desc")
                        ->limit(1)
                        ->get(),
          "thebest" => DB::table('tour_packages as tp')
                        ->leftJoin("bookings as b","b.id_tour","tp.id_tour")
                        ->join('tour_durations as td',"tp.id_duration",'td.id_duration')
                        ->select(array('b.id_tour','tp.tour_name','td.day','td.night',DB::raw('count(b.id_booking) as ttl')))
                        ->groupBy("b.id_tour",'tp.tour_name','td.day','td.night')
                        ->orderBy("ttl","desc")
                        ->get(),

/*             "mostBook" => DB::table('tour_packages as tp')
                            ->leftJoin('bookings as b',"b.id_tour","tp.id_tour")
                            ->select(array(DB::raw('count(b.id_tour) as ttl')))
                            ->where('b.status','2')
                            ->orderBy('ttl','desc')
                            ->get()
 */        );
//        print_r($arr['mostBook']);
        return view('backend.index', $arr);
    }
    
    public function getnotif()
    {
        $countNotif = DB::table('notif_admin as na')
        ->select("na.status")
        ->where('na.view','0')
        ->get()->toArray();
        
        echo count($countNotif);
    }
    
    public function loopnotif()
    {
        $loopNotif = DB::table('notif_admin as na')
        ->join("payment as p","na.id_payment","p.id_payment")
        ->join("bookings as b","p.id_booking","b.id_booking")
        ->join("users as u","b.id_user","u.id_user")
        ->select("na.status","u.firstname","u.firstname",'u.lastname','na.id_payment')
        ->where('na.view','0')
        ->limit('5')
        ->get();

        
        return view('backend.notifications.loop-notif',['loopNotif' => $loopNotif]);
    }

    function logout(){
        Session::forget('admin');
        return redirect('admin')->with('alert','Kamu sudah logout');
    }
}
