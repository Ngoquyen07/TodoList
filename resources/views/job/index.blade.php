@extends('layouts.bootstrap')

@section('content')
    <div class="container mt-5">
        {{-- Success component --}}
        <x-notifies.notice type="success" style="alert alert-success alert-dismissible fade show" />
        {{--Fail component--}}
        <x-notifies.notice type="error" style="alert alert-danger alert-dismissible fade show" />

        {{--Any Error component--}}
        <x-notifies.error-any/>
        {{--Home header and new job buttons--}}
        <x-header.home-header/>

        {{--List of job perform as a table--}}
        <x-table.job-list :jobs="$jobs"/>
    </div>
@endsection
