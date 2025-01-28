<div class="bg-blue-100/50">
    <div class="h-28 "></div>
    <div class="2xl:mx-44 mx-4 text-left">
        <h1
            class="text-2xl lg:text-5xl  font-light  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty">
            Our Services In Nepal
        </h1>
        {{-- <h3 class="text-3xl tracking-widest text-primary "> With Sherpalaya</h3> --}}
        <p
            class="text-md text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light ">
            For those seeking the ultimate challenge, Sherpalaya’s expedition services offer unparalleled support and
            expertise. Whether it’s climbing Everest or venturing to the lesser-known peaks, Sherpalaya handles every
            detail, from permits to logistics. With our experienced Sherpa team by your side, we transform daunting
            service into achievable milestones, ensuring a fulfilling and transformative adventure. </p>
    </div>
    <div class="h-12 "></div>
</div>



<div class="bg-blue-100/50">
    <x-home-page.searchbar />

    <x-breadcrumb :breadcrumbs="[
        [
            'name' => 'Home',
            'url' => url('/home'),
        ],
        [
            'name' => 'Services',
        ],
    ]" />

    <div class="h-12"></div>


    {{-- Showing <strong>{{ $serviceDestination->services->count() }}</strong> --}}
    <div class="2xl:mx-44 mx-4">

        @foreach ($servicesRegion as $serviceRegion)
            @if (!empty($serviceRegion->name))
                <h5 class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                    {{ $serviceRegion->name }} Region
                </h5>
                <div class="md:grid md:grid-cols-2 lg:grid-cols-3  flex flex-col gap-4">

                    @foreach ($services as $service)
                        <div class="card w-full ">
                            <div>
                                <div id="info"
                                    data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                                    class="relative w-full">
                                    <div class="carousel h-80 rounded-none rounded-t-md">
                                        <div class="carousel-body h-full opacity-0">
                                            {{-- @foreach ($servicesDestination as $serviceDestination) --}}
                                            @foreach ($service->images as $image)
                                                <div class="carousel-slide">
                                                    {{-- <a href="{{ route('show_service', $service->id) }}"> --}}
                                                    <div class="bg-base-200/50 flex h-full justify-center">
                                                        <span class="self-start w-full ">
                                                            <figure>
                                                                <img src="{{ $image->url ?? asset('photos/P1030127.JPG') }}"
                                                                    alt="{{ $service->title }} Cover Image"
                                                                    class="h-80 object-cover" />
                                                            </figure>
                                                        </span>
                                                    </div>
                                                    {{-- </a> --}}
                                                </div>
                                            @endforeach
                                            {{-- @endforeach --}}
                                        </div>
                                    </div>

                                    <!-- Previous Slide -->

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
                                        <!-- Next Slide -->
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

                            <div class="card-body px-2 pt-2 bg-blue-100/30 ">
                                {{-- <a href="{{ route('show_service', $service->id) }}"> --}}
                                <h5 class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                    {{ $service->title }}</h5>
                                {{-- </a> --}}
                                <div class="justify-start flex flex-col  gap-2">
                                    <span class="text-accent capitalize items-center font-normal ">
                                        {{ $service->description }}
                                    </span>
                                    <div class="flex">
                                        @if (!empty($service->location['lat']) && !empty($service->location['lng']))
                                            <a href="https://maps.google.com/?q={{ $service->location['lat'] }},{{ $service->location['lng'] }}"
                                                target="_blank" rel="noopener noreferrer">
                                                <p class="text-primary">
                                                    Location: {{ $service->location['lat'] }},
                                                    {{ $service->location['lng'] }}
                                                </p>
                                            </a>
                                        @else
                                            <p class="text-slate-500 italic">Location not available</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="h-10"></div>
            @endif
        @endforeach
    </div>


    <div class="h-12"></div>


    <div class="h-20">

    </div>
</div>
