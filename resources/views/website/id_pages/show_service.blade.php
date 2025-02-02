<script defer>
    let isReadMoreShown = false;

    function toggleReadMore() {
        let shortTrekDescription = document.getElementById("short-service-description");
        if (isReadMoreShown) {
            shortTrekDescription.classList.remove("hidden");
        } else {
            shortTrekDescription.classList.add("hidden");
        }
        isReadMoreShown = !isReadMoreShown;
    }
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
                <p class="inline text-base-content/80" id="short-service-description">
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
                    data-collapse="#service-description-collapse-heading" onclick="toggleReadMore()">
                    <span class="collapse-open:hidden">Read more</span>
                    <span class="collapse-open:block hidden">Read less</span>
                    <span class="icon-[tabler--chevron-down] collapse-open:rotate-180 ms-2 size-4"></span>
                </button>
                </p>
            </div>

            <div class="h-10"></div>
            <div class="flex flex-col md:grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <x-show-service.service-gallery :service="$service" />
                </div>
                <div class="w-full">
                    @if (!empty($service->location['lat']) && !empty($service->location['lng']))
                        <div class="stats stats-vertical bg-blue-100/50 w-full rounded-none">
                            <div class="stat">
                                <div class="flex">
                                    <a href="https://maps.google.com/?q={{ $service->location['lat'] }},{{ $service->location['lng'] }}"
                                        target="_blank" rel="noopener noreferrer">
                                        <p class="text-primary">
                                            Location: {{ $service->location['lat'] }},
                                            {{ $service->location['lng'] }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class=" card-body bg-blue-200  h-40">
                        <div class="card-actions justify-center ">
                            <a href="">
                                <button class="btn btn-primary btn-wide uppercase">Book this Service</button>
                            </a>
                            <button class="btn btn-info  btn-wide uppercase">Inquiry</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h-10"></div>
        </div>
    </div>
</x-website-layout>
