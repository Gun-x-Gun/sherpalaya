<x-website-layout>
    <div class="bg-blue-100/10 font-body">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[60vh]">
            <figure class="h-[60vh] w-full">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Trekking background image"
                    class="h-[60vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body">
                <div
                    class="absolute bottom-1/2 xl:left-32  left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="">
                        {{-- <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Get to know
                        </h5> --}}
                        <h5 class="card-title mb-8 text-white text-3xl md:text-5xl uppercase font-normal tracking-wide ">
                            Sherpalaya's Team
                        </h5>
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
                'name' => 'Our Sherpas',
            ],
        ]" />


        {{--  --}}
        <div class="xl:mx-32 mx-4 text-left">
            <div class="h-8"></div>

            <div class="md:px-8 flex flex-col justify-center items-center">
                <h5 class="text-3xl md:text-4xl font-body  font-medium uppercase tracking-normal text-black text-center md:text-center"
                    data-aos="fade-down" data-aos-duration="1200">
                    Journey with Experts
                </h5>
                <p
                    class="text-xl/7 mt-6 text-preety text-black text-center 
                             font-light font-body lg:w-[80%] tracking-wide">
                    {{-- {{ $pageSetting->about_us_page_content }} --}}
                    Our team of travel experts is dedicated to making your journey seamless and unforgettable. With
                    years of experience and a passion for exploration, we ensure every trip is planned to perfection.
                    From breathtaking destinations to personalized itineraries, we’re here to guide you every step of
                    the way.
                </p>
                <div class="h-10 md:h-12"></div>
            </div>
        </div>

        <div class="mx-4 xl:mx-32">
            <div class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($allSherpas as $allSherpa)
                    <a href="{{ route('show_team_member', $allSherpa->id) }}">
                        <div class="card w-full h-full ">
                            <img src="{{ $allSherpa->profilePicture->url ?? asset('photos/P1030127.JPG') }}"
                                alt="{{ $allSherpa->title }} Cover Image" class="h-[20rem] object-cover " />
                            <div class="card-body bg-blue-100/50 px-2 py-2 text-left">
                                <h5
                                    class="card-title mb-1 line-clamp-2 uppercase text-xl text-black font-medium tracking-wide font-body hover:text-warning hover:underline ">
                                    {{ $allSherpa->name }}
                                </h5>
                                <h5
                                    class="card-title line-clamp-2 capitalize tracking-wide warning text-sm badge badge-outline text-primary font-light  ">
                                    {{ $allSherpa->title }}
                                </h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="h-20"></div>
    </div>
</x-website-layout>
