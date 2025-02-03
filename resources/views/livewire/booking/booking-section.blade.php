<div class=" card-body bg-blue-200 mt-4">
    <div class="card-actions justify-center">
        {{-- Booking --}}
        {{-- <button class="btn btn-info  btn-wide uppercase" wire:click="addbooking">Inquiry</button> --}}

        <button type="button" class="btn btn-primary btn-wide uppercase" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="booking-modal" data-overlay="#booking-modal"> Book this trip </button>
        <div id="booking-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
            <div class="modal-dialog overlay-open:opacity-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Booking</h3>
                        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                            aria-label="Close" data-overlay="#booking-modal">
                            <span class="icon-[tabler--x] size-4"></span>
                        </button>
                    </div>
                    <form action="#" wire:submit="addBooking">

                        <div class="modal-body mx-4">
                            Provide your details
                            <div class="w-full my-2">
                                <label class="label label-text" for="full_name"> Full Name </label>
                                <input type="text" placeholder="John Doe" class="input" id="full_name"
                                    name="full_name" wire:model="fullName" />
                            </div>
                            <div class="w-full my-2">
                                <label class="label label-text" for="email"> Email </label>
                                <input type="email" placeholder="john@doe.com" class="input" id="email"
                                    wire:model="email" />
                            </div>

                            <div class="w-full my-2">
                                <label class="label label-text" for="message"> Message </label>
                                <textarea class="textarea" placeholder="Your message" id="message" name="message" wire:model="message"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-soft btn-secondary"
                                data-overlay="#booking-modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- Inquiry --}}
        {{-- <button class="btn btn-info  btn-wide uppercase" wire:click="addInquiry">Inquiry</button> --}}

        <button type="button" class="btn btn-info  btn-wide uppercase" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="inquiry-modal" data-overlay="#inquiry-modal"> Inquiry </button>

        <div id="inquiry-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
            <div class="modal-dialog overlay-open:opacity-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Inquiry</h3>
                        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                            aria-label="Close" data-overlay="#inquiry-modal">
                            <span class="icon-[tabler--x] size-4"></span>
                        </button>
                    </div>
                    <form action="#" wire:submit="addInquiry">

                        <div class="modal-body mx-4">
                            Provide your details
                            <div class="w-full my-2">
                                <label class="label label-text" for="full_name"> Full Name </label>
                                <input type="text" placeholder="John Doe" class="input" id="full_name"
                                    name="full_name" wire:model="fullName" />
                            </div>
                            <div class="w-full my-2">
                                <label class="label label-text" for="email"> Email </label>
                                <input type="email" placeholder="john@doe.com" class="input" id="email"
                                    wire:model="email" />
                            </div>

                            <div class="w-full my-2">
                                <label class="label label-text" for="message"> Message </label>
                                <textarea class="textarea" placeholder="Your message" id="message" name="message" wire:model="message"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-soft btn-secondary"
                                data-overlay="#inquiry-modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
