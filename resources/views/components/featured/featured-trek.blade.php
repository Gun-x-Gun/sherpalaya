<div class="bg-gray-300">
    <div class="h-20 "></div>

    <div class="2xl:mx-44 mx-4 ">
        <h5 class="text-base-content text-4xl font-semibold text-right line-clamp-2">Treks</h5>
        <p class="text-base-content/80 text-base text-right mt-2" dir="rtl">
            With Sherpalaya, trekking in Nepal becomes more than just a walk; it’s a journey of discovery. Explore
            world-famous trails like Everest Base Camp, Annapurna Circuit, and Langtang Valley or venture into
            off-the-beaten-path destinations. Sherpalaya provides tailored itineraries, reliable logistics, and
            professional guides to ensure your trek is both Nepals most beautiful villages and unforgettable.
        </p>
    </div>
</div>

@if ($treks->where('is_featured', true)->count() >= 3)
    <div class="w-full bg-gray-300 h-full">
        <div class="h-6">

        </div>
        <div class="lg:grid grid-cols-4 gap-2 2xl:mx-44 mx-4 ">

            <div id="auto-play"
                data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.1, "lg": 3},"isAutoPlay": true, "speed": 10000 ,"dotsItemClasses": "carousel-box"}'
                class="relative shadow-lg col-span-3">
                <div class="carousel h-[30rem] md:h-[25rem] rounded-none ">
                    <div class="carousel-body h-full opacity-0 gap-1" dir="rtl">
                        <div class="carousel-slide lg:hidden flex">
                            <div
                                class="card sm:max-w-sm bg-green-300  bg-opacity-50 h-full bg-gradient-to-r from-red-200 to-blue-300 bg-clip">
                                <div class="card-body">
                                    <h5 class="card-title mb-2.5">Trek</h5>
                                    <p class="mb-4 text-secondary  text-pretty">
                                        Push your limits and reach the summit, rewarded with stunning panoramic
                                        vistas and a
                                        true sense of
                                        achievement.Traverse ancient glaciers surrounded by majestic peaks on an
                                        unforgettable journey
                                        through icy landscapes.

                                    </p>
                                    <div class="card-actions">
                                        <button class="btn btn-secondary btn-soft">Visit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 1 -->
                        <div class="carousel-slide">
                            <div class="card image-full sm:max-w-sm h-full ">
                                <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png"
                                        alt="overlay image" /></figure>
                                <div class="card-body justify-center ">
                                    <h2 class="card-title mb-2.5 text-white">Marketing</h2>
                                    <p class="text-white">Boost your brand's visibility and engagement through
                                        targeted
                                        marketing strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="card image-full sm:max-w-sm h-full ">
                                <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png"
                                        alt="overlay image" /></figure>
                                <div class="card-body justify-center ">
                                    <h2 class="card-title mb-2.5 text-white">Marketing</h2>
                                    <p class="text-white">Boost your brand's visibility and engagement through
                                        targeted
                                        marketing strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="card image-full sm:max-w-sm h-full ">
                                <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png"
                                        alt="overlay image" /></figure>
                                <div class="card-body justify-center ">
                                    <h2 class="card-title mb-2.5 text-white">Marketing</h2>
                                    <p class="text-white">Boost your brand's visibility and engagement through
                                        targeted
                                        marketing strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="card image-full sm:max-w-sm h-full ">
                                <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png"
                                        alt="overlay image" /></figure>
                                <div class="card-body justify-center ">
                                    <h2 class="card-title mb-2.5 text-white">Marketing</h2>
                                    <p class="text-white">Boost your brand's visibility and engagement through
                                        targeted
                                        marketing strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="card image-full sm:max-w-sm h-full ">
                                <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png"
                                        alt="overlay image" /></figure>
                                <div class="card-body justify-center ">
                                    <h2 class="card-title mb-2.5 text-white">Marketing</h2>
                                    <p class="text-white">Boost your brand's visibility and engagement through
                                        targeted
                                        marketing strategies.</p>
                                </div>
                            </div>
                        </div>

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
            <div
                class="card sm:max-w-sm bg-green-300 bg-opacity-50 hidden lg:flex h-[30rem] md:h-[25rem] overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
            items-center justify-center relative">
                <span
                    class="icon-[tabler--flag-filled] size-40 mb-4 rotate-12 opacity-20 absolute top-5 left-5 text-black ">
                </span>
                <div class="card-body items-start  justify-center p-4 ">
                    <h5 class="card-title mb-2.5 line-clamp-2">Trek</h5>
                    <p class="w-full mb-4 text-secondary text-pretty lg:line-clamp-[4] ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum rerum aperiam non dolorem unde
                        provident temporibus. Recusandae sed nihil ducimus rem vero fuga, quia consequatur asperiores
                        iusto,
                        illum natus modi.
                    </p>
                    <div class="card-actions">
                        <button class="btn btn-secondary btn-soft">Visit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-20">

        </div>
    </div>

    {{-- 2 --}}
@elseif($treks->where('is_featured', true)->count() === 2)
    <div class="w-full bg-gray-300 h-full">
        <div class="h-6">
        </div>
        <div class="lg:grid grid-cols-3 gap-2 2xl:mx-44 mx-4 hidden h-[70vh]" dir="rtl">
            <div
                class="card sm:max-w-sm bg-green-300 bg-opacity-50 hidden lg:flex overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
                        items-center justify-center relative">
                <span
                    class="icon-[icon-park-twotone--sunset] size-40 mb-4 rotate-12 opacity-20 absolute top-5 left-5 text-black">

                </span>
                <div class="card-body items-start  justify-center p-4 ">

                    <h5 class="card-title mb-2.5 line-clamp-2">Trek</h5>
                    <ul class=" text-base-content/80 list-inside items-start">
                        <li class="mb-2">Nepals most beautiful villages</li>
                        <li class="mb-2">Scenary of mountains </li>
                        <li class="mb-2">Good Accomodations</li>
                        <li class="mb-2">Best Food along the way </li>
                    </ul>
                    <div class="card-actions">
                        <button class="btn btn-secondary btn-soft">Visit</button>
                    </div>
                </div>
            </div>
            @foreach ($treks->where('is_featured', true) as $featuredTrek)
                <div
                    class="card rounded-md image-full  w-full relative flex items-center  card-side group hover:shadow border">
                    <figure class="h-full w-full">
                        <img src="{{ $featuredTrek->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                            alt="{{ $featuredTrek->title }} Cover Image"
                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                    </figure>
                    <a href="{{ route('show_trek', $featuredTrek->id) }}">
                        <div class="card-body absolute inset-0 justify-center">
                            <div class="text-center ">
                                <h2
                                    class="font-bold text-primary bg-gradient-to-r from-white to-white bg-clip-text text-transparent text-4xl ">
                                    {{ $featuredTrek->title }}
                                </h2>
                                <h2
                                    class=" tracking-normal text-white line-clamp-2 bg-gradient-to-r from-white to-white bg-clip-text text-transparent font-black text-4xl ">
                                    {{ $featuredTrek->highest_altitude }}
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div id="auto-play"
            data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.2, "md": 2},"isAutoPlay": true, "speed": 1000000 ,"dotsItemClasses": "carousel-box"}'
            class="relative shadow-lg col-span-3 lg:hidden flex mx-4 ">
            <div class="carousel  rounded-md ">
                <div class="carousel-body opacity-0 gap-2 h-[70vh]">
                    <div class="carousel-slide lg:hidden flex ">
                        <div
                            class="card sm:max-w-sm bg-blue-300 bg-opacity-50 bg-gradient-to-r from-blue-300 to-green-100 bg-clip ">
                            <div class="card-body items-start  justify-center p-4 ">
                                {{-- <span
                                    class="icon-[tabler--flag-filled]  ">
                                </span> --}}
                                <span
                                    class="icon-[icon-park-twotone--sunset] size-40 mb-4 rotate-12 opacity-20 absolute top-5 left-5 text-black">

                                </span>
                                <h5 class="card-title mb-2.5 line-clamp-2">Trek</h5>
                                <ul class=" text-base-content/80 list-inside items-start">
                                    <li class="mb-2">Nepals most beautiful villages</li>
                                    <li class="mb-2">Scenary of mountains </li>
                                    <li class="mb-2">Good Accomodations</li>
                                    <li class="mb-2">Best Food along the way </li>
                                </ul>
                                <div class="card-actions">
                                    <button class="btn btn-secondary btn-soft">Visit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    @foreach ($treks->where('is_featured', true) as $featuredTrek)
                        <div class="carousel-slide">
                            <div
                                class="card rounded-md image-full  w-full relative flex items-center  card-side group hover:shadow border h-[70vh]">
                                <figure class="h-full w-full">
                                    <img src="{{ $featuredTrek->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                                        alt="{{ $featuredTrek->title }} Cover Image"
                                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                </figure>
                                <a href="{{ route('show_trek', $featuredTrek->id) }}">
                                    <div class="card-body absolute inset-0 justify-center">
                                        <div class="text-center ">
                                            <h2
                                                class="font-bold text-primary bg-gradient-to-r from-white to-white bg-clip-text text-transparent text-4xl ">
                                                {{ $featuredTrek->title }}
                                            </h2>
                                            <h2
                                                class=" tracking-normal text-white line-clamp-2 bg-gradient-to-r from-white to-white bg-clip-text text-transparent font-black text-4xl ">
                                                {{ $featuredTrek->highest_altitude }}
                                            </h2>
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
        <div class="h-20">
        </div>
    </div>

    {{-- 1 --}}
@elseif($treks->where('is_featured', true)->count() === 1)
    <div class="w-full bg-gray-300 h-full" dir="rtl">
        <div class="h-6">
        </div>
        <div class="lg:grid grid-cols-3 gap-2 2xl:mx-44 mx-4 hidden h-[70vh]">
            <div class="card sm:max-w-sm bg-green-300 bg-opacity-50 hidden lg:flex  overflow-hidden bg-gradient-to-r from-red-200 to-blue-300 bg-clip
                items-start justify-center relative"
                dir="ltr">

                <span
                    class="icon-[guidance--hiking] size-40 mb-4 rotate-5 opacity-20 absolute top-5 left-5 text-black">
                </span>
                <div class="card-body items-start justify-center p-4 text-left">
                    <h5 class="card-title my-2.5 line-clamp-2">Trek</h5>
                    <ul class=" text-base-content/80 list-inside items-start">
                        <li class="mb-2">Nepals most beautiful villages</li>
                        <li class="mb-2">Scenary of mountains </li>
                        <li class="mb-2">Good Accomodations</li>
                        <li class="mb-2">Best Food along the way </li>
                    </ul>
                    <div class="card-actions">
                        <button class="btn btn-secondary btn-soft">Visit</button>
                    </div>
                </div>
            </div>
            @foreach ($treks->where('is_featured', true) as $featuredTrek)
                <div
                    class="card rounded-md image-full  w-full relative flex items-center  card-side group hover:shadow border col-span-2">
                    <figure class="h-full w-full">
                        <img src="{{ $featuredTrek->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                            alt="{{ $featuredTrek->title }} Cover Image"
                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                    </figure>
                    <a href="{{ route('show_trek', $featuredTrek->id) }}">
                        <div class="card-body absolute inset-0 justify-center">
                            <div class="text-center ">
                                <h2
                                    class="font-bold text-primary bg-gradient-to-r from-white to-white bg-clip-text text-transparent text-4xl ">
                                    {{ $featuredTrek->title }}
                                </h2>
                                <h2
                                    class=" tracking-normal text-white line-clamp-2 bg-gradient-to-r from-white to-white bg-clip-text text-transparent font-black text-4xl ">
                                    {{ $featuredTrek->highest_altitude }}
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div id="auto-play"
            data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.1, "md": 2},"isAutoPlay": true, "speed": 10000 ,"dotsItemClasses": "carousel-box"}'
            class="relative shadow-lg col-span-3 lg:hidden flex mx-4 ">
            <div class="carousel  rounded-md ">
                <div class="carousel-body opacity-0 gap-2 h-[70vh]">
                    <div class="carousel-slide lg:hidden flex ">
                        <div
                            class="card sm:max-w-sm bg-blue-300 bg-opacity-50 bg-gradient-to-r from-blue-300 to-green-100 bg-clip ">
                            <div class="card-body items-start  justify-center p-4 ">
                                <span
                                    class="icon-[guidance--hiking] size-40 mb-4 rotate-12 opacity-20 absolute top-5 left-5 text-black"></span>
                                <h5 class="card-title mb-2.5 line-clamp-2">Trek</h5>
                                <ul class=" text-base-content/80 list-inside items-start">
                                    <li class="mb-2">Nepals most beautiful villages</li>
                                    <li class="mb-2">Scenary of mountains </li>
                                    <li class="mb-2">Good Accomodations</li>
                                    <li class="mb-2">Best Food along the way </li>
                                </ul>
                                <div class="card-actions">
                                    <button class="btn btn-secondary btn-soft">Visit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    @foreach ($treks->where('is_featured', true) as $featuredTrek)
                        <div class="carousel-slide h-[70vh]">
                            <div
                                class="card rounded-md image-full w-full relative flex items-center  card-side group hover:shadow border h-[70vh]">
                                <figure class="h-full w-full">
                                    <img src="{{ $featuredTrek->featureImage->url ?? asset('photos/DSCF2600.JPG') }}"
                                        alt="{{ $featuredTrek->title }} Cover Image"
                                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                </figure>
                                <a href="{{ route('show_trek', $featuredTrek->id) }}">
                                    <div class="card-body absolute inset-0 justify-center">
                                        <div class="text-center ">
                                            <h2
                                                class="font-bold text-primary bg-gradient-to-r from-white to-white bg-clip-text text-transparent text-4xl ">
                                                {{ $featuredTrek->title }}
                                            </h2>
                                            <h2
                                                class=" tracking-normal text-white line-clamp-2 bg-gradient-to-r from-white to-white bg-clip-text text-transparent font-black text-4xl ">
                                                {{ $featuredTrek->highest_altitude }}
                                            </h2>
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
        <div class="h-40 ">

        </div>
    </div>
@endif
