<x-website-layout>


    {{-- top section --}}

    {{-- top section end --}}


    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1" class="">
            <div id="scrollspy-scrollable-parent-1" class="">
                {{-- topsection --}}
                <div class="bg-blue-100/50">
                    {{-- top section card --}}
                    <x-show-peak.peak-top-section-card :peak="$peak" />
                    {{-- end-section-card --}}

                    <div class="h-2  "></div>

                    <div class="2xl:mx-44 mx-4 text-left">
                        {{-- description --}}
                        <x-show-peak.peak-description :peak="$peak" />
                        {{-- end description --}}
                        <div class="h-4  "></div>
                        {{-- top section destination --}}
                        <x-show-peak.peak-top-section-destination :peak="$peak" />
                        {{-- end top section destination --}}
                    </div>

                    <div class="h-12 "></div>

                </div>




                {{-- stat-mobile --}}
                <x-show-peak.peak-mobile-stat :peak="$peak" />
                {{-- end-stat-section --}}

                {{-- scrollspy navigation --}}
                <x-show-peak.peak-scroll-spy-navigation :peak="$peak" />


                {{-- scrollspy body --}}

                <div class="bg-blue-100/10">
                    <div class=" mx-4 2xl:mx-44 gap-2 max-w-full ">
                        <div class="xl:grid grid-cols-3  gap-6">
                            <div class="xl:col-span-2 ">
                                {{-- key_highlights --}}
                                <x-show-peak.scroll-spy-body.peak-key-highlight :peak="$peak" />
                                {{-- end_key_highlights --}}

                                 {{-- mobile-booking-section --}}
                                 <x-show-peak.peak-mobile-booking-section :peak="$peak" />

                                {{-- itineraries --}}
                                <x-show-peak.scroll-spy-body.peak-itinerary :peak="$peak" />

                                {{-- cost-info --}}
                                <x-show-peak.scroll-spy-body.peak-cost-info :peak="$peak" />

                                {{-- essential_tips --}}
                                <x-show-peak.scroll-spy-body.peak-essential-tip :peak="$peak" />

                                {{-- gallery --}}
                                <x-show-peak.scroll-spy-body.peak-gallery :peak="$peak" />

                                {{-- destinations --}}
                                <x-show-peak.scroll-spy-body.peak-destination :peak="$peak" />

                                {{-- recommendation --}}
                                <x-show-peak.scroll-spy-body.peak-region-wise-recommendation :peak="$peak" />
                                <div class="h-10"></div>
                            </div>

                            <div class=" ">
                                <div class="h-8"></div>
                                <div class="sticky top-32 hidden xl:block">
                                    {{-- stat --}}
                                    <x-show-peak.peak-stat-section :peak="$peak" />

                                    {{-- booking-section --}}
                                    <x-show-peak.peak-booking-section />
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
