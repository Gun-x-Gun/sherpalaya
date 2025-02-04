<x-website-layout>
    <div class="bg-blue-100/10">
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
                'name' => 'Our Sherpas',
            ],
        ]" />


        <div class="h-4"></div>
        <div class="mx-4 2xl:mx-44">
            <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-2 gap-4 ">
                @foreach ($ourSherpas as $sherpa)
                    <a href="{{ route('show_team_member', $sherpa->id) }}">
                        <div class="card card-side max-w-full sm:max-w-full bg-blue-50 rounded-sm h-[40vh]">
                            <figure class="w-1/2 h-full p-1 ">
                                <img class="h-full object-cover" src="{{ $sherpa->profilePicture->url }}" alt="headphone" />
                            </figure>
                            <div class="card-body w-1/2 p-2 ">
                                <span
                                    class=" rounded-full p-0 text-slate-600 capitalize tracking-tighter font-bold">{{ $sherpa->title }}</span>
                                <h5 class="card-title mb-1 uppercase  text-primary tracking-tighter">{{ $sherpa->name }}</h5>
                                {{-- <span class="badge badge-outline badge-primary">Primary</span> --}}
                                <p class="my-1 tracking-tighter text-pretty text-slate-800 text-sm">{{ $sherpa->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="h-4"></div>

    </div>
</x-website-layout>
