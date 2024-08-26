<ul class="grid grid-cols-1 gap-[30px] lg:grid-cols-2">
    @if($services && count($services) > 0)
        @foreach($services as $key => $service)
        <li class="jos group/team-item" data-jos_delay="0">
            <div class="shadow-bg group h-full">
                <div class="flex h-full flex-col items-start overflow-hidden rounded-[20px] border-2 border-black bg-colorIvory p-[30px] transition duration-300 ">
                    @foreach($service->photo as $key => $entry)
                        @if($key == 0)
                            <img src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" width="64" height="70" class="h-[70px] w-auto hidden">
                        @endif
                    @endforeach
                    <h4 class="mb-[15px]"> {{ $service->name ?? '-' }}</h4>
                    <p class="mb-7">
                        {{ $service->excerpt ?? '-' }}
                    </p>
                    <a class='mt-auto inline-block translate-x-0 transition-all duration-300 group-hover:translate-x-5' wire:navigate href="{{ route('service-details', $service->slug) }}">
                        <img src="{{ asset('assets/img/icons/icon-black-arrow-right.svg') }}" alt="icon-black-arrow-right" width="34" height="28" /></a>
                </div>
            </div>
        </li>
        @endforeach
    @endif
</ul>