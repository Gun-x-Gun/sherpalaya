@php
    $featuredPeaks = $peaks->where('is_featured', true);
@endphp
<div class="bg-blue-100/30">
    @if ($featuredPeaks->isNotEmpty())
        <div class="xl:mx-32 mx-4 ">
            <div>
                <div class="h-10"></div>
                <h3 class="text-4xl  tracking-widest text-center ">Peaks</h3>
                <p
                    class="text-md mt-2 text-slate-600 text-preety text-balance md:text-wrap md:text-center first-line:uppercase first-line:tracking-widest first-line:font-light ">
                    {{ $landingPageSetting->peak_activity_content }}
                </p>
            </div>
            <div class="">
                @if ($peaks->where('is_featured', true)->count() > 1)
                    <div class="h-6">
                    </div>
                    <div id="horizontal-thumbnails" data-carousel='{ "loadingClasses": "opacity-0" }'
                        class="relative w-full ">
                        <div class="carousel rounded-none">
                            <div class="carousel-body h-[75vh] opacity-0 rounded-none">
                                @foreach ($peaks->where('is_featured', true) as $featuredPeak)
                                    <!-- Slide 1 -->
                                    <div class="carousel-slide rounded-none">
                                        <div
                                            class="card--rounded-none image-full h-4/5 w-full relative flex items-center justify-end card-side group hover:shadow border">
                                            <figure class="h-full w-full">
                                                <img src="{{ $featuredPeak->featureImage->url ?? asset('photos/mountain1.jpg') }}"
                                                    alt="{{ $featuredPeak->title }} Cover Image"
                                                    class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75" />
                                            </figure>
                                            <a href="{{ route('show_peak', $featuredPeak->id) }}">
                                                <div class="card-body absolute inset-0 flex items-center justify-end ">
                                                    <div class="text-center">
                                                        <h2
                                                            class="font-bold text-white bg-gradient-to-r from-white to-white bg-clip-text uppercase text-4xl">
                                                            {{ $featuredPeak->title }}
                                                        </h2>
                                                        <h2
                                                            class=" tracking-normal text-white line-clamp-2 bg-gradient-to-r from-white to-white bg-clip-text text-transparent font-black text-4xl">
                                                            {{ $featuredPeak->highest_altitude }}m
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div
                                class="carousel-pagination  absolute bottom-0 end-0 start-0 z-[1] h-1/5 flex justify-center gap-0 overflow-x-auto ">
                                @foreach ($peaks->where('is_featured', true) as $featuredPeak)
                                    <img src="{{ $featuredPeak->featureImage->url ?? asset('photos/DSCF4385.JPG') }}"
                                        alt="{{ $featuredPeak->title }} Cover Image"
                                        class="carousel-pagination-item carousel-active:opacity-100 object-cover object-top opacity-50">
                                @endforeach
                            </div>
                            <!-- Previous Slide -->
                            <button type="button" class="carousel-prev">
                                <span class="mb-15" aria-hidden="true">
                                    <span
                                        class="icon-[tabler--chevron-left] size-8 text-white cursor-pointer rtl:rotate-180 hidden md:flex"></span>
                                </span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <!-- Next Slide -->
                            <button type="button" class="carousel-next">
                                <span class="sr-only">Next</span>
                                <span class="mb-15" aria-hidden="true">
                                    <span
                                        class="icon-[tabler--chevron-right] size-8 text-white cursor-pointer rtl:rotate-180 hidden md:flex "></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="h-16">

                    </div>
                @elseif($peaks->where('is_featured', true)->count() === 1)
                    <div class="h-8">
                    </div>
                    @foreach ($peaks->where('is_featured', true) as $featuredPeak)
                        <div
                            class="card--rounded-none image-full h-[30rem] w-full relative flex items-center justify-end card-side group hover:shadow border">
                            <figure class="h-full w-full">
                                <img src="{{ $featuredPeak->featureImage->url ?? asset('photos/DSCF4385.JPG') }}"
                                    alt="{{ $featuredPeak->title }} Cover Image"
                                    class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75" />
                            </figure>
                            <a href="{{ route('show_peak', $featuredPeak->id) }}">
                                <div class="card-body absolute inset-0 flex items-center justify-end ">
                                    <div class="text-center">
                                        <h2
                                            class="font-bold text-white bg-gradient-to-r from-white to-white bg-clip-text text-4xl uppercase">
                                            {{ $featuredPeak->title }}
                                        </h2>
                                        <h2
                                            class=" tracking-normal text-white line-clamp-2 bg-gradient-to-r from-white to-white bg-clip-text text-transparent font-black text-4xl">
                                            {{ $featuredPeak->highest_altitude }}m
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="h-16 ">
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
