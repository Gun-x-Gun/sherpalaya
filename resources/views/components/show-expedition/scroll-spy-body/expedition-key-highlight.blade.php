{{-- <x-show-expedition.scroll-spy-navigation /> --}}
@if (!empty($expedition->key_highlights))
    <div id="key_highlights" class="card 2xl:max-w-full rounded-none bg-blue-100/10 ">
        <div class="h-6">
        </div>
        <div class="card-header  px-2 pb-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">Key
                Highlights
            </h5>
        </div>
        <div class="card-body justify-center items-start px-2 ">
            @foreach ($expedition->key_highlights as $highlight)
                <p class="my-4 first-line:uppercase  md:text-justify text-slate-700">
                    {{ $highlight }}
                </p>
            @endforeach
        </div>
        <div class="h-6">
        </div>
    </div>
@endif
