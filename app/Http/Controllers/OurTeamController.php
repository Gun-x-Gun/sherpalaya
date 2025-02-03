<?php

namespace App\Http\Controllers;

use App\Settings\PageSetting;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $pageSetting = app(PageSetting::class);
        // $expeditionsRegion = Region::with([
        //     'expeditions'
        // ])->get();

        return view('website.company.our_team', [
            'pageSetting' => $pageSetting,
            // 'expeditionsRegion' => $expeditionsRegion
        ]);
    }


    public function show(Request $request, string $id)
    {
        // $expedition = OurTeam::findOrFail($id);
        return view('website.id_pages.show_team_member', compact('expedition'));
    }
}
