<ul class="relative grid grid-cols-1 divide-y divide-colorGondola overflow-y-clip">
    @foreach($testimonials as $key => $testimonial)
    <li class="sticky top-20 flex flex-col gap-y-6 py-[30px] first-of-type:pt-0 last-of-type:pb-0" style="background-color:#fffbd7">
        <div class="flex gap-x-1">
            <img src="{{ asset('assets/img/icons/icon-black-star.svg') }}" width="26" height="24">
            <img src="{{ asset('assets/img/icons/icon-black-star.svg') }}" width="26" height="24">
            <img src="{{ asset('assets/img/icons/icon-black-star.svg') }}" width="26" height="24">
            <img src="{{ asset('assets/img/icons/icon-black-star.svg') }}" width="26" height="24">
            <img src="{{ asset('assets/img/icons/icon-black-star.svg') }}" width="26" height="24">
        </div>

        <blockquote class="text-lg font-semibold leading-[1.43] lg:text-[21px]">
            {{ $testimonial->message }}
        </blockquote>

        <div class="flex items-center gap-6">
            <div class="h-16 w-16 overflow-hidden rounded-[50%] border-4 border-colorGondola">
                @foreach($testimonial->photo as $key => $entry)
                    @if($key == 0)
                       <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" width="64" height="64" class="h-full w-full object-cover" />
                    @endif
                @endforeach
            </div>
            <div class="text-lg font-semibold leading-[1.43] lg:text-[21px]">
                {{ $testimonial->name }}
                <span class="font-normal">{{ $testimonial->designation }}</span>
            </div>
        </div>
    </li>
    @endforeach
</ul>