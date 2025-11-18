@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold m-0">TODO LIST</h2>

            <a href="#">
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
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
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
