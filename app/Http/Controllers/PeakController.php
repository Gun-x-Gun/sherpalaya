<?php

namespace App\Http\Controllers;

use App\Models\Peak;
use Illuminate\Http\Request;

class PeakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.peaks');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $peak = Peak::findOrFail($id);
        return view('website.id_pages.show_peak', compact('peak'));
    }
}
