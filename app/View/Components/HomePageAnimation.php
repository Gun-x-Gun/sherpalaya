<?php

namespace App\View\Components;

use App\Settings\LandingPageSetting;
use Awcodes\Curator\Models\Media;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomePageAnimation extends Component
{
    public string $parallaxImageUrl;
    public string $parallaxAudioUrl;
    public string $parallaxAudioType;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $landingPageSettings = app(LandingPageSetting::class);

        $this->parallaxImageUrl = Media::find($landingPageSettings->parallax_image_id)?->url ?? asset('photos/banner.jpg');
        $this->parallaxAudioUrl = Media::find($landingPageSettings->parallax_sound_id)?->url ?? asset('audio/background-music.mp3');
        $this->parallaxAudioType = Media::find($landingPageSettings->parallax_sound_id)?->type ?? 'audio/mpeg';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-page-animation');
    }
}
