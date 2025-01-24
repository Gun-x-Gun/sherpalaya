<div class="bg-blue-100/10">
    <div class="h-8 md:h-20 "></div>
    <div class="2xl:mx-44 mx-4 ">
        <h5 class="text-5xl font-extralight text-left line-clamp-2 tracking-widest md:text-left text-blue-900  ">
            Tours
        </h5>
        {{-- <h3 class="text-4xl md:text-5xl tracking-widest text-accent ">Sherpalaya</h3> --}}
        <p
            class="text-md text-blue-800 mt-2 text-preety text-balance md:text-wrap md:text-justify first-line:uppercase first-line:tracking-widest first-line:font-light  ">
            For those seeking the ultimate challenge, Sherpalaya’s expedition services offer unparalleled support and
            expertise. Whether it’s climbing Everest or venturing to the lesser-known peaks, Sherpalaya handles every
            detail, from permits to logistics. With our experienced Sherpa team by your side, we transform daunting
            Trek into achievable milestones, ensuring a fulfilling and transformative adventure. </p>
    </div>
</div>

@if ($tours->where('is_featured', true)->count() >= 3)
    <div class="w-full bg-blue-100/10">
        <div class="h-2 "></div>
        <div class="lg:grid grid-cols-4 gap-2 2xl:mx-44 mx-4">
            <div
                class="card  bg-blue-300 bg-opacity-100 hidden lg:flex  overflow-hidden bg-gradient-to-r from-blue-300 to-green-100 bg-clip h-[30rem]">
                <div class="card-body  justify-end items-start">
                    <div class=" flex gap-4 mt-2 mb-10">
                        <div class="stat-figure text-base-content size-8">
                            <span class="icon-[tabler--world] size-8"></span>
                        </div>
                        <div class="flex-cols">
                            <div class="stat-title text-left px-0">Completed </div>
                            <div class="stat-value text-primary text-left">50 +</div>
                        </div>
                    </div>
                    <h5 class="text-3xl font-bold text-center line-clamp-2 tracking-widest  text-accent ">
                        Featured
                    </h5>
                    {{-- <h3 class="text-3xl tracking-widest uppercase text-accent ">Sherpalaya</h3> --}}
                    <ul class="space-y-2 text-sm mt-4">
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800"> Nepals most beautiful villages </span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800"> Expert Guides </span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800">Good Accomodations </span>
                        </li>
                    </ul>
                    <div class="card-actions mt-8">
                        <button class="btn btn-secondary btn-soft">More Tours</button>
                    </div>
                </div>
            </div>
            <div id="auto-play"
                data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.1, "md":2.2,"lg": 2.8 },"isAutoPlay": true, "speed": 10000 ,"dotsItemClasses": "carousel-box"}'
                class="relative shadow-lg col-span-3">
                <div class="carousel rounded-md ">
                    <div class="carousel-body h-full opacity-0 gap-2 ">
                        <div class="carousel-slide lg:hidden flex">
                            <div
                                class="card bg-blue-300 bg-opacity-50 h-[30rem] bg-gradient-to-r from-blue-300 to-green-100 bg-clip">
                                <div class="card-body  justify-end items-start">
                                    <div class=" flex gap-4 mt-2 mb-10">
                                        <div class="stat-figure text-base-content size-8">
                                            <span class="icon-[tabler--world] size-8"></span>
                                        </div>
                                        <div class="flex-cols">
                                            <div class="stat-title text-left px-0">Completed </div>
                                            <div class="stat-value text-primary text-left">50 +</div>
                                        </div>
                                    </div>
                                    <h5
                                        class="text-3xl font-bold text-center line-clamp-2 tracking-widest  text-accent ">
                                        Featured
                                    </h5>
                                    {{-- <h3 class="text-3xl tracking-widest uppercase text-accent ">Sherpalaya</h3> --}}
                                    <ul class="space-y-2 text-sm mt-4">
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <span
                                                class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                            </span>
                                            <span class="text-slate-800"> Nepals most beautiful villages </span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <span
                                                class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                            </span>
                                            <span class="text-slate-800"> Expert Guides </span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <span
                                                class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                            </span>
                                            <span class="text-slate-800">Good Accomodations </span>
                                        </li>
                                    </ul>
                                    <div class="card-actions mt-8">
                                        <button class="btn btn-secondary btn-soft">More Tours</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 1 -->
                        @foreach ($tours->where('is_featured', true) as $featuredTour)
                            <div class="carousel-slide h-full">
                                <div
                                    class="card rounded-md image-full  w-full relative flex items-center  card-side group hover:shadow border h-[30rem]">
                                    <figure class="h-full w-full">
                                        <img src="{{ $featuredTour->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                                            alt="{{ $featuredTour->title }} Cover Image"
                                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                    </figure>
                                    <a href="{{ route('show_tour', $featuredTour->id) }}">
                                        <div class="card-body absolute inset-0 justify-center">
                                            <div class="card-body absolute inset-0 justify-end  ">
                                                <div class="text-left backdrop-blur-md italic">
                                                    <h2 class="font-bold text-white  text-xl">
                                                        {{ $featuredTour->title }}
                                                    </h2>
                                                    <h2
                                                        class="font-bold tracking-normal text-white line-clamp-2  text-xl">
                                                        {{ $featuredTour->highest_altitude }} m
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-pagination absolute -bottom-4 end-0 start-0 flex justify-center gap-2"></div>


                <!-- Previous Slide -->
                <button type="button" class="carousel-prev md:absolute md:-left-8 top-1/2 -translate-y-1/2">
                    <span
                        class="size-9.5 bg-none text-white  items-center justify-center rounded-full shadow-none hidden md:flex">
                        <span class="icon-[tabler--chevron-left] size-8 cursor-pointer rtl:rotate-180"></span>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>

                <!-- Next Slide Button -->
                <button type="button" class="carousel-next  top-1/2 -translate-y-1/2">
                    <span class="sr-only">Next</span>
                    <span
                        class="size-9.5 bg-none text-white items-center justify-center rounded-full shadow-none hidden md:flex">
                        <span class="icon-[tabler--chevron-right] size-8 cursor-pointer rtl:rotate-180"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="h-6 "></div>

    </div>


    {{-- 2 --}}
@elseif($tours->where('is_featured', true)->count() === 2)
    <div class="w-full bg-blue-100/10">
        <div class="h-6 "></div>

        <div class="xl:grid grid-cols-3 gap-2 2xl:mx-44 mx-4 hidden">
            <div
                class="card bg-green-300 bg-opacity-50 hidden xl:flex overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
            items-center justify-center relative h-[30rem]">
                <div class="card-body  justify-end items-start">
                    <div class=" flex gap-4 mt-2 mb-10">
                        <div class="stat-figure text-base-content size-8">
                            <span class="icon-[tabler--world] size-8"></span>
                        </div>
                        <div class="flex-cols">
                            <div class="stat-title text-left px-0">Completed </div>
                            <div class="stat-value text-primary text-left">50 +</div>
                        </div>
                    </div>
                    <h5 class="text-3xl font-bold text-center line-clamp-2 tracking-widest  text-accent ">
                        Featured
                    </h5>
                    {{-- <h3 class="text-3xl tracking-widest uppercase text-accent ">Sherpalaya</h3> --}}
                    <ul class="space-y-2 text-sm mt-4">
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800"> Nepals most beautiful villages </span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800"> Expert Guides </span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800">Good Accomodations </span>
                        </li>
                    </ul>
                    <div class="card-actions mt-8">
                        <button class="btn btn-secondary btn-soft">More Tours</button>
                    </div>
                </div>
            </div>
            @foreach ($tours->where('is_featured', true) as $featuredTour)
                <div
                    class="card rounded-md image-full  w-full [h-30rem] relative flex items-center  card-side group hover:shadow border">
                    <figure class="h-full w-full">
                        <img src="{{ $featuredTour->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                            alt="{{ $featuredTour->title }} Cover Image"
                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                    </figure>
                    <a href="{{ route('show_tour', $featuredTour->id) }}">
                        <div class="card-body absolute inset-0 justify-center">
                            <div class="card-body absolute inset-0 justify-end  ">
                                <div class="text-left backdrop-blur-md italic">
                                    <h2 class="font-bold text-white  text-xl">
                                        {{ $featuredTour->title }}
                                    </h2>
                                    <h2 class="font-bold tracking-normal text-white line-clamp-2  text-xl">
                                        {{ $featuredTour->highest_altitude }} m
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div id="auto-play"
            data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.1,  "md": 1.6 , "lg":2},"isCentered": false ,"isAutoPlay": true, "speed": 1000000 ,"dotsItemClasses": "carousel-box"}'
            class="relative shadow-lg xl:hidden flex mx-4 ">
            <div class="carousel rounded-md ">
                <div class="carousel-body opacity-0 gap-2 h-full">
                    <div class="carousel-slide xl:hidden flex ">
                        <div
                            class="card w-full bg-green-300 bg-opacity-50 overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
            items-start justify-center relative h-[30rem]">
                            <div class="card-body  justify-end items-start">
                                <div class=" flex gap-4 mt-2 mb-10">
                                    <div class="stat-figure text-base-content size-8">
                                        <span class="icon-[tabler--world] size-8"></span>
                                    </div>
                                    <div class="flex-cols">
                                        <div class="stat-title text-left px-0">Completed </div>
                                        <div class="stat-value text-primary text-left">50 +</div>
                                    </div>
                                </div>
                                <h5 class="text-3xl font-bold text-center line-clamp-2 tracking-widest  text-accent ">
                                    Featured
                                </h5>
                                {{-- <h3 class="text-3xl tracking-widest uppercase text-accent ">Sherpalaya</h3> --}}
                                <ul class="space-y-2 text-sm mt-4">
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-slate-800"> Nepals most beautiful villages </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-slate-800"> Expert Guides </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-slate-800">Good Accomodations </span>
                                    </li>
                                </ul>
                                <div class="card-actions mt-8">
                                    <button class="btn btn-secondary btn-soft">More Tours</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    @foreach ($tours->where('is_featured', true) as $featuredTour)
                        <div class="carousel-slide">
                            <div
                                class="card rounded-md image-full  w-full relative flex items-center  card-side group hover:shadow border h-[30rem]">
                                <figure class="h-full w-full">
                                    <img src="{{ $featuredTour->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                                        alt="{{ $featuredTour->title }} Cover Image"
                                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                </figure>
                                <a href="{{ route('show_tour', $featuredTour->id) }}">
                                    <div class="card-body absolute inset-0 justify-center">
                                        <div class="card-body absolute inset-0 justify-end  ">
                                            <div class="text-left backdrop-blur-md italic">
                                                <h2 class="font-bold text-white  text-xl">
                                                    {{ $featuredTour->title }}
                                                </h2>
                                                <h2 class="font-bold tracking-normal text-white line-clamp-2  text-xl">
                                                    {{ $featuredTour->highest_altitude }} m
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="carousel-pagination absolute -bottom-4 end-0 start-0 flex justify-center gap-2 "></div>


            <!-- Previous Slide -->
            <button type="button" class="carousel-prev md:absolute md:-left-8 top-1/2 -translate-y-1/2">
                <span
                    class="size-9.5 bg-none text-white  items-center justify-center rounded-full shadow-none hidden md:flex">
                    <span class="icon-[tabler--chevron-left] size-8 cursor-pointer rtl:rotate-180"></span>
                </span>
                <span class="sr-only">Previous</span>
            </button>

            <!-- Next Slide Button -->
            <button type="button" class="carousel-next  top-1/2 -translate-y-1/2">
                <span class="sr-only">Next</span>
                <span
                    class="size-9.5 bg-none text-white items-center justify-center rounded-full shadow-none hidden md:flex">
                    <span class="icon-[tabler--chevron-right] size-8 cursor-pointer rtl:rotate-180"></span>
                </span>
            </button>
        </div>

    </div>

















    {{-- 1 --}}
@elseif($tours->where('is_featured', true)->count() === 1)
    <div class="w-full bg-blue-100/10">
        <div class="h-6">

        </div>
        <div class="xl:grid grid-cols-3 gap-2 2xl:mx-44 mx-4 hidden">
            <div
                class="card w-full bg-green-300 bg-opacity-50 overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
            items-start justify-center relative h-[29rem]">
                <div class="card-body  justify-end items-start">
                    <div class=" flex gap-4 mt-2 mb-10">
                        <div class="stat-figure text-base-content size-8">
                            <span class="icon-[tabler--world] size-8"></span>
                        </div>
                        <div class="flex-cols">
                            <div class="stat-title text-left px-0">Completed </div>
                            <div class="stat-value text-primary text-left">50 +</div>
                        </div>
                    </div>
                    <h5 class="text-3xl font-bold text-center line-clamp-2 tracking-widest  text-accent ">
                        Featured
                    </h5>
                    {{-- <h3 class="text-3xl tracking-widest uppercase text-accent ">Sherpalaya</h3> --}}
                    <ul class="space-y-2 text-sm mt-4">
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800"> Nepals most beautiful villages </span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800"> Expert Guides </span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <span class="text-slate-800">Good Accomodations </span>
                        </li>
                    </ul>
                    <div class="card-actions mt-8">
                        <button class="btn btn-secondary btn-soft">More Tours</button>
                    </div>
                </div>
            </div>
            @foreach ($tours->where('is_featured', true) as $featuredTour)
                <div
                    class="card rounded-md image-full  w-full h-[29rem] relative flex items-center  card-side group hover:shadow border col-span-2">
                    <figure class="h-full w-full">
                        <img src="{{ $featuredTour->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                            alt="{{ $featuredTour->title }} Cover Image"
                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                    </figure>
                    <a href="{{ route('show_tour', $featuredTour->id) }}">
                        <div class="card-body absolute inset-0 justify-center">
                            <div class="text-center ">
                                <h2 class="font-bold text-primary  text-3xl/8">
                                    {{ $featuredTour->title }}
                                </h2>
                                <h2 class=" tracking-normal text-white line-clamp-2  font-black  ">
                                    {{ $featuredTour->highest_altitude }}
                                </h2>
                            </div>
                        </div>
                        {{-- bg-gradient-to-r from-white to-white bg-clip-text text-transparent
bg-gradient-to-r from-white to-white bg-clip-text text-transparent --}}
                    </a>
                </div>
            @endforeach
        </div>

        <div id="auto-play"
            data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.1,  "md": 1.6, "lg":2},"isCentered": false, "isAutoPlay": true, "speed": 1000000 ,"dotsItemClasses": "carousel-box"}'
            class="relative shadow-lg col-span-3 xl:hidden flex mx-4 ">
            <div class="carousel  rounded-md ">
                <div class="carousel-body opacity-0 gap-2 h-full">
                    <div class="carousel-slide xl:hidden flex ">
                        <div
                            class="card h-[30rem] w-full bg-green-300 bg-opacity-50 overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
            items-start justify-center relative">
                            <div class="card-body  justify-end items-start">
                                <div class=" flex gap-4 mt-2 mb-10">
                                    <div class="stat-figure text-base-content size-8">
                                        <span class="icon-[tabler--world] size-8"></span>
                                    </div>
                                    <div class="flex-cols">
                                        <div class="stat-title text-left px-0">Completed </div>
                                        <div class="stat-value text-primary text-left">50 +</div>
                                    </div>
                                </div>
                                <h5 class="text-3xl font-bold text-center line-clamp-2 tracking-widest  text-accent ">
                                    Featured
                                </h5>
                                {{-- <h3 class="text-3xl tracking-widest uppercase text-accent ">Sherpalaya</h3> --}}
                                <ul class="space-y-2 text-sm mt-4">
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-slate-800"> Nepals most beautiful villages </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-slate-800"> Expert Guides </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span
                                            class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-slate-800">Good Accomodations </span>
                                    </li>
                                </ul>
                                <div class="card-actions mt-8">
                                    <button class="btn btn-secondary btn-soft">More Tours</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    @foreach ($tours->where('is_featured', true) as $featuredTour)
                        <div class="carousel-slide h-full">
                            <div
                                class="card rounded-md image-full w-full relative flex items-center  card-side group hover:shadow border h-[30rem]">
                                <figure class="h-full w-full">
                                    <img src="{{ $featuredTour->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                                        alt="{{ $featuredTour->title }} Cover Image"
                                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                </figure>
                                <a href="{{ route('show_tour', $featuredTour->id) }}">
                                    <div class="card-body absolute inset-0 justify-center">
                                        <div class="card-body absolute inset-0 justify-end  ">
                                            <div class="text-left backdrop-blur-md italic">
                                                <h2 class="font-bold text-white  text-xl">
                                                    {{ $featuredTour->title }}
                                                </h2>
                                                <h2 class="font-bold tracking-normal text-white line-clamp-2  text-xl">
                                                    {{ $featuredTour->highest_altitude }} m
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="carousel-pagination absolute -bottom-4 end-0 start-0 flex justify-center gap-2  "></div>


            <!-- Previous Slide -->
            <button type="button" class="carousel-prev md:absolute md:-left-8 top-1/2 -translate-y-1/2  ">
                <span
                    class="size-9.5 bg-none text-white  items-center justify-center rounded-full shadow-none hidden md:flex lg:hidden">
                    <span class="icon-[tabler--chevron-left] size-8 cursor-pointer rtl:rotate-180"></span>
                </span>
                <span class="sr-only">Previous</span>
            </button>

            <!-- Next Slide Button -->
            <button type="button" class="carousel-next  top-1/2 -translate-y-1/2  ">
                <span class="sr-only">Next</span>
                <span
                    class="size-9.5 bg-none text-white items-center justify-center rounded-full shadow-none hidden md:flex lg:hidden">
                    <span class="icon-[tabler--chevron-right] size-8 cursor-pointer rtl:rotate-180"></span>
                </span>
            </button>
        </div>
    </div>
@endif
