@if ($featuredTours->count() > 3)

    <div class="bg-blue-100/40">
        <div class="xl:mx-32 mx-4 ">
            <div class="h-10 md:h-20"></div>
            <div class="flex flex-col justify-center items-center ">
                <h5 class=" text-3xl md:text-4xl font-medium font-body line-clamp-2 uppercase tracking-normal text-black text-center  "
                    data-aos="fade-down" data-aos-duration="1200">
                    The Fun Corner </h5>
                <p class="text-xl/7 mt-4 text-black text-center 
                     font-light font-body  w-[80%]">
                    {{ $landingPageSetting->tour_activity_content }}
                </p>
                <div class="h-6 md:h-12"></div>
            </div>
            <div id="multi-slide"
                data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1, "sm": 1.8, "md": 2.5, "lg": 3.8 } }'
                class="relative w-full">
                <div class="carousel h-[28rem] rounded-none">
                    <div class="carousel-body h-full opacity-0" >
                        <!-- Slide 1 -->
                        @foreach ($featuredTours as $featuredTour)
                            <div class="carousel-slide px-1 max-w-sm">
                                <div
                                    class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border">
                                    <figure class="h-[28rem] max-w-sm">
                                        <img src="{{ optional($featuredTour->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                            alt="{{ $featuredTour->title }} Cover Image"
                                            class="transition-transform brightness-50 duration-500 group-hover:scale-110 h-full max-w-sm object-cover" />
                                    </figure>
                                    <a href="{{ route('show_tour', $featuredTour->id) }}">
                                        <div class="card-body absolute inset-0 justify-center max-w-sm">
                                            <div class="text-center">
                                                <h2 class="font-normal tracking-wide text-blue-50 text-2xl uppercase group-hover:text-warning">
                                                    {{ $featuredTour->title }}
                                                </h2>
                                                <h2
                                                    class="font-normal tracking-wide text-blue-50 line-clamp-2 text-2xl group-hover:text-warning">
                                                    {{ $featuredTour->highest_altitude }}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Previous Slide -->
                <button type="button" class="carousel-prev">
                    <span
                        class="size-9.5 hidden md:flex bg-base-100 bg-opacity-70  items-center justify-center rounded-full shadow">
                        <span
                            class=" icon-[tabler--chevron-left] size-6 text-black cursor-pointer rtl:rotate-180"></span>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <!-- Next Slide -->
                <button type="button" class="carousel-next">
                    <span class="sr-only">Next</span>
                    <span
                        class="size-9.5 hidden md:flex bg-base-100 bg-opacity-70  items-center justify-center rounded-full shadow">
                        <span
                            class=" icon-[tabler--chevron-right] size-6 text-black cursor-pointer rtl:rotate-180"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="h-20"></div>
    </div>
@endif
