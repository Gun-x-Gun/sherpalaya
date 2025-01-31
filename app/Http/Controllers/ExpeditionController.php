<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use Illuminate\Http\Request;

class ExpeditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.expeditions');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $expedition = Expedition::findOrFail($id);
        return view('website.id_pages.show_expedition', compact('expedition'));
    }
}
