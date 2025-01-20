<?php

namespace App\View\Components\Trek;

use App\Models\Trek;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrekLandingPage extends Component
{
    public $treks;
    public $users;

    /**
     * Create a new component instance.
     */        //

    public function __construct()
    {
        // Fetch all treks or apply filters as needed
        $this->treks = Trek::all();
        $this->users = User::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view(
            'components.trek.trek-landing-page',
            [
                'treks' => $this->treks,
                'users' => $this->users
            ]
        );
    }
}
