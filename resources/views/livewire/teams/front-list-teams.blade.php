<ul class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4" wire:ignore>
    @foreach($teams as $key => $team)
    <li class="jos group/team-item" data-jos_delay="0" data-jos_animation="flip-left">
        <div class="relative overflow-hidden rounded-[20px] border-[5px] border-black">

            @foreach($team->photo as $key => $entry)
                @if($key == 0)
                <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" width="296" height="300" loading="lazy" class="h-full w-full object-cover transition-all duration-300 group-hover/team-item:scale-110" />
                @endif
            @endforeach


            <!-- Social Link -->
            <div class="absolute top-full flex w-full justify-center gap-3 transition-all duration-300 group-hover/team-item:-translate-y-14">
                <a href="http://www.twitter.com/" target="_blank" rel="noopener noreferrer" class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-[50%] border border-colorButteryWhite bg-black transition-all duration-300 hover:border-black hover:bg-colorLightLime hover:shadow-[0_1.5px_0_0] hover:shadow-colorButteryWhite">
                    <img src="{{ asset('assets/img/icons/icon-logo-buttery-white-twitter.svg') }}" alt="icon-logo-buttery-white-twitter" width="19" height="16" class="opacity-100 transition-all duration-300 group-hover/link:opacity-0" />
                    <img src="{{ asset('assets/img/icons/icon-logo-black-twitter.svg') }}" alt="icon-logo-black-twitter" width="19" height="16" class="absolute opacity-0 transition-all duration-300 group-hover/link:opacity-100" />
                </a>
                <a href="http://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-[50%] border border-colorButteryWhite bg-black transition-all duration-300 hover:border-black hover:bg-colorLightLime hover:shadow-[0_1.5px_0_0] hover:shadow-colorButteryWhite">
                    <img src="{{ asset('assets/img/icons/icon-logo-buttery-white-facebook.svg') }}" alt="icon-logo-buttery-white-facebook" width="10" height="17" class="opacity-100 transition-all duration-300 group-hover/link:opacity-0" />
                    <img src="{{ asset('assets/img/icons/icon-logo-black-facebook.svg') }}" alt="icon-logo-black-facebook" width="10" height="17" class="absolute opacity-0 transition-all duration-300 group-hover/link:opacity-100" />
                </a>
                <a href="http://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-[50%] border border-colorButteryWhite bg-black transition-all duration-300 hover:border-black hover:bg-colorLightLime hover:shadow-[0_1.5px_0_0] hover:shadow-colorButteryWhite">
                    <img src="{{ asset('assets/img/icons/icon-logo-buttery-white-instagram.svg') }}" alt="icon-logo-buttery-white-instagram" width="17" height="18" class="opacity-100 transition-all duration-300 group-hover/link:opacity-0" />
                    <img src="{{ asset('assets/img/icons/icon-logo-black-instagram.svg') }}" alt="icon-logo-black-instagram" width="17" height="18" class="absolute opacity-0 transition-all duration-300 group-hover/link:opacity-100" />
                </a>
                <a href="http://www.linkedin.com/" target="_blank" rel="noopener noreferrer" class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-[50%] border border-colorButteryWhite bg-black transition-all duration-300 hover:border-black hover:bg-colorLightLime hover:shadow-[0_1.5px_0_0] hover:shadow-colorButteryWhite">
                    <img src="{{ asset('assets/img/icons/icon-logo-buttery-white-linkedin.svg') }}" alt="icon-logo-buttery-white-linkedin" width="17" height="18" class="opacity-100 transition-all duration-300 group-hover/link:opacity-0" />
                    <img src="{{ asset('assets/img/icons/icon-logo-black-linkedin.svg') }}" alt="icon-logo-black-linkedin" width="17" height="18" class="absolute opacity-0 transition-all duration-300 group-hover/link:opacity-100" />
                </a>
            </div>
            <!-- Social Link -->
        </div>

        <div class="mt-5 text-center">
            <a class='display-heading display-heading-4 mb-4 block' href='team-details.html'>{{ $team->name }}</a>
            <span class="text-lg md:text-[21px]">{{ $team->designation }}</span>
        </div>
    </li>
    @endforeach
</ul>