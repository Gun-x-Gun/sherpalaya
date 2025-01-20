<div class="bg-slate-300">
    <div class="card--rounded-none image-full h-[35rem] ">
        <figure class="h-full w-full">
            <img src="{{ asset('photos/DSCF2513.JPG') }}" alt="Trekking background image"
                class="h-full w-full object-cover" />
        </figure>
        <div class="card-body relative">
            <div
                class="absolute 2xl:bottom-36 2xl:left-44  bottom-36 left-4 px-2  max-w-[70%] 2xl:max-w-[50%] overflow-hidden backdrop-brightness-95">
                <h2 class="font-bold uppercase tracking-widest text-4xl sm:text-8xl text-primary overflow-hidden">
                    Trekking Adventures
                </h2>
                {{--  --}}
            </div>
        </div>
    </div>

    <x-breadcrumb :breadcrumbs="[
        ['name' => 'Home', 'url' => url('/home')],
        ['name' => 'Trekking', 'url' => url('/trekking')],
        // ['name' => 'Components', 'url' => route('components.index')],
        // ['name' => 'Breadcrumb', 'url' => null],
    ]" />

    <div class="2xl:mx-44 mx-4 mt-8 ">
        <h5 class="text-primary text-2xl 2xl:text-4xl font-semibold">Trek With Sherpalaya</h5>
        <p class="text-primary-soft text-l mt-2 text-justify">
            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
            Duis
            mollis, est non commodo luctus.Duis mollis, est non commodo luctus.
            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
            Duis
            mollis, est non commodo luctus.Duis mollis, est non commodo luctus.
        </p>
    </div>

    <div id="auto-play"
        data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 100000, "dotsItemClasses": "carousel-box" }'
        class="relative max-w-full h-full mt-8 2xl:mx-44 mx-4">
        <div class="carousel h-full rounded-none ">
            <div class="carousel-body opacity-0 h-full ">
                <!-- Slide 1 -->
                @foreach ($treks as $trek)
                    <div class="carousel-slide">
                        <div class="card card-side group hover:shadow rounded-none overflow-hidden border-none  shadow-none bg-transparent 2xl:grid 2xl:grid-cols-2 md:grid md:grid-cols-2 flex flex-col  text-justify"
                            dir="ltr">
                            <figure class="md:w-full 2xl:w-full 2xl:rounded-2xl w-full">
                                <img src="{{ asset('photos/62017703_2502887636410934_2901252517276942336_n.jpg') }}"
                                    alt="Shoes"
                                    class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover " />
                            </figure>
                            <div class="card-body md:w-full 2xl:w-full w-full p-4 flex flex-col bg-transparent">
                                <h5 class="card-title text-primary">{{ $trek->title }}</h5>
                                <p class="text-secondary mt-2 line-clamp-[9]">{{ $trek->description }}</p>
                                <div class="grid grid-cols-2 mt-4">
                                    <div class="flex gap-5 flex-row items-center mt-">
                                        <span class="icon-[mdi--calendar-range-outline]"
                                            style="width: 48px; height: 48px; "></span>
                                        </span>
                                        <span class="text-primary font-medium">{{ $trek->duration . ' days' }}</span>
                                    </div>
                                    <div class="flex gap-5 flex-row items-center mt-">
                                        <span class="icon-[material-symbols-light--bid-landscape]"
                                            style="width: 48px; height: 48px; "></span>
                                        <span class="text-primary font-medium">{{ $trek->trek_difficulty }}</span>
                                    </div>
                                    <div class="flex gap-5 flex-row items-center mt-">
                                        <span class="icon-[material-symbols-light--add-location-alt]"
                                            style="width: 48px; height: 48px; "></span> <span
                                            class="text-primary font-medium">{{ $trek->starting_altitude . ' m' }}</span>
                                    </div>
                                    <div class="flex gap-5 flex-row items-center mt-">
                                        <span class="icon-[material-symbols-light--wrong-location-rounded]"
                                            style="width: 48px; height: 48px; "></span>
                                        <span
                                            class="text-primary font-medium">{{ $trek->highest_altitude . ' m' }}</span>
                                    </div>
                                    {{-- <div class="flex flex-col gap-5 justify-start items-left">
                                    <span class="icon-[material-symbols-light--highlight]"
                                        style="width: 48px; height: 48px; "></span>
                                    <h5 class="text-base-content/90 text-2xl">List inside</h5>

                                    @foreach ($trek->key_highlights as $highlight)
                                        <li class="mb-2">{{ $highlight }}</li>
                                    @endforeach

                                </div> --}}
                                </div>
                                <a href="{{ route('show_trek', $trek->id) }}">
                                    <div
                                        class="card-actions 2xl:absolute 2xl:bottom-5  flex gap-5 flex-row items-center mt-4">
                                        <span class="text-primary font-medium">Explore</span>
                                        <span class="icon-[material-symbols--arrow-right-alt-rounded] link link-primary"
                                            style="width: 32px; height: 32px;">
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="carousel-pagination absolute -bottom-4 end-0 start-0 flex justify-center gap-2 bg-transparent">
        </div>

        <!-- Previous Slide -->

        <button type="button" class="carousel-prev">
            <span
                class="hidden lg:flex size-9.5 bg-base-100/20 text-white  items-center justify-center rounded-full shadow-none bg-none ">
                <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <!-- Next Slide -->
        <button type="button" class="carousel-next">
            <span class="sr-only">Next</span>
            <span class=" "hidden lg:flex size-9.5 bg-base-100/20 text-white items-center justify-center
                rounded-full shadow">
                <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
            </span>
        </button>
    </div>

    <div class="grid 2xl:grid-cols-4  2xl:mx-44 mt-16 md:grid-cols-2 grid-cols-1 gap-4 mx-4">
        @foreach ($treks as $trek)
            <a href="{{ route('show_trek', $trek->id) }}">
                <div
                    class="card--rounded-none image-full h-96 w-full relative flex items-center justify-center card-side group hover:shadow border">
                    <figure class="h-full w-full">
                        <img src="{{ asset('photos/DSCF4333.JPG') }}" alt="overlay image"
                            class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover" />
                    </figure>
                    <div class="card-body absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h2 class="font-bold text-white text-3xl">
                                {{ $trek->title }}
                            </h2>
                            <p class="font-normal tracking-widest text-white ">
                                {{ $trek->duration . ' days' }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="h-20">

    </div>
</div>
