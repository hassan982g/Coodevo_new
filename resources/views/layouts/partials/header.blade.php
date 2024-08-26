<header class="section-header site-header is-black fixed top-0 z-30 w-full py-2">
    <div class="container">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-x-10">
                <a class='h-auto w-auto' wire:navigate href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo.png')}}" alt="Coodevo" width="165" height="34" />
                </a>
            </div>

            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <img src="{{ asset('assets/img/icons/icon-caret-down.svg') }}" alt="icon-caret-down" width="12" height="7" />
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <livewire:welcome.header-nav />
                </nav>
            </div>

            <div class="flex items-center gap-x-6">
                <a class='btn-primary relative hidden px-[30px] py-[10px] sm:inline-flex' wire:navigate href="{{ route('contact-us') }}">Contact Us</a>

                <div class="block lg:hidden">
                    <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                        <span class="bg-white before:bg-white after:bg-white"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>