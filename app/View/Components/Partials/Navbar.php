<?php

namespace App\View\Components\Partials;

use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Region;
use App\Models\Tour;
use App\Models\Trek;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $navTours;
    public $navRegions;

    public function __construct(
        public ?string $query = null,
        public ?string $type = null,
    ) {
        $this->navRegions = Region::with([
            'treks',
            // 'peaks',
            'expeditions',
        ])->get();
        $this->navTours = Tour::all()->groupBy('type');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.navbar', [
            'navRegions' => $this->navRegions,
            'navTours' => $this->navTours,
        ]);
    }
}
