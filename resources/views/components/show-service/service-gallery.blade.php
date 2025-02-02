{{-- gallery  --}}
@if ($service->images->isNotEmpty())
    <div class="bg-blue-100/70">
        <div class="card-header   px-0">
            <h5 class="card-title text-secondary uppercase font-normal text-3xl px-2">
                Gallery
            </h5>
            <div class="h-4">
            </div>
            <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-1 px-2">
                @foreach ($service->images->slice(0, 8) as $galleryImage)
                    <div class="card cursor-pointer rounded-none image-full h-52 w-full relative flex items-end  card-side group hover:shadow border"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="fullscreen-modal"
                        data-overlay="#fullscreen-modal">
                        <figure class="h-full w-full brightness-90">
                            <img src="{{ $galleryImage->url }}" alt="overlay image"
                                class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-95 contrast-120" />
                        </figure>
                    </div>
                @endforeach

                <div
                    class="card rounded-none image-full h-52 w-full relative flex items-end  card-side group hover:shadow border bg-gray-400">
                    <button type="button" class=" glass h-full text-4xl text-white font-bold" aria-haspopup="dialog"
                        aria-expanded="false" aria-controls="fullscreen-modal" data-overlay="#fullscreen-modal">
                        ...
                    </button>

                    <div id="fullscreen-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog"
                        tabindex="-1">
                        <div class="modal-dialog overlay-open:opacity-100 max-w-none">
                            <div class="modal-content h-full max-h-none justify-between">
                                <div class="modal-header">
                                    <h3 class="modal-title">Dialog Title</h3>
                                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                        aria-label="Close" data-overlay="#fullscreen-modal">
                                        <span class="icon-[tabler--x] size-4"></span>
                                    </button>
                                </div>
                                <div class="modal-body grow">
                                    <x-gallery :medias="$service->images" :showMedia="null" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-soft btn-secondary"
                                        data-overlay="#fullscreen-modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-6">

            </div>
        </div>
    </div>
@endif
