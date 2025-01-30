<div class="w-full">
    <div id="{{ $carouselId }}" data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": false }'
        class="w-full">
        <!-- Carousel Container -->
        <div class="relative">
            @if ($header)
                <div class="flex flex-row items-center mb-2.5 -full">
                    <div class="flex-1">
                        <h5 class="uppercase text-2xl text-primary font-normal">
                            {{ $header }}
                        </h5>
                    </div>
                    <div class="flex-none relative w-24 mr-2">
                        <!-- Previous Slide -->
                        <button type="button"
                            class="carousel-prev bg-green-300">
                            <span class="icon-[tabler--chevron-left] size-8 cursor-pointer bg-green-950 backdrop-brightness-50" ></span>
                        </button>
                        <!-- Next Slide -->
                        <button type="button"
                            class="carousel-next bg-green-300/25 border-green-300">
                            <span class="icon-[tabler--chevron-right] size-8 cursor-pointer "></span>
                        </button>
                    </div>
                </div>
            @endif

            <!-- Carousel Content -->
            <div class="carousel h-full">
                <div class="carousel-body h-full opacity-0">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
