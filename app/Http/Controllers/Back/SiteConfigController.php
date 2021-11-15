<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\SiteConfig;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function index(){
        $site_config = SiteConfig::find(1);
        return view('back.pages.siteconfig',compact('site_config'));
    }
    public function update(Request $request){
        $request->validate([
            'tel_no' => ['max:11','min:11','required'],
            'facebook' => 'required',
            'twitter' => 'required',
            'twitch' => 'required',
            'about' => ['required','min:5'],
        ]);
        $config = SiteConfig::find(1);
        $config->tel_no = $request->tel_no;
        $config->facebook = $request->facebook;
        $config->twitter = $request->twitter;
        $config->twitch = $request->twitch;
        $config->about = $request->about;
        $config->save();
        return redirect()->back()->with('success','Site ayarları güncellendi');
    }
}
