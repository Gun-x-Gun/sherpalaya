<div class="card--rounded-none image-full  bg-blue-100/50 h-[80vh]">
    <figure class="h-[80vh] w-full">
        <img src="{{ $tour->coverImage?->url ?? asset('/photos/banner.jpg') }}" alt="Trekking background image"
            class="h-[80vh] w-full object-cover brightness-50" />
    </figure>
    <div class="card-body">
        <div
            class="absolute 2xl:bottom-52 2xl:left-44  bottom-52 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
            <div class="">
                <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                    Explore
                </h5>
                <h2 class="card-title mb-2.5  text-white text-3xl md:text-5xl uppercase font-bold">
                    {{ $tour->title }}
                </h2>
                <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                    With Sherpalaya
                </h5>
            </div>
        </div>
    </div>
</div>
