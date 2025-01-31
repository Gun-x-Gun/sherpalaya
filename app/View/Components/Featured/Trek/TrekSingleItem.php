<?php

namespace App\View\Components\Featured\Trek;

use App\Models\Trek;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrekSingleItem extends Component
{
    public $treks;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->treks = Trek::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            'components.featured.trek.trek-single-item',
            [
                'treks' => $this->treks
            ]
        );
    }
}
