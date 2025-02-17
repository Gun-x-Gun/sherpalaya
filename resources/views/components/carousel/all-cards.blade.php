<div class="bg-blue-100/50">
    <div class="xl:mx-32 mx-4 ">
        <div class="h-8 md:h-15"></div>
        <div class="md:px-8 flex flex-col md:justify-center md:items-center">
            <h5 class="text-3xl md:text-4xl font-body  uppercase tracking-normal text-black font-medium text-left md:text-center"
                data-aos="flip-up" data-aos-duration="800">
                Explore Beyond Limits</h5>
            <p
                class="text-xl/7 mt-4 text-preety text-black  
                 font-light font-body lg:w-[80%] tracking-wide text-left md:text-center">
                {{ $landingPageSetting->expedition_activity_content }}
            </p>
            <div class="h-10 md:h-12"></div>
        </div>
    </div>
</div>

<div class="bg-blue-100/50 max-w-full font-body">

    <div class="md:grid grid-cols-7 gap-2 xl:mx-32 mx-4 flex flex-col ">
        <a href="/expeditions" class="col-span-4 ">
            <div
                class="card rounded-md image-full h-[22rem] w-full relative flex items-end  card-side group  border expedition-activity-card hover:shadow-sm hover:shadow-black">
                <figure class="h-full w-full">
                    {{-- expedition_activity_image_id --}}
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->expedition_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                </figure>
                <div class="card-body absolute bottom-0 inset-0 uppercase" data-aos="flip-up" data-aos-duration="800">
                    <div class="text-left ">
                        <h2 class="font-extrabold text-blue-50 text-2xl lg:text-4xl">
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

        <a href="/treks" class="col-span-3">
            <div
                class="card rounded-md image-full h-[22rem] w-full relative flex items-end  card-side group  border hover:shadow-sm  hover:shadow-black">
                <figure class="h-full w-full ">
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->trek_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />

                </figure>
                <div class="card-body absolute inset-0 uppercase">
                    <div class="text-left" data-aos="flip-up" data-aos-duration="800">
                        <h2 class="font-bold text-blue-50 text-2xl lg:text-4xl ">
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
    <div class="h-2">

    </div>

    <div class="md:grid grid-cols-7 gap-2 xl:mx-32 mx-4 flex flex-col">
        <a href="/tours" class="col-span-3">
            <div
                class="card rounded-md image-full h-[22rem] w-full relative flex items-end  card-side group  border hover:shadow-sm  hover:shadow-black">
                <figure class="h-full w-full">
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->tour_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                </figure>
                <div class="card-body absolute inset-0 uppercase" data-aos="flip-up" data-aos-duration="800">
                    <div class="text-left ">
                        <h2 class="font-bold text-blue-50 text-2xl lg:text-4xl ">
                            Activities
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

        <a href="/services" class=" col-span-4">
            <div
                class="card rounded-md image-full h-[22rem] w-full relative flex items-end  card-side group hover:shadow-sm  hover:shadow-black border">

                <figure class="h-full w-full brightness-75">
                    <x-curator-glider
                        class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-75"
                        :media="$landingPageSetting->peak_activity_image_id" :fallback="asset('/photos/banner.jpg')" loading="lazy" />
                </figure>
                <div class="card-body absolute inset-0 uppercase" data-aos="flip-up" data-aos-duration="800">
                    <div class="text-left ">
                        <h2 class="font-bold text-blue-50  text-2xl lg:text-4xl ">
                            Services
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
