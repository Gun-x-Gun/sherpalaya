<div class="">
    <div id="snap"
        data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 1000 , "isCentered": true ,"dotsItemClasses": "carousel-box"}'
        class="relative w-full">
        <div class="carousel h-[41rem] rounded-none ">
            <div class="carousel-body opacity-0 h-full">
                <!-- Slide 1 -->
                <div class="carousel-slide snap-center">
                    <x-cards.carousel-card />
                </div>
                <!-- Slide 2 -->
                <div class="carousel-slide snap-center">
                    <div class="bg-base-300/80 flex h-full justify-center p-6">
                        <span class="self-center text-2xl sm:text-4xl">Second slide</span>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-slide snap-center">
                    <div class="bg-base-300 flex h-full justify-center p-6">
                        <span class="self-center text-2xl sm:text-4xl">Third slide</span>
                    </div>
                </div>
                <div class="carousel-slide snap-center">
                    <div class="bg-base-300 flex h-full justify-center p-6">
                        <span class="self-center text-2xl sm:text-4xl">Third slide</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-pagination absolute bottom-8 end-0 start-0 flex justify-center gap-3"></div>

        {{-- <div class="carousel-pagination absolute bottom-3 end-0 start-0 flex justify-center gap-3"></div> --}}

        <!-- Previous Slide -->
        <button type="button" class="carousel-prev">
            <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <!-- Next Slide -->
        <button type="button" class="carousel-next">
            <span class="sr-only">Next</span>
            <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
            </span>
        </button>
    </div>
</div>


{{-- <div class="relative w-full h-screen overflow-hidden">
    <!-- Background Video -->
    <video id="backgroundVideo" autoplay loop muted class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="{{ asset('photos/vdo.mov') }}" type="video/mov">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full bg-black bg-opacity-50 text-white">
        <h1 class="text-4xl md:text-6xl font-bold">Welcome to Our Platform</h1>
        <p class="mt-4 text-lg md:text-xl text-center max-w-xl">
            Discover a world of opportunities and experience the best services tailored to your needs.
        </p>
        <button class="mt-6 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-lg rounded-lg">
            Get Started
        </button>
    </div>

    <!-- Pause/Play Button -->
    <button id="togglePlayButton"
        class="absolute top-4 right-4 z-20 p-3 bg-black bg-opacity-70 rounded-full text-white hover:bg-opacity-90"
        aria-label="Toggle Video Playback">
        <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M10 9v6m4-6v6M6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z" />
        </svg>
        <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-6 h-6 hidden">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.752 11.168l-6.586-4.564A1 1 0 007 7.27v9.46a1 1 0 001.166.966l6.586-4.564a1 1 0 000-1.664z" />
        </svg>
    </button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const video = document.getElementById("backgroundVideo");
        const toggleButton = document.getElementById("togglePlayButton");
        const playIcon = document.getElementById("playIcon");
        const pauseIcon = document.getElementById("pauseIcon");

        toggleButton.addEventListener("click", () => {
            if (video.paused) {
                video.play();
                playIcon.classList.add("hidden");
                pauseIcon.classList.remove("hidden");
            } else {
                video.pause();
                playIcon.classList.remove("hidden");
                pauseIcon.classList.add("hidden");
            }
        });
    });
</script> --}}
