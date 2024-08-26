<x-guest-layout>
@section('page-title')
Reset Password
@endsection
@section('breadcrum-title')
Reset Password
@endsection
@section('content')

    @include('layouts.partials.breadcrums')

    <livewire:pages.auth.forgot-password />
@endsection
</x-guest-layout>