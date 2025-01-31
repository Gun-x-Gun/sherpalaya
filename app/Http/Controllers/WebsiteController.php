<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(Request $request){
        return view('website.home');
    }

    public function contactUs(Request $request){
        return view('website.contact_us');
    }

    public function aboutUs(Request $request){
        return view('website.company.about_us');
    }

    public function services(Request $request){
        return view('website.company.our_services');
    }

    public function whySherpalaya(Request $request){
        return view('website.company.why_sherpalaya');
    }
}
