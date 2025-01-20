<div class="bg-gray-300 relative">
    <div class="h-20 "></div>

    <div class="2xl:mx-44 mx-4  ">
        <h5 class="text-base-content text-4xl font-semibold text-center line-clamp-2">Explore Peaks With Sherpalaya</h5>
        <p class="text-base-content/80 text-base text-center mt-2 text-preety">
            
            Nepal’s towering Himalayan peaks, including Mount Everest, Annapurna, and Mera Peak, offer challenges and rewards that few places can match. Whether you're a seasoned mountaineer or a beginner aiming for trekking peaks, Sherpalaya ensures a safe and enriching journey. Guided by experienced Sherpas, you’ll not only conquer heights but also immerse yourself in the pristine beauty and cultural significance of these majestic mountains.
        </p>
        <span class="icon-[icon-park-twotone--mountain] size-40 mb-4 rotate-12 opacity-20 absolute top-15 left-[90] text-black">
                                    
        </span>
    </div>
</div>
@if ($peaks->where('is_featured', true)->count() >= 1)
    <div class="bg-gray-300">
        <div class="h-6">

        </div>
        <div class="2xl:mx-44 mx-4">
            <div id="horizontal-thumbnails" data-carousel='{ "loadingClasses": "opacity-0" }' class="relative w-full ">
                <div class="carousel rounded-none">
                    <div class="carousel-body h-[75vh] opacity-0 rounded-none">

                        @foreach ($peaks->where('is_featured', true) as $featuredPeak)
                            <!-- Slide 1 -->
                            <div class="carousel-slide rounded-none">
                                <div
                                    class="card--rounded-none image-full h-[85%] w-full relative flex items-center justify-end card-side group hover:shadow border">
                                    <figure class="h-full w-full">
                                        <img src="{{ $featuredPeak->featureImage->url ?? asset('photos/DSCF4385.JPG') }}"
                                            alt="{{ $featuredPeak->title }} Cover Image"
                                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                    </figure>
                                    <a href="{{ route('show_peak', $featuredPeak->id) }}">
                                        <div class="card-body absolute inset-0 flex items-center justify-end">
                                            <div class="text-left">
                                                <h2 class="font-bold text-primary text-4xl ">
                                                    {{ $featuredPeak->title }}
                                                </h2>
                                                <p
                                                    class="font-normal text-center tracking-normal text-white text-xl line-clamp-2">
                                                    {{ $featuredPeak->highest_altitude . 'm' }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if ($peaks->where('is_featured', true)->count() > 1)
                    <div
                        class="carousel-pagination bg-transparent absolute bottom-0 end-0 start-0 z-[1] h-[15%] flex justify-center gap-0 overflow-x-auto ">
                        @foreach ($peaks->where('is_featured', true) as $featuredPeak)
                            <img src="{{ $featuredPeak->featureImage->url ?? asset('photos/DSCF4385.JPG') }}"
                                alt="{{ $featuredPeak->title }} Cover Image"
                                class="carousel-pagination-item carousel-active:opacity-100 object-cover object-top opacity-50">
                        @endforeach
                    </div>
                    @endif
                    <!-- Previous Slide -->
                    <button type="button" class="carousel-prev">
                        <span class="mb-15" aria-hidden="true">
                            <span
                                class="size-9.5 bg-base-100  items-center justify-center rounded-full shadow hidden md:flex">
                                <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180 "></span>
                            </span>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button" class="carousel-next">
                        <span class="sr-only">Next</span>
                        <span class="mb-15" aria-hidden="true">
                            <span
                                class="size-9.5 bg-base-100  items-center justify-center rounded-full shadow hidden md:flex">
                                <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180 "></span>
                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="h-20">

        </div>
    </div>
@endif
