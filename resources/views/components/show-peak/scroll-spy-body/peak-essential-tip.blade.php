<div id="essential_tips" class="card rounded-none text-justify bg-blue-100/40">
    @if (!empty($peak->essential_tips))
        <div class="h-6">
        </div>
        <div class="card-header px-2 pb-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">
                Essential
                Tips
            </h5>
        </div>
        <div class="card-body justify-center text-slate-700 items-start px-2 ">
            @foreach ($peak->essential_tips as $tip)
                <p class="my-4 first-line:uppercase  md:text-justify">
                    {{ $tip }}
                </p>
            @endforeach
        </div>
        <div class="h-6">

        </div>
    @endif
</div>
