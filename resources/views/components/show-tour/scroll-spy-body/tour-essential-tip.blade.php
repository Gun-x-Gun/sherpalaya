{{-- <x-show-tour.scroll-spy-navigation /> --}}
@if (!empty($tour->essentialTips))
    <div id="essential_tips" class="card 2xl:max-w-full rounded-none bg-blue-100/30 ">
        <div class="h-6">
        </div>
        <div class="card-header  px-2 pb-2" data-aos="fade-down" data-aos-duration="1200">
            <h5 class="card-title text-primary uppercase font-semibold text-2xl">
                Essential Tips
            </h5>
        </div>
        <div class="card-body justify-center items-start px-2 ">
            @foreach ($tour->essentialTips as $highlight)
                <div class="flex flex-col gap-0 items-start" data-aos="fade-down" data-aos-duration="1200">
                    <div class="mt-2 uppercase  md:text-justify text-blue-500 font-semibold  text-lg">
                        <p>
                            {{ $highlight->title }} :
                        </p>
                    </div>
                    <div class="col-span-2" data-aos="fade-down" data-aos-duration="2000">
                        <p class="my-1 lowercase font-light tracking-tighter md:text-justify text-slate-800 ">
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
