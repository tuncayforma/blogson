<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\SiteConfig;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct(){
        view()->share('config',SiteConfig::find(1));
    }
    public function index(){
        $articles = Article::where('status',1)->get();
        return view('front.pages.homepage',compact('articles'));
    }
    public function about(){
        return view('front.pages.about');
    }
    public function contact(){
        return view('front.pages.contact');
    }
    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['email','required'],
            'phone' => ['required','max:11','min:11'],
            'message' => ['required','min:5'],
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tel_no = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success','Mesajınız iletildi');
    }
    public function single($slug){
        $article = Article::whereSlug($slug)->first();
        return view('front.pages.single',compact('article'));
    }
}
