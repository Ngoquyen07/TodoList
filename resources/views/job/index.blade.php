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
            <h2 class="fw-bold m-0">TODO LIST</h2>
            <a href="{{ route('jobs.create') }}">
                <button class="btn btn-primary px-4">
                    <i class="bi bi-plus-circle"></i> New
                </button>
            </a>

        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0 text-center align-middle">
                    <thead class="table-primary">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Last update</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php $stt = 1; @endphp

                    @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $stt++ }}</td>
                            <td class="fw-semibold">{{ $job->name }}</td>

                            {{-- Badge Status --}}
                            <td>
                                @php
                                    $statusText = $job->getStatus();
                                    $badgeClass = match($job->status) {
                                        0 => 'bg-success',
                                        1 => 'bg-warning',
                                        2 => 'bg-info',
                                        3 => 'bg-danger',
                                        default => 'bg-secondary'
                                    };
                                @endphp

                                <span class="badge {{ $badgeClass }} px-3 py-2">
                                    {{ $statusText }}
                                </span>
                            </td>
                            <td>
                                {{$job->updated_at_formatted}}
                            </td>

                            <td>
                                <a href="{{route('jobs.edit',$job)}}" class="btn btn-sm btn-outline-primary">Detail</a>
                                <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure to delete this job?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if(count($jobs) === 0)
                        <tr>
                            <td colspan="4" class="py-3 text-muted">
                                <b> There is no job</b>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
