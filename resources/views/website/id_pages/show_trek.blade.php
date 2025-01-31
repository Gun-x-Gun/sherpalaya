<x-website-layout>
    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1">
            <div id="scrollspy-scrollable-parent-1 overflow-x-hidden">

                {{-- topsection --}}
                <div class="bg-blue-100/50">
                    {{-- top section card --}}
                    <x-show-trek.top-section-card :trek="$trek" />
                    {{-- end-section-card --}}

                    <div class="h-2  "></div>

                    <div class="2xl:mx-44 mx-4 text-left">
                        {{-- description --}}
                        <x-show-trek.description :trek="$trek" />
                        {{-- end description --}}
                        <div class="h-4  "></div>
                        {{-- top section destination --}}
                        <x-show-trek.top-section-destination :trek="$trek" />
                        {{-- end top section destination --}}
                    </div>

                    <div class="h-12 "></div>

                </div>

                {{-- end-top-section --}}

                {{-- stat-mobile --}}
                <x-show-trek.mobile-stat :trek="$trek" />
                {{-- end-stat-section --}}



                {{-- scrollspy navigation --}}
                <x-show-trek.scroll-spy-navigation />
                {{-- end scrollspy navigation --}}



                {{-- scrollspy body --}}
                <div class="bg-blue-100/10">
                    <div class="mx-4 2xl:mx-44 gap-2 max-w-full ">
                        <div class="xl:grid grid-cols-3  gap-6">
                            <div class="xl:col-span-2 ">
                                {{-- key_highlights --}}
                                <x-show-trek.scroll-spy-body.key-highlight :trek="$trek" />
                                {{-- end_key_highlights --}}

                                {{-- mobile-booking-section --}}
                                <x-show-trek.trek-mobile-booking-section :trek="$trek" />

                                {{-- itineraries --}}
                                <x-show-trek.scroll-spy-body.itinerary :trek="$trek" />

                                {{-- cost-info --}}
                                <x-show-trek.scroll-spy-body.cost-info :trek="$trek" />

                                {{-- essential_tips --}}
                                <x-show-trek.scroll-spy-body.essential-tip :trek="$trek" />

                                {{-- gallery --}}
                                <x-show-trek.gallery :trek="$trek" />

                                {{-- destinations --}}
                                <x-show-trek.scroll-spy-body.destination :trek="$trek" />

                                {{-- recommendation --}}
                                <x-show-trek.scroll-spy-body.trek-region-wise-recommendation :trek="$trek" />
                                <div class="h-10"></div>
                            </div>

                            <div class=" ">
                                <div class="h-8"></div>
                                <div class="sticky top-32 hidden lg:block">
                                    {{-- stat --}}
                                    <x-show-trek.stat-section :trek="$trek" />

                                    {{-- booking-section --}}
                                    <x-show-trek.booking-section />
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
