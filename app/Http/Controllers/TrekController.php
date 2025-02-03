<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Trek;
use App\Settings\PageSetting;
use Illuminate\Http\Request;

class TrekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageSetting = app(PageSetting::class);

        $treksRegion = Region::with([
            'treks'
        ])->get();
        return view('website.trekking', [
            'treksRegion' => $treksRegion,
            'pageSetting' => $pageSetting,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $trek = Trek::with([
            'coverImage',
            'itineraries.destinations',
            'destinations.destinationImages',
            'images',
        ])
            ->where('id', $id)
            ->firstOrFail();
        return view('website.id_pages.show_trek', compact('trek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
