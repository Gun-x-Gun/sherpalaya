<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('website.company.our_services');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $service = Service::with([
            'coverImage',
            'destinations',
            'images',
        ])
            ->where('id', $id)
            ->firstOrFail();
        return view('website.id_pages.show_service', compact('service'));
    }
}
