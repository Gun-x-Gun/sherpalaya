<x-website-layout>
    <div class="bg-blue-100/10">
        <div class="card--rounded-none image-full bg-blue-100/50 h-[60vh]">
            <figure class="h-[60vh] w-full">
                <img src="{{ asset('/photos/mountain2.jpg') }}" alt="Privacy Policy background image"
                    class="h-[60vh] w-full object-cover brightness-50" />
            </figure>
            <div class="card-body">
                <div class="absolute bottom-1/2 xl:left-32 left-4 max-w-full 2xl:max-w-full overflow-hidden border-none">
                    <div class="">
                        <h5 class="card-title mb-8 text-white text-2xl md:text-4xl uppercase font-extrabold">
                            Sherpalaya's
                        </h5>
                        <h5 class="card-title mb-2.5 text-warning text-2xl md:text-4xl uppercase font-extrabold">
                            Privacy Policy
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
                'name' => 'Privacy Policy',
            ],
        ]" />
        <div class="h-8"></div>
        <div class="mx-4 xl:mx-32">
            <div class="bg-blue-transparent">
                <p class="text-md text-left mt-2 text-blue-600 first-line:uppercase first-line:tracking-widest first-line:font-light">
                    This Privacy Policy explains how Sherpalaya collects, uses, and protects your personal information when you use our website and services. By using our website, you consent to the practices described herein.
                </p>
            </div>
            <div class="h-8"></div>
            <div class="card sm:w-full shadow-sm shadow-slate-300 bg-blue-100/10">
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-lg font-bold text-primary uppercase">Information We Collect</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">Personal information such as name, email, phone number, and payment details when you book a service.</li>
                        <li class="mb-2">Usage data, including IP address, browser type, and website activity.</li>
                        <li class="mb-2">Cookies and tracking technologies to improve user experience.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6">
                    <h5 class="text-lg font-bold text-primary uppercase">How We Use Your Information</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">To process bookings and payments.</li>
                        <li class="mb-2">To improve our services and website functionality.</li>
                        <li class="mb-2">To communicate with users regarding bookings, promotions, and updates.</li>
                        <li class="mb-2">To comply with legal obligations.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40 mx-2">
                    <h5 class="text-lg font-bold text-primary uppercase">Data Protection and Security</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">We implement security measures to protect user data.</li>
                        <li class="mb-2">We do not sell or share your personal information with third parties without your consent.</li>
                        <li class="mb-2">Your data is stored securely and accessed only by authorized personnel.</li>
                    </ol>
                    
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6">
                    <h5 class="text-lg font-bold text-primary uppercase">Cookies and Tracking Technologies</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">We use cookies to enhance user experience and analyze website traffic.</li>
                        <li class="mb-2">You can manage cookie preferences through your browser settings.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-lg font-bold text-primary uppercase">Third-Party Services</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">We may use third-party services for payment processing and analytics.</li>
                        <li class="mb-2">These providers have their own privacy policies governing data use.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6">
                    <h5 class="text-lg font-bold text-primary uppercase">User Rights</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">Users can request access, modification, or deletion of their personal data.</li>
                        <li class="mb-2">Users can opt-out of marketing communications at any time.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6 bg-blue-100/40">
                    <h5 class="text-lg font-bold text-primary uppercase">Policy Updates</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">We reserve the right to update this Privacy Policy as needed.</li>
                        <li class="mb-2">Users will be notified of any significant changes.</li>
                    </ol>
                </div>
                <div class="card-body gap-2 text-slate-700 px-2 capitalize text-preety lg:text-justify text-base/6">
                    <h5 class="text-lg font-bold text-primary uppercase">Contact Information</h5>
                    <ol class="list-inside list-decimal">
                        <li class="mb-2">For any privacy-related concerns, contact us at support@sherpalaya.com.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="h-8"></div>
    </div>
</x-website-layout>
