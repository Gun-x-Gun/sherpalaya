<x-website-layout>
    <div class="w-full min-h-96 flex flex-col justify-center items-center bg-slate-200">
        <div class="min-w-80">
            <p class="text-2xl font-semibold mb-2 text-center">
                Find your adventure
            </p>
            <x-search.search-input :query="$query" :type="$type" />
        </div>

    </div>

    <h5 class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
        Search Results for: {{ $query }}
    </h5>
    <div class="md:grid md:grid-cols-2 lg:grid-cols-3  flex flex-col gap-4">
        @forelse ($results['trek'] as $trek)
            <div class="card w-full ">
                <div>
                    <div id="info"
                        data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                        class="relative w-full">
                        <div class="carousel h-80 rounded-none rounded-t-md">
                            <div class="carousel-body h-full opacity-0">
                                @foreach ($trek->images as $image)
                                    <div class="carousel-slide">
                                        <a href="{{ route('show_trek', $trek->id) }}">
                                            <div class="bg-base-200/50 flex h-full justify-center">
                                                <span class="self-start w-full ">
                                                    <figure>
                                                        <img src="{{ $image->url ?? asset('/photos/banner.jpg') }}"
                                                            alt="{{ $trek->title }} Cover Image"
                                                            class="h-80 object-cover" />
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
                            class="carousel-info absolute bottom-3 start-[90%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-4">
                            <span class="carousel-info-current me-1">0</span>
                            /
                            <span class="carousel-info-total ms-1">0</span>

                            <button type="button" class="carousel-prev">
                                <span class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                    <span
                                        class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                </span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <!-- Next Slide -->
                            <button type="button" class="carousel-next">
                                <span class="sr-only">Next</span>
                                <span class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                    <span
                                        class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body px-2 pt-2 bg-blue-100/30 ">
                    <a href="{{ route('show_trek', $trek->id) }}">
                        <h5 class="card-title mb-2.5 line-clamp-2 uppercase text-xl text-primary font-normal">
                            {{ $trek->title }}</h5>
                    </a>
                    <div class="justify-start flex flex-row items-center  gap-2">
                        <span class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span>
                        {{-- <span class="text-primary font-font-extralight	 uppercase items-center px-2"> Duration : </span> --}}
                        <span class="text-primary uppercase items-center font-extrabold ">
                            {{ $trek->duration . ' days' }}
                        </span>
                    </div>
                </div>
            </div>
        @empty
            <div class="card min-h-60 w-full">
                <div class="card-body items-center justify-center">
                    <span class="icon-[tabler--brand-google-drive] mb-2 size-8"></span>
                    <p>No data to show.</p>
                </div>
            </div>
        @endforelse
    </div>

    {{-- @dd($results) --}}

</x-website-layout>
