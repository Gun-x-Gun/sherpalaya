<div class="px-2">
    <div class="card text-white sm:max-w-sm">
        <div>
            <div id="search-result-{{ $result->type->value }}-{{ $result->id }}"
                data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                class="relative w-full">
                <div class="carousel h-80 rounded-md">
                    <div class="carousel-body h-full opacity-0">
                        @forelse ([$result->coverImage] ?? [] as $image)
                            <div class="carousel-slide">
                                <a href="{{ $result->url }}">
                                    <div class="bg-base-200/50 flex h-full justify-center">
                                        <span class="self-start w-full ">
                                            <figure>
                                                <img src="{{ $image->url ?? asset('/photos/banner.jpg') }}"
                                                    alt="{{ $result->title }} Cover Image" class="h-80 object-cover" />
                                            </figure>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="carousel-slide">
                                <a href="{{ $result->url }}">
                                    <div class="bg-base-200/50 flex h-full justify-center">
                                        <span class="self-start w-full ">
                                            <figure>
                                                <img src="{{ asset('/photos/banner.jpg') }}"
                                                    alt="{{ $result->title }} Cover Image" class="h-80 object-cover" />
                                            </figure>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Previous Slide -->

                <div
                    class="carousel-info absolute bottom-3 start-[85%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-4">
                    <span class="carousel-info-current me-1">0</span>
                    /
                    <span class="carousel-info-total ms-1">0</span>

                    <button type="button" class="carousel-prev">
                        <span class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button" class="carousel-next">
                        <span class="sr-only">Next</span>
                        <span class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body px-2 pt-2 bg-blue-100/30">
            <h2 class="card-title mb-2.5 text-black">
                {{ $result->title }}
            </h2>
        </div>

    </div>
</div>
