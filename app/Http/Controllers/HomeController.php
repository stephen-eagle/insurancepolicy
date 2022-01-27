<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('home');
    }

    function home(){
        $roomTypes=RoomType::all();
        return View('pages.home',['roomTypes'=>$roomTypes]);
    }
     function welcome(){
        $roomTypes=RoomType::all();
        return View('welcome',['roomTypes'=>$roomTypes]);
    }
     function test(){
        return View('test');
    }
    function about(){
         return View('about');
     }
     function services(){
         return View('services');
     }

     function payment(){
         return View('payment');
     }
    
    

}
