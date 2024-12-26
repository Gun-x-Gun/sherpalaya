<div class="sticky top-0 z-10 opacity-10">
    <nav class="navbar rounded-none shadow">
        <div class="w-full md:flex md:items-center md:gap-2">
            <div class="flex items-center justify-between">
                <div class="navbar-start items-center justify-between max-md:w-full">
                    <a href="#">
                        <span class="icon-[svg-spinners--clock]" style="width: 48px; height: 48px;"></span>
                    </a>
                    <div class="md:hidden">
                        <button type="button" class="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square"
                            data-collapse="#default-navbar-collapse" aria-controls="default-navbar-collapse"
                            aria-label="Toggle navigation">
                            <span class="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                            <span class="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="default-navbar-collapse"
                class="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full">
                <ul class="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                    <li><a href="/home" @class(['active' => request()->route()->getName() == 'website.home'])>Home</a></li>
                    <li><a href="/about" @class(['active' => request()->route()->getName() == 'website.about'])>About Us</a></li>
                    <li><a href="/trekking" @class([
                        'active' => request()->route()->getName() == 'website.trekking',
                    ])>Trekking</a></li>
                    <li><a href="/peaks" @class(['active' => request()->route()->getName() == 'website.peaks'])>Peaks</a></li>
                    <li><a href="/expeditions" @class([
                        'active' => request()->route()->getName() == 'website.expeditions',
                    ])>Expeditions</a></li>
                    <div class="dropdown relative inline-flex [--trigger:hover] rtl:[--placement:bottom-end]">
                        <li><a>Tours</a></li>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                            role="menu" aria-orientation="vertical" aria-labelledby="dropdown-hover">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Billing</a></li>
                            <li><a class="dropdown-item" href="#">FAQs</a></li>
                        </ul>
                    </div>
                    <li><a href="/contact" @class([
                        'active' => request()->route()->getName() == 'website.contact',
                    ])>Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


