<?php

namespace App\Http\Controllers;

use App\Models\OurSherpa;
use App\Settings\PageSetting;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $pageSetting = app(PageSetting::class);
        $ourSherpas = OurSherpa::with([
            'profilePicture',
            'awardsAndCertificates',
            'treks',
            'expeditions',
            'peaks',
            'tours'
        ])->get();

        return view('website.company.our_team', [
            'pageSetting' => $pageSetting,
            'ourSherpas' => $ourSherpas
        ]);
    }


    public function show(Request $request, string $id)
    {
        $sherpa = OurSherpa::findOrFail($id);
        return view('website.id_pages.show_team_member', compact('sherpa'));
    }
}
