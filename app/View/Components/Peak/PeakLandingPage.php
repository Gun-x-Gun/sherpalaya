<?php

namespace App\View\Components\Peak;

use App\Models\Peak;
use App\Models\Region;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PeakLandingPage extends Component
{
    public $peaks;
    public $peaksRegion;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->peaks = Peak::all();
        $this->peaksRegion = Region::with([
            'peaks'
        ])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.peak.peak-landing-page', [
            'peaks' => $this->peaks,
            'peaksRegion' => $this->peaksRegion
        ]);
    }
}
