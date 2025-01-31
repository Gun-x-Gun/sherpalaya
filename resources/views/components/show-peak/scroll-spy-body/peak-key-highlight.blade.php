{{-- <x-show-peak.scroll-spy-navigation /> --}}
@if (!empty($peak->keyHighlights))
    <div id="key_highlights" class="card 2xl:max-w-full rounded-none bg-blue-100/40 ">
        <div class="h-6">
        </div>
        <div class="card-header  px-2 pb-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">Key
                Highlights
            </h5>
        </div>
        <div class="card-body justify-center items-start px-2  ">
            @foreach ($peak->keyHighlights as $highlight)
                <div class="flex flex-row gap-4 items-center" >
                    <p class="my-4 uppercase  md:text-justify text-primary font-bold  ">
                        {{ $highlight->title }} :
                    </p>
                    <p class="my-4 capitalize  md:text-justify text-slate-700 ">
                        {{ $highlight->description }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="h-6">
        </div>
    </div>
@endif
