<div id="home-page-animation">

    <x-animation.scroll-animation-section id="animation-section-1" title="Mountain Calls 1" icon="mountain"
        image="https://cdn.flyonui.com/fy-assets/components/card/image-5.png" content="The mountains are calling."
        :hideAfterScroll="true" waitBeforeHide="3" />

    <x-animation.scroll-animation-section id="animation-section-2" title="Mountain Calls 2" icon="mountain"
        image="https://cdn.flyonui.com/fy-assets/components/card/image-5.png" content="The mountains are calling."
        :hideAfterScroll="true" waitBeforeHide="5" />

    <x-animation.scroll-animation-section id="animation-section-3" title="Mountain Calls 3" icon="mountain"
        image="https://cdn.flyonui.com/fy-assets/components/card/image-5.png" content="The mountains are calling."
        :hideAfterScroll="true" waitBeforeHide="2" />

    <x-animation.scroll-animation-section id="animation-section-4" title="Mountain Calls 4" icon="mountain"
        image="https://cdn.flyonui.com/fy-assets/components/card/image-5.png" content="The mountains are calling.">
        <div class="absolute bottom-20">
            <p class="text-xl text-white text-center w-full cursor-pointer hidden" id="scroll-down-wrapper">
                <span class="icon-[pajamas--scroll-down] size-8 text-white animated-scroll-down-icon"></span>
                Explore
                <span class="icon-[pajamas--scroll-down] size-8 text-white animated-scroll-down-icon"></span>
            </p>
        </div>


    </x-animation.scroll-animation-section>

</div>

@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function() {
            let scrollDownIcons = document.querySelectorAll(".animated-scroll-down-icon");
            let scrollDownWrapper = document.querySelector("#scroll-down-wrapper");
            let navbar = document.querySelector("#navbar");

            let bodyElement = document.querySelector('body');

            bodyElement.classList.add('overflow-y-hidden');

            navbar.classList.add('hidden');

            let finalAnimationSection = document.querySelector("#animation-section-4");


            scrollDownWrapper.classList.remove('hidden');

            window.motion.inView(scrollDownWrapper, (element) => {
                let scrollDownIconsAnimation = window.motion.animate(
                    scrollDownIcons, {
                        y: [0, 10]
                    }, {
                        duration: 0.5,
                        repeat: Infinity,
                        repeatType: "reverse",
                    }
                );
            });

            window.motion.press(scrollDownWrapper, (element) => {
                let finalAnimation = window.motion.animate(
                    finalAnimationSection, {
                        y: [0, -1000]
                    }, {
                        duration: 0.5
                    }
                );

                finalAnimation.then(() => {
                    finalAnimationSection.remove();
                    navbar.classList.remove('hidden');
                    bodyElement.classList.remove('overflow-y-hidden');

                    window.AOS.init();
                });
            });
        });
    </script>
@endpush
