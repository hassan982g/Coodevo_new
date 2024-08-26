
@if($portfolios && count($portfolios) > 0)
<ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">

    @foreach($portfolios as $portfolio)

        <li class="jos">
            <div class="group relative overflow-hidden rounded-[25px] border-2 border-black lg:border-[5px]">
                @foreach($portfolio->photo as $key => $entry)
                        @if($key == 0)                      
                            <img src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" width="626" height="390" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110" />
                        @endif
                @endforeach

                <div class="absolute bottom-0 z-10 flex w-full flex-col items-start justify-between gap-x-7 gap-y-8 p-6 transition-all duration-300 sm:flex-row sm:items-center lg:translate-y-full lg:group-hover:translate-y-0">
                    <div class="max-w-[520px] flex-1 text-colorButteryWhite">
                        <a class='mb-[10px] block font-syne text-2xl font-bold leading-[1.4] hover:text-colorLightLime md:text-3xl' wire:navigate href=" {{ route('portfolio-details', $portfolio->slug) }}">
                            {{ $portfolio?->name ?? '-' }}
                        </a>
                        <p class="line-clamp-2">
                            {!! $portfolio->excerpt !!}
                        </p>
                    </div>
                    <a class='relative hidden items-start justify-center overflow-hidden sm:inline-flex' wire:navigate href=" {{ route('portfolio-details', $portfolio->slug) }}">
                        <img src="{{ asset('assets/img/icons/icon-buttery-white-arrow-right.svg') }}" alt="icon-buttery-white-arrow-right" width="34" height="28" class="translate-x-0 opacity-100 transition-all duration-300 group-hover:translate-x-full group-hover:opacity-0" />
                        <img src="{{ asset('assets/img/icons/icon-light-lime-arrow-right.svg') }}" alt="light-lime-arrow-right" width="34" height="28" class="absolute -translate-x-full opacity-0 transition-all duration-300 group-hover:translate-x-0 group-hover:opacity-100" />
                    </a>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black to-black/35 transition-all ease-in-out lg:translate-y-full lg:group-hover:translate-y-0"></div>
            </div>
        </li>

    @endforeach
</ul>
@endif