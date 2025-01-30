<script type="module" defer>
    let {
        element
    } = HSCollapse.getInstance('#trek-description-collapse-button', true);

    shortTrekDescription = document.getElementById("short-trek-description");

    trekDescriptionButton.on('open', function(instance) {
        shortTrekDescription.classList.add("hidden");

    });
    trekDescriptionButton.on('hide', function(instance) {
        shortTrekDescription.classList.remove("hidden");
    });
</script>


<div class="">
    <p class="mb-4 2xl:text-xl text-white font-bold ">
    <p class="inline text-base-content/80" id="short-trek-description ">
        {{ Str::words(strip_tags($trek->description), 30) }}
    </p>

    <div id="trek-description-collapse-heading"
        class="collapse hidden w-full overflow-hidden transition-[height] duration-300 "
        aria-labelledby="trek-description-collapse">
        {!! $trek->description !!}
    </div>

    <button type="button" class="collapse-toggle link link-accent inline-flex items-center"
        id="trek-description-collapse-button" aria-expanded="false" aria-controls="trek-description-collapse-heading"
        data-collapse="#trek-description-collapse-heading">
        <span class="collapse-open:hidden">Read more</span>
        <span class="collapse-open:block hidden">Read less</span>
        <span class="icon-[tabler--chevron-down] collapse-open:rotate-180 ms-2 size-4"></span>
    </button>
    </p>
</div>
