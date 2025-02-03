{{-- <script type="module" defer>
    let {
        element
    } = HSCollapse.getInstance('#peak-description-collapse-button', true);

    shortExpeditionDescription = document.getElementById("short-peak-description");

    peakDescriptionButton.on('open', function(instance) {
        shortExpeditionDescription.classList.add("hidden");

    });
    peakDescriptionButton.on('hide', function(instance) {
        shortExpeditionDescription.classList.remove("hidden");
    });
</script>



<div class="">
    
    <p class="mb-4 2xl:text-xl text-white font-bold ">
    <p class="inline text-base-content/80" id="short-peak-description ">
        {{ Str::words(strip_tags($peak->description), 30) }}
    </p>

    <div id="peak-description-collapse-heading"
        class="collapse hidden w-full overflow-hidden transition-[height] duration-300 "
        aria-labelledby="peak-description-collapse">
        {!! $peak->description !!}
    </div>

    <button type="button" class="collapse-toggle link link-accent inline-flex items-center"
        id="peak-description-collapse-button" aria-expanded="false" aria-controls="peak-description-collapse-heading"
        data-collapse="#peak-description-collapse-heading">
        <span class="collapse-open:hidden">Read more</span>
        <span class="collapse-open:block hidden">Read less</span>
        <span class="icon-[tabler--chevron-down] collapse-open:rotate-180 ms-2 size-4"></span>
    </button>
    </p>
</div> --}}


<div class="card sm:w-full shadow-sm shadow-blue-100 bg-blue-50/10">
    <div class="card-body text-slate-700  px-2 capitalize  text-preety lg:text-justify">
        <p class="first-line:uppercase">
            {!! $peak->description !!}
        </p>
    </div>
</div>
