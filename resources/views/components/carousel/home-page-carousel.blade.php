<header id="home-page-carousel-container" class="h-dvh w-full">
    <div id="snap"
        data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 10000, "isCentered": true, "dotsItemClasses": "carousel-dot border shadow-black bg-warning bg-opacity-20 carousel-active:bg-warning carousel-active:bg-opacity-70", "isInfiniteLoop": true}'
        class="relative h-full w-full ">
        <div class="carousel rounded-none h-full w-full">
            <div class="carousel-body opacity-0 h-full w-full rounded-none ">
                <!-- Slide 1 -->
                @foreach ($featuredData as $featured)
                    <div class="carousel-slide snap-center rounded-none ">
                        {{-- <x-cards.carousel-card :id="$featured->id" :title="$featured->title" :url="$featured->url" :image="$featured->image"
                            :description="$featured->description" /> --}}

                        <div class="card--rounded-none image-full  h-dvh relative ">
                            {{-- <x-curator-glider class="h-dvh w-full object-cover brightness-75" :media="$image" :fallback="asset('/photos/banner.jpg')"
                                        loading="lazy" alt="{{ $title }} Image" /> --}}
                            <figure class="h-dvh w-full bg-gray-600">
                                <img src="{{ optional($featured->image)->url ?? asset('photos/DSCF2600.JPG') }}"
                                    alt="{{ $featured->title }} Cover Image"
                                    class="brightness-75 h-dvh w-full object-cover" />
                            </figure>
                            <div class="card-body absolute inset-0 flex items-center justify-start leading-[1.1] md:leading-snug"
                                data-aos="fade-down" data-aos-duration="1500">
                                <div class="absolute bottom-2/4 left-4 xl:left-32 transform translate-y-1/2 ">
                                    <h2
                                        class="card-title mb-2 text-warning text-4xl sm:text-5xl md:text-6xl  uppercase font-card font-semibold tracking-tight text-preety md:w-[70%] leading-[1.3]  overflow-hidden opacity-75">
                                        {{ $featured->title }}
                                    </h2>
                                    <h5
                                        class="card-title  mb-8 text-blue-50 text-4xl sm:text-5xl md:text-6xl  uppercase font-card font-semibold tracking-wide text-wrap md:w-[70%] leading-[1.3]  overflow-hidden opacity-75">
                                        {{ $featured->description }}
                                    </h5>
                                    <a href="{{ $featured->url }}">
                                        <button
                                            class="btn btn-primary btn-lg  gap-2 rounded-full text-base hover:btn-warning tracking-wide pl-2 opacity-80">
                                            <span class="icon-[mdi--chevron-double-right] size-5 "></span>
                                            {{ __('home-carousel.explore') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="carousel-pagination absolute bottom-8 end-0 start-0 flex justify-center gap-3 "></div>

        <!-- Previous Slide -->
        <span
            class="icon-[tabler--chevron-left] carousel-prev size-10 cursor-pointer rtl:rotate-180 hover:text-warning text-white hidden xl:flex justicy-center lg:absolute top-1/2 left-1 opacity-50 hover:opacity-100"></span>
        <span class="sr-only">Previous</span>
        <!-- Next Slide -->
        <span
            class="icon-[tabler--chevron-right] carousel-next size-10 cursor-pointer rtl:rotate-180 hover:text-warning text-white  hidden xl:flex absolute top-1/2 right-1 opacity-50 hover:opacity-100"></span>
        <span class="sr-only">Next</span>
    </div>
</header>


{{-- our-teamound --}}
{{-- <div id="indicators" data-carousel='{ "loadingClasses": "opacity-0", "dotsItemClasses": "carousel-dot" }'
    class="relative w-full">
    <div class="carousel h-screen rounded-none">
        <div class="carousel-body h-full w-full opacity-0">
            <!-- Slide 1 -->
            @foreach ($featuredData as $featured)
                <div class="carousel-slide">
                    <x-cards.carousel-card :id="$featured->id" :title="$featured->title" :url="$featured->url" :image="$featured->image" />
                </div>
            @endforeach
        </div>
    </div>
    <div class="carousel-pagination absolute bottom-3 end-0 start-0 flex justify-center gap-3">
    </div>
</div> --}}
