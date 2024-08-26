@section('page-title')
 {{ $service->name }}
@endsection
@section('breadcrum-title')
 {{ $service->name }}
@endsection
@section('og-title')
 {{ $service->name }}
@endsection
@section('og-keywords')
 {{ $service->keywords }}
@endsection
@section('og-description')
 {{ $service->meta_description }}
@endsection

<div>
<section class="section-space bg-white">
    <div class="container">
        <div class="grid items-start gap-x-14 gap-y-10 lg:grid-cols-[1fr_minmax(0,0.6fr)] xl:gap-x-20 xxl:grid-cols-[1fr_minmax(0,0.85fr)] xxl:gap-x-[100px]">
            <div class="">
                <h2 class="hidden">{{ $service->name }}</h2>
                <h2 class="mb-10 leading-[1.42]">Web Design that Coverts Visitors into Customers</h2>
                <p class="leading-[1.42] mb-10">{!! $service->excerpt !!}</p>

                <a class='btn-primary relative px-[30px] py-[10px]' wire:navigate href="{{ route('contact-us') }}" style="border:none !important;">
                    Our Work
                </a>
            </div>

            <div class="block overflow-hidden">
                @if ($service->photo && count($service->photo) > 0)
                    @foreach($service->photo as $key => $entry)
                        @if($key == 0)
                            <img src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" width="1286" height="590" class="h-auto w-full object-cover" />
                        @endif
                    @endforeach
                @else
                    <img src="{{ asset('assets/images/service/single-service-1.jpg') }}" alt="#">
                @endif
            </div>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container">
        <div class="section-block mb-10 text-center">
            <h2 class="jos mx-auto">Effective Web Design<br/>Solutions</h2>
        </div>

        <ul class="grid grid-cols-1 gap-6 text-[#191931] md:grid-cols-2 xl:grid-cols-3 mb-20">
            <li class="group rounded-[10px] border-2 border-[#191931] p-6 jos">
                <div class="h-[60px] w-auto">
                    <img src="assets/img/icons/th-4-service-icon-1.svg" alt="th-4-service-icon-1" width="53" height="60">
                </div>
                <div class="my-6">
                    <h4 class="mb-4 block font-arimo text-2xl font-bold leading-[1.33] lg:text-[30px]">Strategic Planning</h4>
                    <p class="text-base">
                        Actionable strategies that align with your business objectives, ensuring you're on the path to success.
                    </p>
                </div>
            </li>
            <li class="group rounded-[10px] border-2 border-[#191931] p-6 jos">
                <div class="h-[60px] w-auto">
                    <img src="assets/img/icons/th-4-service-icon-1.svg" alt="th-4-service-icon-1" width="53" height="60">
                </div>
                <div class="my-6">
                    <h4 class="mb-4 block font-arimo text-2xl font-bold leading-[1.33] lg:text-[30px]">Strategic Planning</h4>
                    <p class="text-base">
                        Actionable strategies that align with your business objectives, ensuring you're on the path to success.
                    </p>
                </div>
            </li>
            <li class="group rounded-[10px] border-2 border-[#191931] p-6 jos">
                <div class="h-[60px] w-auto">
                    <img src="assets/img/icons/th-4-service-icon-1.svg" alt="th-4-service-icon-1" width="53" height="60">
                </div>
                <div class="my-6">
                    <h4 class="mb-4 block font-arimo text-2xl font-bold leading-[1.33] lg:text-[30px]">Strategic Planning</h4>
                    <p class="text-base">
                        Actionable strategies that align with your business objectives, ensuring you're on the path to success.
                    </p>
                </div>
            </li>
        </ul>




            <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-2">
{{--                {!! $service->description !!}--}}
            </div>



        <div class="section-block text-center mt-[62px] mb-10">
            <h2 class="jos">Our Process</h2>
        </div>

        <ul class="s-progress-three-columns__list">
            <li class="s-progress-three-columns__item">
                <div class="s-progress-three-columns__item-line-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="1004" viewBox="0 0 6 1004"
                         fill="none" class="animate-vertical-line">
                        <path d="M2 1002L3.66393 1.99944" stroke="#111111" stroke-width="3.5"
                              stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.1 14"></path>
                    </svg>
                </div>
                <div class="s-progress-three-columns__item-wrap">
                    <div class="s-progress-three-columns__border-wrap">
                        <svg width="60" height="60" viewBox="0 0 120 120"
                             class="s-progress-three-columns__border">
                            <circle cx="60" cy="60" r="58" stroke-dasharray="0 14" stroke-linecap="round"
                                    fill="transparent" class="s-progress-three-columns__path"></circle>
                        </svg>
                        <div class="s-progress-three-columns__border--nosvg">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="">
                                <g clip-path="url(#clip0_13714_30021)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M23.75.25h8v19h-8v-19zm3 3v13h2v-13h-2zM9.008 8.333a10.143 10.143 0 017.287-2.98l.027-3a13.143 13.143 0 00-9.435 3.859c-4.833 4.833-5.127 12.486-.883 17.662L.25 29.63l2.121 2.121 5.785-5.784c5.168 3.997 12.626 3.624 17.368-1.118a13.21 13.21 0 002.556-3.597h-3.454c-.354.52-.761 1.014-1.224 1.476-3.974 3.975-10.419 3.975-14.394 0-3.974-3.975-3.974-10.42 0-14.394zM21.75 7.25h-8v12h8v-12zm-5 9v-6h2v6h-2z"
                                          fill="#000"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13714_30021">
                                        <path fill="#fff" d="M0 0h32v32H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="s-progress-three-columns__circle">
                        Experience
                    </div>
                </div>
                <div class="s-progress-three-columns__content text-m">
                    <p>We’ve been in the game for over a decade, and we know what it takes to deliver results.</p>
                </div>
            </li>
            <li class="s-progress-three-columns__item">
                <div class="s-progress-three-columns__item-line-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="1004" viewBox="0 0 6 1004"
                         fill="none" class="animate-vertical-line">
                        <path d="M2 1002L3.66393 1.99944" stroke="#111111" stroke-width="3.5"
                              stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.1 14"></path>
                    </svg>
                </div>
                <div class="s-progress-three-columns__item-wrap">
                    <div class="s-progress-three-columns__border-wrap">
                        <svg width="60" height="60" viewBox="0 0 120 120"
                             class="s-progress-three-columns__border">
                            <circle cx="60" cy="60" r="58" stroke-dasharray="0 14" stroke-linecap="round"
                                    fill="transparent" class="s-progress-three-columns__path"></circle>
                        </svg>
                        <div class="s-progress-three-columns__border--nosvg">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7 2.5V0H4v32h3V20.5h22.468l-6.631-9 6.631-9H7zm0 3v12h16.532l-4.422-6 4.422-6H7z"
                                      fill="#000"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="s-progress-three-columns__circle">
                        Expertise
                    </div>
                </div>
                <div class="s-progress-three-columns__content text-m">
                    <p>Our team is made up of specialists who live and breathe technology, from web and mobile development to UI/UX and cloud services.</p>
                </div>
            </li>
            <li class="s-progress-three-columns__item">
                <div class="s-progress-three-columns__item-line-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="1004" viewBox="0 0 6 1004"
                         fill="none" class="animate-vertical-line">
                        <path d="M2 1002L3.66393 1.99944" stroke="#111111" stroke-width="3.5"
                              stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.1 14"></path>
                    </svg>
                </div>
                <div class="s-progress-three-columns__item-wrap">
                    <div class="s-progress-three-columns__border-wrap">
                        <svg width="60" height="60" viewBox="0 0 120 120"
                             class="s-progress-three-columns__border">
                            <circle cx="60" cy="60" r="58" stroke-dasharray="0 14" stroke-linecap="round"
                                    fill="transparent" class="s-progress-three-columns__path"></circle>
                        </svg>
                        <div class="s-progress-three-columns__border--nosvg">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="">
                                <g clip-path="url(#clip0_13714_30025)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4 .5A3.5 3.5 0 00.5 4v27.5h31V4A3.5 3.5 0 0028 .5H4zM3.5 4a.5.5 0 01.5-.5h24a.5.5 0 01.5.5v24.5h-25V4zm9.116 11.95l-2.121-2.122-4.616 4.616 4.616 4.615 2.12-2.12-2.494-2.495 2.495-2.494zm8.89-2.122l-2.122 2.122 2.494 2.494-2.494 2.494 2.122 2.121 4.615-4.615-4.615-4.616zm-6.088-.122l-1.777 8.887 2.941.588 1.778-8.887-2.942-.588zM26 8.25h-3v-3h3v3zm-20 0h15v-3H6v3z"
                                          fill="#000"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13714_30025">
                                        <path fill="#fff" d="M0 0h32v32H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="s-progress-three-columns__circle">
                        Passion
                    </div>
                </div>
                <div class="s-progress-three-columns__content text-m">
                    <p>We love what we do, and it shows in our work. Your success is our success, and we’re with you every step of the way.</p>
                </div>
            </li>
            <li class="s-progress-three-columns__item">
                <div class="s-progress-three-columns__item-line-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="1004" viewBox="0 0 6 1004"
                         fill="none" class="animate-vertical-line">
                        <path d="M2 1002L3.66393 1.99944" stroke="#111111" stroke-width="3.5"
                              stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.1 14"></path>
                    </svg>
                </div>
                <div class="s-progress-three-columns__item-wrap">
                    <div class="s-progress-three-columns__border-wrap">
                        <svg width="60" height="60" viewBox="0 0 120 120"
                             class="s-progress-three-columns__border">
                            <circle cx="60" cy="60" r="58" stroke-dasharray="0 14" stroke-linecap="round"
                                    fill="transparent" class="s-progress-three-columns__path"></circle>
                        </svg>
                        <div class="s-progress-three-columns__border--nosvg">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M16.997 10.702a6.296 6.296 0 100 12.591 6.296 6.296 0 000-12.591zM5.602 16.997c0-6.293 5.102-11.395 11.395-11.395 6.294 0 11.396 5.102 11.396 11.395 0 6.294-5.102 11.396-11.396 11.396-6.293 0-11.395-5.102-11.395-11.396z"
                                      fill="#111"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.182 19.55H1.359v-5.1h7.823v5.1zM32.643 19.55H24.82v-5.1h7.823v5.1zM14.445 9.182V1.359h5.1v7.823h-5.1zM14.445 32.639v-7.823h5.1v7.823h-5.1zM20.719 9.66l5.528-5.527 3.606 3.606-5.528 5.528-3.606-3.606zM4.133 26.25l5.528-5.527 3.606 3.606-5.528 5.528-3.606-3.606zM24.325 20.723l5.528 5.528-3.606 3.606-5.528-5.528 3.606-3.606zM7.74 4.133l5.527 5.528-3.606 3.606L4.133 7.74l3.606-3.606z"
                                      fill="#111"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="s-progress-three-columns__circle">
                        Innovation
                    </div>
                </div>
                <div class="s-progress-three-columns__content text-m">
                    <p>We’re always exploring new ways to do things better, faster, and more effectively, so you get the best possible solutions.</p>
                </div>
            </li>
            <li class="s-progress-three-columns__item">
                <div class="s-progress-three-columns__item-line-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="1004" viewBox="0 0 6 1004"
                         fill="none" class="animate-vertical-line">
                        <path d="M2 1002L3.66393 1.99944" stroke="#111111" stroke-width="3.5"
                              stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.1 14"></path>
                    </svg>
                </div>
                <div class="s-progress-three-columns__item-wrap">
                    <div class="s-progress-three-columns__border-wrap">
                        <svg width="60" height="60" viewBox="0 0 120 120"
                             class="s-progress-three-columns__border">
                            <circle cx="60" cy="60" r="58" stroke-dasharray="0 14" stroke-linecap="round"
                                    fill="transparent" class="s-progress-three-columns__path"></circle>
                        </svg>
                        <div class="s-progress-three-columns__border--nosvg">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="">
                                <g clip-path="url(#clip0_13714_30023)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M31.545 2.329c.03.32.06.78.08 1.34.05 1.13.05 2.7-.14 4.46-.37 3.46-1.49 7.92-4.67 11.09-.31.31-.62.61-.94.89.22 2.36-.52 4.78-2.31 6.56l-4.47 4.47c-.56.56-1.31.61-1.86.41a1.8 1.8 0 01-1.16-1.38h-.01l-1.09-6.09-7.06-7.05-6.08-1.1h-.01c-.68-.13-1.17-.61-1.37-1.16-.2-.55-.15-1.31.4-1.87l4.48-4.47c1.78-1.78 4.19-2.51 6.55-2.3.29-.32.58-.64.89-.94 3.18-3.18 7.63-4.3 11.1-4.67 1.76-.19 3.32-.19 4.45-.15.57.02 1.03.06 1.35.09.16.01.29.02.37.03l.11.02h.04l1.14.15.15 1.14v.02h.01v.03l.004.034c.003.019.006.042.006.066l.011.109c.007.076.016.167.03.27zm-6.85 14.77c2.46-2.46 3.46-6.08 3.8-9.29.17-1.58.18-3 .14-4.02-.01-.14-.02-.28-.02-.4a5.12 5.12 0 00-.41-.02c-1.02-.04-2.43-.04-4.01.13-3.21.34-6.84 1.35-9.3 3.81-.45.45-.87.9-1.25 1.37l-.57.69-.87-.17c-1.77-.34-3.53.13-4.75 1.35l-2.84 2.83 4.76.86 8.38 8.38.86 4.76 2.83-2.83c1.23-1.23 1.7-2.99 1.36-4.75l-.17-.88.69-.57c.46-.38.92-.8 1.37-1.25zm-7.7-9.02a5.003 5.003 0 017.07 0 5.004 5.004 0 010 7.07 4.985 4.985 0 01-7.07 0 4.985 4.985 0 010-7.07zm2.12 4.95c.78.78 2.05.78 2.83 0 .78-.78.78-2.05 0-2.83-.78-.78-2.05-.78-2.83 0-.78.78-.78 2.05 0 2.83zm-6.242 13.32l.93-.94h.01l-2.12-2.12-.94.93c-.72.73-1.91 1.07-3.13 1.17-.32.02-.62.03-.89.03 0-.27.01-.57.03-.89.1-1.23.44-2.41 1.17-3.13l.93-.94-2.12-2.12-.94.93c-1.48 1.49-1.91 3.55-2.03 5.02-.06.76-.04 1.44-.01 1.93.02.25.04.45.06.59 0 .07.03.17.03.17v.08l.17 1.07 1.08.18.01.01h.05c.033 0 .08.007.135.015l.035.005c.091.006.201.016.327.027l.263.023c.49.03 1.17.05 1.93-.01 1.47-.12 3.53-.55 5.02-2.03z"
                                          fill="#000"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13714_30023">
                                        <path fill="#fff" d="M0 0h32v32H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="s-progress-three-columns__circle">
                        Partnership
                    </div>
                </div>
                <div class="s-progress-three-columns__content text-m">
                    <p>We’re not just a service provider—we’re your partners in success. We listen, we collaborate, and we’re here to help you achieve your goals.</p>
                </div>
            </li>
        </ul>


    </div>
</section>
</div>




@script
<script>
    $wire.on('updateBreadcrumTitle', (title) => {
        document.getElementById('breadcrum-title-heading').textContent = title;
        document.getElementById('breadcrum-title-list').textContent = title;
    });
</script>
@endscript