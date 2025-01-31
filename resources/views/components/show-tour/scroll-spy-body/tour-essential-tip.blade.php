<div id="essential_tips" class="card rounded-none text-justify bg-blue-100/40">
    @if (!empty($tour->essentialTips))
        <div class="h-6">
        </div>
        <div class="card-header px-2 pb-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">
                Essential
                Tips
            </h5>
        </div>
        <div class="card-body justify-center text-slate-700 items-start px-2 ">
            @foreach ($tour->essentialTips as $tip)
                <div class="flex flex-row gap-4 items-center">
                    <p class="my-4 uppercase  md:text-justify text-primary font-bold">
                        {{ $tip->title }} :
                    </p>
                    <p class="my-4 capitalize  md:text-justify text-slate-800">
                        {{ $tip->description }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="h-6">

        </div>
    @endif
</div>
