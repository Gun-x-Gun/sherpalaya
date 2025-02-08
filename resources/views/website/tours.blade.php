<x-website-layout>
    <div class="bg-blue-100/30">
        <div class="card--rounded-none image-full bg-blue-100/50 h-[80vh] relative">
            <figure class="h-[80vh] w-full">
                <x-curator-glider class="h-[80vh] w-full object-cover brightness-50" :media="$pageSetting->tour_page_cover_image_id ?? null" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />
            </figure>
            <div class="card-body absolute inset-0 flex items-center justify-start">
                <div class="absolute bottom-1/4 left-4 lg:left-4 xl:left-32 transform translate-y-1/2 overflow-hidden">
                    <h5 class="card-title mb-2.5 text-warning text-2xl md:text-5xl uppercase font-extrabold">
                        Explore
                    </h5>
                    <h2 class="card-title mb-2.5 text-white text-3xl md:text-6xl uppercase font-bold">
                        Tours
                    </h2>
                    <h5 class="card-title mb-2.5 text-warning text-2xl md:text-5xl uppercase font-extrabold">
                        With Sherpalaya
                    </h5>
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
                    'name' => 'Tours',
                ],
            ]" />
            <div class="h-4 "></div>
            <div class="xl:mx-32 mx-4 text-left">
                <p
                    class="text-base text-left  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light ">
                    {{ $pageSetting->tour_page_content }}
                </p>
            </div>
            <div class="h-8"></div>
        </div>




        {{-- Showing <strong>{{ $tourRegion->tours->count() }}</strong> --}}
        <div class="xl:mx-32 mx-4">
            @foreach ($tourTypes as $type => $tours)
                @php
                    $typeLabel = \App\Enums\TourType::tryFrom($type)?->getLabel() ?? 'Unknown';
                @endphp
                <div >
                    <div class="h-8"></div>
                    @if ($tours->isNotEmpty())
                        <h5 class="card-title mb-2.5 line-clamp-2 uppercase text-xl md:text-2xl lg:text-center text-primary font-bold">
                            {{ $type }} Tours Packages
                        </h5>
                        <div class="h-2"></div>
                        <div id="type-{{$type}}" class="hidden md:grid md:grid-cols-2 lg:grid-cols-3  gap-4">
                            @foreach ($tours as $tour)
                                <div class="card w-full ">
                                    <div>
                                        <div id="info"
                                            data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                                            class="relative w-full">
                                            <div class="carousel h-60 rounded-none rounded-t-md">
                                                <div class="carousel-body h-full opacity-0">
                                                    @foreach ($tour->images as $image)
                                                    <div class="carousel-slide">
                                                        <a href="{{ route('show_tour', $tour->id) }}">
                                                            <div class="bg-base-200/50 flex h-full justify-center">
                                                                <span class="self-start w-full ">
                                                                    <figure>
                                                                        <img src="{{ $image->url ?? asset('photos/P1030127.JPG') }}"
                                                                            alt="{{ $tour->title }} Cover Image"
                                                                            class="h-60 object-cover" />
                                                                    </figure>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- Previous Slide -->

                                            <div
                                                class="carousel-info absolute bottom-3 start-[85%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-4">
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
                                        <a href="{{ route('show_tour', $tour->id) }}">
                                            <h5
                                                class="card-title mb-1 line-clamp-2 uppercase text-lg text-blue-700 font-semibold">
                                                {{ $tour->title }}</h5>
                                        </a>
                                        <div class="justify-start flex flex-row items-center  gap-2">
                                            <span
                                                class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span>
                                            {{-- <span class="text-primary font-font-extralight	 uppercase items-center px-2"> Duration : </span> --}}
                                            <span class="text-slate-800 uppercase items-center font-semibold ">
                                                {{ $tour->duration }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="bg-blue-100/60 md:hidden">
                            <div id="multi-slide"
                                data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1 } }'
                                class="relative w-full ">
                                <div class="carousel h-full rounded-none ">
                                    <div class="carousel-body h-full opacity-0 ">
                                        <!-- Slide 1 -->
                                        @foreach ($tours as $tour)
                                            <div class="carousel-slide max-w-sm px-1">
                                                <div class="card w-full ">
                                                    <a href="{{ route('show_tour', $tour->id) }}">
                                                        <figure>
                                                            <img src="{{ $tour->coverImage?->url ?? asset('photos/P1030127.JPG') }}"
                                                                alt="{{ $tour->title }} Cover Image"
                                                                class="h-[20rem] object-cover" />
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="card-body bg-blue-100 px-2 pt-2">
                                                    <a href="{{ route('show_tour', $tour->id) }}">
                                                        <h5
                                                            class="card-title mb-1 line-clamp-2 uppercase text-lg text-blue-700 font-semibold">
                                                            {{ $tour->title }}</h5>
                                                    </a>
                                                    <div class="justify-start flex flex-row items-center  gap-2">
                                                        <span
                                                            class="icon-[solar--calendar-outline] size-5 font-extrabold text-slate-800"></span>
                                                        <span
                                                            class="text-slate-800 uppercase items-center font-semibold ">
                                                            {{ $tour->duration }}
                                                        </span>
                                                    </div>
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
                    @endif
                </div>
            @endforeach
        </div>
        <div class="h-10"></div>
    </div>
</x-website-layout>
