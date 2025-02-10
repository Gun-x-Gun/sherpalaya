<x-website-layout>
    <div class="bg-blue-100/10 font-oswald">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[60vh]">
            <figure class="h-[60vh] w-full">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Trekking background image"
                    class="h-[60vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body">
                <div
                    class="absolute bottom-1/2 xl:left-32  left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="" data-aos="fade-down" data-aos-duration="1200">
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Get to know
                        </h5>
                        <h5 class="card-title mb-8 text-white text-2xl md:text-4xl uppercase font-extrabold ">
                            Sherpalaya's Team
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <x-breadcrumb :breadcrumbs="[
            [
                'name' => 'Home',
                'url' => url('/home'),
            ],
            [
                'name' => 'Our Sherpas',
            ],
        ]" />

        <div class="h-4"></div>

        <div class="mx-4 xl:mx-32">
            <nav class="tabs rounded-btn w-fit space-x-1 overflow-x-auto p-1 rtl:space-x-reverse bg-transparent"
                aria-label="Tabs" role="tablist" aria-orientation="horizontal" data-aos="fade-down"
                data-aos-duration="1200">
                <button type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-warning active hover:bg-transparent font-normal  text-xl" id="tabs-large-item-1"
                    data-tab="#expedition" aria-controls="expedition" role="tab" aria-selected="true">
                    Team Expedition
                </button>
                <button type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-warning hover:bg-transparent font-normal text-xl" id="tabs-large-item-2" data-tab="#peak"
                    aria-controls="peak" role="tab" aria-selected="false">
                    Team Peak
                </button>
                <button type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-warning hover:bg-transparent font-normal text-xl" id="tabs-large-item-3" data-tab="#trek"
                    aria-controls="trek" role="tab" aria-selected="false">
                    Team Trek
                </button>
                <button type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-warning hover:bg-transparent font-normal text-xl" id="tabs-large-item-4" data-tab="#tour"
                    aria-controls="tour" role="tab" aria-selected="false">
                    Team Tour
                </button>
            </nav>
            <div class="h-8"></div>
            <div class="mt-3.5">
                <div id="expedition" role="tabpanel" aria-labelledby="tabs-large-item-1">
                    <div class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                        @foreach ($expedSherpas as $expedSherpa)
                            <a href="{{ route('show_team_member', $expedSherpa->id) }}">
                                <div class="card w-full h-full " data-aos="fade-down" data-aos-duration="1200">
                                    <img src="{{ $expedSherpa->profilePicture->url ?? asset('photos/P1030127.JPG') }}"
                                        alt="{{ $expedSherpa->title }} Cover Image" class="h-[20rem] object-cover " />
                                    <div class="card-body bg-blue-100/50 px-2 py-2 text-left">
                                        <h5
                                            class="card-title line-clamp-2 uppercase text-xl text-stone-700 font-normal tracking-tight font-oswald hover:text-warning hover:underline ">
                                            {{ $expedSherpa->name }}
                                        </h5>
                                        <h5
                                            class="card-title line-clamp-2 lowercase warning text-lg text-stone-900 font-light  ">
                                            {{ $expedSherpa->title }}
                                        </h5>

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div id="peak" class="hidden" role="tabpanel" aria-labelledby="tabs-large-item-2">
                    <div class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                        @foreach ($peakSherpas as $peakSherpa)
                            <a href="{{ route('show_team_member', $peakSherpa->id) }}">
                                <div class="card w-full h-full ">
                                    <img src="{{ $peakSherpa->profilePicture->url ?? asset('photos/P1030127.JPG') }}"
                                        alt="{{ $peakSherpa->title }} Cover Image" class="h-[20rem] object-cover " />
                                    <div class="card-body bg-blue-100 px-2 py-2 text-center">
                                        <h5
                                            class="card-title line-clamp-2 capitalize text-2xl text-primary font-normal tracking-tighter">
                                            {{ $peakSherpa->name }}
                                        </h5>
                                        <h5
                                            class="card-title line-clamp-2 capitalize text-sm text-slate-900 font-thin tracking-tighter">
                                            {{ $peakSherpa->title }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div id="trek" class="hidden" role="tabpanel" aria-labelledby="tabs-large-item-3">
                    <div class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                        @foreach ($trekSherpas as $trekSherpa)
                            <a href="{{ route('show_team_member', $trekSherpa->id) }}">
                                <div class="card w-full h-full ">
                                    <img src="{{ $trekSherpa->profilePicture->url ?? asset('photos/P1030127.JPG') }}"
                                        alt="{{ $trekSherpa->title }} Cover Image" class="h-[20rem] object-cover " />
                                    <div class="card-body bg-blue-100 px-2 py-2 text-center">
                                        <h5
                                            class="card-title line-clamp-2 capitalize text-2xl text-primary font-normal tracking-tighter">
                                            {{ $trekSherpa->name }}
                                        </h5>
                                        <h5
                                            class="card-title line-clamp-2 capitalize text-sm text-slate-900 font-thin tracking-tighter">
                                            {{ $trekSherpa->title }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div id="tour" class="hidden" role="tabpanel" aria-labelledby="tabs-large-item-3">
                    <div class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

                        @foreach ($tourSherpas as $tourSherpa)
                            <a href="{{ route('show_team_member', $tourSherpa->id) }}">
                                <div class="card w-full h-full ">
                                    <img src="{{ $tourSherpa->profilePicture->url ?? asset('photos/P1030127.JPG') }}"
                                        alt="{{ $tourSherpa->title }} Cover Image" class="h-[20rem] object-cover " />
                                    <div class="card-body bg-blue-100 px-2 py-2 text-center">
                                        <h5
                                            class="card-title line-clamp-2 capitalize text-2xl text-primary font-normal tracking-tighter">
                                            {{ $tourSherpa->name }}
                                        </h5>
                                        <h5
                                            class="card-title line-clamp-2 capitalize text-sm text-slate-900 font-thin tracking-tighter">
                                            {{ $tourSherpa->title }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="h-20"></div>
    </div>
</x-website-layout>
