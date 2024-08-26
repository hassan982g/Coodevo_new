<x-guest-layout>

@section('content')

    @include('layouts.partials.breadcrums', ['title' => 'Verfiy Email'])

    <livewire:pages.auth.verify-email />
@endsection
</x-guest-layout>