<x-website-layout>

    <script type="module">
        let {
            element
        } = HSCollapse.getInstance('#trek-description-collapse-button', true);

        shortTrekDescription = document.getElementById("short-trek-description");

        trekDescriptionButton.on('open', function(instance) {
            shortTrekDescription.classList.add("hidden");

        });
        trekDescriptionButton.on('hide', function(instance) {
            shortTrekDescription.classList.remove("hidden");
        });
    </script>


    {{-- top section --}}
    {{-- <div class="bg-blue-100/50">
        <div class="h-28 "></div>
        <div class="2xl:mx-44 mx-4 text-left">
            <h1
                class="text-2xl lg:text-5xl  font-light  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty"
            >
                {{ $trek->title }}
            </h1>
            <p
                class="text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light max-h-64 overflow-y-auto vertical-scrollbar">
                {{ $trek->description }}
            </p>
        </div>
        <div class="h-12 "></div>
    </div> --}}
    {{-- top section end --}}



    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1">
            <div id="scrollspy-scrollable-parent-1 overflow-x-hidden">
                <div class="card--rounded-none image-full  bg-blue-100/50 h-[100vh]">
                    <figure class="h-[100vh] w-full">
                        <img src="{{ $trek->coverImage->url }}" alt="Trekking background image"
                            class="h-[100vh] w-full object-cover" />
                    </figure>
                    <div class="card-body relative">

                        <div
                            class="absolute 2xl:bottom-52 2xl:left-44  bottom-40 left-4 max-w-full overflow-hidden border-none backdrop-blur-sm">

                            <h2
                                class="card-title mb-2.5 text-4xl md:tet-6xl  text-white  uppercase font-bold sticky top-0">
                                {{ $trek->title }}
                            </h2>
                            <div class=" max-w-[92%] 2xl:max-w-[70%] max-h-96 overflow-y-scroll">

                                <p class="mb-4 2xl:text-xl text-white font-bold glass">
                                <p class="inline text-base-content/80" id="short-trek-description">
                                    {{ Str::words($trek->description, 30) }}
                                </p>

                                <p id="trek-description-collapse-heading"
                                    class="inline collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="trek-description-collapse">
                                    {{ $trek->description }}
                                </p>

                                <button type="button" class="collapse-toggle link text-white inline-flex items-center"
                                    id="trek-description-collapse-button" aria-expanded="false"
                                    aria-controls="trek-description-collapse-heading"
                                    data-collapse="#trek-description-collapse-heading">
                                    <span class="collapse-open:hidden">Read more</span>
                                    <span class="collapse-open:block hidden">Read less</span>
                                    <span
                                        class="icon-[tabler--chevron-down] collapse-open:rotate-180 ms-2 size-4"></span>
                                </button>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- stat --}}
                <div class="w-full my-4">

                    <div class="2xl:mx-44 mx-4">

                        <div class="stats max-md:stats-vertical bg-blue-100/50 w-full">
                            <div class="stat">
                                <div class="stat-title">Duration</div>
                                <div class="stat-value">{{ $trek->duration ? $trek->duration . ' Days' : 'N/A' }}
                                </div>
                                <div class="stat-value">
                                    <span class="badge badge-outline badge-success">
                                        @if (!empty($trek->best_time_for_trek))
                                            Best Time: {{ $trek->best_time_for_trek }}
                                        @endif
                                    </span>
                                </div>


                                {{-- <div class="stat-actions">
                                    <button class="btn btn-sm btn-primary">Upgrade Plan</button>
                                </div> --}}
                            </div>

                            <div class="stat">
                                <div class="stat-title">Difficulty</div>
                                <div class="stat-value">
                                    @if ($trek->grade)
                                        <span class="badge badge-outline badge-primary">Grade:
                                            {{ $trek->grade }}</span>
                                    @endif
                                    @if ($trek->trek_difficulty)
                                        <span
                                            class="badge badge-outline badge-error">{{ $trek->trek_difficulty->getLabel() }}</span>
                                    @endif
                                </div>
                                {{-- <div class="stat-actions flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-soft">View Details</button>
                                    <button class="btn btn-sm btn-warning btn-soft">Change Payment Method</button>
                                </div> --}}
                            </div>

                            <div class="stat">
                                <div class="stat-title">Altitude</div>
                                <div class="stat-value">

                                    @if (!empty($trek->starting_altitude))
                                        <span class="badge badge-outline">
                                            Start: {{ $trek->starting_altitude }}
                                        </span>
                                    @endif

                                    @if (!empty($trek->highest_altitude))
                                        <span class="badge badge-outline">
                                            Highest: {{ $trek->highest_altitude }}
                                        </span>
                                    @endif
                                    </span>
                                </div>
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

                    <div class="mx-4 2xl:mx-44 gap-2 max-w-full ">
                        <div class="grid grid-cols-5 md:grid-cols-3 gap-2">

                            <div class="col-span-4 md:col-span-2 ">

                                {{-- key_highlights --}}
                                @if (!empty($trek->key_highlights))

                                    <div id="key_highlights" class="card 2xl:max-w-full rounded-none bg-blue-100/10 ">
                                        <div class="h-6">
                                        </div>
                                        <div class="card-header  px-2 pb-2">
                                            <h5 class="card-title text-primary uppercase font-extralight">Key
                                                Highlights
                                            </h5>
                                        </div>
                                        <div class="card-body justify-center items-start px-2 ">
                                            @foreach ($trek->key_highlights as $highlight)
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
                                @if (!empty($trek->itineraries))

                                    <div id="itineraries" class="card 2xl:max-w-full rounded-none bg-blue-100/20">
                                        <div class="h-6">

                                        </div>
                                        <div class="card-header px-2">
                                            <h5 class="card-title text-primary uppercase font-extralight">Itineraries
                                            </h5>
                                        </div>
                                        <div class="card-body mx-0 px-2">
                                            <div class="accordion">
                                                @foreach ($trek->itineraries as $itinerary)
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
                                                                    <div
                                                                        class="card  bg-blue-50 rounded-none mx-0 px-0">
                                                                        <div
                                                                            class="card-body justify-center items-start px-0">
                                                                            @foreach ($itinerary->itineraryDetails as $detail)
                                                                                @php
                                                                                    // Map icons to types
                                                                                    $icons = [
                                                                                        'flight' =>
                                                                                            'icon-[tabler--plane]',
                                                                                        'drive' => 'icon-[tabler--car]',
                                                                                        'trek' =>
                                                                                            'icon-[tabler--hiking]',
                                                                                        'trek-hours' =>
                                                                                            'icon-[tabler--clock]',
                                                                                        'rest' => 'icon-[tabler--bed]',
                                                                                        'helicopter' =>
                                                                                            'icon-[tabler--helicopter]',
                                                                                        'accomodation' =>
                                                                                            'icon-[tabler--building]',
                                                                                        'himalaya' =>
                                                                                            'icon-[tabler--mountain]',
                                                                                        'altitude' =>
                                                                                            'icon-[tabler--arrow-up]',
                                                                                        'others' =>
                                                                                            'icon-[tabler--dots]',
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
                                                                                        {{ $destination->description }}
                                                                                    </p>
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

                                @if (!empty($trek->costs_include))

                                    <div id="costs_include" class="card 2xl:max-w-full   rounded-none bg-blue-100/10">
                                        <div class="h-6">

                                        </div>
                                        <div class="card-header p-2">
                                            <h5 class="card-title text-primary uppercase font-extralight">Cost Includes
                                            </h5>
                                        </div>
                                        <div class="card-body p-2 mt-4">
                                            <ul class="space-y-5 ">
                                                @foreach ($trek->costs_include as $cost_include)
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

                                @if (!empty($trek->costs_exclude))

                                    {{-- cost exclude --}}
                                    <div id="costs_exclude" class="card 2xl:max-w-full  rounded-none bg-red-100/10">
                                        <div class="h-6">

                                        </div>
                                        <div class="card-header p-2">
                                            <h5 class="card-title text-primary uppercase font-extralight">Cost Excludes
                                            </h5>
                                        </div>
                                        <div class="card-body p-2 mt-4">
                                            <ul class="space-y-5">
                                                @foreach ($trek->costs_exclude as $cost_exclude)
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
                                @if (!empty($trek->essential_tips))

                                    <div id="essential_tips" class="card rounded-none text-justify bg-blue-100/40">
                                        <div class="h-6">

                                        </div>
                                        <div class="card-header px-2 pb-2">
                                            <h5 class="card-title text-primary uppercase font-extralight">Essential
                                                Tips
                                            </h5>
                                        </div>
                                        <div class="card-body justify-center text-slate-700 items-start px-2 ">
                                            @foreach ($trek->essential_tips as $tip)
                                                <p class="my-4 first-line:uppercase  md:text-justify">
                                                    {{ $tip }}
                                                </p>
                                            @endforeach
                                        </div>
                                        <div class="h-6">

                                        </div>
                                    </div>
                                @endif


                                <div class="h-96"></div>
                            </div>
                            <div class="">
                                <div class="h-16"></div>

                                <div class="hidden md:card sm:max-w-sm md:sticky md:top-20">
                                    <div class="card-body bg-blue-200">
                                        {{-- <p class="mb-4">Discover the features and benefits that our service offers.
                                            Enhance your experience with our user-friendly platform designed to meet all
                                            your needs.</p> --}}
                                        <div class="card-actions justify-center">
                                            <button class="btn btn-primary btn-wide uppercase">Book this trip</button>
                                            <button class="btn btn-info  btn-wide uppercase">Inquiry</button>
                                        </div>
                                    </div>

                                    {{-- destinations --}}
                                    @if (!empty($trek->destinations))
                                        <div id="destination"
                                            class="card 2xl:max-w-full rounded-none bg-blue-100/30 ">
                                            <div class="h-6">

                                            </div>
                                            <div class="card-header p-2 pb-4">
                                                <h5 class="card-title text-primary uppercase font-extralight">
                                                    Destinations
                                                </h5>
                                            </div>




                                            <div id="snap"
                                                data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "lg": 3 }, "isCentered": true, "isSnap": true }'
                                                class="relative w-full">
                                                <div
                                                    class="carousel h-80 flex vertical-scrollbar snap-x snap-mandatory overflow-x-auto">
                                                    <div class="carousel-body h-full gap-2 opacity-0">
                                                        <!-- Slide 1 -->
                                                        <div class="carousel-slide snap-center">
                                                            <div class="card sm:max-w-sm">
                                                                <figure><img
                                                                        src="https://cdn.flyonui.com/fy-assets/components/card/image-9.png"
                                                                        alt="Watch" /></figure>
                                                                <div class="card-body">
                                                                    <h5 class="card-title mb-2.5">Apple Smart Watch
                                                                    </h5>
                                                                    <p class="mb-4">Stay connected, motivated, and
                                                                        healthy with the latest Apple Watch.</p>
                                                                    <div class="card-actions">
                                                                        <button class="btn btn-primary">Buy
                                                                            Now</button>
                                                                        <button class="btn btn-secondary btn-soft">Add
                                                                            to cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Slide 2 -->
                                                        <div class="carousel-slide snap-center">
                                                            <div class="bg-base-200 flex h-full justify-center p-6">
                                                                <span class="self-center text-lg">Second slide</span>
                                                            </div>
                                                        </div>
                                                        <!-- Slide 3 -->
                                                        <div class="carousel-slide snap-center">
                                                            <div class="bg-base-300 flex h-full justify-center p-6">
                                                                <span class="self-center text-lg">Third slide</span>
                                                            </div>
                                                        </div>
                                                        <!-- Slide 4 -->
                                                        <div class="carousel-slide snap-center">
                                                            <div class="bg-base-200/50 flex h-full justify-center p-6">
                                                                <span class="self-center text-lg">Fourth slide</span>
                                                            </div>
                                                        </div>
                                                        <!-- Slide 5 -->
                                                        <div class="carousel-slide snap-center">
                                                            <div class="bg-base-200 flex h-full justify-center p-6">
                                                                <span class="self-center text-lg">Fifth slide</span>
                                                            </div>
                                                        </div>
                                                        <!-- Slide 6 -->
                                                        <div class="carousel-slide snap-center">
                                                            <div class="bg-base-300 flex h-full justify-center p-6">
                                                                <span class="self-center text-lg">Sixth slide</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Previous Slide -->
                                                <button type="button" class="carousel-prev">
                                                    <span
                                                        class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                                                        <span
                                                            class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                                    </span>
                                                    <span class="sr-only">Previous</span>
                                                </button>
                                                <!-- Next Slide -->
                                                <button type="button" class="carousel-next">
                                                    <span class="sr-only">Next</span>
                                                    <span
                                                        class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                                                        <span
                                                            class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                                                    </span>
                                                </button>
                                            </div>


                                            <div class="h-6">

                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- scrollspy-body -end --}}

            </div>
        </div>
    </div>
</x-website-layout>
