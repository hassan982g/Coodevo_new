<x-guest-layout>

@section('page-title')
Login
@endsection
@section('breadcrum-title')
Login
@endsection
@section('content')

    @include('layouts.partials.breadcrums')

    <livewire:pages.auth.login />
@endsection
</x-guest-layout>