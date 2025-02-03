<x-website-layout>
    <div class="bg-blue-100/20">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[50vh]">
            <figure class="h-[50vh] w-full">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Trekking background image"
                    class="h-[50vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body">
                <div
                    class="absolute bottom-1/2 2xl:left-44  left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="">
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                        Get to know
                    </h5>
                        <h5 class="card-title mb-8 text-white text-2xl md:text-4xl uppercase font-extrabold ">
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
                'name' => 'Sherpalayas Team',
            ],
        ]" />


        <div class="h-4"></div>
        <div class="mx-4 2xl:mx-44">
            <div class="md:grid md:grid-cols-3 xl:grid-cols-5 gap-2 flex flex-col">

                {{-- @foreach ($trekRegion->treks as $trek) --}}
                <div class="max-w-sm">
                    <div class="card group hover:shadow  ">
                        {{-- <a href="{{ route('show_team_member', $member->id) }}">
                            <img src="{{ $member->coverImage->url ?? asset('photos/P1030127.JPG') }}"
                                alt="Member Cover Image" class="h-[20rem] object-cover" />
                        </a> --}}
                        <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png" alt="Shoes"
                            class="transition-transform duration-500 group-hover:scale-105 h-[10rem] object-cover w-sm" />

                    </div>
                    <div class="card-body bg-blue-100 px-2 py-3">
                        {{-- <a href="{{ route('show_team_member', $member->id) }}"> --}}
                        <h5 class="card-title mb-1 line-clamp-2 uppercase text-xl text-primary font-bold px-1">
                            {{-- {{ $trek->title }} --}}
                            Subin Tamang
                        </h5>
                        {{-- </a> --}}
                        <div class="justify-start flex flex-row items-center  gap-2 mb-0">
                            <span class="text-black capitalize items-center font-normal badge badge-warning rounded-full tracking-tighter">
                                Professional Climber
                            </span>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
        <div class="h-4"></div>

    </div>
</x-website-layout>
