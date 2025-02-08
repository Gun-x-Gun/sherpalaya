<div style="background-image: url('{{ asset('/photos/background1.jpg') }}');"
    class="bg-cover bg-center w-full  object-top">
    <div class="backdrop-blur-md">
        <div class="mx-4 2xl:mx-44">
            <div class="h-10"></div>
            <footer class="footer">
                <div class="gap-6">
                    <a class="link text-base-content link-neutral texl-lg font-semibold no-underline"
                        href="/home">
                        <div class="flex items-center gap-4 text-xl uppercase font-semibold text-blue-100  text-wrap">
                            <img src="{{ asset('photos/logo.png') }}" alt="Sherpalaya Logo" class="h-6 w-6">
                            <span>Sherpalaya pvt. ltd.</span>
                        </div>
                    </a>
                    <div class="flex items-center gap-4 text-base capitalize font-normal text-blue-100 text-wrap ">
                        <span class="icon-[iconoir--map-pin] size-6 text-blue-100"></span>
                        <span>Kathmandu, thamel, street no 6</span>
                    </div>
                    <a class="link text-base-content link-neutral texl-lg font-semibold no-underline"
                        href="mailto:sherpalaya@gmail.com">
                        <div
                            class="flex items-center gap-4 text-lg lowercase font-normal text-blue-100 hover:underline">
                            <span class="icon-[iconoir--mail] size-6"></span>
                            <span>Sherpalaya@gmail.com</span>
                        </div>
                    </a>
                    <div class="flex items-center gap-4 text-lg uppercase font-normal text-blue-100">
                        <span class="icon-[iconoir--phone-income] size-6"></span>
                        <span>9800112233</span>
                    </div>
                    {{-- <a class="link text-base-content link-neutral texl-lg font-semibold no-underline"> --}}



                </div>
                <nav class="text-base-content capitalize">
                    <h6 class="footer-title font-bold text-blue-50 uppercase">Activities</h6>
                    <a href="/expeditions" class="link link-hover text-blue-100 capitalize">Expeditions</a>
                    <a href="/peaks" class="link link-hover text-blue-100">Peaks</a>
                    <a href="/treks" class="link link-hover text-blue-100">treks</a>
                    <a href="/tours" class="link link-hover text-blue-100">Tours</a>
                </nav>
                <nav class="text-base-content capitalize">
                    <h6 class="footer-title font-bold text-blue-50 uppercase">Company</h6>
                    <a href="/about_us" class="link link-hover text-blue-100">About</a>
                    <a href="/sherpas" class="link link-hover text-blue-100">Our Sherpas</a>
                    <a href="/sherpas" class="link link-hover text-blue-100">Services</a>

                </nav>
                <nav class="text-base-content">
                    <h6 class="footer-title font-bold text-blue-50 uppercase">Legal</h6>
                    <a href="#" class="link link-hover text-blue-100">Terms of use</a>
                    <a href="#" class="link link-hover text-blue-100">Privacy policy</a>
                    <a href="#" class="link link-hover text-blue-100">Cookie policy</a>
                </nav>
                <nav class="text-base-content">
                    <div class="flex items-center gap- text-base uppercase font-semibold text-blue-200  text-wrap">
                        <span>Follow us</span>
                    </div>
                    <div class="flex gap-4 text-blue-300">
                        <a href="#" class="link link-animated" aria-label="Facebook Link">
                            <span class="icon-[tabler--brand-facebook] size-6"></span>
                        </a>
                        <a href="#" class="link link-animated" aria-label="X Link">
                            <span class="icon-[tabler--brand-x] size-6"></span>
                        </a>
                        <a href="#" class="link link-animated" aria-label="Linkedin Link">
                            <span class="icon-[tabler--brand-linkedin] size-6"></span>
                        </a>
                    </div>
                    {{-- <div class="gap-4 hover:underline"> --}}
                    <a href="https://wa.me/{{ config('services.whatsapp.number') }}">
                        <div
                            class="flex items-center gap-2 text-base uppercase font-semibold text-green-300  text-wrap">
                            <span>Reach Us Via</span>
                        </div>
                        <div class="flex items-center gap-2 text-base Capitalize font-normal text-green-300 mt-2">
                            <span class="icon-[tabler--brand-whatsapp] size-7"></span>
                            WhatsApp
                        </div>
                    </a>
                    {{-- </div> --}}
                </nav>
            </footer>
            <footer class="footer footer-center bg-transparent rounded ">
                <div class="h-2"></div>
                <aside class="text-blue-300 xl:mb-8">
                    <p>Copyright © 2025 - All right reserved by Sherpalaya</p>
                </aside>
                <div class="h-10 xl:hidden"></div>

            </footer>
        </div>

    </div>
</div>
