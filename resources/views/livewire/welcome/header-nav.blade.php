<ul class="site-menu-main">
    
    <li class="nav-item nav-item-has-children">
        <a wire:navigate href="{{ route('home') }}" class="{{ Route::current()->getName() == 'home' ? 'active' : '' }} nav-link-item drop-trigger text-colorDark rounded-none border border-transparent lg:text-white">
            Home
        </a>
    </li>

    <li class="nav-link-item drop-trigger text-colorDark rounded-none border border-transparent lg:text-white">
        <a class='nav-link-item' wire:navigate href="{{ route('about-us') }}">About Us</a>
    </li>

    <li class="nav-item nav-item-has-children">
        <a class="nav-link-item drop-trigger text-colorDark rounded-none border border-transparent lg:text-white">
            Services
            <img src="{{ asset('assets/img/icons/icon-caret-down.svg') }}" alt="icon-caret-down" width="7" height="4" class="-rotate-90 invert-0 lg:rotate-0 lg:invert" />
        </a>

        @if ($services && count($services) > 0)
            <ul class="sub-menu" id="submenu-1">
                @foreach($services as $service)
                <li class="sub-menu--item">
                    <a class='drop-trigger {{ Request::is('service-details/' . $service->slug) ? 'active' : '' }}' data-menu-get='h3' wire:navigate href="{{ route('service-details', $service->slug) }}">{{ $service->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        @endif
    </li>

    <li class="nav-link-item drop-trigger text-colorDark rounded-none border border-transparent lg:text-white {{ Route::current()->getName() == 'our-portfolio' || Route::current()->getName() == 'portfolio-details' ? 'active' : '' }}">
        <a class='nav-link-item' wire:navigate href="{{ route('our-portfolio') }}">Portfolio</a>
    </li>

{{--    <li class="nav-link-item drop-trigger text-colorDark rounded-none border border-transparent lg:text-white">--}}
{{--        <a class='nav-link-item {{ Route::current()->getName() == 'contact-us' ? 'active' : '' }}' wire:navigate href="{{ route('contact-us') }}" >Contact Us</a>--}}
{{--    </li>--}}
</ul>