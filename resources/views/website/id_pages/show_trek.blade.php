{{-- <x-website-layout>

    <div class="card--rounded-none image-full h-[80vh] bg-blue-100/50">
        <figure class="h-[80vh] w-full">
            <img src="{{ asset('photos/DSCF2513.JPG') }}" alt="Trekking background image"
                class="h-[80vh] w-full object-cover" />
        </figure>
        <div class="card-body relative ">
            <div
                class="absolute 2xl:bottom-52 2xl:left-44  bottom-40 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                <div class=" max-w-[92%] 2xl:max-w-[70%]">

                    <h2 class="card-title mb-2.5  text-white text-xl md:text-6xl uppercase font-bold">Explore Treks With
                    </h2>
                    <h5 class="card-title mb-2.5 text-primary text-3xl md:text-7xl uppercase font-extrabold ">
                        Sherpalaya
                    </h5>
                    <p class="mb-4 2xl:text-xl text-white font-bold backdrop-blur-sm">A high-quality smartphone with the
                        latest
                        features for a premium user experience.</p>
                </div>
            </div>
        </div>
    </div>
</x-website-layout> --}}
<x-website-layout>
    {{-- top section --}}
    <div class="bg-blue-100/50">
        <div class="h-28 "></div>
        <div class="2xl:mx-44 mx-4 text-left">
            <h1
                class="text-2xl lg:text-5xl  font-light  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty">
                {{ $trek->title }}
            </h1>
            <p
                class="text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light ">
                {{ $trek->description }} </p>
        </div>
        <div class="h-12 "></div>

    </div>

    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1" class="">
            <div id="scrollspy-scrollable-parent-1" class="">

                {{-- <div class="card--rounded-none image-full h-[90vh] ">
                    <figure class="h-full w-full scale-100">
                        <img src="{{ $trek->coverImage->url ?? asset('photos/DSCF2600.JPG') }}"
                            alt="{{ $trek->title }} Cover Image" class="h-full w-full object-cover" />
                    </figure>
                    <div class="card-body relative">
                        <div
                            class="absolute 2xl:bottom-24 2xl:left-44  bottom-20 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                            <h2
                                class="kbd text-white lg:text-8xl text-3xl tracking-tight font-bold rounded-none border-none shadow-none px-0">
                                {{ $trek->title }}
                            </h2>
                            <div class="bg-transparent backdrop-blur-md">
                                <div class="lg:grid lg:grid-cols-3 grid grid-cols-2 gap-5  md:text-xl">
                                    <div class=" sm:px-0 gap-0 flex flex-row  items-center">
                                        <div class="">
                                            <span
                                                class="icon-[solar--calendar-outline] lg:size-12 size-8 text-accent"></span>
                                        </div>
                                        <div class="flex flex-col pl-2 justify-center items-start">
                                            <span class="text-primary font-bold"> Duration:</span>
                                            <span class="text-primary-soft"> {{ $trek->duration . ' days' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" sm:px-0 gap-0 flex flex-row  items-center">
                                        <div class="">
                                            <span
                                                class="icon-[solar--notebook-broken] lg:size-12 size-8 text-accent"></span>
                                        </div>
                                        <div class="flex flex-col pl-2 justify-center items-start">
                                            <span class="text-primary font-bold"> Grade:</span>
                                            <span class="text-primary-soft"> {{ $trek->grade }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" sm:px-0 gap-0 flex flex-row  items-center">
                                        <div class="">
                                            <span
                                                class="icon-[solar--calendar-search-linear] lg:size-12 size-8 text-accent"></span>
                                        </div>
                                        <div class="justify-center flex flex-col pl-2 items-start">
                                            <span class="text-primary font-bold"> Best Time:</span>
                                            <span class="text-primary-soft"> {{ $trek->best_time_for_trek }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" sm:px-0 gap-0 flex flex-row items-center">
                                        <div class="">
                                            <span
                                                class="icon-[solar--alt-arrow-up-bold] lg:size-12 size-8 text-accent"></span>
                                        </div>
                                        <div class="justify-center flex flex-col pl-2 items-start">
                                            <span class="text-primary font-bold"> Highest Altitude :</span>
                                            <span class="text-primary-soft"> {{ $trek->highest_altitude . ' m' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" sm:px-0 gap-0 flex flex-row items-center">
                                        <div class="">
                                            <span
                                                class="icon-[solar--alt-arrow-up-bold] lg:size-12 size-8 text-accent"></span>
                                        </div>
                                        <div class="justify-center flex flex-col pl-2 items-start">
                                            <span class="text-primary font-bold"> Highest Altitude :</span>
                                            <span class="text-primary-soft"> {{ $trek->highest_altitude . ' m' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" sm:px-0 gap-0 flex flex-row items-center">
                                        <div class="">
                                            <span
                                                class="icon-[solar--alt-arrow-up-bold] lg:size-12 size-8 text-accent"></span>
                                        </div>
                                        <div class="justify-center flex flex-col pl-2 items-start">
                                            <span class="text-primary font-bold"> Highest Altitude :</span>
                                            <span class="text-primary-soft"> {{ $trek->highest_altitude . ' m' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}



                {{-- info-section end --}}

                {{-- <div class="bg-slate-500 ">
                <div class="lg:grid lg:grid-cols-2 gap-2 lg:max-w-[77%] 2xl:mx-44 md:text-xl">
                    <div
                        class="card sm:max-w-full rounded-none  bg-transparent shadow-none border-none items-center  lg:items-start ">
                        <ul class="divide-base-content/25 divide-y mt-2">
                            <div class="flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                </svg>
                                <li class="p-3 text-white">+977 9800123467</li>
                            </div>
                            <div class="flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10  text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <li class="p-3 text-white">Sherpalaya@mail.com</li>
                            </div>
                        </ul>
                    </div>
                    <div class="card sm:max-w-full rounded-none bg-transparent shadow-none border-none w-full ">
                        <div class="flex flex-row items-center mt-2  md:mx-0 mx-4">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <p>Duration :</p>
                            </div>
                            <p class="text-white font-medium ml-auto text-right">{{ $trek->duration . ' days' }}</p>
                        </div>
                        <div class="flex flex-row items-center mt-2 md:mx-0 mx-4">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                </svg>
                                <p>Highest Altitude :</p>
                            </div>
                            <p class="text-white font-medium ml-auto text-right">{{ $trek->highest_altitude . ' m' }}
                            </p>
                        </div>
                        <div class="flex flex-row items-center mt-2 md:mx-0 mx-4">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                </svg>

                                <p>Difficulty :</p>
                            </div>
                            <p class="text-white font-medium ml-auto text-right">{{ $trek->trek_difficulty->value }}</p>
                        </div>
                        <div class="flex flex-row items-center my-2 md:mx-0 mx-4">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                </svg>
                                <p>Grade :</p>
                            </div>
                            <p class="text-white font-medium ml-auto text-right">{{ $trek->grade }}</p>
                        </div>
                    </div> --}}


                {{-- <div class="card sm:max-w-full rounded-none mt-2 items-center md:px-0 md:items-end bg-transparent shadow-none border-none px-4"
                dir="ltr">
                <div class="flex flex-row items-center justify-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-10 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="text-2xl">Destinations</p>
                </div>
                <ul class="divide-base-content/25 divide-y my-2  text-white">
                    @foreach ($trek->destinations as $destination)
                        <li class="text-center md:text-left">{{ $destination->name }} </li>
                    @endforeach
                </ul>
            </div> --}}



                <div class="card--rounded-none image-full  bg-blue-100/50 h-[80vh]">
                    <figure class="h-[80vh] w-full">
                        <img src="{{ asset('photos/DSCF2513.JPG') }}" alt="Trekking background image"
                            class="h-[80vh] w-full object-cover" />
                    </figure>
                    <div class="card-body relative">
                        <div
                            class="absolute 2xl:bottom-52 2xl:left-44  bottom-40 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                            <div class=" max-w-[92%] 2xl:max-w-[70%]">

                                <h2 class="card-title mb-2.5  text-white text-xl md:text-6xl uppercase font-bold">
                                    Explore Treks With
                                </h2>
                                <h5
                                    class="card-title mb-2.5 text-primary text-3xl md:text-7xl uppercase font-extrabold ">
                                    Sherpalaya
                                </h5>
                                <p class="mb-4 2xl:text-xl text-white font-bold backdrop-blur-sm">A high-quality
                                    trek experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- tabs --}}
                {{-- scrollspy --}}
                <div class="bg-white sticky top-15  z-10 mt-0">
                    <nav id="dropdown-navbar-collapse" data-scrollspy="#scrollspy-1"
                        class="tabs tabs-bordered horizontal-scrollbar  2xl:mx-44 mx-4" aria-label="Scrollspy navbar"
                        role="tablist" aria-orientation="horizontal">
                        {{-- <button href="#description" type="button"
                        class="tab active-tab:tab-active active scrollspy-active:text-bg-soft-primary "
                        id="tabs-scroll-item-1" data-tab="#tabs-scroll-1" aria-controls="#tabs-scroll-1" role="tab"
                        aria-selected="true">
                        <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                            <span class="icon-[tdesign--assignment-filled] size-5"></span>
                            Description
                        </div>
                    </button> --}}
                        <button href="#key_highlights" type="button"
                            class="tab active-tab:tab-active scrollspy-active:text-bg-soft-primary "
                            id="tabs-scroll-item-5" data-tab="#tabs-scroll-5" aria-controls="#tabs-scroll-5"
                            role="tab" aria-selected="false">
                            <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                                <span class="icon-[eva--bulb-outline] size-5"></span>
                                Key Highlights
                            </div>
                        </button>
                        <button href="#itineraries" type="button"
                            class="tab active-tab:tab-active scrollspy-active:text-bg-soft-primary "
                            id="tabs-scroll-item-4" data-tab="#tabs-scroll-4" aria-controls="#tabs-scroll-4"
                            role="tab" aria-selected="false">
                            <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                                <span class="icon-[eva--calendar-fill] size-5"></span>
                                Itinerary
                            </div>
                        </button>
                        <button href="#costs_include" type="button"
                            class="tab active-tab:tab-active scrollspy-active:text-bg-soft-primary"
                            id="tabs-scroll-item-2" data-tab="#tabs-scroll-2" aria-controls="#tabs-scroll-2"
                            role="tab" aria-selected="false">
                            <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                                <span class="icon-[eva--done-all-fill] size-5"></span>
                                Cost Include
                            </div>
                        </button>
                        <button href="#costs_exclude" type="button"
                            class="tab active-tab:tab-active scrollspy-active:text-bg-soft-primary"
                            id="tabs-scroll-item-3" data-tab="#tabs-scroll-3" aria-controls="#tabs-scroll-3"
                            role="tab" aria-selected="false">
                            <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                                <span class="icon-[eva--alert-circle-fill] size-5"></span> Cost Exclude
                            </div>
                        </button>
                        <button href="#essential_tips" type="button"
                            class="tab active-tab:tab-active scrollspy-active:text-bg-soft-primary "
                            id="tabs-scroll-item-6" data-tab="#tabs-scroll-6" aria-controls="#tabs-scroll-6"
                            role="tab" aria-selected="false">
                            <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                                <span class="icon-[eva--info-fill] size-5"></span>
                                Essential Tips
                            </div>
                        </button>
                        <button href="#destination" type="button"
                            class="tab active-tab:tab-active scrollspy-active:text-bg-soft-primary "
                            id="tabs-scroll-item-7" data-tab="#tabs-scroll-7" aria-controls="#tabs-scroll-7"
                            role="tab" aria-selected="false">
                            <div class="gap-1 lg:gap-3.5 text-sm flex text-nowrap">
                                <span class="icon-[tdesign--activity-filled] size-5"></span>
                                Destinations
                            </div>
                        </button>
                    </nav>
                </div>

                {{-- scrollspy body --}}
                <div class="mx-4  2xl:mx-44 gap-2 max-w-full bg-gray-100/30">



                    {{-- key_highlights --}}
                    <div id="key_highlights" class="card 2xl:max-w-full rounded-none bg-blue-100/10 ">
                        <div class="card-header flex gap-4 ">
                            <span class="icon-[eva--bulb-outline] size-8 text-primary"></span>
                            <h5 class="card-title text-accent uppercase font-extralight">Key Highlights
                            </h5>
                        </div>
                        <div class="card-body ">
                            <ul class="space-y-3 xs:text-sm md:text-lg list-inside list-disc">
                                @foreach ($trek->key_highlights as $highlight)
                                    <li
                                        class="flex items-center space-x-3 rtl:space-x-reverse xl:max-w-[50%] text-justify">
                                        {{-- <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span> --}}
                                        <span class="text-slate-700 font-light text-md first-line:font-bold">
                                            {{ $highlight }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    {{-- itineraries --}}
                    <div id="itineraries" class="card 2xl:max-w-full   rounded-none bg-transparent">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Itinerary</h5>
                        </div>
                        <div class="card-body ">
                            @foreach ($trek->itineraries as $itinerary)
                                <ul class="timeline timeline-snap-icon timeline-compact timeline-vertical w-full">
                                    <span class="text-xl text-black">{{ $itinerary->title }}</span>
                                    @foreach ($itinerary->itineraryDetails as $detail)
                                        <!-- timeline item 1-->
                                        <li>
                                            <div class="timeline-middle">
                                                <span class="badge badge-primary size-4.5 rounded-full p-0">
                                                    <span
                                                        class="icon-[tabler--check] text-primary-content size-3.5"></span>
                                                </span>
                                            </div>
                                            <div class="timeline-end ms-2 m-3 w-full rounded-lg ">
                                                <div class="text-primary pt-0.5 mb-3 font-medium">
                                                    {{ $detail->type }}
                                                </div>
                                                <p class="mb-2 text-black">{{ $detail->description }}</p>
                                            </div>
                                            <hr class="bg-transparent" />
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </div>

                    {{-- description --}}
                    {{-- <div id="description" class="card 2xl:max-w-full   rounded-none bg-transparent">   
                    </div> --}}

                    {{-- cost include --}}
                    <div id="costs_include" class="card 2xl:max-w-full   rounded-none bg-transparent">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Cost Include</h5>
                        </div>
                        <div class="card-body ">
                            <ul class="space-y-3 text-sm">
                                @foreach ($trek->costs_include as $cost_include)
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-black"> {{ $cost_include . ':' }} </span>
                                        <p class="text-secondary">shfsajkfsdf</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    {{-- cost exclude --}}
                    <div id="costs_exclude" class="card 2xl:max-w-full   rounded-none bg-transparent">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Cost Exclude</h5>
                        </div>
                        <div class="card-body ">
                            <ul class="space-y-3 text-sm">
                                @foreach ($trek->costs_exclude as $cost_exclude)
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-black"> {{ $cost_exclude . ':' }} </span>
                                        <p class="text-secondary">shfsajkfsdf</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    {{-- essential_tips --}}
                    <div id="essential_tips" class="card 2xl:max-w-full   rounded-none bg-transparent">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Essential Tips</h5>
                        </div>
                        <div class="card-body ">
                            <ul class="space-y-3 text-sm">
                                @foreach ($trek->essential_tips as $tip)
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-black"> {{ $tip . ':' }} </span>
                                        <p class="text-secondary">shfsajkfsdf</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    {{-- kdkjf --}}
                    <div id="destination" class="card 2xl:max-w-full   rounded-none bg-transparent">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Destinations</h5>
                        </div>
                        <div class="card-body ">
                            <ul class="space-y-3 text-sm">
                                @foreach ($trek->destinations as $destination)
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <p class="text-black text-wrap overflow-hidden"> {{ $destination . ':' }} </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="h-[50%]"></div>



                    {{-- carousel  --}}
                    {{-- <div class=" ">
                    <div class="card-header  sticky top-10">
                        <h5 class="card-title text-primary">Images</h5>
                    </div>
                    <div id="snap"
                        data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "lg": 1.5 }, "isCentered": true, "isSnap": true }'
                        class="hidden lg:flex 2xl:sticky w-full max-w-sm rounded-md  border-2 sticky top-24">

                        <div
                            class="carousel h-80 flex horizontal-scrollbar snap-x snap-mandatory overflow-x-auto rounded-md">

                            <div class="carousel-body h-full gap-2 opacity-0 transition-opacity duration-500  ">
                                <!-- Slide 1 -->

                                @foreach ($trek->images as $media)
                                    <div class="carousel-slide snap-center">
                                        <div
                                            class="card--rounded-md image-full h-96 w-full relative flex items-center justify-center card-side group hover:shadow border-2">
                                            <figure class="h-full w-full ">
                                                <img src="{{ $media->url ?? asset('photos/DSCF2600.JPG') }}"
                                                    alt="{{ $trek->title }} Cover Image"
                                                    class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover"
                                                    loading="lazy" />
                                            </figure>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Previous Slide -->
                        <button type="button" class="carousel-prev">
                            <span class="size-9.5 bg-transparent flex items-center justify-center rounded-full shadow">
                                <span
                                    class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180 text-white"></span>
                            </span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <!-- Next Slide -->
                        <button type="button" class="carousel-next">
                            <span class="sr-only">Next</span>
                            <span class="size-9.5 bg-transparent flex items-center justify-center rounded-full shadow">
                                <span
                                    class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180 text-white"></span>
                            </span>
                        </button>
                    </div>
                </div> --}}
                </div>
                {{-- scrollspy-body -end --}}
            </div>
        </div>
    </div>

</x-website-layout>
