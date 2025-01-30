@if (!empty($trek->itineraries))
    <div id="itineraries" class="card 2xl:max-w-full rounded-none bg-blue-100/20">
        <div class="h-6">
        </div>
        <div class="card-header px-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">
                Itineraries
            </h5>
        </div>
        <div class="card-body mx-0 px-0">
            <div class="accordion">
                @foreach ($trek->itineraries as $itinerary)
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
                                                        'flight' => 'icon-[tabler--plane]',
                                                        'drive' => 'icon-[tabler--car]',
                                                        'trek' => 'icon-[tabler--hiking]',
                                                        'trek-hours' => 'icon-[tabler--clock]',
                                                        'rest' => 'icon-[tabler--bed]',
                                                        'helicopter' => 'icon-[tabler--helicopter]',
                                                        'accomodation' => 'icon-[tabler--building]',
                                                        'himalaya' => 'icon-[tabler--mountain]',
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
                                    <div class="">
                                        @if (!empty($itinerary->destinations))
                                            <div class="card-body  bg-blue-100/20 w-full p-0">
                                                <div class="flex">
                                                    <span
                                                        class="icon-[tabler--arrow-right] size-5 rtl:rotate-180"></span>
                                                    <h5
                                                        class="card-title mb-2 px-2 text-success uppercase font-thin text-2xl underline">
                                                        Highlighted Places
                                                    </h5>
                                                </div>

                                                @foreach ($itinerary->destinations->take(3) as $destination)
                                                    <h5
                                                        class="card-title pt-0 px-8 text-primary uppercase font-thin text-xl">
                                                        {{ $destination->name }}
                                                    </h5>
                                                    <div class="hidden px-8 md:grid grid-cols-3 gap-2 ">
                                                        @foreach ($destination->destinationImages as $destinationImage)
                                                            @if ($loop->index < 3)
                                                                <figure>
                                                                    <img src="{{ $destinationImage->url }}"
                                                                        alt="{{ $destination->title }} Cover Image"
                                                                        class="h-48 w-full object-cover flex" />
                                                                </figure>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div id="infinite-loop-itinerary"
                                                        data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true,  }'
                                                        class="relative w-full md:hidden">
                                                        <div class="carousel h-48 rounded-none">
                                                            <div class="carousel-body h-full opacity-0 ">
                                                                <!-- Slide 1 -->
                                                                @foreach ($destination->destinationImages as $destinationImage)
                                                                    <div class="carousel-slide  px-8">
                                                                        @if ($loop->index < 3)
                                                                            <figure>
                                                                                <img src="{{ $destinationImage->url }}"
                                                                                    alt="{{ $destination->title }} Cover Image"
                                                                                    class="h-48  object-cover" />
                                                                            </figure>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <!-- Previous Slide -->
                                                        <button type="button" class="carousel-prev">
                                                            <span
                                                                class="size-9.5 bg-base-100 hidden items-center justify-center rounded-full shadow">
                                                                <span
                                                                    class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                                            </span>
                                                            <span class="sr-only">Previous</span>
                                                        </button>
                                                        <!-- Next Slide -->
                                                        <button type="button" class="carousel-next">
                                                            <span class="sr-only">Next</span>
                                                            <span
                                                                class="size-9.5 bg-base-100 hidden items-center justify-center rounded-full shadow">
                                                                <span
                                                                    class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <p class="mb-4 px-8  text-gray-600 ">
                                                        {{ $destination->description }}
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
    </div>
@endif
