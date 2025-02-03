<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Faq;
use App\Settings\ContactUsSetting;
use App\Settings\PageSetting;
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
        $pageSetting = app(PageSetting::class);

        $faqs = Faq::all();

        return view('website.company.about_us',[
            'pageSetting' => $pageSetting,
            'faqs' => $faqs
        ]);
    }

    public function ourTeam(Request $request){
        return view('website.company.our_team');
    }

    public function whySherpalaya(Request $request){
        return view('website.company.why_sherpalaya');
    }
}
