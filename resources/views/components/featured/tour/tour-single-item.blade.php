@php
    $featuredTours = $tours->where('is_featured', true);
@endphp
@if ($featuredTours->count() === 1)
    <div class="bg-blue-100/10">
        <div class="2xl:mx-44 mx-4 ">
            <div class="h-14"></div>
            <div class="lg:grid grid-cols-3 md:gap-8 flex flex-col gap-2 bg-blue-100/10">

                @foreach ($featuredTours as $featuredTour)
                    <div
                        class="card rounded-none image-full w-full relative flex items-center card-side group hover:shadow border col-span-2">
                        <figure class="h-[28rem] w-full">
                            <img src="{{ optional($featuredTour->featureImage)->url ?? asset('photos/DSCF2600.JPG') }}"
                                alt="{{ $featuredTour->title }} Cover Image"
                                class="transition-transform brightness-75 duration-500 group-hover:scale-110 h-full w-full object-cover" />
                        </figure>
                        <a href="{{ route('show_tour', $featuredTour->id) }}">
                            <div class="card-body absolute inset-0 justify-end">
                                <div class="text-center">
                                    <h2 class="font-bold text-white text-2xl">
                                        {{ $featuredTour->title }}
                                    </h2>
                                    <h2 class="font-bold tracking-normal text-white line-clamp-2 text-2xl">
                                        {{ $featuredTour->highest_altitude }} 
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-span-1">
                    <h5 class="text-3xl font-light line-clamp-2 tracking-wider text-black text-left ">Tour</h5>
                    <h3 class="text-3xl tracking-widest text-accent text-left ">With Sherpalaya</h3>
                    <p
                        class="text-md mt-2 text-preety text-slate-800 text-balance md:text-wrap 
                        md:text-justify first-line:uppercase first-line:tracking-widest first-line:font-light">
                        For those seeking the ultimate challenge, Sherpalaya’s expedition services offer unparalleled
                        support and expertise. Whether it’s climbing Everest or venturing to the lesser-known peaks,
                        Sherpalaya
                        handles every detail, from permits to logistics. With our experienced Sherpa team by your side,
                        we
                        transform daunting treks into achievable milestones, ensuring a fulfilling and transformative
                        adventure.
                    </p>
                </div>
            </div>

            <div class="h-14"></div>
        </div>
    </div>
@endif
