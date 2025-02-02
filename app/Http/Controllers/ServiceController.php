<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use stdClass;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::with([
            'destinations.region',
            'images',
        ])->get()
            ->map(function (Service $service) {
                return
                    (object) [
                        'service' => $service,
                        'regions' => $service->destinations
                            ->pluck('region')
                            ->pluck('name')
                            ->unique()
                            ->toArray()
                    ];
            });

        return view('website.company.our_services', [
            'services' => $services,
        ]);
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
