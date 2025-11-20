@extends('layouts.bootstrap')

@section('content')
    <div class="container mt-5">

        {{-- Success component --}}
        <x-notifies.notice type="success" style="alert alert-success alert-dismissible fade show" />
        {{--Fail component--}}
        <x-notifies.notice type="error" style="alert alert-danger alert-dismissible fade show" />

        {{--Any Error component--}}
        <x-notifies.error-any/>
        {{--Header detail and back buttons--}}
        <x-header.noti-header header="Detail job"/>

        <x-forms.edit :job="$job"/>

    </div>
@endsection
