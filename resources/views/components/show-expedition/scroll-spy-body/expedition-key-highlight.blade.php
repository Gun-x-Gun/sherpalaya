{{-- <x-show-expedition.scroll-spy-navigation /> --}}
@if (!empty($expedition->keyHighlights))
    <div id="key_highlights" class="card 2xl:max-w-full rounded-none bg-blue-100/10 ">
        <div class="h-6">
        </div>
        <div class="card-header  px-2 pb-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">Key
                Highlights
            </h5>
        </div>
        <div class="card-body justify-center items-start px-2 ">
            @foreach ($expedition->keyHighlights as $highlight)
            <div class="flex flex-col gap-0 items-start">
                <div class="mt-4 uppercase  md:text-justify text-primary font-semibold  text-lg">
                    <p>
                        {{ $highlight->title }} :
                    </p>
                </div>
                <div class="col-span-2">
                    <p class="my-2 capitalize  md:text-justify text-slate-700 ">
                        {{ $highlight->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="h-6">
        </div>
    </div>
@endif
