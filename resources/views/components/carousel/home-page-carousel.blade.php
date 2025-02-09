<div id="carousel-container" class=" w-full">
    <div id="snap"
        data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 10000, "isCentered": true, "dotsItemClasses": "carousel-box","isInfiniteLoop": true}'
        class="relative h-full w-full">
        <div class="carousel rounded-none h-full w-full">
            <div class="carousel-body opacity-0 h-full w-full rounded-none " data-aos="fade-right" data-aos-duration="1500">
                <!-- Slide 1 -->
                @foreach ($featuredData as $featured)
                    <div class="carousel-slide snap-center rounded-none" >
                        <x-cards.carousel-card :id="$featured->id" :title="$featured->title" :url="$featured->url"
                            :image="$featured->image" />
                    </div>
                @endforeach
            </div>
        </div>
        <div class="carousel-pagination absolute bottom-8 end-0 start-0 flex justify-center gap-3 "></div>

        <!-- Previous Slide -->
        <button type="button" class="carousel-prev h-[5%] lg:absolute top-1/2 ">
            <span
                class="icon-[tabler--chevron-left] size-10 cursor-pointer rtl:rotate-180 hover:text-primary text-white hidden md:flex justicy-center "></span>
            <span class="sr-only">Previous</span>
        </button>
        <!-- Next Slide -->
        <button type="button" class=" carousel-next h-[5%] absolute top-1/2 ">
            <span
                class="icon-[tabler--chevron-right] size-10 cursor-pointer rtl:rotate-180 hover:text-primary text-white  hidden md:flex"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>



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
