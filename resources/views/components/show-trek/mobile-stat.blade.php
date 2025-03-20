<div class="xl:hidden w-full my-4 font-oswald ">
    <div class="stats stats-vertical bg-blue-100/50 w-full rounded-none">
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal ">
                {{__('show-page.duration')}}
            </div>
            <div class="stat-value font-normal tracking-wider">
                {{ $trek->duration ? $trek->duration . ' Days' : 'N/A' }}
            </div>
            <div class="stat-value font-body">
                <span class="badge badge-outline badge-success text-wrap h-full font-normal text-base px-2">
                    @if (!empty($trek->best_time_for_trek))
                    {{__('show-page.best-time')}}    
                    {{ $trek->best_time_for_trek }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat ">
            <div class="stat-title text-black uppercase font-normal">
                {{__('show-page.difficulty')}}
            </div>
            <div class="stat-value font-body">
                @if ($trek->grade)
                    <span class="badge badge-outline badge-primary text-base">
                        {{__('show-page.grade')}}
                        {{ $trek->grade }}</span>
                @endif
                @if ($trek->trek_difficulty)
                    <span
                        class="badge badge-outline badge-error text-base">{{ $trek->trek_difficulty->getLabel() }}</span>
                @endif
            </div>
        </div>
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal">
                {{__('show-page.altitude')}}
            </div>
            <div class="stat-value font-body">
                @if (!empty($trek->starting_altitude))
                    <span class="badge badge-outline text-base">
                        {{__('show-page.startt')}}
                         {{ $trek->starting_altitude }}M
                    </span>
                @endif

                @if (!empty($trek->highest_altitude))
                    <span class="badge badge-outline text-base">
                        {{__('show-page.highest')}}
                         {{ $trek->highest_altitude }}M
                    </span>
                @endif
                </span>
            </div>
        </div>
    </div>
</div>
