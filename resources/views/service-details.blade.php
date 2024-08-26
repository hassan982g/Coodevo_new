<x-guest-layout>
@section('content')

    @include('layouts.partials.breadcrums')

    @include('layouts.partials.service-details', ['slug' => $slug])
    
@endsection
</x-guest-layout>
