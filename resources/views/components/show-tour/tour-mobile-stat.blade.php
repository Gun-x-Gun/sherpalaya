<div class="xl:hidden w-full my-4 font-oswald">
    <div class="stats stats-vertical bg-blue-100/20 w-full rounded-none">
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal">
                {{__('show-page.duration')}}
            </div>
            <div class="stat-value font-normal">
                {{ $tour->duration }}
            </div>
            <div class="stat-value font-body">
                <span class="badge badge-outline badge-success text-wrap h-full text-lg px-2 ">
                    @if (!empty($tour->best_time_for_tour))
                    {{__('show-page.best-time')}}
                     {{ $tour->best_time_for_tour }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal"> 
                {{__('show-page.difficulty')}}

            </div>
            <div class="stat-value font-body">
                @if ($tour->grade)
                    <span class="badge badge-outline badge-primary text-lg">
                        {{__('show-page.grade')}}
                        {{ $tour->grade }}</span>
                @endif
            </div>
        </div>
        {{-- <div class="stat">
            <div class="stat-title text-black uppercase font-normal">Altitude</div>
            <div class="stat-value font-body">
                @if (!empty($tour->starting_altitude))
                    <span class="badge badge-outline text-lg">
                        Start: {{ $tour->starting_altitude }}
                    </span>
                @endif

                @if (!empty($tour->highest_altitude))
                    <span class="badge badge-outline text-lg">
                        Highest: {{ $tour->highest_altitude }}
                    </span>
                @endif
                </span>
            </div>
        </div> --}}
    </div>
</div>
