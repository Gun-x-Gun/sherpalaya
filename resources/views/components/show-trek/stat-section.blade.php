<div class="w-full my-4">
    <div class="stats stats-vertical bg-blue-100/50 w-full rounded-none">
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal ">Duration</div>
            <div class="stat-value font-normal tracking-wider">
                {{ $trek->duration ? $trek->duration . ' Days' : 'N/A' }}
            </div>
            <div class="stat-value font-body">
                <span class="badge badge-outline badge-success text-wrap h-full font-normal text-base px-2">
                    @if (!empty($trek->best_time_for_trek))
                        Best Time: {{ $trek->best_time_for_trek }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat ">
            <div class="stat-title text-black uppercase font-normal">Difficulty</div>
            <div class="stat-value font-body">
                @if ($trek->grade)
                    <span class="badge badge-outline badge-primary text-base">Grade:
                        {{ $trek->grade }}</span>
                @endif
                @if ($trek->trek_difficulty)
                    <span class="badge badge-outline badge-error text-base">{{ $trek->trek_difficulty->getLabel() }}</span>
                @endif
            </div>
        </div>
        <div class="stat">
            <div class="stat-title text-black uppercase font-normal">Altitude</div>
            <div class="stat-value font-body">
                @if (!empty($trek->starting_altitude))
                    <span class="badge badge-outline text-base">
                        Start: {{ $trek->starting_altitude }}M
                    </span>
                @endif

                @if (!empty($trek->highest_altitude))
                    <span class="badge badge-outline text-base">
                        Highest: {{ $trek->highest_altitude }}M
                    </span>
                @endif
                </span>
            </div>
        </div>
    </div>
</div>



{{-- <div class="md:hidden w-full mb-4">
    <div class="stats stats-vertical bg-blue-100/20 w-full rounded-none">
        <div class="stat ">
            <div class="stat-title">Duration</div>
            <div class="stat-value">
                {{ $trek->duration ? $trek->duration . ' Days' : 'N/A' }}
            </div>
            <div class="stat-value">
                <span class="badge badge-outline badge-success text-wrap h-full">
                    @if (!empty($trek->best_time_for_trek))
                        Best Time: {{ $trek->best_time_for_trek }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat">
            <div class="stat-title">Difficulty</div>
            <div class="stat-value">
                @if ($trek->grade)
                    <span class="badge badge-outline badge-primary">Grade:
                        {{ $trek->grade }}</span>
                @endif
                @if ($trek->trek_difficulty)
                    <span class="badge badge-outline badge-error">{{ $trek->trek_difficulty->getLabel() }}</span>
                @endif
            </div>
        </div>
        <div class="stat">
            <div class="stat-title">Altitude</div>
            <div class="stat-value">

                @if (!empty($trek->starting_altitude))
                    <span class="badge badge-outline">
                        Start: {{ $trek->starting_altitude }}
                    </span>
                @endif

                @if (!empty($trek->highest_altitude))
                    <span class="badge badge-outline">
                        Highest: {{ $trek->highest_altitude }}
                    </span>
                @endif
                </span>
            </div>
        </div>
    </div>
</div> --}}
