<nav id="navbar"
    class="navbar rounded-none flex  items-center justify-between fixed top-0 z-30 w-full bg-transparent shadow-none">
    <div class="navbar-start lg:justify-center  2xl:pl-10 max-sm:w-1/4">
        <a class="link text-base-content/90 link-neutral md:text-2xl font-semibold no-underline" href="/home">
            Sherpalaya
        </a>
    </div>
    <div class="navbar-center max-lg:hidden tracking-wide">
        <ul class="menu menu-horizontal p-0 font-medium bg-transparent">
            <li class="text-slate-900"><a href="/home" @class(['active' => request()->route()->getName() == 'website.home'])>Home</a></li>
            <li class="text-slate-900"><a href="/about" @class(['active' => request()->route()->getName() == 'website.about'])>About</a></li>
            <li class="text-slate-900"><a href="/trekking" @class([
                'active' => request()->route()->getName() == 'website.trekking',
            ])>Trekking</a></li>
            <li class="text-slate-900"><a href="/peaks" @class(['active' => request()->route()->getName() == 'website.peaks'])>Peaks</a></li>
            <li class="text-slate-900"><a href="/expeditions" @class([
                'active' => request()->route()->getName() == 'website.expeditions',
            ])>Expeditions</a></li>
            <div class="dropdown relative inline-flex [--trigger:hover] rtl:[--placement:bottom-end] bg-transparent">
                <li class="text-slate-900"><a href="/tour">Tours</a></li>
                <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full bg-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="dropdown-hover">
                    <li><a class="dropdown-item" href="/tour/cultural">Cultural</a></li>
                    <li><a class="dropdown-item" href="/tour/cycling">Cycling</a></li>
                    <li><a class="dropdown-item" href="/tour/photography">Photography</a></li>
                    <li><a class="dropdown-item" href="/tour/running">Running</a></li>
                    <li><a class="dropdown-item" href="/tour/sight_seeing">SightSeeing</a></li>
                </ul>
            </div>
            <li class="text-slate-900"><a href="/contact" @class([
                'active' => request()->route()->getName() == 'website.contact',
            ])>Contact</a></li>
        </ul>
    </div>
    <div class="navbar-end items-center lg:justify-center gap-12">
        <div class="hidden lg:flex items-center gap-4 pr-2">
            <button class="btn btn-slate-700">Search</button>
        </div>


        <button type="button" class="btn btn-text btn-secondary btn-square lg:hidden" aria-haspopup="dialog"
            aria-expanded="false" aria-controls="overlay-end-example" data-overlay="#overlay-end-example">
            <span class="icon-[tabler--menu-2] dropdown-open:hidden size-6"></span>
        </button>

        <div id="overlay-end-example" class="overlay overlay-open:translate-x-0 drawer drawer-end hidden z-10"
            role="dialog" tabindex="-1">
            <div class="drawer-header">
                <h3 class="drawer-title">Sherpalaya</h3>
                <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                    data-overlay="#overlay-end-example">
                    <span class="icon-[tabler--x] size-6"></span>
                </button>
            </div>
            <div class="drawer-body justify-start pb-6">
                <ul class="menu space-y-0.5 p-0 [&_.nested-collapse-wrapper]:space-y-0.5 [&_ul]:space-y-0.5">

                    <li>
                        <a href="/home">
                            <span class="icon-[tabler--home] size-6"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/about">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                            </svg>
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="/trekking">
                            <span class="icon-[tabler--trekking] size-6"></span>
                            Treks
                        </a>
                    </li>
                    <li>
                        <a href="/peaks">
                            <span class="icon-[lucide--mountain] size-6"></span>
                            Peaks
                        </a>
                    </li>
                    <li>
                        <a href="/expeditions">
                            <span class="icon-[tabler--flag] size-6"></span>
                            Expeditions
                        </a>
                    </li>
                    <li class="nested-collapse-wrapper">
                        <a class="collapse-toggle nested-collapse" id="layout-collapse"
                            data-collapse="#layout-collapse-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                            Tours
                            <span class="icon-[tabler--chevron-down] collapse-icon size-4"></span>
                        </a>
                        <ul id="layout-collapse-menu"
                            class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                            aria-labelledby="layout-collapse">
                            <li>
                                <a href="/tour/cultural">
                                    <span class="icon-[fluent--heart-pulse-32-filled] size-6"></span>
                                    Cultural
                                </a>
                                {{-- <span class="icon-[fluent--heart-pulse-32-filled]" style="width: 48px; height: 48px; color: #6a4ca4;"></span> --}}
                            </li>
                            <li>
                                <a href="/tour/cycling">
                                    <span class="icon-[guidance--spinning] size-6"></span>
                                    Cycling
                                </a>
                            </li>
                            <li>
                                <a href="/tour/photography">
                                    <span class="icon-[uil--capture] size-6"></span>
                                    Photography
                                </a>
                                {{-- <span class="" style="width: 48px; height: 48px; color: #6a4ca4;"></span> --}}
                            </li>
                            <li>
                                <a href="/tour/running">
                                    <span class="icon-[mdi--run-fast] size-6"></span>
                                    Running
                                </a>
                            </li>
                            <li>
                                <a href="/tour/sight_seeing">
                                    <span class="icon-[icon-park-twotone--sunset] size-6"></span>
                                    SightSeeing
                                </a>
                                {{-- <span class="icon-[icon-park-twotone--pic]" style="width: 48px; height: 48px; color: #6a4ca4;"></span> --}}
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/contact">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    const scrollableElement = document.body; //document.getElementById('scrollableElement');
    const navbar = document.getElementById('navbar');

    scrollableElement.addEventListener('wheel', checkScrollDirection);

    function checkScrollDirection(event) {
        const currentScroll = window.pageYOffset;
        // Change background based on position
        if (currentScroll > 100) {
            navbar.style.background = "rgba(255, 255, 255, 1)"; // bg-slate-100
        } else {
            navbar.style.background = "transparent";
        }

        if (checkScrollDirectionIsUp(event)) {
            // console.log('UP');
            navbar.classList.remove("hidden");
        } else {
            // console.log('Down');
            navbar.classList.add("hidden");
        }
    }

    function checkScrollDirectionIsUp(event) {
        if (event.wheelDelta) {
            return event.wheelDelta > 0;
        }
        return event.deltaY < 0;
    }
</script>


{{-- <script>
    const scrollableElement = document.body; // The element being scrolled
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    scrollableElement.addEventListener('wheel', throttle(checkScrollDirection, 50));

    function checkScrollDirection(event) {
        const currentScroll = window.scrollY;

        // Change background based on scroll position
        if (currentScroll > 100) {
            navbar.style.background = "rgba(255, 255, 255, 1)"; // bg-slate-100
        } else {
            navbar.style.background = "transparent";
        }

        // Show or hide the navbar based on scroll direction and position
        if (currentScroll < 100 || checkScrollDirectionIsUp(event)) {
            navbar.classList.remove('hidden'); // Show navbar
        } else {
            navbar.classList.add('hidden'); // Hide navbar
        }

        lastScroll = currentScroll;
    }

    function checkScrollDirectionIsUp(event) {
        return event.deltaY ? event.deltaY < 0 : event.wheelDelta > 0;
    }

    // Throttle function to limit event firing
    function throttle(func, delay) {
        let timeout;
        return function (...args) {
            if (!timeout) {
                func.apply(this, args);
                timeout = setTimeout(() => {
                    timeout = null;
                }, delay);
            }
        };
    }
</script> --}}
