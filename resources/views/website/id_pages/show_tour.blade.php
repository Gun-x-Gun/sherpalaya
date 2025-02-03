<x-website-layout>
    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1" class="">
            <div id="scrollspy-scrollable-parent-1" class="">
                {{-- topsection --}}
                <div class="bg-blue-100/50">
                    {{-- top section card --}}
                    <x-show-tour.tour-top-section-card :tour="$tour" />
                    {{-- end-section-card --}}

                   <x-breadcrumb :breadcrumbs="[
                        [
                            'name' => 'Home',
                            'url' => url('/home'),
                        ],
                        [
                            'name' => 'Tours',
                            'url' => url('/tours'),
                        ],
                        [
                            'name' => $tour->title,
                        ],
                    ]" />
                    <div class="h-4"></div>

                    <div class="2xl:mx-44 mx-4 text-left">
                        {{-- description --}}
                        <x-show-tour.tour-description :tour="$tour" />
                        {{-- end description --}}
                        <div class="h-4  "></div>
                        {{-- top section destination --}}
                        <x-show-tour.tour-top-section-destination :tour="$tour" />
                        {{-- end top section destination --}}
                    </div>

                    <div class="h-12 "></div>

                </div>



                {{-- mobile section tour --}}
                @livewire('booking.mobile-booking-section', ['bookingFor' => $tour])

                {{-- stat-mobile --}}

                <x-show-tour.tour-mobile-stat :tour="$tour" />
                {{-- end-stat-section --}}

                {{-- scrollspy navigation --}}
                <x-show-tour.tour-scroll-spy-navigation :tour="$tour" />


                {{-- scrollspy body --}}

                <div class="bg-blue-100/10">
                    <div class=" mx-4 2xl:mx-44 gap-2 max-w-full ">
                        <div class="xl:grid grid-cols-3  gap-6">
                            <div class="xl:col-span-2 ">
                                {{-- key_highlights --}}
                                <x-show-tour.scroll-spy-body.tour-key-highlight :tour="$tour" />
                                {{-- end_key_highlights --}}



                                {{-- itineraries --}}
                                <x-show-tour.scroll-spy-body.tour-itinerary :tour="$tour" />

                                {{-- cost-info --}}
                                <x-show-tour.scroll-spy-body.tour-cost-info :tour="$tour" />

                                {{-- essential_tips --}}
                                <x-show-tour.scroll-spy-body.tour-essential-tip :tour="$tour" />

                                {{-- gallery --}}
                                <x-show-tour.scroll-spy-body.tour-gallery :tour="$tour" />

                                {{-- destinations --}}
                                <x-show-tour.scroll-spy-body.tour-destination :tour="$tour" />

                                {{-- region wise recommendation --}}
                                <x-show-tour.scroll-spy-body.tour-region-wise-recommendation :tour="$tour" />

                                <div class="h-10 "></div>
                            </div>

                            <div class=" ">
                                <div class="h-8"></div>
                                <div class="sticky top-32 hidden xl:block">
                                    {{-- stat --}}
                                    <x-show-tour.tour-stat-section :tour="$tour" />

                                    {{-- booking-section --}}
                @livewire('booking.booking-section', ['bookingFor' => $tour])

                                    <div class="h-10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- scrollspy-body -end --}}
            </div>
        </div>
    </div>

</x-website-layout>
