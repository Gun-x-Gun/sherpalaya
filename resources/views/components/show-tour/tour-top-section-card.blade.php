<div class="card--rounded-none image-full bg-blue-100/50 h-[80vh] relative">
    <figure class="h-[80vh] w-full">
        <x-curator-glider class="h-[80vh] w-full object-cover brightness-50" :media="$tour->coverImage" :fallback="asset('/photos/banner.jpg')"
            loading="lazy" />
    </figure>
    <div class="absolute bottom-1/4 left-4 lg:left-4 2xl:left-32 transform translate-y-1/2 overflow-hidden w-[90%] md:w-[60%]"
        data-aos="fade-down" data-aos-duration="1200">
        <h1
            class="card-title mb-2 text-warning text-4xl sm:text-5xl lg:text-6xl  uppercase font-card font-semibold tracking-tight text-balance leading-[1.3] opacity-75">
            {{ $tour->title}}

        </h1>
        <h2
            class="card-title mb-2 text-blue-50 text-4xl sm:text-5xl lg:text-6xl  uppercase font-card font-semibold tracking-wide text-wrap  leading-[1.3] opacity-75">
            {{$tour->duration }}
        </h2>
    </div>
</div>
