<div class="card--rounded-none image-full  bg-blue-100/50 h-[100vh]">
    <figure class="h-[100vh] w-full">
        <img src="{{ $image?->url ?? asset('/photos/banner.jpg') }}" alt=""
            class="h-[100vh] w-full object-cover brightness-60">
    </figure>
    <div class="card-body relative">
        <div
            class="absolute 2xl:bottom-52 2xl:left-44  bottom-40 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
            <div class="">
                <h5 class="card-title mb-2.5 text-warning text-3xl md:text-4xl uppercase font-extrabold ">
                    Explore
                </h5>
                <h2 class="card-title mb-2.5  text-white text-4xl md:text-5xl uppercase font-bold">
                    {{-- {{ $trek->title }} --}}
                    {{ $title }}
                </h2>
                <h5 class="card-title mb-2.5 text-warning text-3xl md:text-4xl uppercase font-extrabold ">
                    With Sherpalaya
                </h5>

                <a href="{{ $url }}" class="btn btn-soft btn-primary btn-lg">
                    Explore Now
                </a>
            </div>
        </div>
    </div>
</div>
