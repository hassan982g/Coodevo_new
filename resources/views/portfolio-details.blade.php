<x-guest-layout>
@section('content')

    @include('layouts.partials.breadcrums')

    @include('layouts.partials.portfolio-details', ['slug' => $slug])
    
@endsection
</x-guest-layout>
