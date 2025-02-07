<x-website-layout>
    <div class="w-full bg-white">
        <div class="h-32"></div>
        <div class="w-full min-h-96 flex flex-col justify-center items-center ">
            <div class="max-w-md">
                <div class="card w-full h-full bg-blue-100/60">
                    <img src="{{ asset('photos/logo.png') }}" alt=""
                        class="rounded-md shadow-lg shadow-indigo-500/50 w-25 absolute -right-10 -top-10 p-1">

                    <div class="w-full card-header">
                        <h5 class="card-title">
                            Find your adventure
                        </h5>
                    </div>
                    <div class="card-body">
                        <x-search.search-input :query="$query" :type="$type->value" />

                    </div>
                    <div class="card-footer text-center">
                        <h5 class="mt-1 line-clamp-2 uppercase text-md text-primary font-normal">
                            Your results for
                            <span class="badge badge-soft badge-secondary">{{ $query }}</span>
                            is ready
                        </h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @forelse ($results ?? [] as $resultType => $resultDatas)

        <div class="2xl:mx-44 mx-4 mt-4 bg-blue-100/20">
            {{-- bg-blue-100/20 --}}

            <div class="w-full">
                <x-carousel.full-width-carousel :header="$searchTypes->get($resultType)->getLabel()" viewAllUrl="/{{ Str::plural($resultType) }}">
                    <div
                        class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 flex flex-col items-center carousel-slide">
                        @forelse ($resultDatas?->slice(0,8) ?? [] as $resultData)
                            <x-search.search-result :searchedResult="$resultData" />
                        @empty
                        @endforelse
                    </div>
                </x-carousel.full-width-carousel>

            </div>
        </div>
    @empty
        <div
            class="w-full flex flex-col col-start-1 md:col-end-3 lg:col-end-4 items-center justify-center bg-slate-200/40">
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
