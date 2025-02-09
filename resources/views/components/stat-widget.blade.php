<div class="bg-blue-100/40" >

    <div class="h-10 ">

    </div>
    {{-- <div class="xl:mx-32 mx-4">
        <div class="stats  gap-2 w-full">
            <div class="stat">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[hugeicons--angle] size-14"></span>
                </div>
                <div class="stat-title">Expeditions </div>
                <div class="stat-value text-success">50 +</div>
            </div>
            <div class="stat">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[hugeicons--gem] size-14"></span>
                </div>
                <div class="stat-title">Peaks</div>
                <div class="stat-value text-success">100 + </div>
            </div>

            <div class="stat">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[mingcute--mountain-2-line] size-14"></span>
                </div>
                <div class="stat-title">Treks </div>
                <div class="stat-value text-success">200 + </div>
            </div>

            <div class="stat">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[hugeicons--bus-01] size-14"></span>
                </div>
                <div class="stat-title">Tours </div>
                <div class="stat-value text-success">1000 + </div>
            </div>


        </div>
    </div> --}}
    <div class="xl:mx-32 mx-4">
        <div class="stats  gap-2 w-full">
            <div class="stat" data-aos="fade-down" data-aos-duration="1200">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[mingcute--group-3-line] size-14"></span>
                </div>
                <div class="stat-title">Travellers </div>
                <div class="stat-value text-success">
                    {{ $landingPageSetting->stat_traveller_count }}
                </div>
            </div>
            <div class="stat" data-aos="fade-down" data-aos-duration="1200">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[mingcute--building-6-line] size-14"></span>
                </div>
                <div class="stat-title">Associations</div>
                <div class="stat-value text-success">
                    {{ $landingPageSetting->stat_association_count }}
                </div>
            </div>

            <div class="stat" data-aos="fade-down" data-aos-duration="1200">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[mingcute--star-line] size-14"></span>
                </div>
                <div class="stat-title">Customer Feedback </div>
                <div class="stat-value text-success">
                    {{ $landingPageSetting->stat_customer_feedback }}/10
                </div>
            </div>

            <div class="stat" data-aos="fade-down" data-aos-duration="1200">
                <div class="stat-figure text-base-content size-8">
                    <span class="icon-[mingcute--certificate-line] size-14"></span>
                </div>
                <div class="stat-title">Success Rate </div>
                <div class="stat-value text-success">
                    {{ $landingPageSetting->stat_success_rate }} %
                     </div>
            </div>


        </div>
    </div>
    <div class="h-10">

    </div>
</div>
