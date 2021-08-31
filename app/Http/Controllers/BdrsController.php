<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdrsController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }



    public function aplStatus(){
        return view('front-end.status.status',['message'=>'']);
    }
    public function bInfo(){
        return view('front-end.information.information');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }
    public function about(){
        return view('front-end.about.about');
    }
}
