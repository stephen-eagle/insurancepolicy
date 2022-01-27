<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Booking;
use Cookie;

class AdminController extends Controller
{
    //login
    function login(){
        return view('pages.login');
    }
    // function layout2(){
    //     return view('pages.layout2');
    // }

    //check_login
    function check_login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $admin=Admin::where(['email'=>$request->email,'password'=>sha1($request->password)])->count();
        if($admin>0){
            $adminData=Admin::where(['email'=>$request->email,'password'=>sha1($request->password)])->get();
            session(['adminData'=>$adminData]);

                if($request->has('rememberme')){
                    Cookie::queue('adminuser',$request->email,1440);
                    Cookie::queue('adminpwd',$request->password,1440);
                }

            return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg','Invalid Email/Password');
        }
    }

    //Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }

    function dashboard(){
        $bookings=Booking::selectRaw('count(id) as total_bookings,checkin_date')->groupBy('checkin_date')->get();
        $labels=[];
        $data=[];
        foreach($bookings as $booking){
            $labels[]=$booking['checkin_date'];
            $data[]=$booking['total_bookings'];
        }

        // End

        // echo '<pre>';
        // print_r($rtbookings);
        return view('pages.dashboard',['labels'=>$labels,'data'=>$data]);
    }
}
