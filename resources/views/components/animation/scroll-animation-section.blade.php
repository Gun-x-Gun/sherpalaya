@props(['id', 'icon', 'title', 'image', 'content', 'hideAfterScroll' => false, 'waitBeforeHide' => 0])

<div id="{{ $id }}" class="w-[100vw] h-[100vh] card image-full flex-col-reverse rounded-none">
    <figure class="overflow-hidden rounded-none">
        <img src="{{ $image }}" alt="overlay image" />
    </figure>
    <div class="card-body justify-center items-center">
        <span class="icon-[mynaui--{{ $icon }}] size-28 text-white animated-icon"></span>
        <h2 class="card-title mb-2.5 text-white animated-title text-3xl">
            {{ $title }}
        </h2>
        <p class="text-white animated-content">
            @foreach (explode(' ', $content) as $unitContent)
                <span class="inline-block p-0 m-0">{{ $unitContent }}</span>
            @endforeach
        </p>
        {{ $slot ?? '' }}
    </div>
</div>

@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function() {

            let animationInviewSelector = "#{{ $id }} h2";
            let animationRootId = "{{ $id }}";
            let animationRoot = document.querySelector(`#${animationRootId}`);
            let hideAfterScroll = {{ $hideAfterScroll ? 'true' : 'false' }};
            let waitBeforeHide = {{ $waitBeforeHide }};


            let inviewEffect = window.motion.inView(animationInviewSelector, (element) => {

                let contentSpanElements = animationRoot.querySelector(".animated-content").querySelectorAll(
                    'span');

                let logoAnimationSequence = [
                    animationRoot.querySelector(".animated-icon"),
                    {
                        scaleY: [4, 1]
                    },
                    {
                        duration: 1,
                        at: 0,
                        type: window.motion.spring,
                    }
                ];

                let titleAnimationSequence = [
                    animationRoot.querySelector(".animated-title"),
                    {
                        scaleX: [7, 1],
                    },
                    {
                        duration: 1,
                        at: 0,
                        type: window.motion.spring,
                    }
                ];

                let contentSpanAnimationSequence = [
                    contentSpanElements,
                    {
                        scale: [0, 1],
                    },
                    {
                        duration: (contentSpanElements.length + 1) * 0.125,
                        delay: window.motion.stagger(0.125)
                    }
                ];


                let sequence = [
                    logoAnimationSequence,
                    titleAnimationSequence,
                    contentSpanAnimationSequence,
                ];

                if (hideAfterScroll) {
                    console.log("Hiding after scroll {{ $id }}");
                    sequence.push([
                        animationRoot,
                        {
                            scale: [1, 1],
                        },
                        {
                            duration: waitBeforeHide,
                        }
                    ]);

                    sequence.push([
                        animationRoot,
                        {
                            opacity: [1, 0]
                        },
                        {
                            duration: 1
                        },
                    ]);

                }

                let imageAnimation = window.motion.animate(
                    animationRoot.querySelector("figure img"), {
                        scale: [1, 2]
                    }, {
                        duration: 50,
                    }
                );

                let sequenceAnimation = window.motion.animate(sequence);


                sequenceAnimation.then(()=>{
                    if(hideAfterScroll){
                        animationRoot.remove();
                    }
                });


                return (leaveInfo) => {
                    imageAnimation.stop();
                    sequenceAnimation.stop();
                    // imageAnimation.stop();
                    // contentAnimation.stop();
                };
            });

        });
    </script>
@endpush
