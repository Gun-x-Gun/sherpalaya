
<x-featured.trek.trek-single-item />
<x-featured.trek.trek-double-item />
<x-featured.trek.trek-triple-item />
<x-featured.trek.trek-quad-item />
<x-featured.trek.trek-more-item />


<<<<<<< Updated upstream
            <div id="multi-slide"
                data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1.1,"md": {{ max(1.1, min(3, count($featuredTreks))) }}, "lg": {{ max(1.1, min(4, count($featuredTreks))) }} } }'
                class="relative w-full mt-2">
                <div class="carousel h-[28rem] rounded-none">
                    <div class="carousel-body h-[28rem] opacity-0 gap-4">
                        <!-- Slide 1 -->
                        @foreach ($featuredTreks as $featuredTrek)
                            <div class="carousel-slide">
                                <div class="bg-base-200/50 flex h-[28rem] justify-start items-start">
                                    <span class="self-center text-lg">
                                        <div class="bg-base-300/60 flex h-[28rem] justify-start " dir="rtl">
                                            <span class="self-center text-2xl sm:text-4xl">
                                                <div
                                                    class="card rounded-none  image-full  w-full relative flex items-center  card-side group hover:shadow border ">
                                                    <figure class="h-[28rem] w-full">
                                                        <img src="{{ $featuredTrek->featureImage->url ?? asset('photos/mountain1.jpg') }}"
                                                            alt="{{ $featuredTrek->title }} Cover Image"
                                                            class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                                    </figure>
                                                    <a href="{{ route('show_trek', $featuredTrek->id) }}">
                                                        <div class="card-body absolute inset-0 justify-end  ">
                                                            <div class="text-left backdrop-blur-md ">
                                                                <h2 class="font-bold text-white  text-xl">
                                                                    {{ $featuredTrek->title }}
                                                                </h2>
                                                                <h2
                                                                    class="font-bold tracking-normal text-white line-clamp-2  text-xl">
                                                                    {{ $featuredTrek->highest_altitude }} m
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if ($featuredTreks->count() > 4)
                    <!-- Previous Slide -->
                    <button type="button" class="carousel-prev">
                        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button" class="carousel-next">
                        <span class="sr-only">Next</span>
                        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                    </button>
                @endif
            </div>
        </div>
=======
>>>>>>> Stashed changes

