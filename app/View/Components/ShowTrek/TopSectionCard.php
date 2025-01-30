<?php

namespace App\View\Components\ShowTrek;

use App\Models\Trek;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopSectionCard extends Component
{
    public Trek $trek;
    /**
     * Create a new component instance.
     */
    public function __construct(Trek $trek)
    {
        $this->trek = $trek;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-trek.top-section-card');
    }
}
