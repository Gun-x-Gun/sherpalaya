<x-website-layout>
    <div class="bg-blue-100/50">
        <div class="card--rounded-none image-full bg-blue-100/50 h-[80vh] relative">
            <figure class="h-[80vh] w-full">
                <x-curator-glider class="h-[80vh] w-full object-cover brightness-50" :media="$pageSetting->expedition_page_cover_image_id ?? null" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />
            </figure>
            <div class="card-body absolute inset-0 flex items-center justify-start">
                <div class="absolute bottom-1/4 left-4 xl:left-32 transform translate-y-1/2 overflow-hidden" data-aos="fade-down" data-aos-duration="1200">
                    <h5 class="card-title mb-2.5 text-warning text-2xl md:text-5xl uppercase font-extrabold">
                        Sherpalaya
                    </h5>
                    <h2 class="card-title mb-2.5 text-white text-3xl md:text-6xl uppercase font-bold">
                        Expeditions
                    </h2>
                </div>
            </div>
        </div>

        <div class="bg-blue-100/50">
            <x-breadcrumb :breadcrumbs="[
                [
                    'name' => 'Home',
                    'url' => url('/home'),
                ],
                [
                    'name' => 'Expedition',
                ],
            ]" />
            <div class="h-4">

            </div>
            <div class="xl:mx-32 mx-4 text-left" data-aos="fade-down" data-aos-duration="1200">
                <p
                    class="text-md text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light ">
                    {{ $pageSetting->expedition_page_content }}
                </p>
            </div>
            <div class="h-8 "></div>
        </div>

        <div class="h-8"></div>


        <div class="xl:mx-32 mx-4">
            @foreach ($expeditionsRegion as $expeditionRegion)
                @if ($expeditionRegion->expeditions->isNotEmpty())
                    <div id="region-{{ $expeditionRegion->id }}">
                        <h5
                            class="card-title mb-2.5 line-clamp-2 uppercase text-2xl text-primary text-center font-semibold" data-aos="fade-down" data-aos-duration="1200">
                            {{ $expeditionRegion->name }} Region
                        </h5>
                        <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-2  gap-3">
                            @foreach ($expeditionRegion->expeditions as $expedition)
                                <div
                                    class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border " data-aos="fade-down" data-aos-duration="1200">
                                    <figure class="h-[25rem] w-full">
                                        <img src="{{ optional($expedition->coverImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                            alt="{{ $expedition->title }} Cover Image"
                                            class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                    </figure>
                                    <a href="{{ route('show_expedition', $expedition->id) }}">
                                        <div class="card-body absolute inset-0 justify-end">
                                            <div class="text-center" data-aos="fade-down" data-aos-duration="2000">
                                                <h2 class="font-bold text-white text-2xl uppercase">
                                                    {{ $expedition->title }}
                                                </h2>
                                                <h2 class="font-bold tracking-normal text-white line-clamp-2 text-2xl">
                                                    {{ $expedition->highest_altitude }} m
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="h-4"></div>
                    </div>
                    <div class="bg-blue-100/60 md:hidden">
                        <div id="multi-slide"
                            data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1 } }'
                            class="relative w-full ">
                            <div class="carousel h-full rounded-none ">
                                <div class="carousel-body h-full opacity-0 ">
                                    <!-- Slide 1 -->
                                    @foreach ($expeditionRegion->expeditions as $expedition)
                                        <div class="carousel-slide max-w-sm px-1">
                                            <div
                                                class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border">
                                                <figure class="h-[28rem] max-w-sm">
                                                    <img src="{{ optional($expedition->coverImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                                        alt="{{ $expedition->title }} Cover Image"
                                                        class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full max-w-sm object-cover" />
                                                </figure>
                                                <a href="{{ route('show_expedition', $expedition->id) }}">
                                                    <div class="card-body absolute inset-0 justify-end">
                                                        <div class="text-center">
                                                            <h2 class="font-bold text-white text-2xl uppercase">
                                                                {{ $expedition->title }}
                                                            </h2>
                                                            <h2
                                                                class="font-bold tracking-normal text-white line-clamp-2 text-2xl">
                                                                {{ $expedition->highest_altitude }} m
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
                    <div class="h-14"></div>
                @endif
            @endforeach
        </div>


        <div class="h-12"></div>
    </div>

</x-website-layout>
