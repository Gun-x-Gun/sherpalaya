<x-website-layout>
    <div class="bg-blue-100/10 ">
        <div class="card--rounded-none image-full  h-[60vh]">
            <figure class="h-[60vh] w-full">
                <x-curator-glider class="h-[60vh] w-full object-cover brightness-50" :media="$aboutUsSetting->cover_image_id" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />
            </figure>
            <div class="card-body font-oswald">
                <div
                    class="absolute bottom-1/2 xl:left-32  left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="" data-aos="fade-down" data-aos-duration="1200">
                        {{-- <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Explore
                        </h5> --}}
                        <h2 class="card-title mb-2.5  text-white text-3xl md:text-4xl uppercase font-bold">
                            {{-- {{ $expedition->title }} --}}
                            About
                        </h2>
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-5xl uppercase font-extrabold ">
                            Sherpalaya
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-blue-100/20 font-oswald">
            <x-breadcrumb :breadcrumbs="[
                [
                    'name' => 'Home',
                    'url' => url('/home'),
                ],
                [
                    'name' => 'AboutUs',
                ],
            ]" />

            <div class="xl:mx-32 mx-4 ">
                <div class="h-8"></div>

                <div class="md:px-8 flex flex-col justify-center items-center">
                    <h5 class="text-3xl md:text-4xl font-body  font-medium uppercase tracking-normal text-black text-center md:text-center"
                        data-aos="fade-down" data-aos-duration="1200">
                        Our Passion, Your Adventure
                    </h5>
                    <div
                        class="text-xl/7 mt-6 text-preety text-black text-center
                             font-light font-body lg:w-[80%] tracking-wide">
                        {!! $aboutUsSetting->content !!}
                    </div>
                    <div class="h-10 md:h-12"></div>
                </div>
            </div>
        </div>

        <x-stat-widget />


        {{-- Showing <strong>{{ $expeditionRegion->expeditions->count() }}</strong> --}}
        <div class="xl:mx-32 mx-4">
            <div class="h-10"></div>
            <h1 class="text-3xl md:text-4xl tracking-normal font-body  text-left line-clamp-2 text-black font-medium uppercase"
                data-aos="fade-down" data-aos-duration="1200">
                Frequently Asked Questions
            </h1>
            <div class="h-8"></div>
            <div class="accordion accordion-shadow shadow-md font-body">
                @foreach ($faqs as $index => $faq)
                    <div class="accordion-item {{ $index == 0 ? 'active' : '' }}" id="faq-{{ $faq->id }}">
                        <button
                            class="accordion-toggle inline-flex items-center gap-x-4 px-5 py-4 text-start bg-blue-100/40 font-body tracking-tight text-xl font-normal"
                            aria-controls="faq-{{ $faq->id }}-collapse" aria-expanded="true" >
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-lg size-4.5 hidden shrink-0"></span>
                            {{ $faq->question }}
                        </button>
                        <div id="faq-{{ $faq->id }}-collapse"
                            class="accordion-content w-full overflow-hidden transition-[height] duration-300 bg-blue-100/40"
                            aria-labelledby="faq-{{ $faq->id }}" role="region" >
                            <div class="px-5 pb-4 ">
                                <p class=" font-light text-lg/7 tracking-wide">
                                    {{ $faq->answer }}
                                    {!! $faq->answer !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h-10"></div>
        </div>

        <x-review />

    </div>
</x-website-layout>
