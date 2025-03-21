{{-- <div class="card--rounded-none image-full h-[80vh] relative ">
            <figure class="h-[80vh] w-full ">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Trekking background image"
                    class="h-[80vh] w-full object-cover brightness-50" />
            </figure>
            <div
                class="card-body absolute bottom-1/4 left-[50%]  translate-x-[-50%] translate-y-[10%] flex flex-col items-center gap-8 ">
                <div class="overflow-hidden  justify-center" data-aos="fade-down" data-aos-duration="1200">
                    <img class="h-[28vh] w-full object-cover rounded-full" src="{{ $sherpa->profilePicture->url }}"
                        alt="picture" />
                </div>
                <div class="text-center w-full font-oswald" data-aos="fade-down" data-aos-duration="1200">
                    <h5 class="card-title mb-1 text-warning  text-2xl md:text-4xl uppercase font-bold ">
                        {{ $sherpa->name }}
                    </h5>
                    <h5 class="card-title text-white text-sm md:text-xl lowercase font-oswald font-semibold ">
                        {{ $sherpa->title }}
                    </h5>
                </div>
            </div>
        </div> --}}


<x-website-layout>
    <div class="bg-blue-50 font-body">
        <div style="background-image: url('{{ asset('/photos/background1.jpg') }}');"
            class="bg-cover bg-center w-full  object-top font-body ">
            <div class="card-body flex flex-col items-center justify-center gap-8 backdrop-blur-md h-[80vh]">
                <div class="overflow-hidden  justify-center" data-aos="fade-down" data-aos-duration="1200">
                    <img class="h-[28vh] w-full object-cover rounded-full border-white border-4"
                        src="{{ $sherpa->profilePicture->url }}" alt="picture" />
                </div>
                <div class="text-center w-full font-oswald" data-aos="fade-down" data-aos-duration="1200">
                    <h5 class="card-title mb-1 text-warning  text-2xl md:text-4xl uppercase font-bold ">
                        {{ $sherpa->name }}
                    </h5>
                    <h5 class="card-title text-white text-sm md:text-xl capitalize font-oswald font-semibold ">
                        {{ $sherpa->title }}
                    </h5>
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
                'url' => url('/sherpas'),
            ],
            [
                'name' => $sherpa->name,
            ],
        ]" />


        <div class="mx-4 2xl:mx-32">
            <div class="h-4"></div>
            <div
                class="text-xl/7 mt-6 text-justify text-black  md:mx-8 lg:mx-16  xl:mx-28
                         font-light font-body tracking-normal ">
                {!! $sherpa->description !!}
            </div>
            <div class="h-10 md:h-12"></div>

            {{-- <div class="my-1 text-pretty text-black font-light font-body text-xl/7">
                {!! $sherpa->description !!}
            </div> --}}
            <div class="h-8"></div>
            <h5 class="card-title font-normal uppercase text-4xl text-black tracking-wide mx-0 text-left md:mx-8 lg:mx-16  xl:mx-28"
                data-aos="fade-down" data-aos-duration="1200">
                Experience
            </h5>
            <div class="h-10"></div>

            {{-- <div class="card-body w-full px-0 pt-2 flex justify-center items-center mb-4">

                <div class="text-preety overflow-hidden text-center md:w-[70%] my-2">
                    @foreach ($sherpaExperienceData as $category => $experiences)
                        @foreach ($experiences as $experience)
                            <span
                                class="badge badge-primary badge-outline  mx-1 my-1 py-4 text-nowrap tracking-wider text-preety text-xl font-light ">
                                {{ $experience->title }}
                            </span>
                            <span
                                class="badge badge-primary badge-outline  mx-1 my-1 py-4 text-nowrap tracking-wider text-preety text-xl font-light ">
                                {{ $experience->highest_altitude }}
                            </span>
                            <span
                                class="badge badge-primary badge-outline  mx-1 my-1 py-4 text-nowrap tracking-wider text-preety text-xl font-light ">
                                {{ $experience->count }}
                            </span>
                        @endforeach
                    @endforeach
                </div>
                <div class="h-8"></div>
            </div> --}}
            @php
                $sherpaExperienceData = [
                    'treks' => $sherpa->treks,
                    'expeditions' => $sherpa->expeditions,
                    'tours' => $sherpa->tours,
                ];
            @endphp
            <div class="">
                <div class="md:mx-8 lg:mx-16 xl:mx-28">
                    <table class="table-striped-columns table ">
                        <thead>
                            <tr>
                                {{-- <th>SN</th> --}}
                                <th>Name Of The Mountain</th>
                                <th>Max Altitude</th>
                                <th>Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sherpaExperienceData as $category => $experiences)
                                @foreach ($experiences as $experience)
                                    <tr>
                                        {{-- <td class="text-nowrap"> {{ $experience  }}
                                        </td> --}}
                                        <td class="text-nowrap"> {{ $experience->title }}
                                        </td>
                                        <td> {{ $experience->highest_altitude }} M
                                        </td>
                                        <td><span class="badge badge-soft badge-success text-xs">
                                                {{ $experience->count }}
                                            </span></td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="h-10"></div>

            <div class="col-span-2 md:mx-8 lg:mx-16 xl:mx-28">
                @if ($sherpa->awardsAndCertificates->count() > 0)
                    <h5 class="card-title font-normal uppercase text-4xl text-black tracking-normal mx-0 text-left"
                        data-aos="fade-down" data-aos-duration="1200">
                        Awards & Certificates
                    </h5>
                    <div class="h-8"></div>
                    <div class="card-actions  sm:grid grid-cols-2  flex flex-col gap-2 md:gap-4 mb-0 skeleton animate-pulse min-h-52"
                        id="all-awards">
                        @foreach ($sherpa->awardsAndCertificates as $awardAndCertificate)
                            <button type="button"
                                class="w-full h-full uppercase single-award hidden group hover:shadow"
                                aria-haspopup="dialog" aria-expanded="false" aria-controls="award-modal"
                                data-overlay="#award-modal" onclick="changeCarouselSlide({{ $loop->index }})">
                                <img class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-105 brightness-90"
                                    src="{{ $awardAndCertificate->url }}" alt="headphone" />
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>





        <div class="h-20"></div>




        @push('modals')
            <div id="award-modal" class="overlay modal overlay-open:opacity-100 hidden p-0" role="dialog" tabindex="-1">
                <div class="modal-dialog overlay-open:opacity-100 max-w-[100vw] ">
                    <div class="modal-content h-full max-h-[100vh] justify-center  bg-transparent backdrop-blur-lg">
                        <div class="modal-header">
                            <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                aria-label="Close" data-overlay="#award-modal">
                                <span class="icon-[tabler--x] size-6 p-0 m-0 text-warning"></span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <div id="image-carousel"
                                data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true }'
                                class="relative w-full">
                                <div class="carousel">
                                    <div class="carousel-body h-full opacity-0">
                                        <!-- Slide 1 -->
                                        @foreach ($sherpa->awardsAndCertificates as $award)
                                            <div class="carousel-slide">
                                                <div class="flex h-full justify-center ">
                                                    <img src="{{ $award->url }}" class="h-[90vh] w-full object-contain  "
                                                        alt="game" />
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Previous Slide -->
                                <button type="button" class="carousel-prev">
                                    <span
                                        class="size-9.5 bg-blue-200 hidden lg:flex items-center justify-center rounded-full shadow">
                                        <span
                                            class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <!-- Next Slide -->
                                <button type="button" class="carousel-next">
                                    <span class="sr-only">Next</span>
                                    <span
                                        class="size-9.5 bg-blue-200 hidden lg:flex items-center justify-center rounded-full shadow">
                                        <span
                                            class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-soft btn-secondary"
                                    data-overlay="#award-modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endpush

        @push('scripts')
            <script>
                window.addEventListener('load', function() {
                    const awardsAndCertificatesDiv = document.querySelector('#all-awards');
                    const singleAwardCollection = document.querySelectorAll('.single-award');
                    awardsAndCertificatesDiv.classList.remove('skeleton');
                    awardsAndCertificatesDiv.classList.remove('animate-pulse');

                    singleAwardCollection.forEach(singleAward => {
                        singleAward.classList.remove('hidden');
                    });
                });

                function changeCarouselSlide(index) {
                    const carousel = new HSCarousel(document.querySelector('#image-carousel'))
                    carousel.goTo(index)
                }
            </script>
        @endpush

    </div>
</x-website-layout>
