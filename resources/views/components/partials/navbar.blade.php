<header id="navbar"
    class="fixed top-0 z-50  w-full flex  flex-wrap py-2 text-lg xl:flex-nowrap xl:justify-start xl:py-0 bg-transparent font-body font-normal tracking-tighter">
    <nav class="w-full  xl:mx-32 mx-4 " aria-label="Global">
        <div class=" relative xl:flex xl:items-center ">
            <div class="flex items-center justify-between">
                <a class="link text-base-content link-neutral texl-lg font-semibold no-underline" href="/home">
                    <img src="{{ asset('photos/logo.png') }}" alt="Sherpalaya Logo" class="h-8 w-12">
                </a>
                <div class="xl:hidden">
                    <div class="dropdown relative inline-flex [--placement:bottom-end]">
                        <button id="language-select-dropdown-drawer" type="button" class="dropdown-toggle"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <span class="icon-[tabler--language-hiragana] size-5"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                            aria-orientation="vertical" aria-labelledby="language-select-dropdown-drawer">
                            <li><a class="dropdown-item text-black" href="/change-locale/en"> English</a></li>
                            <li><a class="dropdown-item text-black" href="/change-locale/fr"> French</a></li>
                        </ul>
                    </div>

                    <button type="button" class="" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="middle-center-modal" data-overlay="#middle-center-modal">
                        <span class="icon-[tabler--search] size-5"></span>
                    </button>
                    <button type="button" class="btn btn-transparent border-none" aria-haspopup="dialog"
                        aria-expanded="false" aria-controls="overlay-end-example" data-overlay="#overlay-end-example">
                        <span class="icon-[tabler--menu-2] collapse-open:hidden size-5"></span>
                        <span class="icon-[tabler--x] collapse-open:block hidden size-5"></span>
                    </button>
                </div>
            </div>

            <div id="navbar-mega-menu-click"
                class="collapse hidden grow basis-full overflow-hidden rounded-lg transition-all duration-300  xl:block ">
                <div
                    class="flex flex-col rounded-lg max-xl:mt-3 max-xl:border max-xl:p-2 xl:flex-row xl:items-center xl:justify-end gap-2z xl:ps-5 xl:pe-0.5 xl:py-0.5">
                    <ul class="menu xl:menu-horizontal p-0 font-medium max-xl:w-fit gap-2 bg-transparent ">
                        <li class=" hover:text-warning rounded-lg uppercase"><a href="/home"
                                @class([
                                    'underline decoration-wavy text-black' =>
                                        request()->route()->getName() == 'website.home',
                                ])>Home</a>
                        </li>
                    </ul>
                    <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
                        <button id="nested-dropdown" type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase  "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Company
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60 uppercase rounded-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown">
                            <li
                                class="text-black text-lg font-normal teacking-normal  hover:text-warning hover:underline decoration-1">
                                <a class="dropdown-item" href="about_us">About
                                    Us</a>
                            </li>
                            {{-- <li
                                class="text-black text-lg font-normal teacking-normal  hover:text-warning hover:underline decoration-1">
                                <a class="dropdown-item" href="/">
                                    Documents
                                </a>
                            </li> --}}
                            <li
                                class="text-black text-lg font-normal teacking-normal  hover:text-warning hover:underline decoration-1">
                                <a class="dropdown-item" href="/sherpas">
                                    Our Sherpas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
                        <button id="service-dropdown" type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase  "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Services
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60 uppercase rounded-none px-0"
                            role="menu" aria-orientation="vertical" aria-labelledby="service-dropdown">
                            @foreach ($navServices as $navService)
                                <li
                                    class="text-black text-base font-normal teacking-wider  hover:text-warning hover:underline decoration-1">
                                    <a class="dropdown-item"
                                        href="{{ route('show_service', $navService->id) }}">{{ $navService->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>



                    {{-- expedition start --}}
                    <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase  "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Expedition
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-none p-0 opacity-0 shadow-none transition-[opacity,margin] duration-[0.1ms] before:absolute"
                            role="menu" aria-orientation="vertical">
                            <ul class="menu xl:menu-horizontal rounded-box w-full max-xl:gap-4 max-xl:border xl:shadow">
                                <div class="grid grid-cols-5 gap-4">
                                    @foreach ($navExpeditions as $navRegion)
                                        @if ($navRegion->expeditions->isNotEmpty())
                                            <li class="uppercase ">
                                                <a href="/expeditions#category-{{ $navRegion->id }}"
                                                    class="menu font-medium text-black text-lg hover:text-primary hover:underline">{{ $navRegion->name }}
                                                    </p></a>
                                                <ul class="menu px-0">
                                                    @foreach ($navRegion->expeditions as $expedition)
                                                        <div class="flex flex-col gap-0 items-start font-normal ">
                                                            <div
                                                                class="text-black hover:text-primary hover:underline decoration-2 text-wrap tracking-normal text-base">
                                                                <a
                                                                    href="{{ route('show_expedition', $expedition->id) }}">
                                                                    {{ $expedition->title }}
                                                                </a>
                                                            </div>
                                                            <div class="mb-2">
                                                                <p
                                                                    class="text-xs rounded-full text-warning tracking-widest font-normal badge-outline text-nowrap px-1">
                                                                    {{ $expedition->duration }} days
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                    {{-- expedition end --}}

                    {{-- trek-start --}}
                    <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase  "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Treks
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-none p-0 opacity-0 shadow-none transition-[opacity,margin] duration-[0.1ms] before:absolute"
                            role="menu" aria-orientation="vertical">
                            <ul
                                class="menu xl:menu-horizontal rounded-box w-full max-xl:gap-4 max-xl:border xl:shadow">
                                <div class="grid grid-cols-5 gap-4">
                                    @foreach ($navTreks as $trekCategory)
                                        @if ($trekCategory->treks->isNotEmpty())
                                            <li class="uppercase ">
                                                <a href="/treks#category-{{ $trekCategory->id }}"
                                                    class="menu font-medium text-black hover:text-primary hover:underline decoration-2">{{ $trekCategory->name }}
                                                    </p></a>
                                                <ul class="menu px-0 ">
                                                    @foreach ($trekCategory->treks as $trek)
                                                        <div class="flex flex-col gap-0 items-start font-normal">
                                                            <div
                                                                class="text-black hover:text-primary hover:underline decoration-2 text-wrap tracking-normal text-base">
                                                                <a href="{{ route('show_trek', $trek->id) }}">
                                                                    {{ $trek->title }}
                                                                </a>
                                                            </div>
                                                            <div class="mb-2 ">
                                                                <p
                                                                    class="text-xs rounded-full text-warning tracking-widest font-normal badge-outline text-nowrap px-1">
                                                                    {{ $trek->duration }} days
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                    {{-- trekend --}}

                    {{-- tours --}}
                    <div class="dropdown relative inline-flex rtl:[--placement:bottom-end] ">
                        <button id="tours-dropdown" type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase  "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Activities
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60 uppercase rounded-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown">
                            @foreach ($navTours as $tourCategory)
                                <li class="items-start">
                                    <div class="flex flex-col gap-0 items-start">
                                        <div
                                            class="menu font-medium text-wrap text-black px-0 py-1 tracking-wider hover:text-primary hover:underline decoration-2">
                                            <a href="/tours#type-{{ $tourCategory->id }}">
                                                {{ $tourCategory->name }}
                                            </a>
                                        </div>
                                        <div class="mb-3 px-0">
                                            @if ($tourCategory->tours->count() > 0)
                                                <p
                                                    class="text-xs rounded-full text-warning tracking-tight font-normal badge-outline text-nowrap px-1">
                                                    {{ $tourCategory->tours->count() }} packages
                                                </p>
                                            @else
                                                <p
                                                    class="text-xs rounded-full text-warning tracking-tight font-normal badge-outline text-nowrap px-1">
                                                    0 packages
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- tourend --}}
                    {{-- <ul class="menu xl:menu-horizontal p-0 font-medium max-xl:w-fit gap-2 bg-transparent ">
                        <li class=" hover:text-warning rounded-lg uppercase"><a href="/home"
                                @class([
                                    'underline decoration-wavy text-black' =>
                                        request()->route()->getName() == 'website.home',
                                ])>Home</a>
                        </li>
                    </ul> --}}
                    {{-- contact  --}}
                    <ul class="menu xl:menu-horizontal p-0 font-medium max-xl:w-fit bg-transparent items-center  ">
                        <li class=" hover:text-warning rounded-lg text-lg uppercase"><a href="/contact"
                                @class([
                                    'underline decoration-wavy text-black' =>
                                        request()->route()->getName() == 'website.contact',
                                ])>Contact</a>
                        </li>

                        {{-- Search --}}
                        <li class=" hover:text-warning rounded-lg text-lg uppercase">
                            <button type="button" class="" aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="middle-center-modal" data-overlay="#middle-center-modal">
                                <span class="icon-[tabler--search] size-5"></span>
                            </button>
                        </li>

                        {{-- Language Select --}}
                        <li class=" hover:text-warning rounded-lg text-lg uppercase">
                            <div class="dropdown relative inline-flex [--placement:bottom-end]">
                                <button id="language-select-dropdown" type="button" class="dropdown-toggle"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    <span class="icon-[tabler--language-hiragana] size-5"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                                    aria-orientation="vertical" aria-labelledby="language-select-dropdown">
                                    <li><a class="dropdown-item text-black" href="/change-locale/en"> English</a></li>
                                    <li><a class="dropdown-item text-black" href="/change-locale/fr"> French</a></li>
                                </ul>
                            </div>
                        </li>
                        {{-- Language end --}}
                    </ul>
                    <ul>

                    </ul>
                    {{-- contact end  --}}
                </div>
            </div>
        </div>
    </nav>
</header>

{{-- drawer --}}
<div id="overlay-end-example" class="overlay overlay-open:translate-x-0 drawer drawer-end hidden xl:hidden font-body"
    role="dialog" tabindex="-1">
    <div class="drawer-body px-2 uppercase">
        <div class="drawer-header px-2">
            <h3 class="drawer-title">Sherpalaya</h3>

            <button class="btn btn-text btn-circle btn-sm absolute end-12 top-3" type="button" class=""
                aria-haspopup="dialog" aria-expanded="false" aria-controls="middle-center-modal"
                data-overlay="#middle-center-modal">
                <span class="icon-[tabler--search] size-4"></span>
            </button>

            <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                data-overlay="#overlay-end-example">
                <span class="icon-[tabler--x] size-4 "></span>
            </button>

        </div>
        <div class="drawer-body justify-start pb-6 px-0">
            <ul class="menu  p-0 [&_.nested-collapse-wrapper]:space-y-0.5 [&_ul]:space-y-0.5 ">
                <li class=" hover:text-warning rounded-lg items-start"><a href="/home" @class([
                    'underline decoration-wavy text-black' =>
                        request()->route()->getName() == 'website.home',
                ])>
                        <span class="icon-[solar--home-outline] size-5">
                        </span>
                        Home
                    </a>
                </li>
                {{-- company --}}
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="company-collapse"
                        data-collapse="#company-collapse-menu">
                        <span class="icon-[ep--office-building] size-5"></span> Company
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="company-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300 "
                        aria-labelledby="company-collapse">
                        <li class="uppercase">
                            <ul class="menu px-0 mx-0">
                                <li class="text-black hover:underline px-0"><a class="dropdown-item"
                                        href="/about_us">
                                        <span class="icon-[majesticons--tooltip-text-line]"></span>
                                        About Us
                                    </a>
                                </li>
                                {{-- <li
                                    class="text-black text-lg font-normal teacking-normal  hover:text-warning hover:underline decoration-1">
                                    <a class="dropdown-item" href="/">
                                        Documents
                                    </a>
                                </li> --}}
                                <li class="text-black hover:underline"><a class="dropdown-item" href="/sherpas">
                                        <span class="icon-[stash--people-group-duotone]"></span>
                                        Our Sherpas
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- company end --}}
                {{-- services --}}
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="service-collapse"
                        data-collapse="#service-collapse-menu">
                        <span class="icon-[ep--office-building] size-5"></span> Services
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="service-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300 "
                        aria-labelledby="service-collapse">
                        <li class="uppercase">
                            <ul class="menu px-0 mx-0">
                                @foreach ($navServices as $navService)
                                    <li
                                        class="text-black text-base font-light teacking-wide  hover:text-warning hover:underline decoration-1">
                                        <a class="dropdown-item"
                                            href="{{ route('show_service', $navService->id) }}">{{ $navService->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- services end --}}

                {{-- expeditions --}}
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="expedition-collapse"
                        data-collapse="#expedition-collapse-menu">
                        <span class="icon-[majesticons--flag-line] size-5"></span> Expeditions
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="expedition-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300 "
                        aria-labelledby="expedition-collapse">
                        @foreach ($navExpeditions as $expeditionCategory)
                            @if ($expeditionCategory->expeditions->isNotEmpty())
                                <li class="uppercase ">
                                    <a href="/expeditions#category-{{ $expeditionCategory->id }}"
                                        class="menu font-normal text-black text-lg">{{ $expeditionCategory->name }}
                                        </p></a>
                                    <ul class="menu px-2">
                                        @foreach ($expeditionCategory->expeditions as $expedition)
                                            <div class="flex flex-col items-start  ">
                                                <div
                                                    class="text-black hover:underline text-wrap tracking-normal font-light">
                                                    <a href="{{ route('show_expedition', $expedition->id) }}">
                                                        {{ $expedition->title }}
                                                    </a>
                                                </div>
                                                <div class="mb-2">
                                                    <p
                                                        class="text-xs rounded-full text-warning tracking-tight font-normal badge-outline px-1">
                                                        {{ $expedition->duration }} days
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                {{-- expedition end  --}}

                {{-- treks --}}
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="trek-page-collapse"
                        data-collapse="#trek-page-collapse-menu">
                        <span class="icon-[material-symbols-light--hiking] size-5"></span>
                        Treks
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="trek-page-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                        aria-labelledby="trek-page-collapse">
                        @foreach ($navTreks as $trekCategory)
                            @if ($trekCategory->treks->isNotEmpty())
                                <li class="uppercase ">
                                    <a href="/treks#category-{{ $trekCategory->id }}"
                                        class="menu font-normal text-black text-lg">{{ $trekCategory->name }}
                                        </p></a>
                                    <ul class="menu px-2">
                                        @foreach ($trekCategory->treks as $trek)
                                            <div class="flex flex-col items-start  ">
                                                <div
                                                    class="text-black hover:underline tracking-normal font-light text-wrap">
                                                    <a href="{{ route('show_trek', $trek->id) }}">
                                                        {{ $trek->title }}
                                                    </a>
                                                </div>
                                                <div class="mb-2">
                                                    <p
                                                        class="text-xs rounded-full text-warning tracking-tight font-normal badge-outline px-1">
                                                        {{ $trek->duration }} days
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                {{-- treks end --}}

                {{-- tours  --}}
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="tour-page-collapse"
                        data-collapse="#tour-page-collapse-menu">
                        <span class="icon-[majesticons--map-marker-path-line] size-5"></span> Activities
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="tour-page-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300 "
                        aria-labelledby="tour-page-collapse">
                        @foreach ($navTours as $tourCategory)
                            <li class="items-start">
                                <div class="flex flex-row gap-0 items-center">
                                    <div class="menu hover:underline text-black font-light">
                                        <a href="/tours#type-{{ $tourCategory->id }}">
                                            {{ $tourCategory->name }}
                                        </a>
                                    </div>
                                    @if ($tourCategory->tours->count() > 0)
                                        <p
                                            class="text-xs rounded-full text-warning tracking-tight font-normal badge-outline px-1">
                                            {{ $tourCategory->tours->count() }} packages
                                        </p>
                                    @else
                                        <p
                                            class="text-xs rounded-full text-warning tracking-tight font-normal badge-outline px-1">
                                            0 packages
                                        </p>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </li>
                {{-- tours end  --}}

                {{-- contact  --}}
                <li class="text-slate-900 hover:text-warning rounded-lg text-md uppercase">
                    <a href="/contact" @class([
                        'underline decoration-wavy text-black' =>
                            request()->route()->getName() == 'website.contact',
                    ])>
                        <span class="icon-[majesticons--phone-line] size-5"></span>
                        Contact
                    </a>
                </li>
                {{-- contact end  --}}
            </ul>
        </div>
    </div>

</div>
{{-- drawer end --}}
@push('modals')
    <div id="middle-center-modal" class="overlay modal overlay-open:opacity-100 modal-middle hidden backdrop-blur-sm"
        role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100 ">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Dialog Title</h3>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                        data-overlay="#middle-center-modal">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body h-full bg-blue-50">
                    <x-search.search-input :query="$query" :type="$type" />
                </div>
            </div>
        </div>
    </div>
@endpush
@push('scripts')
    <script defer>
        const scrollableElement = document.body; // document.getElementById('scrollableElement');
        const navbar = document.getElementById('navbar');

        // Add smooth transition for background and visibility
        navbar.style.transition = "background 0.5s ease, transform 0.5s ease";

        scrollableElement.addEventListener('wheel', checkScrollDirection);

        function checkScrollDirection(event) {
            const currentScroll = window.pageYOffset;

            // Change background based on position
            if (currentScroll === 0) {
                navbar.style.background = "transparent"; // At the top
                navbar.style.color = "white"; // At the top
            } else {
                navbar.style.background = "rgba(255, 255, 255, 1)"; // bg-slate-100
                navbar.style.color = "black"; // At the top

            }

            // Show or hide the navbar based on scroll direction
            if (checkScrollDirectionIsUp(event)) {
                navbar.style.transform = "translateY(0)"; // Show navbar
            } else {
                navbar.style.transform = "translateY(-100%)"; // Hide navbar
            }
        }

        function checkScrollDirectionIsUp(event) {
            if (event.wheelDelta) {
                return event.wheelDelta > 0;
            }
            return event.deltaY < 0;
        }
    </script>
@endpush
