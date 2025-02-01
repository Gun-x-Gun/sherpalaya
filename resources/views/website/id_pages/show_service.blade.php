<script type="module" defer>
    let {
        element
    } = HSCollapse.getInstance('#service-description-collapse-button', true);

    shortTrekDescription = document.getElementById("short-service-description");

    serviceDescriptionButton.on('open', function(instance) {
        shortTrekDescription.classList.add("hidden");

    });
    serviceDescriptionButton.on('hide', function(instance) {
        shortTrekDescription.classList.remove("hidden");
    });
</script>

<x-website-layout>
    <div class="bg-blue-100/40">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[80vh]">
            <figure class="h-[80vh] w-full">
                <img src="{{ $service->coverImage?->url ?? '/photos/banner.jpg' }}" alt="Trekking background image"
                    class="h-[80vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body relative">
                <div
                    class="absolute 2xl:bottom-52 2xl:left-44  bottom-40 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class=" max-w-[92%] 2xl:max-w-[100%]">
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Explore
                        </h5>
                        <h2 class="card-title mb-2.5  text-white text-3xl md:text-5xl uppercase font-bold">
                            {{ $service->title }}
                        </h2>
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            With Sherpalaya
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-4 2xl:mx-44">
            {{-- description  --}}
            <div class="">
                <p class="mb-4 2xl:text-xl text-white font-bold ">
                <p class="inline text-base-content/80" id="short-service-description ">
                    {{ Str::words(strip_tags($service->description), 30) }}
                </p>

                <div id="service-description-collapse-heading"
                    class="collapse hidden w-full overflow-hidden transition-[height] duration-300 "
                    aria-labelledby="service-description-collapse">
                    {!! $service->description !!}
                </div>

                <button type="button" class="collapse-toggle link link-accent inline-flex items-center"
                    id="service-description-collapse-button" aria-expanded="false"
                    aria-controls="service-description-collapse-heading"
                    data-collapse="#service-description-collapse-heading">
                    <span class="collapse-open:hidden">Read more</span>
                    <span class="collapse-open:block hidden">Read less</span>
                    <span class="icon-[tabler--chevron-down] collapse-open:rotate-180 ms-2 size-4"></span>
                </button>
                </p>
            </div>

            <div class="h-10"></div>

            {{-- gallery  --}}
            <div class="hidden md:grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    @if ($service->images->isNotEmpty())
                        <div class="bg-blue-100/70">
                            <div class="card-header   px-0">
                                <h5 class="card-title text-secondary uppercase font-normal text-3xl px-2">
                                    Gallery
                                </h5>
                                <div class="h-4">
                                </div>
                                <div class="md:grid grid-cols-3 gap-1 px-2">
                                    @foreach ($service->images->slice(0, 8) as $galleryImage)
                                        <div
                                            class="card rounded-none image-full h-52 w-full relative flex items-end  card-side group hover:shadow border">
                                            <figure class="h-full w-full brightness-90">
                                                <img src="{{ $galleryImage->url }}" alt="overlay image"
                                                    class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-95 contrast-120" />
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                                @if ($service->images->count() > 9)
                                    <div class="w-full flex flex-row justify-center items-center mt-6">
                                        <a class="flex-none btn btn-outline btn-error" href="">See more
                                            Images</a>
                                    </div>
                                @endif
                                <div class="h-6">

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class=" card-body bg-blue-200 mt-4 h-40">
                    <div class="card-actions justify-center">
                        <a href="">
                            <button class="btn btn-primary btn-wide uppercase">Book this trip</button>
                        </a>
                        <button class="btn btn-info  btn-wide uppercase">Inquiry</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
