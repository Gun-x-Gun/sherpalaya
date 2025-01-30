<div class="bg-blue-100/70">
    @if (!empty($expedition->images))
        <div id="gallery" class="card-header  pb-4  px-0">

            <div class="h-6">
            </div>
            <h5 class="card-title text-secondary uppercase font-normal text-3xl px-2">
                Gallery
            </h5>
            <div class="md:grid grid-cols-3 gap-1 px-2">
                @foreach ($expedition->images->slice(0, 8) as $galleryImage)
                    <div
                        class="card rounded-none image-full h-52 w-full relative flex items-end  card-side group hover:shadow border">
                        <figure class="h-full w-full brightness-90">
                            <img src="{{ $galleryImage->url }}" alt="overlay image"
                                class="transition-transform duration-500 group-hover:scale-110 h-full w-full object-cover brightness-95 contrast-120" />
                        </figure>

                    </div>
                @endforeach
            </div>
            @if ($expedition->images->count() > 9)
                <div class="w-full flex flex-row justify-center items-center mt-6">
                    <a class="flex-none btn btn-outline btn-error" href="">See more Images</a>
                </div>
            @endif
            <div class="h-6">

            </div>
        </div>
    @endif
</div>
