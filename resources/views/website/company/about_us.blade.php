<x-website-layout>
    <div class="bg-blue-100/10">
        <div class="card--rounded-none image-full  h-[60vh]">
            <figure class="h-[60vh] w-full">
                <x-curator-glider class="h-[60vh] w-full object-cover brightness-50" :media="$pageSetting->about_us_page_cover_image_id" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />

            </figure>
            <div class="card-body">
                <div
                    class="absolute bottom-1/2 2xl:left-44  left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="">
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

        <div class="bg-blue-100/50">
            <x-breadcrumb :breadcrumbs="[
                [
                    'name' => 'Home',
                    'url' => url('/home'),
                ],
                [
                    'name' => 'AboutUs',
                ],
            ]" />


            <div class="h-4"></div>
            <div class="2xl:mx-44 mx-4 text-left ">
                <p class="text-md text-left  mt-2  text-slate-800 first-line:uppercase first-line:font-light ">
                    {{ $pageSetting->about_us_page_content }}
                </p>
            </div>
            <div class="h-8 "></div>
        </div>

        <x-stat-widget />


        {{-- Showing <strong>{{ $expeditionRegion->expeditions->count() }}</strong> --}}
        <div class="2xl:mx-44 mx-4">
            <div class="h-10"></div>
            <h1 class="text-2xl  font-bold  text-center line-clamp-2 text-slate-600 uppercase wrap text-pretty">
                Frequently Asked Questions
            </h1>
            <div class="h-4"></div>
            <div class="accordion accordion-shadow shadow-md">
                @foreach ($faqs as $index => $faq)
                    <div class="accordion-item {{ $index == 0 ? 'active' : '' }}" id="faq-{{ $faq->id }}">
                        <button
                            class="accordion-toggle inline-flex items-center gap-x-4 px-5 py-4 text-start bg-blue-100/40"
                            aria-controls="faq-{{ $faq->id }}-collapse" aria-expanded="true">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            {{ $faq->question }}
                        </button>
                        <div id="faq-{{ $faq->id }}-collapse"
                            class="accordion-content w-full overflow-hidden transition-[height] duration-300 bg-blue-100/40"
                            aria-labelledby="faq-{{ $faq->id }}" role="region">
                            <div class="px-5 pb-4 ">
                                <p class="text-base-content/80 font-normal ">
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
