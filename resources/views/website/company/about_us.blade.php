<x-website-layout>
    <div class="bg-blue-100/50">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[80vh]">
            <figure class="h-[80vh] w-full">
                <x-curator-glider class="h-[80vh] w-full object-cover brightness-50" :media="$pageSetting->about_us_page_cover_image_id" :fallback="asset('/photos/banner.jpg')"
                    loading="lazy" />

            </figure>
            <div class="card-body">
                <div
                    class="absolute 2xl:bottom-52 2xl:left-44  bottom-52 left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="">
                        {{-- <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Explore
                        </h5> --}}
                        <h2 class="card-title mb-2.5  text-white text-3xl md:text-5xl uppercase font-bold">
                            {{-- {{ $expedition->title }} --}}
                            About
                        </h2>
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
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
            ]"/>


            <div class="h-4"></div>
            <div class="2xl:mx-44 mx-4 text-left">

                <h1
                    class="text-2xl lg:text-4xl  font-light  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty">
                    About Us
                </h1>
                <p
                    class="text-md text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light ">
                    {{ $pageSetting->about_us_page_content }}
                </p>
            </div>
            <div class="h-12 "></div>
        </div>

        <x-stat-widget />


        {{-- Showing <strong>{{ $expeditionRegion->expeditions->count() }}</strong> --}}
        <div class="2xl:mx-44 mx-4">
            <h1
                class="text-2xl lg:text-4xl font-light  line-clamp-2 tracking-wider text-primary uppercase wrap text-pretty">
                Frequently Asked Questions
            </h1>
            <div class="accordion accordion-shadow">
                @foreach ($faqs as $index => $faq)
                    <div class="accordion-item {{ $index == 0 ? 'active' : '' }}" id="faq-{{ $faq->id }}">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 px-5 py-4 text-start"
                            aria-controls="faq-{{ $faq->id }}-collapse" aria-expanded="true">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            {{ $faq->question }}
                        </button>
                        <div id="faq-{{ $faq->id }}-collapse"
                            class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-{{ $faq->id }}" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    {{ $faq->answer }}
                                    {!! $faq->answer !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="accordion-item" id="delivery-shadow">
                    <button class="accordion-toggle inline-flex items-center gap-x-4 px-5 py-4 text-start"
                        aria-controls="delivery-shadow-collapse" aria-expanded="false">
                        <span
                            class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                        <span
                            class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                        How would you ship my order?
                    </button>
                    <div id="delivery-shadow-collapse"
                        class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        aria-labelledby="delivery-shadow" role="region">
                        <div class="px-5 pb-4">
                            <p class="text-base-content/80 font-normal">
                                For large products, we deliver your product via a third party logistics company offering
                                you the “room of
                                choice” scheduled delivery service. For small products, we offer free parcel delivery.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <x-review />

    </div>
</x-website-layout>
