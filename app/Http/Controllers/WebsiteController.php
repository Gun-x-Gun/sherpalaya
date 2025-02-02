<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Settings\ContactUsSetting;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(Request $request){
        return view('website.home');
    }

    public function contactUs(Request $request, bool $contactUsSubmitted = false){
        $contactUsSetting = app(ContactUsSetting::class);
        return view('website.contact_us', [
            'contactUsSubmitted' => $contactUsSubmitted,
            'contactUsSetting' => $contactUsSetting,
        ]);
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
        return $this->contactUs(
            $request,
            true
        );
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
