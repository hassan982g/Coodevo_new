<footer class="section-footer">
    <div class="bg-black">
        <div class="section-space">
            <div class="container">
                <div class="flex flex-wrap items-center justify-between gap-10 min-width">
                    <div class="">
                        <div class="section-block text-colorButteryWhite text-center">
                            <h2 class="mb-6">Get in touch to start your journey with us!</h2>
                            <p class="section-para">
                                We work closely with our clients to understand their
                                objectives, target audience, and unique needs. We use our
                                creative skills to translate these requirements and
                                practical design solutions.
                            </p>
                            <a class='btn-primary relative px-[30px] py-[10px]' wire:navigate href="{{ route('contact-us') }}">
                              Get in touch
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="horizontal-line bg-[#333333]"></div>
        <div class="py-[35px]">
            <div class="container">
                <div class="flex flex-wrap justify-center gap-x-[30px] gap-y-4 lg:justify-between">
                <div class="text-colorButteryWhite text-sm">
                        &copy; Copyright {{ date("Y") }} {{ env('APP_NAME') }}.
                    </div>

                    <nav>
                        <ul class="flex flex-wrap justify-center gap-x-10 gap-y-3 lg:gap-x-10 xl:justify-start">
                            <li><a wire:navigate href="{{ route('home') }}" class="text-colorButteryWhite text-sm">Home</a></li>
                            <li><a wire:navigate href="{{ route('about-us') }}" class="text-colorButteryWhite text-sm">About Us</a></li>
                            <li><a href='service.html' class="text-colorButteryWhite text-sm">Services</a></li>
                            <li><a wire:navigate href="{{ route('our-portfolio') }}" class="text-colorButteryWhite text-sm">Projects</a></li>
                        </ul>
                    </nav>


                </div>
            </div>
        </div>
    </div>
</footer>