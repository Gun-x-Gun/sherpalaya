<x-website-layout>
    <div class="bg-blue-100/10 font-body">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[60vh]">
            <figure class="h-[60vh] w-full">
                <x-curator-glider class="h-[60vh] w-full object-cover brightness-50" :media="$pageSetting->service_page_cover_image_id" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />
            </figure>
            <div class="card-body">
                <div class="absolute bottom-1/2 xl:left-32   left-4   max-w-full  2xl:max-w-full overflow-hidden border-none "
                    data-aos="fade-down" data-aos-duration="1200">
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

        <div class="2xl:mx-32 mx-4 text-left">
            <div class="h-8"></div>

            <div class="md:px-8 flex flex-col md:justify-center md:items-center">
                <h5 class="text-3xl md:text-4xl font-body  font-medium uppercase tracking-normal text-black text-left md:text-center"
                    data-aos="fade-down" data-aos-duration="1200">
                    A helping hand
                </h5>
                <p
                    class="text-xl/7 mt-6 text-preety text-black text-left md:text-center 
                             font-light font-body md:w-[60%] tracking-wide">
                    {{-- {{ $pageSetting->service_page_page_content }} --}}
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nostrum doloremque eaque ducimus
                    repellendus odio laborum sint optio quis harum molestiae maxime atque delectus ipsa, ullam minima
                    quia earum quas!
                </p>
                <div class="h-10 md:h-12"></div>
            </div>
        </div>

        {{-- Showing <strong>{{ $serviceDestination->services->count() }}</strong> --}}
        <div class="2xl:mx-32 mx-4">
            <div class="flex flex-col  md:grid md:grid-cols-2 xl:grid-cols-3  gap-4 ">
                @foreach ($services as $serviceData)
                    <div class="card w-full h-full">
                        <a href="{{ route('show_service', $serviceData->service->id) }}">
                            <figure>
                                <img src="{{ $serviceData->service->coverImage?->url ?? asset('photos/P1030127.JPG') }}"
                                    alt="{{ $serviceData->service->title }} Cover Image" class="h-60 object-cover" />
                            </figure>
                        </a>
                        <div class="card-body group px-2 py-4  bg-blue-100/40 ">
                            <a href="{{ route('show_service', $serviceData->service->id) }}">
                                <h5
                                    class="card-title line-clamp-2 mb-2 uppercase text-lg text-black tracking-tight  group-hover:underline  decoration-4 decoration-warning">
                                    {{ $serviceData->service->title }}</h5>
                            </a>
                            <div class="justify-start flex flex-col  gap-2 pb-0">
                                <span
                                    class="items-center text-black break-all text-lg/7 font-body font-light  line-clamp-4">
                                    {{ $serviceData->service->description }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="h-20"></div>

    </div>

</x-website-layout>
