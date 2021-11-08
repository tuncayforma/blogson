<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.pages.homepage');
    }
    public function about(){
        return view('front.pages.about');
    }
    public function contact(){
        return view('front.pages.contact');
    }
}
