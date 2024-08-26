<x-guest-layout>

@section('page-title')
Home
@endsection
@section('content')

    @include('layouts.partials.start-hero')

    @include('layouts.partials.text-slider')

    @include('layouts.partials.services')

    @include('layouts.partials.intro-video')

    @include('layouts.partials.portfolio')

    @include('layouts.partials.working-processes')

    @include('layouts.partials.testimonials')

    {{--
    
    @include('layouts.partials.our-team') --}}

    <!-- skipped for now -->
    {{-- @include('layouts.partials.blogs') --}}

    <!-- skipped for now -->
    {{--  @include('layouts.partials.faqs') --}}

    <!-- skipped for now -->
    {{-- @include('layouts.partials.partners') --}}
    
@endsection
</x-guest-layout>
