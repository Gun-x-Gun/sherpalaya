<div class="bg-blue-100/50">
    <div class="h-20"></div>
    <div class="xl:mx-32 mx-4 ">
        <h3 class="text-4xl tracking-normal text-black uppercase text-center">Activities</h3>
    </div>
</div>
<div class="bg-blue-100/50 max-w-full">
    <div class="h-8"></div>

    <div class="md:grid grid-cols-3 gap-4 xl:mx-32 mx-4 flex flex-col">
        <a href="/expeditions" class="col-span-2">
            <div
                class="card rounded-md image-full h-96 w-full relative flex items-end  card-side group hover:shadow border expedition-activity-card">
                <figure class="h-full w-full">
                    {{-- expedition_activity_image_id --}}
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->expedition_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                </figure>
                <div class="card-body absolute bottom-0 inset-0 uppercase">
                    <div class="text-left ">
                        <h2 class="font-extrabold text-white text-2xl lg:text-4xl">
                            Expeditions
                        </h2>
                    </div>
                </div>
                <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 w-min">
                    <div class="flex flex-row">
                        <div class="flex-none">
                            <span class="icon-[hugeicons--angle] size-44 rotate-12 text-black opacity-35"></span>

                        </div>
                        <div class="flex-none text-yellow-200 font-extrabold text-[2rem] lg:text-[6rem] opacity-60">
                            {{ $landingPageSetting->expedition_activity_count }}
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="/treks" class="">
            <div
                class="card rounded-md image-full h-96 w-full relative flex items-end  card-side group hover:shadow border">

                <figure class="h-full w-full ">
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->trek_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />

                </figure>
                <div class="card-body absolute inset-0 uppercase">
                    <div class="text-left ">
                        <h2 class="font-bold text-white text-2xl lg:text-4xl ">
                            Treks
                        </h2>
                    </div>
                </div>
                <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 w-min">
                    <div class="flex flex-row">
                        <div class="flex-none">
                            <span
                                class="icon-[mingcute--mountain-2-line] size-44 rotate-12 text-black opacity-35"></span>

                        </div>
                        <div class="flex-none text-yellow-200 font-extrabold text-[2rem] lg:text-[4rem] opacity-60">
                            {{ $landingPageSetting->trek_activity_count }}
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="h-4">

    </div>

    <div class="md:grid grid-cols-3 gap-4 xl:mx-32 mx-4 flex flex-col">
        <a href="/tours" class="">
            <div
                class="card rounded-md image-full h-96 w-full relative flex items-end  card-side group hover:shadow border">
                <figure class="h-full w-full ">
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->tour_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                </figure>
                <div class="card-body absolute inset-0 uppercase">
                    <div class="text-left ">
                        <h2 class="font-bold text-white text-2xl lg:text-4xl ">
                            Tours
                        </h2>
                    </div>
                </div>
                <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 w-min">
                    <div class="flex flex-row">
                        <div class="flex-none">
                            <span class="icon-[hugeicons--bus-01] size-40 rotate-12 text-black opacity-35"></span>

                        </div>
                        <div class="flex-none text-yellow-200 font-extrabold text-[2rem] lg:text-[4rem] opacity-60">
                            {{ $landingPageSetting->tour_activity_count }}
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="/peaks" class=" col-span-2">
            <div
                class="card rounded-md image-full h-96 w-full relative flex items-end  card-side group hover:shadow border">

                <figure class="h-full w-full brightness-75">
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->peak_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                </figure>
                <div class="card-body absolute inset-0 uppercase">
                    <div class="text-left ">
                        <h2 class="font-bold text-white  text-2xl lg:text-4xl ">
                            Peaks
                        </h2>
                    </div>
                </div>
                <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 w-min">
                    <div class="flex flex-row">
                        <div class="flex-none">
                            <span class="icon-[hugeicons--gem] size-44 rotate-12 text-black opacity-35"></span>

                        </div>
                        <div class="flex-none text-yellow-200 font-extrabold text-[2rem] lg:text-[6rem] opacity-60">
                            {{ $landingPageSetting->peak_activity_count }}
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="h-16">

    </div>
</div>
