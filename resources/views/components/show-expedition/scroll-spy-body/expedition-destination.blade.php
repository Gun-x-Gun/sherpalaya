<div class="bg-blue-100/50">
    @if (!empty($expedition->destinations))
        <div id="destination" class="card 2xl:max-w-full rounded-none bg-transparent ">
            <div class="h-6">

            </div>
            <div class="card-header  pb-4  px-2">
                <h5 class="card-title text-secondary uppercase font-normal text-3xl">
                    Destinations
                </h5>
            </div>

            <div class="sm:grid sm:grid-cols-2 md:grid-cols-3 flex flex-col gap-2 w-full md:px-2">
                @foreach ($expedition->destinations as $destination)
                    <div class="card w-full bg-blue-100/30 overflow-hidden">
                        {{-- @if (!empty($destination->destinationImages) && $destination->destinationImages->isNotEmpty()) --}}
                        <div>
                            <div id="all-destinations-images"
                                data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                                class="relative w-full">
                                <div class="carousel h-44 rounded-none rounded-t-md">
                                    <div class="carousel-body h-full opacity-0">
                                        @foreach ($destination->destinationImages as $destinationImage)
                                            <div class="carousel-slide">
                                                <div class="bg-base-200/50 flex h-full justify-center">
                                                    <span class="self-start w-full">
                                                        <figure>
                                                            <x-curator-glider class="h-44 object-cover"
                                                                :media="$destinationImage" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                                                        </figure>
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Previous and Next buttons -->
                                <div
                                    class="carousel-info absolute bottom-3 start-[85%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-3">
                                    <span class="carousel-info-current me-0">0</span>
                                    /
                                    <span class="carousel-info-total ms-0">0</span>
                                    <button type="button" class="carousel-prev">
                                        <span
                                            class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                            <span
                                                class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </button>
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
                        {{-- @endif --}}

                        <div class="card-body px-2 pt-2 bg-transparent">
                            <h5 class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                                {{ $destination->name }}
                            </h5>

                            <div class="justify-start flex flex-col items-start gap-2">

                                <p class="text-slate-700 uppercase items-center badge badge-outline badge-warning">
                                    {{ $destination->region->name }} Region
                                </p>
                                {{-- @if (!empty($destination->location['lat']) && !empty($destination->location['lng']))
                        <a href="https://maps.google.com/?q={{ $destination->location['lat'] }},{{ $destination->location['lng'] }}"
                            target="_blank" rel="noopener noreferrer">
                            <p class="text-primary">
                                Location: {{ $destination->location['lat'] }},
                                {{ $destination->location['lng'] }}
                            </p>
                        </a>
                    @else
                        <p class="text-slate-500 italic">Location not available
                        </p>
                    @endif --}}
                                <p class="text-slate-700 ">
                                    {{ Str::words($destination->description, 50) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h-6">

            </div>
        </div>
    @endif
</div>
