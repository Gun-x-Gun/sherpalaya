<x-website-layout>
    <div class="w-full bg-slate-200/40s">

        <div class="w-full min-h-96 flex flex-col justify-center items-center bg-blue-100/20">
            <div class="min-w-80">
                <div class="stats w-full">
                    <div class="stat">
                        <div class="stat-value">Find your adventure</div>
                        <x-search.search-input :query="$query" :type="$type" />
                        {{-- <div class="stat-desc">Explore</div> --}}
                        <h5 class="mt-1 line-clamp-2 uppercase text-md text-primary font-normal">
                            Your results for
                            <span class="badge badge-soft badge-secondary">{{ $query }}</span>
                            is ready
                        </h5>
                    </div>
                </div>

            </div>

        </div>
        @forelse ($results ?? [] as $resultType => $resultDatas)

            <div class="2xl:mx-44 mx-4 mt-4">
                {{-- bg-blue-100/20 --}}
                <h5 class="mb-2.5 line-clamp-2 uppercase text-2xl text-primary font-normal">
                    {{ $searchTypes->get($resultType)->getLabel() }}
                </h5>
                <div class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 items-center ">
                    @forelse ($resultDatas?->slice(0,8) ?? [] as $resultData)
                        <div class="card w-full ">
                            <div>
                                <div id="info-{{ $resultType }}"
                                    data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": 1 }'
                                    class="relative w-full">
                                    <div class="carousel h-80 rounded-none rounded-t-md">
                                        <div class="carousel-body h-full opacity-0">
                                            @forelse ($resultData?->images ?? [] as $image)
                                                <div class="carousel-slide">
                                                    <a href="{{ route('show_trek', $resultData->id) }}">
                                                        <div class="bg-base-200/50 flex h-full justify-center">
                                                            <span class="self-start w-full ">
                                                                <figure>
                                                                    <img src="{{ $image->url ?? asset('/photos/banner.jpg') }}"
                                                                        alt="{{ $resultData->title }} Cover Image"
                                                                        class="h-80 object-cover" />
                                                                </figure>
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @empty
                                                <div class="carousel-slide">
                                                    <a href="{{ route('show_trek', $resultData->id) }}">
                                                        <div class="bg-base-200/50 flex h-full justify-center">
                                                            <span class="self-start w-full ">
                                                                <figure>
                                                                    <img src="{{ asset('/photos/banner.jpg') }}"
                                                                        alt="{{ $resultData->title }} Cover Image"
                                                                        class="h-80 object-cover" />
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
                                        class="carousel-info absolute bottom-3 start-[90%] inline-flex -translate-x-[50%] justify-center rounded-lg text-white px-4">
                                        <span class="carousel-info-current me-1">0</span>
                                        /
                                        <span class="carousel-info-total ms-1">0</span>

                                        <button type="button" class="carousel-prev">
                                            <span
                                                class="size-9.5 text-white flex items-center justify-center rounded-full shadow">
                                                <span
                                                    class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </button>
                                        <!-- Next Slide -->
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
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        @empty
            <div class="w-full flex flex-col col-start-1 md:col-end-3 lg:col-end-4 items-center justify-center">
                <div class="flex-none card min-h-60 max-w-2xl">
                    <div class="card-body items-center justify-center">
                        <span class="icon-[tabler--brand-google-drive] mb-2 size-8"></span>
                        <p>No data to show.</p>
                    </div>
                </div>
            </div>
        @endforelse





    </div>


    {{-- @dd($results) --}}

</x-website-layout>
