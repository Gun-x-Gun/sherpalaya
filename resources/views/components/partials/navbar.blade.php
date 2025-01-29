<header id="navbar"
    class="fixed top-0 z-50  flex w-full flex-wrap py-2 text-lg xl:flex-nowrap xl:justify-start xl:py-0 bg-transparent">
    <nav class="w-full  2xl:mx-44 mx-4 " aria-label="Global">
        <div class=" relative xl:flex xl:items-center ">
            <div class="flex items-center justify-between">
                <a class="link text-base-content link-neutral texl-2xl font-semibold no-underline" href="/home">
                    Sherpalaya
                </a>
                {{-- <div class="xl:hidden">
                    <button type="button" class="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square"
                        data-collapse="#navbar-mega-menu-click" aria-controls="navbar-mega-menu-click"
                        aria-label="Toggle navigation">
                        <span class="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                        <span class="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                    </button>
                </div> --}}

                <div class="xl:hidden">
                    <a href="/search" class="btn btn-transparent border-none">
                        <span class="icon-[tabler--search] size-5"></span>
                    </a>
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
                    class="flex flex-col rounded-lg max-xl:mt-3 max-xl:border max-xl:p-2 xl:flex-row xl:items-center xl:justify-end gap-2 xl:ps-5 xl:pe-0.5 xl:py-0.5">
                    <ul class="menu xl:menu-horizontal p-0 font-medium max-xl:w-fit gap-2 bg-transparent ">
                        <li class=" hover:bg-accent rounded-lg uppercase"><a href="/home"
                                @class([
                                    'underline decoration-wavy text-primary' =>
                                        request()->route()->getName() == 'website.home',
                                ])>Home</a>
                        </li>
                    </ul>
                    <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
                        <button id="nested-dropdown" type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase max-xl:px-3 "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Company
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60 uppercase" role="menu"
                            aria-orientation="vertical" aria-labelledby="nested-dropdown">
                            <li class="hover:text-primary hover:underline decoration-wavy"><a class="dropdown-item"
                                    href="about_us">About Us</a></li>
                            <li class="hover:text-primary hover:underline decoration-wavy"><a class="dropdown-item"
                                    href="services">Services</a></li>
                            <li class="hover:text-primary hover:underline decoration-wavy"><a class="dropdown-item"
                                    href="why_sherpalaya">Why Sherpalaya??</a></li>
                            <li class="hover:text-primary hover:underline decoration-wavy"><a class="dropdown-item"
                                    href="#">Our Sherpaas</a></li>
                            <li class="hover:text-primary hover:underline decoration-wavy"><a class="dropdown-item"
                                    href="#">FAQs</a></li>
                        </ul>
                    </div>

                    {{-- <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]  ">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase max-xl:px-3"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Adventures
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-none p-0 opacity-0 shadow-none
                        transition-[opacity,margin] duration-[0.1ms] before:absolute h-96 overflow-y-auto"
                            role="menu" aria-orientation="vertical">
                            <ul
                                class="menu xl:menu-horizontal rounded-box w-full max-xl:gap-4 max-xl:border xl:shadow ">
                                <div class="grid grid-cols-4 gap-0 ">
                                    <div class="card px-0 mx-0 rounded-none ">
                                        <p class="card-title  text-primary text-lg font-bold uppercase mx-2 mt-4">
                                            Expedition
                                        </p>
                                        @foreach ($navRegions as $navRegion)
                                            @if ($navRegion->expeditions->isNotEmpty())
                                                <div class="card sm:max-w-sm px-0 mx-0 rounded-none">
                                                    <div class="card-body px-2 rounded-none ">
                                                        <p
                                                            class="card-title mb-2.5 text-primary text-sm font-normal capitalize">
                                                            {{ $navRegion->name }} region
                                                        </p>
                                                        @foreach ($navRegion->expeditions as $expedition)
                                                            <a href="{{ route('show_expedition', $expedition->id) }}">
                                                                <div class="card-body px-2 pt-2 bg-blue-100/30 ">
                                                                    <h5
                                                                        class="card-title mb-2.5 line-clamp-2 uppercase text-lg text-accent font-normal hover:text-primary hover:underline ">
                                                                        {{ $expedition->title }}</h5>
                                                                    <div
                                                                        class="justify-start flex flex-row items-start  gap-4">
                                                                        <span
                                                                            class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span>
                                                                        <span
                                                                            class="text-primary lowercase items-center font-normal ">
                                                                            {{ $expedition->duration . ' days' }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="card rounded-none bg-blue-100/10">
                                        <p class="card-title text-primary text-lg font-bold uppercase mx-2 mt-4">
                                            Treks
                                        </p>
                                        @foreach ($navRegions as $navRegion)
                                            @if ($navRegion->treks->isNotEmpty())
                                                <div class="card sm:max-w-sm my-0 py-0 rounded-none ">
                                                    <div class="card-body px-2 ">
                                                        <p
                                                            class="card-title mb-2.5 text-primary text-sm font-normal capitalize">
                                                            {{ $navRegion->name }} region
                                                        </p>
                                                        @foreach ($navRegion->treks as $expedition)
                                                            <a href="{{ route('show_trek', $expedition->id) }}">
                                                                <div class="card-body px-2 pt-2 bg-blue-200/10 mb-2 ">
                                                                    <h5
                                                                        class="card-title mb-2.5 line-clamp-2 uppercase text-lg text-accent font-normal hover:text-primary hover:underline text-wrap">
                                                                        {{ $expedition->title }}</h5>

                                                                    <div
                                                                        class="justify-start flex flex-row items-start  gap-4">

                                                                        <span
                                                                            class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span>
                                                                        <span
                                                                            class="text-primary lowercase items-center font-normal ">
                                                                            {{ $expedition->duration . ' days' }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="card rounded-none bg-blue-100/10">
                                        <p class="card-title text-primary text-lg font-bold uppercase mx-2 mt-4">
                                            Peaks
                                        </p>
                                        @foreach ($navRegions as $navRegion)
                                            @if ($navRegion->peaks->isNotEmpty())
                                                <div class="card sm:max-w-sm my-0 py-0 ">
                                                    <div class="card-body px-2">
                                                        <p
                                                            class="card-title mb-2.5 text-primary text-sm font-normal capitalize">
                                                            {{ $navRegion->name }} region
                                                        </p>
                                                        @foreach ($navRegion->peaks as $peak)
                                                            <a href="{{ route('show_peak', $peak->id) }}">
                                                                <div class="card-body px-2 pt-2 bg-blue-200/10 mb-2 ">
                                                                    <h5
                                                                        class="card-title mb-2.5 line-clamp-2 uppercase text-lg text-accent font-normal hover:text-primary hover:underline text-wrap">
                                                                        {{ $peak->title }}</h5>

                                                                    <div
                                                                        class="justify-start flex flex-row items-start  gap-4">

                                                                        <span
                                                                            class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span>
                                                                        <span
                                                                            class="text-primary lowercase items-center font-normal ">
                                                                            {{ $peak->duration . ' days' }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="card rounded-none bg-blue-100/10">
                                        <p class="card-title text-primary text-lg font-bold uppercase mx-2 mt-4">
                                            Tours
                                        </p>
                                        @foreach ($navTours as $type => $tours)
                                            @php
                                                $typeLabel =
                                                    \App\Enums\TourType::tryFrom($type)?->getLabel() ?? 'Unknown';
                                            @endphp
                                            @if ($tours->isNotEmpty())
                                                <div class="card-body px-2">
                                                    <p
                                                        class="card-title mb-2.5 text-primary text-sm font-normal capitalize">
                                                        type: {{ $typeLabel }}
                                                    </p>
                                                    @foreach ($tours as $tour)
                                                        <a href="{{ route('show_tour', $tour->id) }}">
                                                            <div class="card-body px-2 pt-2 bg-blue-200/10 mb-2 ">
                                                                <h5
                                                                    class="card-title mb-2.5 line-clamp-2 uppercase text-lg text-accent font-normal hover:text-primary hover:underline text-wrap">
                                                                    {{ $tour->title }}</h5>

                                                                <div
                                                                    class="justify-start flex flex-row items-start  gap-4">

                                                                    <span
                                                                        class="icon-[solar--calendar-outline] size-5 font-extrabold text-primary"></span>
                                                                    <span
                                                                        class="text-primary lowercase items-center font-normal ">
                                                                        {{ $tour->duration . ' days' }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div> --}}

                    {{-- expeditionstart --}}
                    <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase max-xl:px-3 "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Expedition
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-none p-0 opacity-0 shadow-none transition-[opacity,margin] duration-[0.1ms] before:absolute"
                            role="menu" aria-orientation="vertical">
                            <ul class="menu xl:menu-horizontal rounded-box w-full max-xl:gap-4 max-xl:border xl:shadow">
                                <div class="2xl:grid grid-cols-3">
                                    @foreach ($navRegions as $navRegion)
                                        @if ($navRegion->expeditions->isNotEmpty())
                                            <li class="uppercase">
                                                <a href="#"
                                                    class="menu font-bold text-primary">{{ $navRegion->name }}
                                                    Region</p></a>
                                                <ul class="menu">
                                                    @foreach ($navRegion->expeditions as $expedition)
                                                        <li
                                                            class="text-slate-500  hover:text-primary hover:underline decoration-wavy">
                                                            <a href="{{ route('show_expedition', $expedition->id) }}">
                                                                {{ $expedition->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                    {{-- expeditionend --}}


                    {{-- trek-start --}}
                    <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content text-lg uppercase max-xl:px-3 "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Treks
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-none p-0 opacity-0 shadow-none transition-[opacity,margin] duration-[0.1ms] before:absolute"
                            role="menu" aria-orientation="vertical">
                            <ul class="menu xl:menu-horizontal rounded-box w-full max-xl:gap-4 max-xl:border xl:shadow">
                                <div class="2xl:grid grid-cols-3">
                                    @foreach ($navRegions as $navRegion)
                                        @if ($navRegion->treks->isNotEmpty())
                                            <li class="uppercase">
                                                <a href="#"
                                                    class="menu font-bold text-primary">{{ $navRegion->name }}
                                                    Region</p></a>
                                                <ul class="menu">
                                                    @foreach ($navRegion->treks as $trek)
                                                        <li
                                                            class="text-slate-500  hover:text-primary hover:underline decoration-wavy">
                                                            <a href="{{ route('show_trek', $trek->id) }}">
                                                                {{ $trek->title }}
                                                            </a>
                                                        </li>
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

                    {{-- peakstart --}}
                    <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content max-xl:px-3 text-lg uppercase "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Peaks
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-none p-0 opacity-0 shadow-none transition-[opacity,margin] duration-[0.1ms] before:absolute"
                            role="menu" aria-orientation="vertical">
                            <ul
                                class="menu xl:menu-horizontal rounded-box w-full max-xl:gap-4 max-xl:border xl:shadow ">
                                <div class="2xl:grid grid-cols-3">

                                    @foreach ($navRegions as $navRegion)
                                        @if ($navRegion->peaks->isNotEmpty())
                                            <li class="uppercase">
                                                <a href="#"
                                                    class="menu font-bold text-primary">{{ $navRegion->name }}
                                                    Region</a>
                                                <ul class="menu">
                                                    @foreach ($navRegion->peaks as $peak)
                                                        <li
                                                            class="text-slate-500 hover:text-primary hover:underline decoration-wavy">
                                                            <a
                                                                href="{{ route('show_peak', $peak->id) }}">{{ $peak->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                    {{-- peakend --}}

                    {{-- tours --}}
                    <div
                        class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static]  xl:[--strategy:absolute]">
                        <button type="button"
                            class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content max-xl:px-3 text-lg uppercase "
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Tours
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-lg p-0 opacity-0 shadow-none transition-[opacity,margin] duration-[0.1ms] before:absolute"
                            role="menu" aria-orientation="vertical">
                            <ul
                                class="menu xl:menu-horizontal rounded-none w-full max-xl:gap-4 max-xl:border xl:shadow">
                                <div class="2xl:grid grid-cols-3">
                                    @foreach ($navTours as $type => $tours)
                                        @php
                                            $typeLabel = \App\Enums\TourType::tryFrom($type)?->getLabel() ?? 'Unknown';
                                        @endphp
                                        @if ($tours->isNotEmpty())
                                            <li class="items-start">
                                                <a href="#"
                                                    class="menu font-bold text-primary">{{ $typeLabel }}</a>
                                                @foreach ($tours as $tour)
                                                    <ul class="menu pl-4">
                                                        <li
                                                            class="text-slate-500 hover:text-primary text-wrap hover:underline decoration-wavy">
                                                            <a
                                                                href="{{ route('show_tour', $tour->id) }}">{{ $tour->title }}</a>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            </li>
                                        @endif
                                    @endforeach
                                </div>

                            </ul>
                        </div>
                    </div>
                    {{-- tourend --}}
                    <ul class="menu xl:menu-horizontal p-0 font-medium max-xl:w-fit gap-2 bg-transparent  uppercase ">
                        <li class="text-slate-900 hover:bg-accent rounded-lg text-md "><a href="/contact"
                                @class([
                                    'underline decoration-wavy text-primary' =>
                                        request()->route()->getName() == 'website.contact',
                                ])>Contact</a>
                        </li>
                        <li class="text-slate-900 hover:bg-accent rounded-lg text-md">
                            <a href="/search">
                                <span class="icon-[tabler--search] size-5"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


</header>
<div id="overlay-end-example" class="overlay overlay-open:translate-x-0 drawer drawer-end hidden xl:hidden "
    role="dialog" tabindex="-1">
    <div class="drawer-body px-2 uppercase">
        <div class="drawer-header px-2">
            <h3 class="drawer-title">Sherpalaya</h3>
            <a href="/search" class="btn btn-text btn-circle btn-sm absolute end-12 top-3">
                <span class="icon-[tabler--search] size-5 "></span>
            </a>
            <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                data-overlay="#overlay-end-example">
                <span class="icon-[tabler--x] size-4 "></span>
            </button>

        </div>
        <div class="drawer-body justify-start pb-6 px-0">
            <ul class="menu  p-0 [&_.nested-collapse-wrapper]:space-y-0.5 [&_ul]:space-y-0.5 ">
                <li class=" hover:bg-accent rounded-lg "><a href="/home" @class([
                    'underline decoration-wavy text-primary' =>
                        request()->route()->getName() == 'website.home',
                ])>
                        <span class="icon-[tabler--layout-navbar] size-5"></span>
                        Home
                    </a>
                </li>
                <li class=" hover:bg-accent rounded-lg "><a href="/about" @class([
                    'underline decoration-wavy text-primary' =>
                        request()->route()->getName() == 'website.about',
                ])>
                        <span class="icon-[tabler--layout-navbar] size-5"></span>
                        Company
                    </a>
                </li>
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="expedition-collapse"
                        data-collapse="#expedition-collapse-menu">
                        <span class="icon-[tabler--layout-navbar] size-5"></span>
                        Expeditions
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="expedition-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300 "
                        aria-labelledby="expedition-collapse">
                        @foreach ($navRegions as $navRegion)
                            @if ($navRegion->expeditions->isNotEmpty())
                                <li class="px-0">
                                    <a href="#" class="menu font-bold text-primary">{{ $navRegion->name }}
                                        Region</a>
                                    <ul class="menu ">
                                        @foreach ($navRegion->expeditions as $expedition)
                                            <li
                                                class=" text-slate-500  hover:text-primary hover:underline decoration-wavy">
                                                <a
                                                    href="{{ route('show_expedition', $expedition->id) }}">{{ $expedition->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="trek-page-collapse"
                        data-collapse="#trek-page-collapse-menu">
                        <span class="icon-[tabler--box-multiple] size-5"></span>
                        Treks
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="trek-page-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                        aria-labelledby="trek-page-collapse">
                        @foreach ($navRegions as $navRegion)
                            @if ($navRegion->treks->isNotEmpty())
                                <li>
                                    <a href="#" class="menu font-bold text-primary">{{ $navRegion->name }}
                                        Region</a>
                                    <ul class="menu">
                                        @foreach ($navRegion->treks as $trek)
                                            <li
                                                class="text-slate-500  hover:text-primary hover:underline decoration-wavy">
                                                <a href="{{ route('show_trek', $trek->id) }}">{{ $trek->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="peak-page-collapse"
                        data-collapse="#peak-page-collapse-menu">
                        <span class="icon-[tabler--box-multiple] size-5"></span>
                        Peaks
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="peak-page-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                        aria-labelledby="peak-page-collapse">
                        @foreach ($navRegions as $navRegion)
                            @if ($navRegion->peaks->isNotEmpty())
                                <li>
                                    <a href="#" class="menu font-bold text-primary">{{ $navRegion->name }}
                                        Region</a>
                                    <ul class="menu">
                                        @foreach ($navRegion->peaks as $peak)
                                            <li
                                                class="text-slate-500 hover:text-primary hover:underline decoration-wavy">
                                                <a href="{{ route('show_peak', $peak->id) }}">{{ $peak->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nested-collapse-wrapper">
                    <a class="collapse-toggle nested-collapse" id="tour-page-collapse"
                        data-collapse="#tour-page-collapse-menu">
                        <span class="icon-[tabler--box-multiple] size-5"></span>
                        Tours
                        <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                    </a>
                    <ul id="tour-page-collapse-menu"
                        class="collapse hidden w-auto overflow-hidden transition-[height] duration-300 "
                        aria-labelledby="tour-page-collapse">
                        @foreach ($navTours as $type => $tours)
                            @php
                                $typeLabel = \App\Enums\TourType::tryFrom($type)?->getLabel() ?? 'Unknown';
                            @endphp
                            @if ($tours->isNotEmpty())
                                <li class="items-start">
                                    <a href="#" class="menu font-bold text-primary">{{ $typeLabel }}</a>
                                    @foreach ($tours as $tour)
                                        <ul class="menu py-0">
                                            <li
                                                class="text-slate-500 hover:text-primary  hover:underline decoration-wavy">
                                                <a href="{{ route('show_tour', $tour->id) }}">{{ $tour->title }}</a>
                                            </li>
                                        </ul>
                                    @endforeach
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="text-slate-900 hover:bg-accent rounded-lg text-md uppercase"><a href="/contact"
                        @class([
                            'underline decoration-wavy text-primary' =>
                                request()->route()->getName() == 'website.contact',
                        ])>
                        <span class="icon-[tabler--layout-navbar] size-5"></span>
                        Contact
                    </a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</div>


<script>
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
        } else {
            navbar.style.background = "rgba(255, 255, 255, 1)"; // bg-slate-100
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
