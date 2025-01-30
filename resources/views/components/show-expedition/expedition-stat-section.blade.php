<div class="w-full my-4">
    <div class="stats stats-vertical bg-blue-100/50 w-full rounded-none">
        <div class="stat">
            <div class="stat-title">Duration</div>
            <div class="stat-value">
                {{ $expedition->duration ? $expedition->duration . ' Days' : 'N/A' }}
            </div>
            <div class="stat-value">
                <span class="badge badge-outline badge-success text-wrap h-full">
                    @if (!empty($expedition->best_time_for_expedition))
                        Best Time: {{ $expedition->best_time_for_expedition }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat">
            <div class="stat-title">Difficulty</div>
            <div class="stat-value">
                @if ($expedition->grade)
                    <span class="badge badge-outline badge-primary">Grade:
                        {{ $expedition->grade }}</span>
                @endif
                @if ($expedition->expedition_difficulty)
                    <span class="badge badge-outline badge-error">{{ $expedition->expedition_difficulty->getLabel() }}</span>
                @endif
            </div>
        </div>
        <div class="stat">
            <div class="stat-title">Altitude</div>
            <div class="stat-value">

                @if (!empty($expedition->starting_altitude))
                    <span class="badge badge-outline">
                        Start: {{ $expedition->starting_altitude }}
                    </span>
                @endif

                @if (!empty($expedition->highest_altitude))
                    <span class="badge badge-outline">
                        Highest: {{ $expedition->highest_altitude }}
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
                {{ $expedition->duration ? $expedition->duration . ' Days' : 'N/A' }}
            </div>
            <div class="stat-value">
                <span class="badge badge-outline badge-success text-wrap h-full">
                    @if (!empty($expedition->best_time_for_expedition))
                        Best Time: {{ $expedition->best_time_for_expedition }}
                    @endif
                </span>
            </div>
        </div>
        <div class="stat">
            <div class="stat-title">Difficulty</div>
            <div class="stat-value">
                @if ($expedition->grade)
                    <span class="badge badge-outline badge-primary">Grade:
                        {{ $expedition->grade }}</span>
                @endif
                @if ($expedition->expedition_difficulty)
                    <span class="badge badge-outline badge-error">{{ $expedition->expedition_difficulty->getLabel() }}</span>
                @endif
            </div>
        </div>
        <div class="stat">
            <div class="stat-title">Altitude</div>
            <div class="stat-value">

                @if (!empty($expedition->starting_altitude))
                    <span class="badge badge-outline">
                        Start: {{ $expedition->starting_altitude }}
                    </span>
                @endif

                @if (!empty($expedition->highest_altitude))
                    <span class="badge badge-outline">
                        Highest: {{ $expedition->highest_altitude }}
                    </span>
                @endif
                </span>
            </div>
        </div>
    </div>
</div> --}}
