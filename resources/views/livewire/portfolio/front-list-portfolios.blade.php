<div wire:ignore>
    <div class="relative group/nav">
        <div class="swiper projectSlider slider-center-inline">
            <div class="swiper-wrapper">
                @foreach($portfolios as $portfolio)
                <div class="swiper-slide">
                    <div class="group relative overflow-hidden rounded-[20px] border-[5px] border-colorButteryWhite">
                        @foreach($portfolio->photo as $key => $entry)
                            @if($key == 0)
                                <img src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" width="516" height="390" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110">
                            @endif
                        @endforeach
                        <div class="w-[calc(100%-48px) absolute bottom-0 z-10 flex flex-col items-start gap-x-10 gap-y-8 p-6 sm:flex-row sm:items-center">
                            <div class="max-w-[380px] flex-1 text-colorButteryWhite">
                                <a class='mb-[10px] block font-syne text-2xl font-bold leading-[1.4] group-hover:text-colorLightLime md:text-3xl' href=" {{ route('portfolio-details', $portfolio->slug) }}" wire:navigate>{{ $portfolio?->name ?? '-' }}</a>
                                <p class="line-clamp-2">
                                    {!! $portfolio->excerpt !!}
                                </p>
                            </div>
                            <a class="relative inline-flex items-start justify-center overflow-hidden" wire:navigate href=" {{ route('portfolio-details', $portfolio->slug) }}">
                                <img src="{{ asset('assets/img/icons/icon-buttery-white-arrow-right.svg') }}" alt="icon-buttery-white-arrow-right" width="34" height="28" class="translate-x-0 opacity-100 transition-all duration-300 group-hover:translate-x-full group-hover:opacity-0" />
                                <img src="{{ asset('assets/img/icons/icon-light-lime-arrow-right.svg') }}" alt="light-lime-arrow-right" width="34" height="28" class="absolute -translate-x-full opacity-0 transition-all duration-300 group-hover:translate-x-0 group-hover:opacity-100" />
                            </a>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-black/35 transition-all ease-in-out lg:translate-y-full lg:group-hover:translate-y-0"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
         <div class="static xl:absolute w-full mt-16 xl:mt-0 z-20 flex justify-center xl:justify-between top-1/2 -translate-y-1/2 gap-x-10 px-10">
            <div class="project-button-prev inline-flex h-14 w-14 rounded-[50%] items-center justify-center border-b-2 border-white bg-colorLightLime xl:opacity-0 group-hover/nav:opacity-100 xl:invisible group-hover/nav:visible xl:translate-x-10 group-hover/nav:translate-x-0 transition-all duration-300">
                <img src="{{ asset('assets/img/icons/icon-black-arrow-right.svg') }}" alt="icon-black-arrow-right" width="34" height="28" class="rotate-180" />
            </div>
            <div class="project-button-next inline-flex h-14 w-14 rounded-[50%] items-center justify-center border-b-2 border-white bg-colorLightLime xl:opacity-0 group-hover/nav:opacity-100 xl:invisible group-hover/nav:visible xl:-translate-x-10 group-hover/nav:translate-x-0 transition-all duration-300">
                <img src="{{ asset('assets/img/icons/icon-black-arrow-right.svg') }}" alt="icon-black-arrow-right" width="34" height="28" />
            </div>
        </div>
    </div>

    <div class="container mt-10 md:mt-16 lg:mt-20">
        <div class="swiper-pagination progressbar-green"></div>
    </div>
</div>

@push('scripts')

    <script>
    var projectSliderOne = new Swiper(".projectSlider", {
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".project-button-next",
            prevEl: ".project-button-prev",
        },
        spaceBetween: 24,
        breakpoints: {
            768: {
            slidesPerView: 2,
            },
            1200: {
            slidesPerView: 3,
            },
            1600: {
            slidesPerView: 4,
            },
        },
        });

        document.querySelectorAll('.swiper-slide a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); 
                e.stopPropagation(); 
                Livewire.navigate(this.href);
            });
        });

    </script>
    
@endpush