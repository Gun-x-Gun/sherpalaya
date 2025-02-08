<x-website-layout>
    <div class="bg-blue-100/10">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[50vh]">
            <figure class="h-[50vh] w-full">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Trekking background image"
                    class="h-[50vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body absolute bottom-1/2 xl:left-32 left-4 flex flex-row items-end gap-4">
                <div class="overflow-hidden border-none ">
                    <figure class="w-full ">
                        <img class="h-32 lg:h-52 object-cover rounded-full" src="{{ $sherpa->profilePicture->url }}"
                            alt="picture" />
                    </figure>
                </div>
                <div class="">
                    <h5 class=" card-title  text-warning text-xl md:text-xl uppercase font-extrabold ">
                        {{ $sherpa->title }}
                    </h5>
                    <h5 class=" card-title mb-8 text-white text-2xl md:text-4xl uppercase font-extrabold ">
                        {{ $sherpa->name }}
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


        <div class="mx-4 xl:mx-32">
            <div class="h-4"></div>
            <p class="my-1 tracking-normal text-pretty text-blue-900 text-center">{{ $sherpa->description }}
            </p>
            <div class="h-8"></div>
            <h5 class="card-title font-semibold uppercase text-2xl text-primary tracking-tighter mx-0 text-center">
                Experiience
            </h5>
            <div class="card-body w-full px-0 pt-2 flex ">
                @php
                    $sherpaExperienceData = [
                        'treks' => $sherpa->treks->pluck('title'),
                        'expeditions' => $sherpa->expeditions->pluck('title'),
                        'peaks' => $sherpa->peaks->pluck('title'),
                        'tours' => $sherpa->tours->pluck('title'),
                    ];
                @endphp
                <div class="text-preety overflow-hidden text-center">
                    @foreach ($sherpaExperienceData as $category => $experiences)
                        @foreach ($experiences as $experience)
                            <span
                                class="badge badge-info badge-outline  my-1 py-4 text-nowrap tracking-tighter text-preety text-base">{{ $experience }}
                            </span>
                        @endforeach
                    @endforeach
                </div>
                <div class="h-2"></div>
            </div>
            <div class="w-full col-span-2">
                @if ($sherpa->awardsAndCertificates->count() < 4)
                    <div class="h-4"></div>
                    <h5 class="card-title font-semibold uppercase text-2xl text-primary tracking-tighter mx-0 text-center">
                        Awards & Certificates
                    </h5>
                    <div class="h-4"></div>
                    <div class="card-actions  sm:grid grid-cols-3 flex flex-col gap-2 mb-0 skeleton animate-pulse min-h-52"
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
                @else
                    <div class="h-4"></div>
                    <h5 class="card-title font-normal uppercase text-3xl text-primary tracking-tighter mx-0">
                        Awards & Certificates
                    </h5>
                    <div class="h-4"></div>
                    <div class="card-actions  mb-0 skeleton animate-pulse min-h-52" id="all-awards">
                        <div id="multi-slide"
                            data-carousel='{ "loadingClasses": "opacity-0","isInfiniteLoop": true, "slidesQty": { "xs": 1.1, "sm": 1.8, "md": 2.5, "lg": 3.1, "xl": 3.5 } }'
                            class="relative w-full">
                            <div class="carousel h-full rounded-none">
                                <div class="carousel-body h-full opacity-0">
                                    <!-- Slide 1 -->
                                    @foreach ($sherpa->awardsAndCertificates as $awardAndCertificate)
                                        <div class="carousel-slide max-w-sm px-1">
                                            <button type="button"
                                                class="w-full h-full uppercase single-award hidden group hover:shadow"
                                                aria-haspopup="dialog" aria-expanded="false" aria-controls="award-modal"
                                                data-overlay="#award-modal"
                                                onclick="changeCarouselSlide({{ $loop->index }})">
                                                <img class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                                    src="{{ $awardAndCertificate->url }}" alt="headphone" />
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Previous Slide -->
                            <button type="button" class="carousel-prev">
                                <span
                                    class="hidden md:flex icon-[tabler--chevron-left] size-8 text-white cursor-pointer rtl:rotate-180"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <!-- Next Slide -->
                            <button type="button" class="carousel-next">
                                <span class="sr-only">Next</span>
                                <span
                                    class="hidden md:flex icon-[tabler--chevron-right] size-8 text-white cursor-pointer rtl:rotate-180"></span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>


        <div class="h-8"></div>
        <div class="flex flex-col lg:grid grid-cols-3 gap-2 ">

        </div>


        <div class="h-8"></div>



        <div class="h-4"></div>

        @push('modals')
            <div id="award-modal" class="overlay modal overlay-open:opacity-100 hidden p-0" role="dialog" tabindex="-1">
                <div class="modal-dialog overlay-open:opacity-100 max-w-[100vw] ">
                    <div class="modal-content h-full max-h-[100vh] justify-center  bg-transparent backdrop-blur-sm">
                        <div class="modal-header">
                            <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                aria-label="Close" data-overlay="#award-modal">
                                <span class="icon-[tabler--x] size-6 p-0 m-0"></span>
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
