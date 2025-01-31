<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.tours');
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
