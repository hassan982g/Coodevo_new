<section wire:ignore class="section-breadcrumb">
    <div class="bg-black">
        <div class="breadcrumb-space">
            <div class="container">
                <div class="breadcrumb-block">
                    <h1 id="breadcrum-title-heading">@yield('breadcrum-title')</h1>
                    <ul class="breadcrumb-nav">
                        <li>
                            <a wire:navigate href="{{ route('home') }}">Home</a>
                        </li>
                        <li id="breadcrum-title-list">@yield('breadcrum-title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>