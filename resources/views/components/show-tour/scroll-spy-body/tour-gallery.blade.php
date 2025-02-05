@if ($tour->images->isNotEmpty())
    <div class="bg-blue-100/70">
        <div id="gallery" class="card-header  pb-4  px-0">
            <div class="h-6">
            </div>
            <h5 class="card-title text-secondary uppercase font-normal text-3xl px-2">
                Gallery
            </h5>
            <div class="h-4">
            </div>
            <div id="all-tours" class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-1 px-2 skeleton animate-pulse">
                @foreach ($tour->images->slice(0, 8) as $galleryImage)
                    <button
                        class="card cursor-pointer rounded-none image-full h-52 w-full relative items-end  card-side group hover:shadow border single-tour hidden"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="tour-gallery-modal"
                        data-overlay="#tour-gallery-modal" onclick="changeCarouselSlide({{ $loop->index }})">
                        <figure class="h-full w-full brightness-90">
                            <img src="{{ $galleryImage->url }}" alt="overlay image"
                                class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-95 contrast-120" />
                        </figure>
                    </button>
                @endforeach
            </div>

            @push('modals')
                <div id="tour-gallery-modal" class="overlay modal overlay-open:opacity-100 hidden p-0" role="dialog"
                    tabindex="-1">
                    <div class="modal-dialog overlay-open:opacity-100 max-w-[100vw] ">
                        <div class="modal-content h-full max-h-[100vh] justify-center  bg-transparent backdrop-blur-sm">
                            <div class="modal-header">
                                <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                    aria-label="Close" data-overlay="#tour-gallery-modal">
                                    <span class="icon-[tabler--x] size-6 p-0 m-0"></span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <x-gallery :medias="$tour->images" :showMedia="null" />
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            @endpush
            <div class="h-6">

            </div>
        </div>
        @push('scripts')
            <script>
                window.addEventListener('load', function() {
                    const allServicesDiv = document.querySelector('#all-tours');
                    const singleServiceCollection = document.querySelectorAll('.single-tour');
                    allServicesDiv.classList.remove('skeleton');
                    allServicesDiv.classList.remove('animate-pulse');

                    singleServiceCollection.forEach(singleAward => {
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
@endif
