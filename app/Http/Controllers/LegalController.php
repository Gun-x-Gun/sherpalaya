<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
  

    public function termsAndConditions(Request $request)
    {
        return view(
            'website.legal.term_and_condition'
        );
    }


    public function privacyPolicy(Request $request)
    {
        return view(
            'website.legal.privacy_policy'
        );
    }

    public function cookiePolicy(Request $request)
    {
        return view(
            'website.legal.cookie_policy'
        );
    }
}
