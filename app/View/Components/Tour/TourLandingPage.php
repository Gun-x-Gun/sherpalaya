<?php

namespace App\View\Components\Tour;

use App\Models\Region;
use App\Models\Tour;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TourLandingPage extends Component
{
    public $tours;
    public $tourTypes;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //

        $this->tours = Tour::all();
        $this->tourTypes = Tour::all()->groupBy('type');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tour.tour-landing-page',[
            'tours'=> $this->tours,
            'tourTypes'=> $this->tourTypes,
        ]);
    }
}
