<div id="carousel-container" class="relative top-0 m-0 w-full ">
    <div id="snap"
        data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 10000, "isCentered": true, "dotsItemClasses": "carousel-box", "isInfiniteLoop": true}'
        class="relative h-full w-full">
        <div class="carousel rounded-none h-full w-full">
            <div class="carousel-body opacity-0 h-full w-full rounded-none">
                <!-- Slide 1 -->
                @foreach ($featuredData as $featured)
                    <div class="carousel-slide snap-center rounded-none">
                        <x-cards.carousel-card :id="$featured->id" :title="$featured->title" :url="$featured->url"
                            :image="$featured->image" />
                    </div>
                @endforeach

                {{-- <!-- Slide 2 -->
                 <div class="carousel-slide snap-center">
                     <x-cards.carousel-card />
                 </div>
                 <!-- Slide 3 -->
                 <div class="carousel-slide snap-center">
                     <x-cards.carousel-card />
                 </div>
                 <!-- Slide 4 -->
                 <div class="carousel-slide snap-center">
                     <x-cards.carousel-card />
                 </div> --}}
            </div>
        </div>
        <div class="carousel-pagination absolute bottom-8 end-0 start-0 flex justify-center gap-3 "></div>

        <!-- Previous Slide -->
        <button type="button" class="carousel-prev ">
            {{-- <span
                 class="size-9.5 bg-base-200 hover:bg-primary items-center justify-center rounded-full shadow bg-transparent hidden md:flex "> --}}
            <span
                class="icon-[tabler--chevron-left] size-10 cursor-pointer rtl:rotate-180 hover:text-primary text-white"></span>
            {{-- </span> --}}
            <span class="sr-only">Previous</span>
        </button>
        <!-- Next Slide -->
        <button type="button" class=" carousel-next ">
            {{-- <span
                 class="size-9.5 bg-base-200 hover:bg-primary  items-center justify-center rounded-full shadow bg-transparent hidden md:flex "> --}}
            <span
                class="icon-[tabler--chevron-right] size-10 cursor-pointer rtl:rotate-180 hover:text-primary text-white"></span>
            {{-- </span> --}}
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>
