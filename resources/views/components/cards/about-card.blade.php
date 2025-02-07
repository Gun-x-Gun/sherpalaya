<div class="bg-blue-100/10">
    <div class="mx-0">
        <div id="audio-section" style="background-image: url('{{ asset('photos/mountain8.jpg') }}');"
            class="bg-cover object-center bg-center h-[150vh] w-full bg-fixed" data-aos="zoom-in" data-aos-duration="3000">
        </div>
    </div>

    <!-- Hidden Audio Player -->
    <audio id="background-audio" loop>
        <source src="{{ asset('audio/background-music.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
</div>

<!-- JavaScript to Play Audio When Section is in View -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let audio = document.getElementById("background-audio");
        let section = document.getElementById("audio-section");

        function checkVisibility() {
            let rect = section.getBoundingClientRect();
            let inView = rect.top < window.innerHeight && rect.bottom > 0;

            if (inView) {
                if (audio.paused) {
                    audio.play().catch(() => console.log("Autoplay blocked"));
                }
            } else {
                audio.pause();
            }
        }

        // Check visibility when scrolling
        window.addEventListener("scroll", checkVisibility);
        // Initial check in case the section is already visible on load
        checkVisibility();
    });
</script>
