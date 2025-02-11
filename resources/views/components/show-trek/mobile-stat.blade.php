<div class="xl:hidden w-full my-4 font-oswald">
    <div class="stats stats-vertical bg-blue-100/20 w-full rounded-none">
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal">Duration</div>
            <div class="stat-value font-normal">
                {{ $trek->duration ? $trek->duration . ' Days' : 'N/A' }}
            </div>
            <div class="stat-value font-body">
                <span class="badge badge-outline badge-success text-wrap h-full text-lg px-2 ">
                    @if (!empty($trek->best_time_for_trek))
                        Best Time: {{ $trek->best_time_for_trek }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal">Difficulty</div>
            <div class="stat-value font-body">
                @if ($trek->grade)
                    <span class="badge badge-outline badge-primary text-lg">Grade:
                        {{ $trek->grade }}</span>
                @endif
                @if ($trek->trek_difficulty)
                    <span
                        class="badge badge-outline badge-error text-lg">{{ $trek->trek_difficulty->getLabel() }}</span>
                @endif
            </div>
        </div>
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal">Altitude</div>
            <div class="stat-value font-body">
                @if (!empty($trek->starting_altitude))
                    <span class="badge badge-outline text-lg">
                        Start: {{ $trek->starting_altitude }}
                    </span>
                @endif

                @if (!empty($trek->highest_altitude))
                    <span class="badge badge-outline text-lg">
                        Highest: {{ $trek->highest_altitude }}
                    </span>
                @endif
                </span>
            </div>
        </div>
    </div>
</div>