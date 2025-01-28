<?php

namespace App\View\Components\Company;

use App\Models\Destination;
use App\Models\Region;
use App\Models\Service as ModelsService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Service extends Component
{
    public $services;
    public $servicesDestination;
    public $servicesRegion;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->services = ModelsService::all();
        $this->servicesDestination = Destination::with([
            'services',
        ])->get();
        $this->servicesRegion = Region::with([
            'destinations',
        ])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.company.service', [
            'services' => $this->services,
            'servicesDestination' => $this->servicesDestination,
            'servicesRegion' => $this->servicesRegion,
        ]);
    }
}
