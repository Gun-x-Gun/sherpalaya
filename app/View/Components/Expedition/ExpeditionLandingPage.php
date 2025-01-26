<?php

namespace App\View\Components\Expedition;

use App\Models\Expedition;
use App\Models\Region;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExpeditionLandingPage extends Component
{
    /**
     * Create a new component instance.
     */
    public $expeditions;
    public $expeditionsRegion;
    public function __construct()
    {
        //
        $this->expeditions = Expedition::all();
        $this->expeditionsRegion = Region::with([
            'expeditions'
        ])->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.expedition.expedition-landing-page',[
            'expeditions' => $this->expeditions,
            'expeditionsRegion' => $this->expeditionsRegion
        ]);
    }
}
