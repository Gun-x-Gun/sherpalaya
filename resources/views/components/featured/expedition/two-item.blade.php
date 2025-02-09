@if ($featuredExpeditions->count() > 1)
    <div class="bg-blue-100/60">
        <div class="xl:mx-32 mx-4 font-oswald">
            <div class="h-14"></div>
            <div class=" "data-aos="fade-down" data-aos-duration="1200">
                <h5
                    class="text-3xl md:text-4xl font-light line-clamp-2 uppercase tracking-wider text-black text-center ">
                    Expeditions</h5>
                {{-- <h3 class="text-3xl tracking-wider text-accent lg:text-center ">With Sherpalaya</h3> --}}
                {{-- <p
                    class="text-md mt-2 text-preety text-slate-800 lg:text-center 
                     first-line:uppercase ">
                    {{ $landingPageSetting->expedition_activity_content }}
                </p> --}}
                <div class="h-8"></div>
            </div>
            <div class="flex flex-col md:grid grid-cols-3 gap-1 md:gap-2 bg-blue-100/10">
                @foreach ($featuredExpeditions as $featuredExpedition)
                    @if ($loop->index % 2 === 0)
                        {{-- First Iteration: col-span-1 on the text and col-span-2 on the image --}}
                        <div class="col-span-1 mr-2 hidden md:block " data-aos="fade-down" data-aos-duration="1200">
                            <h5 class="text-3xl font-light line-clamp-2 tracking-wider text-black md:text-left " >
                                {{ $featuredExpedition->title }}</h5>
                            <p
                                class="text-md mt-2 text-preety text-slate-800 break-all tracking-wide font-light text-lg first-line:uppercase  line-clamp-[14]">
                                {{ strip_tags($featuredExpedition->description) }}
                            </p>
                        </div>
                        <div
                            class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border col-span-2" data-aos="fade-down" data-aos-duration="1200">
                            <figure class="h-[28rem] w-full">
                                <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                    alt="{{ $featuredExpedition->title }} Cover Image"
                                    class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                            </figure>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <div class="card-body absolute inset-0 justify-end">
                                    <div class="text-center">
                                        <h2 class="font-bold text-white text-3xl uppercase">
                                            {{ $featuredExpedition->title }}
                                        </h2>
                                        <h2 class="font-bold tracking-normal text-white line-clamp-2 text-3xl">
                                            {{ $featuredExpedition->highest_altitude }} m
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        {{-- Second Iteration: col-span-2 on the text and col-span-1 on the image --}}
                        <div
                            class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border col-span-2" data-aos="fade-down" data-aos-duration="1200">
                            <figure class="h-[28rem] w-full">
                                <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                    alt="{{ $featuredExpedition->title }} Cover Image"
                                    class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                            </figure>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <div class="card-body absolute inset-0 justify-end">
                                    <div class="text-center">
                                        <h2 class="font-bold text-white text-3xl uppercase">
                                            {{ $featuredExpedition->title }}
                                        </h2>
                                        <h2 class="font-bold tracking-normal text-white line-clamp-2 text-3xl">
                                            {{ $featuredExpedition->highest_altitude }} m
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 ml-2 hidden md:block" data-aos="fade-down" data-aos-duration="1200">
                            <h5 class="text-3xl font-light line-clamp-2 tracking-wider text-black lg:text-left ">
                                {{ $featuredExpedition->title }}
                            </h5>
                            <p
                                class="text-md mt-2 text-preety text-slate-800 break-all tracking-wide font-light text-lg first-line:uppercase  line-clamp-[14]">
                                {{ strip_tags($featuredExpedition->description) }}
                            </p>
                        </div>
                    @endif

                    {{-- Add height between iterations except for the last one --}}
                    @unless ($loop->last)
                        <div class=" h-2 col-span-3"></div>
                    @endunless
                @endforeach
            </div>

            {{-- //smalldevices --}}
            {{-- <div class="md:hidden">
                <h5 class="text-4xl font-light line-clamp-2 tracking-wider text-black text-left ">Expedition</h5>
                <h3 class="text-3xl tracking-widest text-accent text-left ">With Sherpalaya</h3>
                <p
                    class="text-md mt-2 text-preety text-slate-800 text-balance md:text-wrap
                        md:text-justify first-line:uppercase first-line:tracking-widest  pr-2">
                    {{ $landingPageSetting->expedition_activity_content }}
                </p>
                <div class="h-4"></div>

                <div id="multi-slide"
                    data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1, "sm": 1.5, "md":2 } }'
                    class="relative w-full ">
                    <div class="carousel h-[28rem] rounded-none">
                        <div class="carousel-body  h-full opacity-0">
                            <!-- Slide 1 -->
                            @foreach ($featuredExpeditions as $featuredExpedition)
                                <div class="carousel-slide">
                                    <div class="bg-base-200/50 flex h-full justify-center p-1">
                                        <span class="self-center text-lg">
                                            <div
                                                class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border">
                                                <figure class="h-[28rem] w-full">
                                                    <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                                        alt="{{ $featuredExpedition->title }} Cover Image"
                                                        class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                                </figure>
                                                <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                                    <div class="card-body absolute inset-0 justify-end">
                                                        <div class="text-center">
                                                            <h2 class="font-bold text-white text-3xl uppercase">
                                                                {{ $featuredExpedition->title }}
                                                            </h2>
                                                            <h2
                                                                class="font-bold tracking-normal text-white line-clamp-2 text-3xl">
                                                                {{ $featuredExpedition->highest_altitude }} m
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- Previous Slide -->
                    <button type="button" class="carousel-prev">
                        <span class="size-9.5 bg-base-100 hidden items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button" class="carousel-next">
                        <span class="sr-only">Next</span>
                        <span class="size-9.5 bg-base-100 hidden items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                    </button>
                </div>
            </div> --}}

        </div>
        <div class="h-14"></div>
    </div>
@endif
