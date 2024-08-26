<x-guest-layout>
@section('page-title')
    Sign Up
@endsection
@section('breadcrum-title')
    Sign Up
@endsection
@section('content')

    @include('layouts.partials.breadcrums')

    <livewire:pages.auth.register />
@endsection
</x-guest-layout>