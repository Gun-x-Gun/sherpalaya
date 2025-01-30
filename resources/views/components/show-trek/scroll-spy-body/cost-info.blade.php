<div class="md:grid grid-cols-2 gap-4">
    @if (!empty($trek->costs_include))

        <div id="costs_include" class="card 2xl:max-w-full rounded-none bg-blue-100/10">
            <div class="h-10">

            </div>
            <div class="card-header p-2">
                <h5 class="card-title text-primary uppercase font-normal text-3xl">Cost
                    Includes
                </h5>
            </div>
            <div class="card-body p-2 mt-4">
                <ul class="space-y-5 ">
                    @foreach ($trek->costs_include as $cost_include)
                        <li class="flex items-center space-x-3 rtl:space-x-reverse  ">
                            <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                            </span>
                            <p class="text-blue-800  md:text-justify text-preety">
                                {{ $cost_include }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="h-6">

            </div>
        </div>
    @endif

    @if (!empty($trek->costs_exclude))
        {{-- cost exclude --}}
        <div id="costs_exclude" class="card 2xl:max-w-full  rounded-none bg-red-100/10">
            <div class="h-10">

            </div>
            <div class="card-header p-2">
                <h5 class="card-title text-primary uppercase font-normal text-3xl">Cost
                    Excludes
                </h5>
            </div>
            <div class="card-body p-2 mt-4">
                <ul class="space-y-5">
                    @foreach ($trek->costs_exclude as $cost_exclude)
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="bg-primary/20 text-slate-700 flex items-center justify-center rounded-full ">
                                <span class="icon-[tabler--arrow-right] size-5 rtl:rotate-180"></span>
                            </span>
                            <p class="text-slate-700 md:text-justify text-preety ">
                                {{ $cost_exclude }} </p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="h-6">

            </div>
        </div>
    @endif
</div>
