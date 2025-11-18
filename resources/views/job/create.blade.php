@extends('layouts.app')

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
            <h2 class="fw-bold m-0">Create New Job</h2>
            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">

                <form action="{{ route('jobs.store') }}" method="POST">
                    @csrf

                    {{-- Job Name --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Job Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter job name" required>
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="description" rows="4" class="form-control" placeholder="Enter job description"></textarea>
                    </div>

                    {{-- Status --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="0">Active</option>
                            <option value="1">Drop</option>
                            <option value="2">Done</option>
                            <option value="3">Ignore</option>
                        </select>
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save"></i> Save
                    </button>

                </form>

            </div>
        </div>

    </div>
@endsection
