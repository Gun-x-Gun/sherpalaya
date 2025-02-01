@if (!empty($expedition->essentialTips))

    <div id="essential_tips" class="card rounded-none text-justify bg-blue-100/40">
        <div class="h-6">

        </div>
        <div class="card-header px-2 pb-2">
            <h5 class="card-title text-primary uppercase font-normal text-3xl">
                Essential
                Tips
            </h5>
        </div>
        <div class="card-body justify-center text-slate-700 items-start px-2 ">
            @foreach ($expedition->essentialTips as $tip)
                <div class="flex flex-col gap-0 items-start">
                    <div class="mt-4 uppercase  md:text-justify text-primary font-normal  text-lg">
                        <p>
                            {{ $tip->title }} :
                        </p>
                    </div>
                    <div class="col-span-2">
                        <p class="my-2 capitalize  md:text-justify text-slate-700 ">
                            {{ $tip->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="h-6">

        </div>
    </div>
@endif
