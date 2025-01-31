<?php

namespace App\View\Components\Featured\Tour;

use App\Models\Tour;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TourMoreItem extends Component
{
    public $featuredTours;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->featuredTours = Tour::where('is_featured', true)->get(); // Fetch data
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            'components.featured.tour.tour-more-item',
            [
                'featuredTours' => $this->featuredTours
            ]
        );
    }
}
