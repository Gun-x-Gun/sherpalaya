<div>
    @foreach ($recommendations as $key => $recommendationDatas)
        <div class="bg-blue-100/20">
            @if ($recommendationDatas->isNotEmpty())
                <div class="h-4"></div>
                <h5 class="card-title text-secondary uppercase font-normal text-3xl text-center">
                    Recommended {{ $key }}
                </h5>
                <div class="h-4"></div>

                <div class="lg:grid grid-cols-4 gap-2 flex flex-col">
                    @foreach ($recommendationDatas as $recommendation)
                        <div class="card group hover:shadow sm:max-w-sm bg-blue-100/80 h-full overflow-hidden">
                            <a href="{{ $recommendation->url }}">
                                <figure class="h-44">
                                    <img src="{{ $recommendation->coverImage }}"
                                        alt="{{ $recommendation->title }} Cover Image"
                                        class="transition-transform duration-500 group-hover:scale-110 h-44 object-cover" />
                                </figure>
                            </a>
                            <div class="card-body p-2">
                                <h5 class="card-title mb-2.5 uppercase text-primary text-wrap font-normal text-lg">
                                    {{ $recommendation->title }}
                                </h5>
                                <div class="justify-start flex flex-row items-center  gap-2">
                                    {{-- <span class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span> --}}
                                    <span
                                        class="text-primary uppercase items-center font-normal badge badge-outline badge-warning">
                                        {{ $recommendation->duration }}
                                    </span>
                                </div>
                                <div class="justify-start items-start gap-2 pt-3 text-sm text-balance">
                                    <div class="text-slate-700 capitalize items-center line-clamp-5 ">
                                        {{ $recommendation->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="h-8"></div>
            @endif


            @if ($recommendationDatas->count() === 1)
                <div class="bg-blue-100/60">
                    <div class="h-4"></div>
                    <h5 class="card-title text-secondary uppercase font-normal text-3xl text-center">
                        Recommended {{ $key }}
                    </h5>
                    <div class="h-4"></div>
                    <div class="lg:grid grid-cols-4 md:gap-8 flex flex-col gap-2 bg-blue-100/10">
                        <div>
                            
                        </div>
                        @foreach ($recommendationDatas as $recommendation)
                            <div
                                class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border col-span-2">
                                <figure class="h-[28rem] w-full">
                                    <img src="{{$recommendation->coverImage}}"
                                        alt="{{ $recommendation->title }} Cover Image"
                                        class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                                </figure>
                                <a href="{{ $recommendation->url }}">
                                    <div class="card-body absolute inset-0 justify-end">
                                        <div class="text-center">
                                            <h2 class="font-bold text-white text-2xl uppercase">
                                                {{ $recommendation->title }}
                                            </h2>
                                            <h2 class="font-bold tracking-normal text-white line-clamp-2 text-2xl">
                                                {{ $recommendation->duration }}
                                            </h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="h-14"></div>
                </div>

                {{-- >4 --}}
            @elseif ($recommendationDatas->count() > 1)
                <div class="bg-blue-100/10">
                    <div class="2xl:mx-44 mx-4 ">
                        <div class="h-4"></div>
                        <div id="multi-slide"
                            data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1, "sm": 1.8, "md": 2.5, "lg": 3.8 } }'
                            class="relative w-full">
                            <div class="carousel h-[28rem] rounded-none">
                                <div class="carousel-body h-full opacity-0">
                                    <!-- Slide 1 -->
                                    @foreach ($recommendationDatas as $recommendation)
                                        <div class="carousel-slide px-1 max-w-sm">
                                            <div
                                                class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border">
                                                <figure class="h-[28rem] max-w-sm">
                                                    <img src="{{ $recommendation->coverImage }}"
                                                        alt="{{ $recommendation->title }} Cover Image"
                                                        class="transition-transform duration-500 group-hover:scale-110 h-44 object-cover brightness-75" />
                                                </figure>
                                                <a href="{{ $recommendation->url }}">
                                                    <div class="card-body absolute inset-0 justify-end max-w-sm">
                                                        <div class="text-center">
                                                            <h2 class="font-bold text-white text-2xl uppercase">
                                                                {{ $recommendation->title }}
                                                            </h2>
                                                            <h2
                                                                class="font-bold tracking-normal text-white line-clamp-2 text-2xl">
                                                                {{ $recommendation->duration }}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Previous Slide -->
                            <button type="button" class="carousel-prev">
                                <span
                                    class="hidden md:flex icon-[tabler--chevron-left] size-8 text-white cursor-pointer rtl:rotate-180"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <!-- Next Slide -->
                            <button type="button" class="carousel-next">
                                <span class="sr-only">Next</span>
                                <span
                                    class="hidden md:flex icon-[tabler--chevron-right] size-8 text-white cursor-pointer rtl:rotate-180"></span>
                            </button>
                        </div>
                    </div>
                    <div class="h-14"></div>
                </div>
            @endif
        </div>
    @endforeach
</div>
