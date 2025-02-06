<style>
    @media (min-width: 768px) {
        @media (max-width: 1280px) {
            .at-a-glimpse:nth-child(n+4) {
                display: none;
            }
        }

        @media (min-width: 1280px) {
            at-a-glimpse:nth-child(4) {
                display: flex;
            }

            at-a-glimpse:nth-child(n+5) {
                display: none;
            }
        }
    }
</style>

<div class="">
    <div class="card-header  px-0">
        <h5 class="card-title text-secondary uppercase font-semibold text-2xl">
            At a glimpse
        </h5>
    </div>


    {{-- At a glimpse --}}
    <div class="sm:grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 overflow-x-hidden  gap-4">
        @foreach ($expedition->destinations->slice(0, 4) as $destination)
            <div class="card w-full bg-blue-100/60 at-a-glimpse my-2 ">
                {{-- @if (!empty($destination->destinationImages) && $destination->destinationImages->isNotEmpty()) --}}
                <div>
                    <div id="limited-destiinations-images"
                        data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                        class="relative w-full">
                        <div class="carousel h-44 rounded-none rounded-t-md">
                            <div class="carousel-body h-full opacity-0">
                                @foreach ($destination->destinationImages as $destinationImage)
                                    <div class="carousel-slide">
                                        <div class="bg-base-200/50 flex h-full justify-center">
                                            <span class="self-start w-full">
                                                <figure>
                                                    <img src="{{ $destinationImage?->url ?? asset('/photos/banner.jpg') }}"
                                                        alt="{{ $destination->name }} Cover Image"
                                                        class="h-44 object-cover" />
                                                </figure>
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Previous and Next buttons -->
                        <div
                            class="carousel-info absolute bottom-3 start-[88%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-3">
                            <span class="carousel-info-current me-0">0</span>
                            /
                            <span class="carousel-info-total ms-0">0</span>
                            <button type="button" class="carousel-prev">
                                <span class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                    <span
                                        class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                </span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button" class="carousel-next">
                                <span class="sr-only">Next</span>
                                <span class="size-9.5 text-white flex items-center justify-center rounded-full shadow ">
                                    <span
                                        class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180 "></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- @endif --}}

                <div class="card-body px-2 pt-2 bg-transparent">
                    <h5 class="card-title mb-1 line-clamp-2 uppercase text-lg text-blue-800 font-bold">
                        {{ $destination->name }}
                    </h5>

                    <div class="justify-start flex flex-col items-start gap-2">
                        <p class="text-slate-700 uppercase items-center badge badge-warning  px-1 py-0 text-xs">
                            {{ $destination->region->name }} Region
                        </p>
                        <p class="text-slate-800 tracking-tighter">
                            {{ Str::words($destination->description, 50) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
