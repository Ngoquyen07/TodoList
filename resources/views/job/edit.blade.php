@extends('layouts.bootstrap')

@section('content')
    <div class="container mt-5">

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Error message --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold m-0">Detail Job</h2>
            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <form action="{{ route('jobs.update', $job) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3" >
                <label>Job Name</label>
                <input type="text" name="name" class="form-control" value="{{ $job->name }}  " disabled >
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" rows="3" class="form-control">{{ $job->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="0" @selected($job->status == 0)>Active</option>
                    <option value="1" @selected($job->status == 1)>Drop</option>
                    <option value="2" @selected($job->status == 2)>Done</option>
                    <option value="3" @selected($job->status == 3)>Ignore</option>
                </select>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
