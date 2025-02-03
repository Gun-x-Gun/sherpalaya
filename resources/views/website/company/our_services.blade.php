<x-website-layout>
    <div class="bg-blue-100/50">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[80vh]">
            <figure class="h-[80vh] w-full">
                <x-curator-glider class="h-[80vh] w-full object-cover brightness-50" :media="$pageSetting->service_page_cover_image_id" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />
            </figure>
            <div class="card-body relative">
                <div
                    class="absolute 2xl:bottom-52 2xl:left-44  bottom-40 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class=" max-w-[92%] 2xl:max-w-[100%]">
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Our
                        </h5>
                        <h2 class="card-title mb-2.5  text-white text-3xl md:text-5xl uppercase font-bold">
                            {{-- {{ $trek->title }} --}}
                            Services
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        
        <x-breadcrumb :breadcrumbs="[
            [
                'name' => 'Home',
                'url' => url('/home'),
            ],
            [
                'name' => 'Services',
            ],
        ]" />

        <div class="h-8"></div>

        <div class="2xl:mx-44 mx-4 text-left">
            <h1
                class="text-2xl lg:text-4xl  font-bold  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty">
                Our Services In Nepal
            </h1>
            {{-- <h3 class="text-3xl tracking-widest text-primary "> With Sherpalaya</h3> --}}
            <p
                class="text-md text-left  mt-2  text-slate-700 first-line:uppercase first-line:tracking-widest first-line:font-light ">
                {{ $pageSetting->service_page_content }}
            </p>
        </div>
        <div class="h-8 "></div>

        {{-- Showing <strong>{{ $serviceDestination->services->count() }}</strong> --}}
        <div class="2xl:mx-44 mx-4">
            <div class="flex flex-col  md:grid md:grid-cols-1 lg:grid-cols-2  gap-4 ">
                @foreach ($services as $serviceData)
                    <div class="card w-full h-full">
                        <a href="{{ route('show_service', $serviceData->service->id) }}">
                            <figure>
                                <img src="{{ $serviceData->service->coverImage?->url ?? asset('photos/P1030127.JPG') }}"
                                    alt="{{ $serviceData->service->title }} Cover Image" class="h-60 object-cover" />
                            </figure>
                        </a>
                        <div class="card-body px-2 py-4  bg-blue-100">
                            <a href="{{ route('show_service', $serviceData->service->id) }}">
                                <h5
                                    class="card-title line-clamp-2 mb-2.5 capitalize text-lg text-primary font-semibold tex-center">
                                    {{ $serviceData->service->title }}</h5>
                            </a>
                            <div class="justify-start flex flex-col  gap-2 pb-0">
                                <span class="text-slate-700 capitalize items-center font-normal line-clamp-4">
                                    {{ $serviceData->service->description }}
                                </span>
                            </div>
                            <div class="mt-2 ">
                                <p class="w-full text-preety">
                                    @foreach ($serviceData->destinations as $destination)
                                        <span class="badge badge-warning  py-1 my-1">{{ $destination }}</span>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="h-20"></div>

    </div>

</x-website-layout>
