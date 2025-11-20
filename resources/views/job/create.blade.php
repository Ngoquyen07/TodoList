@extends('layouts.bootstrap')

@section('content')
    <div class="container mt-5">
        {{-- Success component --}}
        <x-notifies.notice type="success" style="alert alert-success alert-dismissible fade show" />
        {{--Fail component--}}
        <x-notifies.notice type="error" style="alert alert-danger alert-dismissible fade show" />
        {{--Any Error component--}}
        <x-notifies.error-any/>
        {{--Header and  create new job buttons--}}
        <x-header.noti-header header="Create new job"/>
        {{--Create new job as a forms--}}
        <x-forms.create/>

    </div>
@endsection
