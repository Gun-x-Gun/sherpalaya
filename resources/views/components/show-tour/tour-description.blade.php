{{-- <script type="module" defer>
    let {
        element
    } = HSCollapse.getInstance('#tour-description-collapse-button', true);

    shortExpeditionDescription = document.getElementById("short-tour-description");

    tourDescriptionButton.on('open', function(instance) {
        shortExpeditionDescription.classList.add("hidden");

    });
    tourDescriptionButton.on('hide', function(instance) {
        shortExpeditionDescription.classList.remove("hidden");
    });
</script>


<div class="">
    <p class="mb-4 2xl:text-xl text-white font-bold ">
    <p class="inline text-base-content/80" id="short-tour-description ">
        {{ Str::words(strip_tags($tour->description), 30) }}
    </p>

    <div id="tour-description-collapse-heading"
        class="collapse hidden w-full overflow-hidden transition-[height] duration-300 "
        aria-labelledby="tour-description-collapse">
        {!! $tour->description !!}
    </div>

    <button type="button" class="collapse-toggle link link-accent inline-flex items-center"
        id="tour-description-collapse-button" aria-expanded="false" aria-controls="tour-description-collapse-heading"
        data-collapse="#tour-description-collapse-heading">
        <span class="collapse-open:hidden">Read more</span>
        <span class="collapse-open:block hidden">Read less</span>
        <span class="icon-[tabler--chevron-down] collapse-open:rotate-180 ms-2 size-4"></span>
    </button>
    </p>
</div> --}}



<div class="card sm:w-full shadow-sm shadow-slate-400 bg-blue-100/30">
    <div class="card-body text-blue-800 px-2 tracking-wider capitalize  text-preety lg:text-justify">
        <p class="first-line:uppercase">
            {!! $tour->description !!}
        </p>
    </div>
</div>
