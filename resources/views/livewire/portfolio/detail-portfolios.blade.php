@section('page-title')
 {{ $portfolio->name }}
@endsection
@section('breadcrum-title')
 {{ $portfolio->name }}
@endsection
@section('og-title')
 {{ $portfolio->name }}
@endsection
@section('og-keywords')
 {{ $portfolio->meta_keywords }}
@endsection
@section('og-description')
 {{ $portfolio->meta_description }}
@endsection

<main class="main-wrapper">
    <section class="section-portfolio">
        <div class="section-space">
            <div class="container">
                <div class="overflow-hidden rounded-[31px] border-[5px] border-black">
                    @foreach($portfolio->photos as $key => $entry)
                        @if($key == 0)
                        <img src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" class="h-auto w-full" />
                        @endif
                    @endforeach   
                </div>

                <div class="grid mt-10 grid-cols-1 gap-14 lg:grid-cols-[1fr_minmax(0,440px)]">
                    <div>
                        <div class="section-block mb-10">
                            <h2 class="jos mb-6">{{ $portfolio->name }}</h2>
                            <p class="section-para">{!! $portfolio->excerpt !!}</p>
                        </div>
                        <ul class="flex flex-col gap-y-8">
                            {!! $portfolio->description !!}
                        </ul>
                    </div>
                    <div class="mx-auto max-w-[450px] lg:mx-0 lg:max-w-full mobileResImg">
                        <div class="overflow-hidden rounded-[23px] border-[5px] border-black">
                            @foreach($portfolio->photos as $key => $entry)
                                @if($key == 1)
                                    <img src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" width="456" height="736" class="h-auto w-full object-cover" />
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="horizontal-line bg-[#E6E6E6]"></div>
    <section class="section-portfolio">
        <div class="section-space">
            <div class="container">
                <div class="section-block mx-auto mb-10 max-w-[650px] text-center md:mb-[60px] xl:mb-20 xl:max-w-[856px]">
                    <h2 class="jos">
                        Explore our latest successful projects
                    </h2>
                </div>
            </div>
            <livewire:portfolio.front-list-portfolios :slug="$portfolio->slug"  />
        </div>
    </section>
</main>
@script
<script>
    $wire.on('updateBreadcrumTitle', (title) => {
        document.getElementById('breadcrum-title-heading').textContent = title;
        document.getElementById('breadcrum-title-list').textContent = title;
    });
</script>
@endscript