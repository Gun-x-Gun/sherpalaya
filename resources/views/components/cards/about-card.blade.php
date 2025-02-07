<div class="bg-blue-100/10">
    <div class="mx-0 w-full overflow-hidden">
        <div id="audio-section" style="background-image: url('{{ asset('photos/mountain8.jpg') }}');"
            class="bg-cover object-center bg-center h-[150vh] w-full bg-fixed scale-[.4]">
        </div>
    </div>

    <!-- Hidden Audio Player -->
    <audio id="background-audio" loop>
        <source src="{{ asset('audio/background-music.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    @push('scripts')
        <script type="module">
            let section = document.getElementById("audio-section");
            let audio = document.getElementById("background-audio");

            document.addEventListener("DOMContentLoaded", function() {


                window.motion.inView(section, onInViewEvent);
            });

            function onInViewEvent(element) {
                let animation = window.motion.animate(
                    element, {
                        scale: [1, 2]
                    }, {
                        duration: 25
                    }
                );

                if (audio.paused) {
                    audio.play().catch((error) => console.log("Autoplay blocked", error));
                }
                return (leaveInfo) => offInViewEvent(animation, element, leaveInfo);
            }

            function offInViewEvent(animation, element, leaveInfo) {
                audio.pause();
                animation.stop();
            }
        </script>
    @endpush
</div>
