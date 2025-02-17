<?php

namespace App\View\Components;

use App\Settings\LandingPageSetting;
use Awcodes\Curator\Models\Media;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class HomePageAnimation extends Component
{
    public LandingPageSetting $landingPageSetting;
    public Collection $animationSections;
    public array $animationMediaUrls = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $landingPageSetting = $this->landingPageSetting = app(LandingPageSetting::class);

        $this->animationSections = collect($this->landingPageSetting->animation_sections ?? []);

        $mediaIds = collect([])
            ->merge($this->animationSections->pluck('image_id'))
            ->merge($this->animationSections->pluck('icon_id'))
            ->push($landingPageSetting->animation_button_icon_id)
            ->toArray();

        $this->animationMediaUrls = Media::whereIn('id', $mediaIds)
            ->get()
            ->pluck('url', 'id')
            ->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-page-animation');
    }
}
