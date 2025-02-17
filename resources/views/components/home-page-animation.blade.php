<div id="home-page-animation">
    @foreach ($animationSections as $animationSection)
        @if ($loop->remaining != 0)
            <x-animation.scroll-animation-section :id="$animationSection['id']" :title="$animationSection['title']" :image="$animationMediaUrls[$animationSection['image_id']]"
                :content="$animationSection['content']" :hideAfterScroll="true" :waitBeforeHide="$animationSection['wait_time']" icon="mountain" />
        @else
            <x-animation.scroll-animation-section :id="$animationSection['id']" :title="$animationSection['title']" :image="$animationMediaUrls[$animationSection['image_id']]"
                :content="$animationSection['content']" :hideAfterScroll="false" :waitBeforeHide="$animationSection['wait_time']" icon="mountain">
                <div class="absolute bottom-20">
                    <p class="text-xl text-white text-center w-full cursor-pointer hidden" id="scroll-down-wrapper">
                        <span class="icon-[pajamas--scroll-down] size-8 text-white animated-scroll-down-icon"></span>
                        Explore
                        <span class="icon-[pajamas--scroll-down] size-8 text-white animated-scroll-down-icon"></span>
                    </p>
                </div>
            </x-animation.scroll-animation-section>
        @endif
    @endforeach

</div>

@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function() {

            let showHomepageAnimation = sessionStorage.getItem("shown-homepage-animation");

            let scrollDownIcons = document.querySelectorAll(".animated-scroll-down-icon");
            let scrollDownWrapper = document.querySelector("#scroll-down-wrapper");
            let homePageAnimationSection = document.querySelector("#home-page-animation");
            let navbar = document.querySelector("#navbar");

            let bodyElement = document.querySelector('body');

            let lastAnimationSectionId = "#{{ $animationSections->last()['id'] }}";

            let finalAnimationSection = document.querySelector(lastAnimationSectionId);



            navbar.classList.add('hidden');
            bodyElement.classList.add('overflow-y-hidden');


            if (showHomepageAnimation) {
                afterAnimationEnds();
            }
            scrollDownWrapper.classList.remove('hidden');

            window.motion.press(scrollDownWrapper, (element) => {
                let finalAnimation = window.motion.animate(
                    finalAnimationSection, {
                        y: [0, -1000]
                    }, {
                        duration: 0.5
                    }
                );

                finalAnimation.then(() => {
                    sessionStorage.setItem("shown-homepage-animation", true);
                    afterAnimationEnds();
                });
            });

            function afterAnimationEnds() {
                homePageAnimationSection.remove();
                navbar.classList.remove('hidden');
                bodyElement.classList.remove('overflow-y-hidden');

                window.AOS.init();
            }
        });
    </script>
@endpush
