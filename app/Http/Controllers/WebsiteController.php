<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(Request $request){
        return view('website.home');
    }

    public function contactUs(Request $request){
        return view('website.contact_us');
    }

    public function contactUsSubmit(Request $request){
        $validatedData = $request->validate([
            'full_name' => [
                'required', 'string'
            ],
            'email' => [
                'required', 'string'
            ],
            'mobile_number' => [
                'nullable', 'sometimes'
            ],
            'message' => [
                'required', 'string'
            ],
        ]);

        ContactUs::create($validatedData);
        return view('website.contact_us', [
            'submitted' => true
        ]);
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
