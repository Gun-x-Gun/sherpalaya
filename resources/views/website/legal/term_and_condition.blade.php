<x-website-layout>
    <div class="bg-blue-100/10">
        <div class="card--rounded-none image-full  bg-blue-100/50 h-[60vh]">
            <figure class="h-[60vh] w-full">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Trekking background image"
                    class="h-[60vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body">
                <div
                    class="absolute bottom-1/2 2xl:left-44  left-4   max-w-full  2xl:max-w-full overflow-hidden border-none ">
                    <div class="">
                        <h5 class="card-title mb-8 text-white text-2xl md:text-4xl uppercase font-extrabold ">
                            Sherpalaya's
                        </h5>
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold ">
                            Terms & Conditions
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <x-breadcrumb :breadcrumbs="[
            [
                'name' => 'Home',
                'url' => url('/home'),
            ],
            [
                'name' => 'Terms And Condition',
                // 'url' => url('/terms-and-conditions'),
            ],
            // [
            //     'name' => $trek->title,
            // ],
        ]" />
        <div class="h-8"></div>
        <div class="mx-4 2xl:mx-44">
            <div class="bg-blue-transparent">
                <p
                    class="text-md text-left  mt-2  text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light ">
                    Welcome to Sherpalaya .Our Terms and Conditions govern your use of our website and services. By
                    using our website, you agree to comply with these terms. If you do not agree, please refrain from
                    using our services. </p>
            </div>
            <div class="h-8"></div>
            <div class="card sm:w-full shadow-sm shadow-slate-300 bg-blue-100/10">

                <div
                    class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-lg font-bold text-primary uppercase">General Terms</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">These Terms apply to all users of our website and services.
                        </li>
                        <li class="mb-2">We reserve the right to modify these Terms at any time. Changes will be
                            effective upon posting on our website.</li>
                        <li class="mb-2">Your continued use of our services constitutes acceptance of any
                            modifications.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 ">
                    <h5 class="text-primary text-lg font-bold uppercase">Booking and Payment</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">All bookings are subject to availability and confirmation.</li>
                        <li class="mb-2">Payment must be made as per the instructions provided during the booking
                            process.</li>
                        <li class="mb-2">We accept payments through various methods, including credit cards, bank
                            transfers, and digital wallets.</li>
                        <li class="mb-2">Any additional fees, such as transaction or service charges, may be applied.
                        </li>
                    </ol>
                </div>

                <div
                    class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-primary text-lg font-bold uppercase">Cancellation and Refund Policy</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">Cancellations must be requested in writing via email.</li>
                        <li class="mb-2">Refunds will be processed based on the cancellation policy of the specific
                            service booked.</li>
                        <li class="mb-2">We are not responsible for refunds from third-party service providers.</li>
                        <li class="mb-2">No refunds will be issued for no-shows or last-minute cancellations.</li>
                    </ol>
                </div>

                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 ">
                    <h5 class="text-primary text-lg font-bold uppercase">Travel Documents and Requirements</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">Travelers are responsible for obtaining valid passports, visas, and other
                            necessary travel documents.</li>
                        <li class="mb-2">We are not liable for any issues arising due to incorrect or missing
                            documents.</li>
                        <li class="mb-2">Some destinations may require specific vaccinations or health certificates.
                        </li>
                    </ol>
                </div>

                <div
                    class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-primary text-lg font-bold uppercase">Liability and Responsibility</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">We act only as an intermediary between travelers and service providers
                            (hotels, airlines, tour operators, etc.).</li>
                        <li class="mb-2">We are not responsible for delays, cancellations, or other issues caused by
                            third parties.</li>
                        <li class="mb-2">Travelers assume all risks associated with travel, including but not limited
                            to accidents, injuries, or loss of personal belongings.</li>
                        <li class="mb-2">We recommend purchasing travel insurance for protection against unforeseen
                            circumstances.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 ">
                    <h5 class="text-primary text-lg font-bold uppercase">User Conduct</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">Users must not use our website for unlawful activities.</li>
                        <li class="mb-2">Any fraudulent, abusive, or disruptive behavior will result in the
                            termination of services.</li>
                        <li class="mb-2">We reserve the right to deny service to anyone at our discretion.</li>
                    </ol>
                </div>

                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-primary text-lg font-bold uppercase">Privacy Policy</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">We respect your privacy and protect your personal information as outlined in
                            our Privacy Policy.</li>
                        <li class="mb-2">By using our services, you consent to the collection and use of your data as
                            described.</li>
                    </ol>
                </div>

                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 ">
                    <h5 class="text-primary text-lg font-bold uppercase">Force Majeure</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">We are not responsible for disruptions caused by unforeseen events, including
                            but not limited to natural disasters, political unrest, pandemics, or government
                            restrictions.</li>
                    </ol>
                </div>

                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-primary text-lg font-bold uppercase">Governing Law and Dispute Resolution</h5>
                    <ol class="list-inside list-decimal ">
                        <li class="mb-2">These Terms are governed by the laws of Nepal.</li>
                        <li class="mb-2">Any disputes will be resolved through negotiations. If unresolved, they will
                            be referred to Nepalese courts.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="h-8"></div>

    </div>
</x-website-layout>
