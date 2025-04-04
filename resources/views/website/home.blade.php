<x-website-layout :initAOS="false">
    {{-- Page Loading Screen --}}
    <div id="homepage-loading-container"
        class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-white z-50 transition-opacity duration-700">
        <img src="{{ asset('photos/logo.png') }}" alt="Logo" class="w-1/4 max-w-xs h-auto animate-pulse" />
    </div>

    {{-- Main Page Content --}}
    <div id="main-content" class="opacity-0 transition-opacity duration-700">
        <x-home-page-animation />
        <div id="homepage-carousel-wrapper">
            <x-carousel.home-page-carousel />
        </div>
        <x-carousel.all-cards />
        <x-stat-widget />
        <x-featured.featured-expedition />
        {{-- <x-featured.featured-peak /> --}}
        <x-featured.featured-trek />
        <x-featured.featured-tour />
        <x-cards.about-card />
        <x-review />
        {{-- <x-company.service /> --}}
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarComponent = document.querySelector("#navbar");
            const pageLoadingContainer = document.querySelector("#homepage-loading-container");
            const mainContent = document.querySelector("#main-content");
            const carouselWrapper = document.querySelector("#homepage-carousel-wrapper");

            // Show navbar
            if (navbarComponent) {
                navbarComponent.classList.remove('hidden');
            }

            // Wait for all images inside the carousel to load
            const carouselImages = carouselWrapper.querySelectorAll("img");
            let loadedCount = 0;

            if (carouselImages.length === 0) {
                finishLoading(); // No images to wait for
            }

            carouselImages.forEach((img) => {
                if (img.complete) {
                    loadedCount++;
                    if (loadedCount === carouselImages.length) {
                        finishLoading();
                    }
                } else {
                    img.addEventListener("load", () => {
                        loadedCount++;
                        if (loadedCount === carouselImages.length) {
                            finishLoading();
                        }
                    });
                }
            });

            function finishLoading() {
                pageLoadingContainer.classList.add('opacity-0');

                setTimeout(() => {
                    pageLoadingContainer.classList.add('hidden');
                }, 700);

                mainContent.classList.remove('opacity-0');
            }
        });
    </script>

</x-website-layout>
