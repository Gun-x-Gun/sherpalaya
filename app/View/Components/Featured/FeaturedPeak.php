<?php

namespace App\View\Components\Featured;

use App\Models\Peak;
use App\Settings\LandingPageSetting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedPeak extends Component
{
    public $peaks;
    public LandingPageSetting $landingPageSetting;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->peaks = Peak::all();
        $this->landingPageSetting = app(LandingPageSetting::class);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured.featured-peak', [
            'peaks' => $this->peaks,
        ]);
    }
}
