<div class="xl:hidden w-full my-4 font-oswald ">
    <div class="card grid grid-cols-2  gap-2 font-body px-2 bg-gray-100 mx-4">
       
        <div class="flex flex-col gap-2 justify-center items-start my-4">
            <span class="icon-[material-symbols-light--altitude-outline-rounded] size-10 text-warning"></span>
            <span class=" text-sm uppercase text-warning">Highest Altitude</span>
            <span class="text-2xl uppercase text-black ">
                {{ $trek->highest_altitude }} m
            </span>
        </div>
       
        @if (!empty($trek->duration))
            <div class="flex flex-col gap-2 justify-center items-start my-4 ">
                <span class="icon-[mingcute--time-duration-line] size-10 text-warning"></span>
                <span class=" text-sm uppercase text-warning">Duration</span>
                <span class="text-2xl uppercase text-black ">
                    {{ $trek->duration }} days
                </span>
            </div>
        @endif
        @if (!empty($trek->best_time_for_trek))
            <div class="flex flex-col gap-2 justify-center items-start my-4">
                <span class="icon-[mdi--sun-time-outline] size-10 text-warning"></span>
                <span class=" text-sm uppercase text-warning">Best Time</span>
                <span class="text-2xl uppercase text-black text-wrap w-1/2 lg:w-full">
                    {{ $trek->best_time_for_trek }}
                </span>
            </div>
        @endif
        <div class="flex flex-col gap-2 justify-center items-start my-4">
            <span class="icon-[arcticons--levelsfyi] size-10 text-warning"></span>
            <span class=" text-sm uppercase text-warning">Difficulty</span>
            <span class="text-2xl uppercase text-black">
                {{ $trek->trek_difficulty }}
            </span>
        </div>
    
    </div>
</div>