<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Settings\PageSetting;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tourTypes = Tour::all()->groupBy('type');

        $pageSetting = app(PageSetting::class);

        return view('website.tours',[
            'tourTypes' => $tourTypes,
            'pageSetting' => $pageSetting,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $tour = Tour::findOrFail($id);
        return view('website.id_pages.show_tour', compact('tour'));
    }
}
