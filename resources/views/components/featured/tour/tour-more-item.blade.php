@if ($featuredTours->count() > 4)

    <div class="bg-blue-100/40" data-aos="fade-down" data-aos-duration="1200">
        <div class="xl:mx-32 mx-4 ">
            <div class="h-10 md:h-20"></div>
            <div class=""data-aos="fade-down" data-aos-duration="1200">
                <h5
                    class=" text-3xl md:text-4xl font-medium font-body line-clamp-2 uppercase tracking-normal text-black text-left md:text-left  ">
                    The Fun Corner </h5>
                <p
                    class="text-xl/7 mt-4 text-preety text-black lg:text-left 
                     font-light font-body break-all">
                    {{ $landingPageSetting->tour_activity_content }}
                </p>
                <div class="h-6 md:h-12"></div>
            </div>
            <div id="multi-slide"
                data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1, "sm": 1.8, "md": 2.5, "lg": 3.8 } }'
                class="relative w-full">
                <div class="carousel h-[28rem] rounded-none">
                    <div class="carousel-body h-full opacity-0" data-aos="fade-down" data-aos-duration="1200">
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
                                                <h2 class="font-bold text-blue-50 text-2xl uppercase">
                                                    {{ $featuredTour->title }}
                                                </h2>
                                                <h2 class="font-bold tracking-normal text-blue-50 line-clamp-2 text-2xl">
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
                        class="hidden md:flex icon-[tabler--chevron-left] size-8 text-white cursor-pointer rtl:rotate-180"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <!-- Next Slide -->
                <button type="button" class="carousel-next">
                    <span class="sr-only">Next</span>
                    <span
                        class="hidden md:flex icon-[tabler--chevron-right] size-8 text-white cursor-pointer rtl:rotate-180"></span>
                </button>
            </div>
        </div>
        <div class="h-20"></div>
    </div>
@endif
