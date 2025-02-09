{{-- <div class="card--rounded-none image-full  bg-blue-100/50 h-[100vh]">
    <figure class="h-[100vh] w-full">
        <img src="{{ $image?->url ?? asset('/photos/banner.jpg') }}" alt=""
            class="h-[100vh] w-full object-cover brightness-60">
    </figure>
    <div class="card-body relative">
        <div
            class="absolute 2xl:bottom-52 xl:left-44  bottom-40 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
            <div class="">
                <h5 class="card-title mb-2.5 text-warning text-3xl md:text-4xl uppercase font-extrabold ">
                    Explore
                </h5>
                <h2 class="card-title mb-2.5  text-white text-4xl md:text-5xl uppercase font-bold">
                    {{ $title }}
                </h2>
                <h5 class="card-title mb-2.5 text-warning text-3xl md:text-4xl uppercase font-extrabold ">
                    With Sherpalaya
                </h5>
                <a href="{{ $url }}">
                    <button class="btn btn-primary  text-white">
                        Explore
                        <span class="icon-[tabler--circle-arrow-right-filled] size-4"></span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div> --}}



<div class="card--rounded-none image-full bg-blue-100/50 h-[100vh] relative" >
    <figure class="h-[100vh] w-full">
        <x-curator-glider class="h-[100vh] w-full object-cover brightness-50" :media="$image" :fallback="asset('/photos/banner.jpg')"
            loading="lazy" />
    </figure>
    <div class="card-body absolute inset-0 flex items-center justify-start" data-aos="fade-down" data-aos-duration="1500">
        <div class="absolute bottom-1/2 left-4 lg:left-4 xl:left-32 transform translate-y-1/2 overflow-hidden ">
            <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl lowercase font-oswald tracking-widest font-extrabold">
                Explore
            </h5>
            <h2 class="card-title mb-2.5 text-white text-3xl md:text-5xl uppercase font-oswald tracking-widest">
                {{ $title }}
            </h2>
            <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl font-oswald tracking-widest lowercase font-extrabold">
                With Sherpalaya
            </h5>
            <a href="{{ $url }}">
                <button class="btn btn-primary  text-white mt-2 font-oswald ">
                    Lets Go
                    <span class="icon-[tabler--circle-arrow-right-filled] size-6"></span>
                </button>
            </a>
        </div>
    </div>
</div>
