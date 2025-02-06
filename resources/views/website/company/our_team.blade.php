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
            <div class="sm:grid sm:grid-cols-1 lg:grid-cols-2  md:gap-2 lg:gap-4 flex flex-col gap-4">
                @foreach ($ourSherpas as $sherpa)
                    <a href="{{ route('show_team_member', $sherpa->id) }}">
                        <div class="card md:card-side max-w-full sm:max-w-full bg-blue-50 rounded-sm h-full">
                            <figure class="md:w-1/2 h-full p-1 ">
                                <img class="h-[20rem] object-cover" src="{{ $sherpa->profilePicture->url }}"
                                    alt="headphone" />
                            </figure>
                            <div class="card-body w-full md:w-1/2 p-2 ">
                                <span class="rounded-full mb-1 p-0 text-slate-600 capitalize tracking-tighter font-light">
                                    {{ $sherpa->title }}
                                </span>
                                <h5 class="card-title mb-0 uppercase text-xl text-primary tracking-wider font-bold">
                                    {{ $sherpa->name }}
                                </h5>
                                <p class="mb-2.5 text-pretty text-slate-800 text-sm line-clamp-5">{{ $sherpa->description }}</p>

                                <p class="text-blue-800 text-nowrap uppercase pb-1 text-lg font-semibold tracking-wider">Experiences :</p>


                                @php
                                    $sherpaExperienceData = [
                                        'treks' => $sherpa->treks->pluck('title')->take(1),
                                        'expeditions' => $sherpa->expeditions->pluck('title')->take(1),
                                        'peaks' => $sherpa->peaks->pluck('title')->take(1),
                                        'tours' => $sherpa->tours->pluck('title')->take(1),
                                    ];
                                @endphp
                                <div class="md:flex flex-col gap-1 text-preety overflow-hidden ">
                                    @foreach ($sherpaExperienceData as $category => $experiences)
                                        @foreach ($experiences as $experience)
                                            <span
                                                class="badge badge-warning my-0.5 md:my-0 py-0 text-sm text-nowrap tracking-tighter text-preety">{{ $experience }}</span>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="h-10"></div>
    </div>
</x-website-layout>
