@if ($featuredExpeditions->count() > 0)
    <div class="bg-blue-100/40">
        <div class="xl:mx-32 mx-4 font-body">
            <div class="h-10 md:h-20"></div>
            <div class="md:px-8"data-aos="fade-down" data-aos-duration="1200">
                <h5
                    class="text-4xl md:text-5xl font-oswald line-clamp-2 uppercase tracking-wider text-black text-left md:text-left  ">
                    Expeditions</h5>
                <p
                    class="text-xl/7 mt-4 text-preety text-slate-800 lg:text-left 
                     font-light font-body break-all">
                    {{ $landingPageSetting->expedition_activity_content }}
                </p>
                <div class="h-6 md:h-12"></div>
            </div>
            <div class="flex flex-col md:grid grid-cols-3 md:gap-2 bg-blue-100/10 ">
                @foreach ($featuredExpeditions->slice(0, 4) as $featuredExpedition)
                    @if ($loop->index % 2 === 0)
                        {{-- First Iteration: col-span-1 on the text and col-span-2 on the image --}}
                        <div class="card rounded-none px-8 py-16 col-span-1 hidden md:block group justify-center items-center bg-blue-100"
                            data-aos="fade-down" data-aos-duration="1200">
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <h5
                                    class=" text-2xl  line-clamp-2 font-bold tracking-tighter font-body text-stone-700 lg:text-left  uppercase group-hover:underline  decoration-8 decoration-warning   group-hover:underline-offset-4">
                                    {{ $featuredExpedition->title }}
                                </h5>
                            </a>
                            <p
                                class=" mt-4 text-preety text-stone-700 break-all font-body  font-light text-xl/8   line-clamp-[6] ">
                                {{ strip_tags($featuredExpedition->description) }}
                            </p>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <button class="btn btn-primary btn-md pl-2 mt-6 text-base hover:btn-warning">
                                    <span class="icon-[ci--chevron-right] size-4"></span>
                                    Explore
                                </button>
                            </a>
                        </div>
                        <div class="card rounded-none font-oswald image-full w-full h-full relative flex items-center card-side group hover:shadow border col-span-2 "
                            data-aos="fade-down" data-aos-duration="1200">
                            <figure class="h-[28rem] w-full ">
                                <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                    alt="{{ $featuredExpedition->title }} Cover Image"
                                    class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-[28rem] w-full object-cover" />
                            </figure>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <div class="card-body absolute inset-0 justify-center md:justify-center">
                                    <div class="text-center ">
                                        <h2 class="font-bold text-blue-50 text-3xl md:text-3xl uppercase">
                                            {{ $featuredExpedition->title }}
                                        </h2>
                                        <h2
                                            class="font-bold tracking-normal text-blue-50 uppercase line-clamp-2 text-3xl md:text-3xl">
                                            {{ $featuredExpedition->highest_altitude }} m
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card rounded-none px-2 py-2 col-span-1  md:hidden group justify-start items-start "
                            data-aos="fade-down" data-aos-duration="1200">
                            <p
                                class="text-preety text-stone-700 break-all font-body font-light text-xl/8 line-clamp-[6] ">
                                {{ strip_tags($featuredExpedition->description) }}
                            </p>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <button
                                    class="btn btn-primary btn-md my-4 text-base hover:btn-warning justify-start pl-2">
                                    <span class="icon-[ci--chevron-right] size-5 "></span>
                                    Explore
                                </button>
                            </a>
                        </div>
                    @else
                        {{-- Second Iteration: col-span-2 on the text and col-span-1 on the image --}}
                        <div class="card rounded-none font-oswald image-full w-full h-full relative flex items-center card-side group hover:shadow border col-span-2"
                            data-aos="fade-down" data-aos-duration="1200">
                            <figure class="h-[28rem] w-full">
                                <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                    alt="{{ $featuredExpedition->title }} Cover Image"
                                    class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-[28rem] w-full object-cover" />
                            </figure>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <div class="card-body absolute inset-0 justify-center md:justify-center">
                                    <div class="text-center ">
                                        <h2
                                            class="font-bold tracking-tighter text-blue-50 text-2xl md:text-3xl uppercase">
                                            {{ $featuredExpedition->title }}
                                        </h2>
                                        <h2
                                            class="font-bold tracking-wide mt-2 text-blue-50 uppercase line-clamp-2 text-2xl md:text-3xl">
                                            {{ $featuredExpedition->highest_altitude }} m
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card rounded-none px-8 py-16 col-span-1 hidden md:block group justify-center items-center bg-blue-100"
                            data-aos="fade-down" data-aos-duration="1200">
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <h5
                                    class=" text-2xl  line-clamp-2 font-bold tracking-tighter font-body text-stone-700 lg:text-left  uppercase group-hover:underline  decoration-8 decoration-warning   group-hover:underline-offset-4">
                                    {{ $featuredExpedition->title }}
                                </h5>
                            </a>
                            <p
                                class=" mt-4 text-preety text-stone-700 break-all font-body  font-light text-xl/8   line-clamp-[6] ">
                                {{ strip_tags($featuredExpedition->description) }}
                            </p>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <button class="btn btn-primary btn-md mt-6 text-base hover:btn-warning pl-2">
                                    <span class="icon-[ci--chevron-right] size-4"></span>
                                    Explore
                                </button>
                            </a>
                        </div>
                        <div class="card rounded-none px-2 py-2 col-span-1  md:hidden group justify-start items-start bg-blue-100"
                            data-aos="fade-down" data-aos-duration="1200">
                            <p
                                class="text-preety text-stone-700 break-all font-body font-light text-xl/8 line-clamp-[6] ">
                                {{ strip_tags($featuredExpedition->description) }}
                            </p>
                            <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                <button
                                    class="btn btn-primary btn-md my-4 text-base hover:btn-warning justify-start pl-2">
                                    <span class="icon-[ci--chevron-right] size-5 "></span>
                                    Explore
                                </button>
                            </a>
                        </div>
                    @endif

                    {{-- Add height between iterations except for the last one --}}
                    {{-- @unless ($loop->last)
                        <div class=" h-2 col-span-3"></div>
                    @endunless --}}
                @endforeach
            </div>

            <div class="h-6"></div>
            <div class="hidden md:grid grid-cols-2 md:gap-4 bg-blue-100/10 ">
                @foreach ($featuredExpeditions->slice(5, 10) as $featuredExpedition)
                    {{-- First Iteration: col-span-1 on the text and col-span-2 on the image --}}
                    <div class="card rounded-none font-oswald image-full w-full h-full relative flex items-center card-side group hover:shadow border col-span-1 "
                        data-aos="fade-down" data-aos-duration="1200">
                        <figure class="h-[28rem] w-full ">
                            <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                alt="{{ $featuredExpedition->title }} Cover Image"
                                class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-[28rem] w-full object-cover" />
                        </figure>
                        <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                            <div class="card-body absolute inset-0 justify-center md:justify-center">
                                <div class="text-center ">
                                    <h2 class="font-bold text-blue-100 text-3xl md:text-3xl uppercase">
                                        {{ $featuredExpedition->title }}
                                    </h2>
                                    <h2
                                        class="font-bold tracking-normal text-blue-100 uppercase line-clamp-2 text-3xl md:text-3xl">
                                        {{ $featuredExpedition->highest_altitude }} m
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            @if ($featuredExpeditions->count() > 4)
                <div id="multi-slide"
                    data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1, "sm": 1.8, "md": 2.5, "lg": 3.1, "xl": 3.5 } }'
                    class="relative w-full md:hidden">
                    <div class="carousel h-[28rem] rounded-none">
                        <div class="carousel-body h-full opacity-0">
                            <!-- Slide 1 -->
                            @foreach ($featuredExpeditions->slice(5, 10) as $featuredExpedition)
                                <div class="carousel-slide px-1 max-w-sm">
                                    <div
                                        class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border">
                                        <figure class="h-[28rem] max-w-sm">
                                            <img src="{{ optional($featuredExpedition->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                                alt="{{ $featuredExpedition->title }} Cover Image"
                                                class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full max-w-sm object-cover" />
                                        </figure>
                                        <a href="{{ route('show_expedition', $featuredExpedition->id) }}">
                                            <div class="card-body absolute inset-0 justify-end">
                                                <div class="text-center">
                                                    <h2 class="font-bold text-blue-50 text-2xl uppercase">
                                                        {{ $featuredExpedition->title }}
                                                    </h2>
                                                    <h2
                                                        class="font-bold tracking-normal text-blue-50 line-clamp-2 text-2xl">
                                                        {{ $featuredExpedition->highest_altitude }} m
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
            @endif
        </div>
        <div class="h-15 md:h-20"></div>
    </div>
@endif
