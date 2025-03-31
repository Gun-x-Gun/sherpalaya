<div class="card--rounded-none image-full bg-blue-100/50 h-dvh relative">
    <figure class="h-dvh w-full">
        <x-curator-glider class="h-dvh w-full object-cover brightness-75" :media="$image" :fallback="asset('/photos/banner.jpg')"
            loading="lazy" alt="{{ $title }} Image" />
    </figure>
    <div class="card-body absolute inset-0 flex items-center justify-start leading-[1.1] md:leading-snug"
        data-aos="fade-down" data-aos-duration="1500">
        <div class="absolute bottom-2/4 left-4 xl:left-32 transform translate-y-1/2 ">
            <h2
                class="card-title mb-2 text-warning text-4xl sm:text-5xl md:text-6xl  uppercase font-card font-semibold tracking-tight text-preety md:w-[70%] leading-[1.3]  overflow-hidden opacity-75">
                {{ $title }}
            </h2>
            <h5
                class="card-title  mb-8 text-blue-50 text-4xl sm:text-5xl md:text-6xl  uppercase font-card font-semibold tracking-wide text-wrap md:w-[70%] leading-[1.3]  overflow-hidden opacity-75">
                {{ $description }}
            </h5>
            <a href="{{ $url }}">
                <button
                    class="btn btn-primary btn-lg  gap-2 rounded-full text-base hover:btn-warning tracking-wide pl-2 opacity-80">
                    <span class="icon-[mdi--chevron-double-right] size-5 "></span>
                    {{ __('home-carousel.explore') }}
                </button>
            </a>
        </div>
    </div>
</div>
