<x-website-layout>


    {{-- top section --}}
    <div class="bg-blue-100/50">
        <div class="h-28 "></div>
        <div class="2xl:mx-44 mx-4 text-left">
            <h1
                class="text-2xl lg:text-5xl  font-light  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty">
                {{ $expedition->title }}
            </h1>
            <p
                class="text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light max-h-64 overflow-y-auto vertical-scrollbar">
                {{ $expedition->description }}
            </p>
        </div>
        <div class="h-12 "></div>
    </div>
    {{-- top section end --}}



    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1" class="">
            <div id="scrollspy-scrollable-parent-1" class="">
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

                {{-- stat --}}


                <div class="bg-blue-100/50">
                    <div class="2xl:mx-44 mx-4">
                        <div class="card  rounded-none  bg-transparent ">
                            <div class="card-body flex flex-col md:flex-row lg:flex-row gap-10 px-0">
                                @if (!empty($expedition->duration))
                                    <div class="flex flex-col">
                                        <h5
                                            class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                            Duration</h5>
                                        <div class="justify-start flex flex-row items-start  gap-2">
                                            <p class="text-slate-700 uppercase items-center font-extrabold text-xl">
                                                {{ $expedition->duration }} Days
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                @if (!empty($expedition->grade))
                                    <div class=" flex flex-col">
                                        <h5
                                            class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                            Grade</h5>
                                        <div class="justify-start  items-start  gap-2">
                                            <p class="text-slate-700 uppercase items-center font-extrabold text-xl ">
                                                {{ $expedition->grade }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                @if (!empty($expedition->starting_altitude))
                                    <div class=" flex flex-col">
                                        <h5
                                            class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                            Start Altitude</h5>
                                        <div class="justify-start  items-start  gap-2">
                                            <p class="text-slate-700 uppercase items-center font-extrabold text-xl">
                                                {{ $expedition->starting_altitude }}m
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                @if (!empty($expedition->highest_altitude))
                                    <div class=" flex flex-col">
                                        <h5
                                            class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                            Max Altitude</h5>
                                        <div class="justify-start  items-start  gap-2">
                                            <p class="text-slate-700 uppercase items-center font-extrabold text-xl">
                                                {{ $expedition->highest_altitude }}m
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                @if (!empty($expedition->expedition_difficulty))
                                    <div class=" flex flex-col">
                                        <h5
                                            class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                            Difficulty</h5>
                                        <div class="justify-start  items-start  gap-2">
                                            <p class="text-slate-700 uppercase items-center font-extrabold ">
                                                {{ $expedition->expedition_difficulty->value }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                @if (!empty($expedition->best_time_for_expedition))
                                    <div class=" flex flex-col">
                                        <h5
                                            class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                            Best Time</h5>
                                        <div class="justify-start  items-start  gap-2">
                                            <p class="text-slate-700 uppercase items-center font-extrabold text-wrap ">
                                                {{ $expedition->best_time_for_expedition }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>










                {{-- tabs --}}
                {{-- scrollspy --}}
                <div class="bg-white sticky top-0  z-10 mt-0 ">
                    <nav id="dropdown-navbar-collapse" data-scrollspy="#scrollspy-1"
                        class="tabs  horizontal-scrollbar  lg:gap-4 2xl:mx-44 mx-4" aria-label="Scrollspy navbar"
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

                <div class="bg-blue-100/10">

                    <div class=" mx-4 2xl:mx-44 gap-2 max-w-full ">

                        {{-- key_highlights --}}
                        @if (!empty($expedition->key_highlights))

                            <div id="key_highlights" class="card 2xl:max-w-full rounded-none bg-blue-100/10 ">
                                <div class="h-6">
                                </div>
                                <div class="card-header  px-2 pb-2">
                                    <h5 class="card-title text-primary uppercase font-extralight">Key Highlights
                                    </h5>
                                </div>
                                <div class="card-body justify-center items-start px-2 ">
                                    @foreach ($expedition->key_highlights as $highlight)
                                        <p class="my-4 first-line:uppercase  md:text-justify text-slate-700">
                                            {{ $highlight }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="h-6">
                                </div>
                            </div>
                        @endif

                        {{-- itineraries --}}
                        @if (!empty($expedition->itineraries))

                            <div id="itineraries" class="card 2xl:max-w-full rounded-none bg-blue-100/20">
                                <div class="h-6">

                                </div>
                                <div class="card-header px-2">
                                    <h5 class="card-title text-primary uppercase font-extralight">Itineraries</h5>
                                </div>
                                <div class="card-body mx-0 px-2">
                                    <div class="accordion">
                                        @foreach ($expedition->itineraries as $itinerary)
                                            <div class="accordion-item " id="itinerary-{{ $itinerary->id }}">
                                                @if (!empty($itinerary->title))
                                                    <button
                                                        class="accordion-toggle inline-flex items-center gap-x-4 text-start text-black font-medium  uppercase px-0"
                                                        aria-controls="itinerary-{{ $itinerary->id }}-collapse"
                                                        aria-expanded="false">
                                                        <div
                                                            class="card  flex flex-row bg-blue-100/90 m-0 p-2 text-[1rem]">
                                                            <span
                                                                class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                                                            {{ $itinerary->title }}
                                                        </div>
                                                    </button>
                                                    <div id="itinerary-{{ $itinerary->id }}-collapse"
                                                        class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="itinerary-{{ $itinerary->id }}"
                                                        role="region">
                                                        <div class=" ">
                                                            <div class="card  bg-blue-50 rounded-none mx-0 px-0">
                                                                <div class="card-body justify-center items-start px-0">
                                                                    @foreach ($itinerary->itineraryDetails as $detail)
                                                                        @php
                                                                            // Map icons to types
                                                                            $icons = [
                                                                                'flight' => 'icon-[tabler--plane]',
                                                                                'drive' => 'icon-[tabler--car]',
                                                                                'trek' => 'icon-[tabler--hiking]',
                                                                                'trek-hours' => 'icon-[tabler--clock]',
                                                                                'rest' => 'icon-[tabler--bed]',
                                                                                'helicopter' =>
                                                                                    'icon-[tabler--helicopter]',
                                                                                'accomodation' =>
                                                                                    'icon-[tabler--building]',
                                                                                'himalaya' => 'icon-[tabler--mountain]',
                                                                                'altitude' => 'icon-[tabler--arrow-up]',
                                                                                'others' => 'icon-[tabler--dots]',
                                                                            ];
                                                                            // Convert enum to its string value
                                                                            $type = $detail->type->value;
                                                                            $icon =
                                                                                $icons[$type] ??
                                                                                'icon-[tabler--help-circle]'; // Default icon if type is missing
                                                                        @endphp
                                                                        <h5
                                                                            class="card-title mb-2 text-lg md:text-xl text-primary uppercase font-thin ">
                                                                            <span
                                                                                class="{{ $icon }} accordion-item-active:rotate-90 size-5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                                                                            {{ $detail->type->getLabel() }}
                                                                        </h5>
                                                                        <p class="mb-4 ">
                                                                            {{ $detail->description }}</p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                @if (!empty($itinerary->destinations))
                                                                    <div
                                                                        class="card-body  bg-blue-100/20 w-full px-0 ">
                                                                        <h5
                                                                            class="card-title mb-2.5 text-accent uppercase font-thin text-lg md:text-2xl underline">
                                                                            Highlighted Places
                                                                        </h5>
                                                                        @foreach ($itinerary->destinations->take(2) as $destination)
                                                                            <div
                                                                                class="md:grid grid-cols-2 flex flex-col gap-1">
                                                                                @foreach ($destination->destinationImages as $destinationImage)
                                                                                    @if ($loop->index < 2)
                                                                                        <figure>
                                                                                            <img src="{{ $destinationImage->url }}"
                                                                                                alt="{{ $destination->title }} Cover Image"
                                                                                                class="h-80 w-full object-cover flex" />
                                                                                        </figure>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                            <h5
                                                                                class="card-title mt-2 text-primary uppercase font-thin text-lg md:text-xl">
                                                                                {{ $destination->name }}
                                                                            </h5>
                                                                            <p class="mb-4 text-gray-600 ">
                                                                                {{ $destination->description }}</p>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="h-6">

                                </div>
                            </div>
                        @endif


                        {{-- cost include --}}

                        @if (!empty($expedition->costs_include))

                            <div id="costs_include" class="card 2xl:max-w-full   rounded-none bg-blue-100/10">
                                <div class="h-6">

                                </div>
                                <div class="card-header p-2">
                                    <h5 class="card-title text-primary uppercase font-extralight">Cost Includes</h5>
                                </div>
                                <div class="card-body p-2 mt-4">
                                    <ul class="space-y-5 ">
                                        @foreach ($expedition->costs_include as $cost_include)
                                            <li class="flex items-center space-x-3 rtl:space-x-reverse  ">
                                                <span
                                                    class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                                    <span
                                                        class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                                </span>
                                                <p class="text-blue-800  md:text-justify text-preety">
                                                    {{ $cost_include }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="h-6">

                                </div>
                            </div>
                        @endif

                        @if (!empty($expedition->costs_exclude))

                            {{-- cost exclude --}}
                            <div id="costs_exclude" class="card 2xl:max-w-full  rounded-none bg-red-100/10">
                                <div class="h-6">

                                </div>
                                <div class="card-header p-2">
                                    <h5 class="card-title text-primary uppercase font-extralight">Cost Excludes</h5>
                                </div>
                                <div class="card-body p-2 mt-4">
                                    <ul class="space-y-5">
                                        @foreach ($expedition->costs_exclude as $cost_exclude)
                                            <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <span
                                                    class="bg-primary/20 text-slate-700 flex items-center justify-center rounded-full ">
                                                    <span
                                                        class="icon-[tabler--arrow-right] size-5 rtl:rotate-180"></span>
                                                </span>
                                                <p class="text-slate-700 md:text-justify text-preety ">
                                                    {{ $cost_exclude }} </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="h-6">

                                </div>
                            </div>
                        @endif

                        {{-- essential_tips --}}
                        @if (!empty($expedition->essential_tips))

                            <div id="essential_tips" class="card rounded-none text-justify bg-blue-100/40">
                                <div class="h-6">

                                </div>
                                <div class="card-header px-2 pb-2">
                                    <h5 class="card-title text-primary uppercase font-extralight">Essential Tips</h5>
                                </div>
                                <div class="card-body justify-center text-slate-700 items-start px-2 ">
                                    @foreach ($expedition->essential_tips as $tip)
                                        <p class="my-4 first-line:uppercase  md:text-justify">
                                            {{ $tip }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="h-6">

                                </div>
                            </div>
                        @endif

                        {{-- destinations --}}
                        @if (!empty($expedition->destinations))

                            <div id="destination" class="card 2xl:max-w-full rounded-none bg-blue-100/30">
                                <div class="h-6">

                                </div>
                                <div class="card-header p-2 pb-4">
                                    <h5 class="card-title text-primary uppercase font-extralight">Destinations</h5>
                                </div>

                                <div class="md:grid md:grid-cols-2 flex flex-col gap-4 p-2">
                                    @foreach ($expedition->destinations as $destination)
                                        <div class="card w-full">
                                            @if (!empty($destination->destinationImages) && $destination->destinationImages->isNotEmpty())
                                                <div>
                                                    <div id="info"
                                                        data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                                                        class="relative w-full">
                                                        <div class="carousel h-80 rounded-none rounded-t-md">
                                                            <div class="carousel-body h-full opacity-0">
                                                                @foreach ($destination->destinationImages as $destinationImage)
                                                                    <div class="carousel-slide">
                                                                        <div
                                                                            class="bg-base-200/50 flex h-full justify-center">
                                                                            <span class="self-start w-full">
                                                                                <figure>
                                                                                    <img src="{{ $destinationImage->url ?? asset('photos/P1030127.JPG') }}"
                                                                                        alt="{{ $destination->name }} Cover Image"
                                                                                        class="h-80 object-cover" />
                                                                                </figure>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <!-- Previous and Next buttons -->
                                                        <div
                                                            class="carousel-info absolute bottom-3 start-[90%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-4">
                                                            <span class="carousel-info-current me-1">0</span>
                                                            /
                                                            <span class="carousel-info-total ms-1">0</span>
                                                            <button type="button" class="carousel-prev">
                                                                <span
                                                                    class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                                                    <span
                                                                        class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                                                </span>
                                                                <span class="sr-only">Previous</span>
                                                            </button>
                                                            <button type="button" class="carousel-next">
                                                                <span class="sr-only">Next</span>
                                                                <span
                                                                    class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                                                    <span
                                                                        class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="card-body px-2 pt-2 bg-blue-100/30">
                                                <h5
                                                    class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-bold">
                                                    {{ $destination->name }}
                                                </h5>
                                                <div class="justify-start flex flex-col items-start gap-2">
                                                    <p class="text-slate-700">
                                                        {{ $destination->description }}
                                                    </p>
                                                    <p class="text-slate-700 uppercase items-center font-extrabold">
                                                        {{ $destination->region->name }} Region
                                                    </p>
                                                    @if (!empty($destination->location['lat']) && !empty($destination->location['lng']))
                                                        <a href="https://maps.google.com/?q={{ $destination->location['lat'] }},{{ $destination->location['lng'] }}"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <p class="text-primary">
                                                                Location: {{ $destination->location['lat'] }},
                                                                {{ $destination->location['lng'] }}
                                                            </p>
                                                        </a>
                                                    @else
                                                        <p class="text-slate-500 italic">Location not available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="h-6">

                                </div>
                            </div>
                        @endif
                        <div class="h-96"></div>
                    </div>
                </div>
                {{-- scrollspy-body -end --}}
            </div>
        </div>
    </div>

</x-website-layout>
