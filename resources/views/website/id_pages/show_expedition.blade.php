<x-website-layout>
    <div class="bg-white">
        <div data-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1" class="">
            <div id="scrollspy-scrollable-parent-1" class="">
                {{-- topsection --}}
                <div class="bg-blue-100/50">
                    {{-- top section card --}}

                    <x-show-expedition.expedition-top-section-card :expedition="$expedition" />

                    {{-- end-section-card --}}

                    <div class="h-2  "></div>

                    <div class="2xl:mx-44 mx-4 text-left">

                        {{-- description --}}
                        <x-show-expedition.expedition-description :expedition="$expedition" />
                        {{-- end description --}}

                        <div class="h-4  "></div>

                        {{-- top section destination --}}
                        <x-show-expedition.expedition-top-section-destination :expedition="$expedition" />
                        {{-- end top section destination --}}
                    </div>

                    <div class="h-12 "></div>

                </div>




                {{-- stat-mobile --}}
   
                <x-show-expedition.expedition-mobile-stat :expedition="$expedition" />
                {{-- end-stat-section --}}

                {{-- scrollspy navigation --}}
                <x-show-expedition.expedition-scroll-spy-navigation :expedition="$expedition" />


                {{-- scrollspy body --}}

                <div class="bg-blue-100/10">
                    <div class=" mx-4 2xl:mx-44 gap-2 max-w-full ">
                        <div class="xl:grid grid-cols-3  gap-6">
                            <div class="xl:col-span-2 ">
                                {{-- key_highlights --}}
                                <x-show-expedition.scroll-spy-body.expedition-key-highlight :expedition="$expedition" />
                                {{-- end_key_highlights --}}

                                {{-- mobile-booking-section --}}
                                <x-show-expedition.expedition-mobile-booking-section :expedition="$expedition" />

                                {{-- itineraries --}}
                                <x-show-expedition.scroll-spy-body.expedition-itinerary :expedition="$expedition" />

                                {{-- cost-info --}}
                                <x-show-expedition.scroll-spy-body.expedition-cost-info :expedition="$expedition" />

                                {{-- essential_tips --}}
                                <x-show-expedition.scroll-spy-body.expedition-essential-tip :expedition="$expedition" />

                                {{-- gallery --}}
                                <x-show-expedition.scroll-spy-body.expedition-gallery :expedition="$expedition" />

                                {{-- destinations --}}
                                <x-show-expedition.scroll-spy-body.expedition-destination :expedition="$expedition" />

                                {{-- recommended --}}
                                <x-show-expedition.scroll-spy-body.expedition-region-wise-recommendation :expedition="$expedition" />
                                <div class="h-10"></div>
                            </div>

                            <div class=" ">
                                <div class="h-8"></div>
                                <div class="sticky top-32 hidden lg:block">
                                    {{-- stat --}}
                                    <x-show-expedition.expedition-stat-section :expedition="$expedition" />

                                    {{-- booking-section --}}
                                    <x-show-expedition.expedition-booking-section />
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
