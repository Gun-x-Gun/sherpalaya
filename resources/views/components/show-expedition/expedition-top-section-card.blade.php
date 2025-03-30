<div class="card--rounded-none image-full bg-blue-100/50 h-[80dvh] relative">
    <figure class="h-[80dvh] w-full">
        <x-curator-glider class="h-[80dvh] w-full object-cover brightness-50" :media="$expedition->coverImage" fallback="default"
            loading="lazy" />
    </figure>
    <div class="absolute bottom-1/4 left-4 lg:left-4 2xl:left-32 transform translate-y-1/2 overflow-hidden w-[90%] md:w-[60%]"
        data-aos="fade-down" data-aos-duration="1200">
        <h1
            class="card-title mb-2 text-warning text-4xl sm:text-5xl lg:text-6xl  uppercase font-card font-semibold tracking-tight text-balance leading-[1.3] opacity-75">
            {{ $expedition->title }}

        </h1>
        <h2
            class="card-title mb-2 text-blue-50 text-4xl sm:text-5xl lg:text-6xl  uppercase font-card font-semibold tracking-wide text-wrap  leading-[1.3] opacity-75">
            {{ $expedition->highest_altitude }} m
        </h2>
    </div>
</div>
