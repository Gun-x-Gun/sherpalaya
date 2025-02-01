<div id="itineraries" class="card 2xl:max-w-full rounded-none bg-blue-100/20">
    @if ($expedition->itineraries->isNotEmpty())
        <div class="h-6">
        </div>
        <div class="card-header px-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">
                Itineraries
            </h5>
        </div>
        <div class="card-body mx-0 px-2">
            <div class="accordion">
                @foreach ($expedition->itineraries as $itinerary)
                    <div class="accordion-item " id="itinerary-{{ $itinerary->id }}">
                        @if (!empty($itinerary->title))
                            <button
                                class="accordion-toggle inline-flex items-center gap-x-4 text-start text-black font-medium  uppercase px-0"
                                aria-controls="itinerary-{{ $itinerary->id }}-collapse" aria-expanded="false">
                                <div class="card  flex flex-row bg-blue-100/90 m-0 p-2 text-[1rem]">
                                    <span
                                        class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                                    {{ $itinerary->title }}
                                </div>
                            </button>
                            <div id="itinerary-{{ $itinerary->id }}-collapse"
                                class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="itinerary-{{ $itinerary->id }}" role="region">
                                <div class=" ">
                                    <div class="cardbg-blue-50 rounded-none mx-0 px-0">
                                        <div class="card-body justify-center items-start py-2 px-0">
                                            @foreach ($itinerary->itineraryDetails as $detail)
                                                @php
                                                    // Map icons to types
                                                    $icons = [
                                                        'flight' => 'icon-[material-symbols-light--flight-takeoff]',
                                                        'drive' =>
                                                            'icon-[material-symbols-light--directions-bus-outline]',
                                                        'trek' => 'icon-[material-symbols-light--hiking-rounded]',
                                                        'trek-hours' => 'icon-[tabler--clock]',
                                                        'rest' => 'icon-[material-symbols-light--airline-seat-flat]',
                                                        'helicopter' =>
                                                            'icon-[material-symbols-light--helicopter-outline]',
                                                        'accomodation' =>
                                                            'icon-[material-symbols-light--king-bed-outline-sharp]',
                                                        'himalaya' => 'icon-[mingcute--mountain-2-line]',
                                                        'altitude' => 'icon-[tabler--arrow-up]',
                                                        'others' => 'icon-[tabler--dots]',
                                                    ];
                                                    // Convert enum to its string value
                                                    $type = $detail->type->value;
                                                    $icon = $icons[$type] ?? 'icon-[tabler--help-circle]'; // Default icon if type is missing
                                                @endphp
                                                <h5
                                                    class="card-title mb-2 text-lg md:text-xl text-primary uppercase font-thin ">
                                                    <span
                                                        class="{{ $icon }} accordion-item-active:rotate-90 size-5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                                                    {{ $detail->type->getLabel() }}
                                                </h5>
                                                <p class="mb-4 px-8">
                                                    {{ $detail->description }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        @if (!empty($itinerary->destinations))
                                            <div class="card-body bg-blue-100/20 w-full p-0">
                                                <div class="flex items-center justify-start my-2 text-xl ">
                                                    <span class="icon-[tabler--sun-high] size-5"></span>
                                                    <div>
                                                        <h5
                                                            class="card-title px-2 text-black uppercase font-thin ">
                                                            Highlighted Places
                                                        </h5>
                                                    </div>
                                                </div>

                                                @foreach ($itinerary->destinations->take(3) as $itineraryDestination)
                                                    @php
                                                        $destinationImages = $itineraryDestination->destinationImages->take(
                                                            3,
                                                        );
                                                    @endphp

                                                    <h5
                                                        class="card-title pt-0 px-8 text-primary uppercase font-thin text-xl">
                                                        {{ $itineraryDestination->name }}
                                                    </h5>

                                                    <!-- Grid Layout for Larger Screens -->
                                                    @if ($destinationImages->isNotEmpty())
                                                        <div
                                                            class="px-8 sm:grid sm:grid-cols-2 md:grid-cols-3 flex flex-col gap-1">
                                                            @foreach ($destinationImages as $image)
                                                                <figure>
                                                                    <img src="{{ $image->url }}"
                                                                        alt="{{ $itineraryDestination->name }} Cover Image"
                                                                        class="h-48 w-full object-cover" />

                                                                </figure>
                                                            @endforeach
                                                        </div>

                                                        <!-- Carousel for Mobile -->
                                                        {{-- <div id="infinite-loop-{{ $itineraryDestination->name }}"
                                                            data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true, "slidesQty": { "xs": 1.1 } }'
                                                            class="flex  relative w-full ">

                                                            <div class="carousel h-64 rounded-none opacity-0">
                                                                <div class="carousel-body h-full ">
                                                                    @foreach ($destinationImages as $image)
                                                                        <div class="carousel-slide">
                                                                            <div
                                                                                class="bg-base-300/60 flex h-full justify-center p-6">
                                                                                <figure>
                                                                                    <img src="{{ $image->url }}"
                                                                                        alt="{{ $itineraryDestination->name }} Cover Image"
                                                                                        class="h-64 object-cover " />
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>

                                                            <!-- Previous Slide -->
                                                            <button type="button" class="carousel-prev"
                                                                aria-label="Previous">
                                                                <span
                                                                    class="size-9.5 bg-base-100 hidden items-center justify-center rounded-full shadow">
                                                                    <span
                                                                        class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                                                </span>
                                                            </button>

                                                            <!-- Next Slide -->
                                                            <button type="button" class="carousel-next"
                                                                aria-label="Next">
                                                                <span
                                                                    class="size-9.5 bg-base-100 hidden items-center justify-center rounded-full shadow">
                                                                    <span
                                                                        class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                                                                </span>
                                                            </button>
                                                        </div> --}}
                                                    @endif

                                                    <p class="mb-4 mt-2 px-8 text-gray-600">
                                                        {{ $itineraryDestination->description }}
                                                    </p>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="h-6">
        </div>
    @endif
</div>
