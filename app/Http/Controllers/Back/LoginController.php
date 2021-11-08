<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('back.pages.login');
    }
    public function login(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect()->back()->with('error','Email veya şifre hatalı');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');
    }
}
