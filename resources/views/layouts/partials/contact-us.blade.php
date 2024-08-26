<section class="section-contact-form">
    <div class="section-space">
        <div class="container">
            <div class="grid grid-cols-1 items-end gap-x-20 gap-y-10 lg:grid-cols-[1fr_minmax(0,420px)]">
                <div class="jos" data-jos_animation="fade-left">
                    <div class="section-block mb-10 md:mb-[60px] xl:mb-20">
                        <h2>Contact us for a personal experience</h2>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 items-end gap-x-20 gap-y-10 lg:grid-cols-[1fr_minmax(0,420px)]">
                <div class="jos" data-jos_animation="fade-left">
                    <livewire:inquiries.create-inquiries />
                </div>


                    <ul class="grid grid-cols-1 gap-6">
                        <li class="jos flex gap-x-6 rounded-[10px] bg-black px-5 py-[30px] xl:px-8 xxl:px-[70px]">
                            <div class="h-auto w-10">
                                <img src="{{ asset('assets/img/icons/icon-buttery-white-phone.svg') }}" alt="icon-buttery-white-phone" width="30" height="30" class="h-auto w-10" />
                            </div>
                            <div class="flex-1">
                                <span class="mb-3 block text-xl font-bold text-colorButteryWhite xl:text-2xl">Call us</span>
                                <div class="flex flex-col text-lg leading-[1.42] lg:text-[21px]">
                                    <a href="tel:+0123456789" class="text-colorButteryWhite hover:text-colorLightLime">+012-345-6789</a>
                                    <a href="tel:+0123456789" class="text-colorButteryWhite hover:text-colorLightLime">+012-345-6789</a>
                                </div>
                            </div>
                        </li>
                        <li class="jos flex gap-x-6 rounded-[10px] bg-black px-5 py-[30px] xl:px-8 xxl:px-[70px]">
                            <div class="h-auto w-10">
                                <img src="{{ asset('assets/img/icons/icon-buttery-white-mail.svg') }}" alt="icon-buttery-white-mail" width="40" height="40" class="h-auto w-10" />
                            </div>
                            <div class="flex-1">
                                <span class="mb-3 block text-xl font-bold text-colorButteryWhite xl:text-2xl">Email us</span>
                                <div class="flex flex-col text-lg leading-[1.42] lg:text-[21px]">
                                    <a href="mailto:" class="text-colorButteryWhite hover:text-colorLightLime">example@gmail.com</a>
                                    <a href="mailto:" class="text-colorButteryWhite hover:text-colorLightLime">example@gmail.com</a>
                                </div>
                            </div>
                        </li>
                        <li class="jos flex gap-x-6 rounded-[10px] bg-black px-5 py-[30px] xl:px-8 xxl:px-[70px]">
                            <div class="h-auto w-10">
                                <img src="{{ asset('assets/img/icons/icon-buttery-white-location-marker.svg') }}" alt="icon-buttery-white-location-marker" width="40" height="40" class="h-auto w-10" />
                            </div>
                            <div class="flex-1">
                                <span class="mb-3 block text-xl font-bold text-colorButteryWhite xl:text-2xl">Office address</span>
                                <div class="flex flex-col text-lg leading-[1.42] lg:text-[21px]">
                                    <address class="not-italic text-colorButteryWhite">
                                        4132 Thornridge City, New York.
                                    </address>
                                </div>
                            </div>
                        </li>
                    </ul>


            </div>
        </div>
    </div>
</section>